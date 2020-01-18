<?php 
require_once "common.php";
class Advertisement extends Common{
	public $id,$content,$short_description,$slider_key,$title,$status,$created_by,$modified_by,$created_date,$modified_date,$feature_image;

	public function save(){

		echo $sql="insert into tbl_advertisement(title,short_description,content,slider_key,feature_image,status,created_by,created_date) values ('$this->title','$this->short_description','$this->content','$this->slider_key','$this->feature_image','$this->status','$this->created_by','$this->created_date') ";
		$result=$this->insert($sql);
		if($result==true){
			$_SESSION['success_message']="News inserted with $result";
			redirect('list_advertisement.php');
		}else{
			return false;
		}

	}
	public function index(){
		$sql="select * from tbl_advertisement";
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
	public function getlatestadv(){
		$sql="select * from tbl_advertisement";
		$list=$this->select($sql);
		return $list;

	}
}


?>