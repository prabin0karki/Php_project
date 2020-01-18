<?php require_once "header.php";
require_once  "sadmin/class/news.class.php";
$news=new News();
$news->id=$_GET['id'];
$newsdetails=$news->selectnewsbyid();
$news->view_count=$newsdetails['0']['view_count']+1;
$news->updateNewscount(); 


require_once  "sadmin/class/comment.class.php";
$comment=new Comment();

if(isset($_POST['btnsubmit'])){
  if(isset($_POST['name'])&& !empty($_POST['name'])){
    $name=$_POST['name'];
  }else{
    $errname="Enter name";
  }
  if(isset($_POST['email'])&& !empty($_POST['email'])){
    $name=$_POST['email'];
  }else{
    $errname="Enter email";
  }
  if(isset($name)){
  $comment->news_id=$_GET['id'];
  $comment->name=$_POST['name'];
   $comment->email=$_POST['email'];
    $comment->comment=$_POST['comment'];
     $comment->comment_date=date('Y-m-d H:i:s');
     $comment->save();
   }
}
$comment->news_id=$_GET['id'];
$listcomment=$comment->selectcommentbynewsid();

?>
<style type="text/css">
  
  .user{
    color: blue;
  }
  .css{
    background: lightgrey;
    cursor:pointer ;
  }
  .error{
    color: red;
  }
</style>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <h1><?php echo $newsdetails['0']['title']; ?></h1>
            <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i><strong>Created By:</strong><?php echo $newsdetails['0']['created_by']; ?></a> <span><i class="fa fa-calendar"></i><strong>Created Date:</strong><?php echo $newsdetails['0']['created_date']; ?></span> <a href="#"><i class="fa fa-tags"></i>Technology</a> </div>
            <div class="single_page_content"> <img class="img-center" src="sadmin/images/<?php echo $newsdetails['0']['feature_image']; ?>" alt="">
              <p><?php echo $newsdetails['0']['content'];  ?></p>
            </div>
            <div class="social_link">
            <div role="tabpanel" class="tab-pane" id="comments">
            <p>Comment's</p>
                <ul class="spost_nav">
                <?php foreach ($listcomment as $list) { ?>
                  <li>
                    <div class="css"> 
                    <p class="user"><i class="fa fa-user"></i><strong>Commented by:</strong><?php echo $list['name']; ?><span><i class="fa fa-calendar"></i><strong>commented Date:</strong><?php echo $list['comment_date']; ?></span></p>
                      <div class="media-body"> <a href="#" class="title"> <?php echo $list['comment']; ?></a> </div>
                    </div>
                  </li>
              <?php  } ?>
                </ul>
                <div><p><strong>Write</strong> a Comment</p></div>
                <div class="group-control">
                <form action="" method="post" class="contact_form" id="comment" novalidate="">
                <div><input class="form-control" type="text" placeholder="Name" name="name" required=""></div>
              <div><input class="form-control" type="email" placeholder="Email" name="email" required=""></div>
              <div><textarea class="form-control"  placeholder="comment" name="comment"></textarea></div>
              
              <input type="submit" value="submit" name="btnsubmit">
            </form>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
   <?php require_once "footer.php"; ?>
   <script src="sadmin/js/validation/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
$('#comment').validate();
    });

    </script>