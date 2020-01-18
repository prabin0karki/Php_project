<?php 
$title="Create Admin";
require_once "class/user.class.php";
require_once "header.php"; 
if(isset($_POST['btnlogin'])){
$user=new User();
$user->set('name',$_POST['name']);
$user->set('email',$_POST['email']);
$user->set('phone_number',$_POST['phone_number']);
$user->set('username',$_POST['username']);
$user->set('password',$_POST['password']);
$user->set('gender',$_POST['gender']);
$status=$user->save();
print_r($status);
}

?>
<style type="text/css">
    .error{
        color: red;
    }
</style>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Admin Management</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Create Admin
                        </div>
                        <div class="panel-body">
                        <?php if (isset($status)&& $status==false) {
                      echo "<div class='alert alert-danger'>".'Category cant insert'."</div> ";
                    } ?>
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="" method="post" id="categoryform" novalidate="">
                                        <div class="form-group">
                                            <label>Admin Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter name" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control" placeholder="Enter username" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Enter email" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Enter password" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="number" name="phone_number" class="form-control" placeholder="Enter phone_number" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="gender" value="male" >male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="gender" value="female" checked>female
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
