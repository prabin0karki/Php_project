<?php 
require_once "header.php";
require_once "class/user.class.php";
$user=new User();
$userlist=$user->index();
 ?>
 /*<!-- <style type="text/css" href="css/jquery.dataTables.min.css"></style> -->*/
 <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
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
							All Admin List
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
						<?php if(isset($_SESSION['success_message'])) {
					   echo "<div class='alert alert-success'>".$_SESSION['success_message']. "</div>";
					}
					unset($_SESSION['login_message']);  ?>
							<table width="100%" class="table table-striped table-bordered table-hover" id="category_table">
								<thead>
									<tr>
										<th>SN</th>
										<th>Admin Name</th>
										<th>Email</th>
										<th>Username</th>
										<th>Password</th>
										<th>Gender</th>
										 <th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php $i=1; foreach($userlist as $cat){?>
									<tr class="odd gradeX">
										<td><?php echo $i++; ?></td>
										<td><?php echo $cat['name']; ?></td>
										<td><?php echo $cat['email']; ?></td>
										<td><?php echo $cat['username'] ?></td>
										<td><?php echo $cat['password']; ?></td>
										<td><?php echo $cat['gender']; ?></td>
										<!-- <td class="center"><?php if($cat['gender']==male) 
										{
											echo "<span class='bg bg-success'>Active</span>";
											}else{
												echo "<span class='bg bg-danger'>De Active</span>";
												}?></td> -->
										<td class="center"><a href="delete_category.php?id=<?php echo $cat['id']; ?>" class="btn btn-danger" onclick="return confirm('Are You sure to delete?')";><i class=fa fa-trash></i> Delete</a><br><a href="edit_category.php?id=<?php echo $cat['id']; ?>" class="btn btn-warning"><i class=fa fa-pencil></i> Edite</a></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
							<!-- /.table-responsive -->
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
   <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
$('#category_table').DataTable();
	});
</script>
