<?php 
require_once "common.php";
class Category extends Common{
	public $id,$category_name,$rank,$status,$created_by,$modified_by,$created_date,$modified_date;

	public function save(){

		$sql="insert into tbl_category(category_name,rank,status,created_by,created_date) values ('$this->category_name','$this->rank','$this->status','$this->created_by','$this->created_date') ";
		$result=$this->insert($sql);
		if($result==true){
			$_SESSION['success_message']="News inserted with $result";
			redirect('list_category.php');
		}else{
			return false;
		}

	}
	public function index(){
		$sql="select * from tbl_category";
		$list=$this->select($sql);
		return $list;

	}
	public function edit(){

		$sql="update tbl_category set category_name='$this->category_name',rank='$this->rank',status='$this->status',modified_by='$this->modified_by',modified_date='$this->modified_date' where id='$this->id'";
		$result=$this->update($sql);
		if($result==true){
			$_SESSION['success_message']="Category updated";
			redirect('list_category.php');
		}else{
			return false;
		}

	}
	public function remove(){
		$sql="delete from tbl_category where id='$this->id'";
		$this->delete($sql);
		redirect('list_category.php');
	}
	public function selectcategorybyid(){
		$sql="select * from tbl_category where id='$this->id'";
		$list=$this->select($sql);
		return $list;

	}
	public function selectactivecategory(){
		$sql="select * from tbl_category where status='1'";
		$list=$this->select($sql);
		return $list;

	}
}


?>