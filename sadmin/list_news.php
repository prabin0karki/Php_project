<?php 
require_once "header.php";
require_once "class/news.class.php";
$obj=new News();
$catlist=$obj->index(); 
?>

<!-- DataTables CSS -->
<link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">News Management</h1>
			</div>


			<!-- /.col-lg-12 -->
		</div>
		<div class="col-lg-12">
			<div class="panel panel-default">
				All News List
				<?php if(isset($_SESSION['success_message'])) {
					echo "<div class='alert alert-success'>".$_SESSION['success_message']. "</div>";
				}
				unset($_SESSION['login_message']);  ?>
				<div class="panel-heading">
					<table width="100%" class="table table-striped table-bordered table-hover" id="category_table">
						<thead>
							<tr>
								<th>SN</th>
								<th>Category Name</th>
								<th>Title</th>
								<th>Status</th>
								<th>content</th>
								<th>Short Description</th>
								<th>Display News Slider</th>
								<th>Breaking News</th>
								<th>Feature Image</th>
								<th>Created By</th>
								<th>Modified By</th>
								<th>Created Date</th>
								<th>Modified Date</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1; foreach($catlist as $cat){?>
							<tr class="odd gradeX">
								<td><?php echo $i++; ?></td>
								<td><?php echo $cat['category_name']; ?></td>
								<td><?php echo $cat['title']; ?></td>
								<td class="center"><?php if($cat['status']==1) 
									{
										echo "<span class='bg bg-success'>Active</span>";
									}else{
										echo "<span class='bg bg-danger'>De Active</span>";
									}?></td>
									<td><?php echo $cat['content']; ?></td>
									<td><?php echo $cat['short_description']; ?></td>
									<td class="center"><?php if($cat['slider_key']==1) 
										{
											echo "<span class='bg bg-success'>Active</span>";
										}else{
											echo "<span class='bg bg-danger'>De Active</span>";
										}?></td>
										<td class="center"><?php if($cat['breaking_key']==1) 
											{
												echo "<span class='bg bg-success'>Active</span>";
											}else{
												echo "<span class='bg bg-danger'>De Active</span>";
											}?></td>
											<td><?php echo $cat['feature_image']; ?></td>
											<td class="center"><?php echo $cat['created_by']; ?></td>
											<td></td>
											<td><?php echo $cat['created_date'] ?></td>
											<td class="center"></td>
											<td class="center"><a href="delete_news.php?id=<?php echo $cat['id']; ?>" class="btn btn-danger" onclick="return confirm('Are You sure to delete?')";><i class=fa fa-trash></i> Delete</a><br><a href="edit_news.php?id=<?php echo $cat['id']; ?>" class="btn btn-warning"><i class=fa fa-pencil></i> Edite</a></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
								<!-- /.table-responsive -->

							</div>

							<!-- /.panel-heading -->
							<div class="panel-body">


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
