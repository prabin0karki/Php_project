<?php 
require_once "class/config.php";
require_once "class/news.class.php";
$obj=new News();
$obj->id=$_GET['id'];
$record=$obj->selectcategorybyid();
?>
<?php 
$title="Edit Category";
require_once "header.php"; 
if(isset($_POST['btnupdate'])){
    $obj->set('title',$_POST['title']);
    $obj->set('short_description',$_POST['short_description']);
    $obj->set('status',$_POST['status']);
    $obj->set('content',$_POST['content']);
    $obj->set('slider_key',$_POST['slider_key']);
    $obj->set('breaking_key',$_POST['breaking_key']);
    $obj->set('modified_by',$_SESSION['name']);
    $obj->set('modified_date',date('Y-m-d H:i:s'));
    $status=$obj->edit();
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
                    Create category
                </div>
                <div class="panel-body">
                    <?php if (isset($status)&& $status==false) {
                      echo "<div class='alert alert-danger'>".'Category cant insert'."</div> ";
                  } ?>
                  <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action="" method="post" id="categoryform" novalidate="">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter title" required="" value="<?php echo $record[0]['title']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Short Description</label>
                                    <input type="text" name="short_description" class="form-control" placeholder="Enter short description" required="" value="<?php echo $record[0]['short_description']; ?>">
                                </div>

                                <div class="form-group">
                                    <label>status</label>
                                    <?php if($record[0]['status']==1) {?>

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="status" id="status" value="1" checked >Active
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="status" id="status" value="0" >De Active
                                        </label>
                                    </div>

                                    <?php }else{ ?>

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

                                    <?php } ?>

                                </div>
                                    <div class="form-group">
                                    <label>Didplay News Slider</label>
                                    <?php if($record[0]['status']==1) {?>

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="slider_key" id="slider_key" value="1" checked >Active
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="slider_key" id="slider_key" value="0" >De Active
                                        </label>
                                    </div>

                                    <?php }else{ ?>

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

                                    <?php } ?>
                                    
                                </div>
                                <div class="form-group">
                                    <label>BreakingNews</label>
                                    <?php if($record[0]['status']==1) {?>

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="breaking_key" id="breaking_key" value="1" checked >Active
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="breaking_key" id="breaking_key" value="0" >De Active
                                        </label>
                                    </div>

                                    <?php }else{ ?>

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

                                    <?php } ?>
                                    
                                </div>
                                <button type="submit" class="btn btn-success" name="btnupdate"><i class="fa fa-save"></i>Update Button</button>
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
<script src="js/validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#categoryform').validate();
    });

</script>
