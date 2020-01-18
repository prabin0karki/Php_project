<?php
require_once "class/user.class.php";
if(isset($_POST['btnlogin'])) {
    if(isset($_POST['email'])&&!empty($_POST['email'])){
        $email=$_POST["email"];
    }else{
        $erremail="Enter the email";
    }
    if(isset($_POST['password'])&&!empty($_POST['password'])){
        $password=$_POST["password"];
    }else{
        $errpassword="Enter the password";
    }
    if(isset($email)&&isset($password)){
        $user=New User();
        $user->email=$email;
        $user->password=$password;
        $status=$user->login();
    }
}

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    .error{
        color: red;
    }
    </style>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                    <?php if (isset($status)&& $status==false) {
                      echo "Invalid Login Information ";
                    } ?>
                    <?php if (isset($_SESSION['error_message'])) {
                      echo $_SESSION['error_message'];
                    } ?>
                        <form role="form" action=""  method="post" novalidate="" id="login">
                            <fieldset>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter E-mail" name="email" type="email" required="" autofocus>
                                    <?php if(isset($erremail)){ echo $erremail; } ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder=" Enter Password" name="password" type="password" value="" required="">
                                    <?php if(isset($erremail)){echo $erremail;} ?>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block" name="btnlogin" >Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
    <script src="js/validation/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
$('#login').validate();
    });

    </script>

</body>

</html>
