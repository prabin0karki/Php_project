<?php require_once "header.php";
require_once  "sadmin/class/news.class.php";
require_once  "sadmin/class/comment.class.php";
$news=new News();
$news->id=$_GET['id'];
$newsdetails=$news->selectnewsbyid();
$news->view_count=$newsdetails['0']['view_count']+1;
?>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <h1><?php echo $newsdetails['0']['title']; ?></h1>
            <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i><strong>Created By:</strong><?php echo $newsdetails['0']['created_by']; ?></a> <span><i class="fa fa-calendar"></i><strong>Created Date:</strong><?php echo $newsdetails['0']['created_date']; ?></span> <a href="#"><i class="fa fa-tags"></i>Technology</a> </div>
            <div class="single_page_content"> <img class="img-center" src="sadmin/images/<?php echo $newsdetails['0']['feature_image']; ?>" alt="">
              <p><?php echo $newsdetails['0']['content'];  ?></p>
              <div class="social_link">
              <div><table border="1">
                <tr>
                <td><a href=""><i class="fa fa-thumbs-o-up"></i><strong>Likes</strong></a> </td>
                <td><a href=""><i class="fa fa-thumbs-o-down"></i><strong>Dislike</strong></a></td>
                <td><a href="insert_comment.php?id=<?php echo $newsdetails['0']['id']; ?>"><i class="fa  fa-comment-o "></i><strong>Comment</strong></a></td>
                </tr>
              </table>
              </div>
              
            <span></span>  </a>
            </div>
            </div>

          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Popular Post</span></h2>
            <ul class="spost_nav">
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                </div>
              </li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>
   <?php require_once "footer.php"; ?>