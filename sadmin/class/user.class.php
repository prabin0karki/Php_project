<?php 
require_once "common.php";
class User extends Common{
	public $id,$name,$email,$phone_number,$username,$password,$gender,$address,$cre;
	public function login(){
		$this->password=md5($this->password);
		$sql="select * from tbl_admin where email='$this->email' and password='$this->password'";
		$abc=new mysqli('localhost','root','','db_sadmin');
		if($abc->connect_errno !=0){
			die("Data base connection erroe");

		}
		$res=$abc->query($sql);
		if ($res->num_rows==1) {
			$data=$res->fetch_assoc();
			print_r($date);
			session_start();
			$_SESSION['email']=$this->email;
			$_SESSION['username']=$data['username'];
			$_SESSION['login_message']='Welcome '.$data['username'].',You are successfuly logged in';
			header('location:dashboard.php');
		}else{
			return false;
		}
		
	}
	public function save(){
		$this->password=md5($this->password);
		$sql="insert into tbl_admin(name,email,phone_number,password,username,gender) values ('$this->name','$this->email','$this->phone_number','$this->password','$this->username','$this->gender') ";
		$result=$this->insert($sql);
		if($result==true){
			$_SESSION['success_message']="News inserted with $result";
			redirect('list_user.php');
		}else{
			return false;
		}

	}
	public function index(){

		$sql="select * from tbl_admin";
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
}


?>