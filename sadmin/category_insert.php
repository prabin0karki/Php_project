<?php 
$title="Create Catogery";
require_once "class/category.class.php";
require_once "header.php"; 
if(isset($_POST['btnlogin'])){
$category=new Category();
$category->set('category_name',$_POST['category_name']);
$category->set('rank',$_POST['rank']);
$category->set('status',$_POST['status']);
$category->set('created_by',$_SESSION['username']);
$category->set('created_date',date('Y-m-d H:i:s'));
$status=$category->save();
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
                                            <label>Category Name</label>
                                            <input type="text" name="category_name" class="form-control" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Rank</label>
                                            <input type="number" name="rank" class="form-control" placeholder="Enter rank" required="">
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
    <script src="js/validation/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
$('#categoryform').validate();
    });

    </script>
