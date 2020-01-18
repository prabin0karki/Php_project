<?php require_once "header.php";
require_once  "sadmin/class/news.class.php";
$news=new News();
$news->category_id=$_GET['id'];
$newslist=$news->getallcategorynews();
?>
<div>
	
	<li>
	<?php foreach ($newslist as $key) { ?>
	<div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="sadmin/images/<?php echo $key['feature_image']; ?>"> </a>
                    <div class="media-body"> <a href="news.php?id=<?php echo $key['id']; ?>" class="catg_title"> <?php echo $key['title']; ?></a> </div><br>
                    <div class="media-body">  <p><?php echo $key['short_description']; ?></p> </div>
                    
                  </div>
<?php	} ?>
                  
                </li>

                
</div>
                 
<?php require_once "footer.php"; ?>