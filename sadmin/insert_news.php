<?php 
$title="Create News";
require_once "class/news.class.php";
require_once "class/category.class.php";
$category=new  Category();
$allcat=$category->index();
require_once "header.php"; 
if(isset($_POST['btnlogin'])){
    $news=new News();
    $news->set('category_id',$_POST['category_id']);
    $news->set('title',$_POST['title']);
    $news->set('status',$_POST['status']);
    $news->set('slider_key',$_POST['slider_key']);
    $news->set('breaking_key',$_POST['breaking_key']);
    $news->set('content',$_POST['content']);
    if (isset($_FILES['feature_image']['name']) && !empty($_FILES['feature_image']['name']))
     {
       move_uploaded_file($_FILES['feature_image']['tmp_name'], 'images/'.$_FILES['feature_image']['name']);
       $news->set('feature_image',$_FILES['feature_image']['name']);
    }
    $news->set('short_description',$_POST['short_description']);
    $news->set('created_by',$_SESSION['username']);
    $news->set('created_date',date('Y-m-d H:i:s'));
    $status=$news->save();
    print_r($status);
}

?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category Management</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create News
                </div>
                <div class="panel-body">
                    <?php if (isset($status)&& $status==false) {
                      echo "<div class='alert alert-danger'>".'Category cant insert'."</div> ";
                  } ?>
                  <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action="" method="post" id="newsform" novalidate="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Category ID</label>
                                <select name="category_id" class="form-control"  required="">
                                <option value="">Select Category Name</option>
                                <?php foreach ($allcat as $as) { ?>
                                <option value="<?php echo $as['id']; ?>"><?php echo $as['category_name']; ?></option>
                                <?php } ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter title" required="">
                            </div>
                            <div class="form-group">
                                <label>Short Description</label>
                                <input type="text" name="short_description" class="form-control" placeholder="Enter short description" required="">
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea class="form-control ckeditor" placeholder="Enter content" name="content"></textarea>
                            </div>
                            <div class="form-group">
                                <label>status</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="status" id="status" value="1" >Active
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="status" id="status" value="0" checked>De Active
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Display News In slide</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="slider_key" id="slider_key" value="1" >Active
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="slider_key" id="slider_key" value="0" checked>De Active
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Feature Image</label>
                                <input type="file" name="feature_image" class="form-control">
                            </div>
                             <div class="form-group">
                                <label>Breaking News</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="breaking_key" id="breaking_key" value="1" >Active
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="breaking_key" id="breaking_key" value="0" checked>De Active
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success" name="btnlogin"><i class="fa fa-save"></i>Submit Button</button>
                            <button type="reset" class="btn btn-danger"><i class="fa fa-trash"></i>clear</button>
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php require_once "footer.php"; ?>
<script src="js/ckeditor/ckeditor.js"></script>
<script src="js/validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#newsform').validate();
    });

</script>
