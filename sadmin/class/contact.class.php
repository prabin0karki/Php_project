<?php 
require_once "common.php";
class Contact extends Common{
	public $id,$name,$email,$message,$message_date;

	public function save(){

		 $sql="insert into tbl_contact(name,email,message,message_date) values ('$this->name','$this->email','$this->message','$this->message_date')";
		$result=$this->insert($sql);
		if($result==true){
			$_SESSION['success_message']="Message inserted with $result";
		return true;
		}else{
			return false;
		}

	}
	public function index(){
		$sql="select * from tbl_contact";
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