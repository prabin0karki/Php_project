<?php 
require_once "header.php";
require_once "class/comment.class.php";
$comment=new Comment();
$Commentlist=$comment->index();
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
						<h1 class="page-header">Comment Management</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							All Comment List
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
										<th>Name</th>
										<th>Email</th>
										<th>Comment</th>
										<th>Comment Date</th>
										<th>LIkes</th>
										<th>Dislikes</th>
										 <th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php $i=1; foreach($Commentlist as $list){?>
									<tr class="odd gradeX">
										<td><?php echo $i++; ?></td>
										<td><?php echo $list['name']; ?></td>
										<td><?php echo $list['email']; ?></td>
										<!-- <td class="center"><?php if($cat['status']==1) 
										{
											echo "<span class='bg bg-success'>Active</span>";
											}else{
												echo "<span class='bg bg-danger'>De Active</span>";
												}?></td> -->
										<td class="center"><?php echo $list['comment']; ?></td>
										<td><?php echo $list['comment_date'] ?></td>
										<td><?php echo $list['like']; ?></td>
										<td><?php echo $list['dislike']; ?></td>
										<td class="center"><a href="delete_comment.php?id=<?php echo $list['id']; ?>" class="btn btn-danger" onclick="return confirm('Are You sure to delete?')";><i class=fa fa-trash></i> Delete</a></td>
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
