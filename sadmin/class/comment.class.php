<?php 
require_once "common.php";
class Comment extends Common{
	public $id,$name,$news_id,$status,$email,$comment,$comment_date,$like,$dislike;

	public function save(){

		$sql="insert into tbl_comment(name,news_id,status,email,comment,comment_date) values ('$this->name','$this->news_id','$this->status','$this->email','$this->comment','$this->comment_date') ";
		$result=$this->insert($sql);
		if($result==true){
			$_SESSION['success_message']="Comment insert with $result";
			return true;
		}else{
			return false;
		}

	}
	public function index(){
		$sql="select * from tbl_comment";
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
		echo $sql="delete from tbl_comment where id='$this->id'";
		$this->delete($sql);
		redirect('list_comment.php');
	}
	public function selectcommentbynewsid(){
		$sql="select * from tbl_comment where news_id='$this->news_id' order by comment_date desc";
		$list=$this->select($sql);
		return $list;

	}
	public function selectactivecategory(){
		$sql="select * from tbl_category where status='1'";
		$list=$this->select($sql);
		return $list;

	}
  public function getpopularpostbyviewcount(){
  $sql="select * from tbl_comment where view_count =>'3'";
    $list=$this->select($sql);
    return $list;
}

}


?>