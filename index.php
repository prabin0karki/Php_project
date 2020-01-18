<?php 
require_once "header.php"; 
require_once  "sadmin/class/news.class.php";
$news=new News();
$slidernews=$news->selectslidernews();
$latestnews=$news->getlatestnews();
require_once  "sadmin/class/advertisement.class.php";
$advertisement=new Advertisement();
$latestadv=$advertisement->getlatestadv();
?>
<section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Latest News</span>
          <ul id="ticker01" class="news_sticker">
          <?php foreach ($slidernews as $slider) { ?>
           <li><a href="#"><img src="sadmin/images/<?php echo $slider['feature_image']; ?>" alt=""><strong><?php echo $slider['title']; ?></strong></a></li>
         <?php } ?>
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
        <?php foreach ($slidernews as $key) { ?>
         <div class="single_iteam"> <a href="news.php?id=<?php echo $key['id']; ?>"> <img src="sadmin/images/<?php echo $key['feature_image']; ?>" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="news.php?id=<?php echo $key['id']; ?>"><strong><?php echo $key['title']; ?></strong> </a></h2>
              <p><?php echo $key['short_description']; ?></p>
            </div>
          </div>
       <?php } ?>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Latest post</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
            <?php foreach($latestnews as $new) { ?>
            <li>
                <div class="media"> <a href="news.php?id=<?php echo $new['id']; ?>" class="media-left"> <img alt="" src="sadmin/images/<?php echo $new['feature_image']; ?>"> </a>
                  <div class="media-body"> <a href="news.php?id=<?php echo $new['id']; ?>" class="catg_title"><strong><?php echo $new['title']; ?></strong> </a> </div>
                   <p><?php echo $new['short_description']; ?></p>
                </div>
              </li>
         <?php   } ?>
              
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
       <?php foreach  ($activecat as $breakingnews) { ?>
       <div class="single_post_content">
            <h2><span><?php echo $breakingnews['category_name'];
            $news->category_id=$breakingnews['id'];
           $bn= $news->getbreakingnews();
           $bnln= $news->getbreakingnewswithlatest();
           
             ?></span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
              <?php if (count($bn)==1) { ?>
               <li>
                  <figure class="bsbig_fig"> <a href="news.php?id=<?php echo $bn['0']['id']; ?>" class="featured_img"> <img alt="" src="sadmin/images/<?php echo $bn['0']['feature_image']; ?>"> <span class="overlay"></span> </a>
                    <figcaption> <a href="news.php?id=<?php echo $bn['0']['id']; ?>"><strong><?php echo $bn['0']['title']; ?></strong></a> </figcaption>
                    <p><?php echo $bn['0']['short_description']; ?></p>
                  </figure>
                </li>
           <?php   } ?>
                
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
              <?php foreach ($bnln as $key) { ?>
                
               <li>
                  <div class="media wow fadeInDown"> <a href="news.php?id=<?php echo $bnln['0']['id']; ?>" class="media-left"> <img alt="" src="sadmin/images/<?php echo $key['feature_image']; ?>"> </a>
                    <div class="media-body"> <a href="news.php?id=<?php echo $key['id']; ?>" class="catg_title"><strong><?php echo $key['title']; ?></strong> </a> </div>
                    <p><?php echo $key['short_description']; ?></p>
                  </div>
                </li>
          <?php    } ?>
              </ul>
            </div>
          </div>
       <?php } ?>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane" id="comments">
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <br>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Sponsor</span></h2>
            <?php foreach ($latestadv as $adv) { ?>
             <a class="sideAdd" href="#"><img src="sadmin/images/<?php echo $adv['feature_image']; ?>" alt=""></a> </div>
           <?php } ?>
        </aside>
      </div>
    </div>
  </section>
  <?php require_once "footer.php"; ?>