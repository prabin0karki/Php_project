<?php require_once "header.php";
require_once  "sadmin/class/contact.class.php";
$contact=new Contact(); 
if(isset($_POST['send'])){
  if(isset($_POST['name'])  && !empty($_POST['name'])){
    $name=$_POST['name'];
  }else{
    $errname="Enter the name";
  }
   if(isset($_POST['email'])  && !empty($_POST['email'])){
    $email=$_POST['email'];
  }else{
    $erremail="Enter the email";
  }
  if(isset($name)&&isset($email)){
  $contact->name=$_POST['name'];
   $contact->email=$_POST['email'];
    $contact->message=$_POST['message'];
     $contact->message_date=date('Y-m-d H:i:s');

  }

}

?>
<style type="text/css">
  .error{
    color: red;
  }
</style>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="contact_area">
            <h2>Contact Us</h2>
            <p>You can Send us an <strong>News</strong> that You knew .Only real <strong>News</strong> ,no fake <strong>News</strong> and You can  send us Some <strong>Suggestion</strong> regarding Our <strong>Page</strong></p>
            <form action="" class="contact_form" method="post" id="message" novalidate="">
              <input class="form-control" type="text" placeholder="Enter Name" name="name" required="">
              <input class="form-control" type="email" placeholder="Email Name" name="email" required="">
              <textarea class="form-control" cols="30" rows="10" placeholder="Enter  Message" name="message" ></textarea>
              <input type="submit" value="Send Message" name="send">
            </form>
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
    <script src="sadmin/js/validation/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
$('#message').validate();
    });

    </script>