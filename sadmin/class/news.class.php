<?php 
require_once "common.php";
class News extends Common{
	public $id,$category_id,$content,$status,$created_by,$modified_by,$created_date,$modified_date,$slider_key,$breaking_key,$title,$short_description,$feature_image,$view_count;

	public function save(){

		echo $sql="insert into tbl_news(category_id,content,status,created_by,created_date,slider_key,breaking_key,title,short_description,feature_image) values ('$this->category_id','$this->content','$this->status','$this->created_by','$this->created_date','$this->slider_key','$this->breaking_key','$this->title','$this->short_description','$this->feature_image') ";
		$result=$this->insert($sql);
		if($result==true){
			$_SESSION['success_message']="Category inserted with $result";
			redirect('list_news.php');
		}else{
			return false;
		}

	}
	public function index(){
		$sql="select * from tbl_news";
		// $sql="select n.*,c.category_name from tbl_news as n join tbl_category as c on c.id=n.category_id";
		$list=$this->select($sql);
		return $list;

	}
	public function edit(){

		$sql="update tbl_news set title='$this->title',short_description='$this->short_description',status='$this->status',slider_key='$this->slider_key',breaking_key='$this->breaking_key',modified_by='$this->modified_by',modified_date='$this->modified_date' where id='$this->id'";
		$result=$this->update($sql);
		if($result==true){
			$_SESSION['success_message']="News updated";
			redirect('list_news.php');
		}else{
			return false;
		}

	}
	public function remove(){
		$sql="delete from tbl_news where id='$this->id'";
$this->delete($sql);
redirect('list_news.php');
	}
	public function selectnewsbyid(){
		$sql="select * from tbl_news where id='$this->id'";
		$list=$this->select($sql);
		return $list;

	}
	public function selectslidernews(){
		$sql="select * from tbl_news where status='1' and slider_key='1' order by created_date desc";
		$list=$this->select($sql);
		return $list;

	}
	public function getlatestnews(){
		 $sql="select * from tbl_news where status='1' order by created_date desc limit 4";
		$list=$this->select($sql);
		return $list;

	}
	public function getbreakingnews(){
		 $sql="select * from tbl_news where status='1' and breaking_key='1' and category_id='$this->category_id' order by created_date desc limit 1";
		$list=$this->select($sql);
		return $list;

	}
	public function getbreakingnewswithlatest(){

		  $sql="select * from tbl_news where status='1' and breaking_key='1' and category_id='$this->category_id' order by created_date desc";
		$list=$this->select($sql);
		return $list;
	}
	public function getallcategorynews(){
		$sql="select * from tbl_news where status='1' and category_id ='$this->category_id' order by created_date desc";
		$list=$this->select($sql);
		return $list;
	}
	public function updateNewscount(){

		$sql="update tbl_news set view_count='$this->view_count' where id='$this->id'";
		$this->update($sql);
	}
	public function selectcategorybyid(){
		$sql="select * from tbl_news where id='$this->id'";
		$list=$this->select($sql);
		return $list;
}
}


?>