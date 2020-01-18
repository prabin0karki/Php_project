<?php 
session_start();
require_once "header.php"; ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dashboard</h1>
                    </div>
                    
                    <!-- /.col-lg-12 -->
                </div>
                <?php if(isset($_SESSION['login_message'])) {
                       echo "<div class='alert alert-success'>".$_SESSION['login_message']. "</div>";
                    }
                    unset($_SESSION['login_message']);  ?>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    <?php require_once "footer.php"; ?>