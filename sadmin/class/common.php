<?php 
abstract class Common{
	abstract function save();
	abstract function index();
	abstract function edit();
	abstract function remove();
	
	function set($key,$value){
		$abc=new mysqli('localhost','root','','db_sadmin');
		$value=$abc->real_escape_string($value);
		$this->$key=$value;

	}
	function insert($sql){
		$abc=new mysqli('localhost','root','','db_sadmin');
		if($abc->connect_errno !=0){
			die("Data base connection erroe");

		}
		$abc->query($sql);
		if($abc->affected_rows==1 && $abc->insert_id !=0){
			return $abc->insert_id;
		}else{
			return false;   
		}
	}
	function select($sql){
		$abc=new mysqli('localhost','root','','db_sadmin');
		if($abc->connect_errno !=0){
			die("Data base connection erroe");

		}
		$res=$abc->query($sql);
		$data=[]; 
		if ($res->num_rows>0) {
			while ($row=$res->fetch_assoc()) {
				array_push($data, $row);
			}
		}
		return $data;
	}
	function delete($sql){
		$abc=new mysqli('localhost','root','','db_sadmin');
		if($abc->connect_errno !=0){
			die("Data base connection erroe");

		}
		$abc->query($sql);
		
}

function update($sql){
		$abc=new mysqli('localhost','root','','db_sadmin');
		if($abc->connect_errno !=0){
			die("Data base connection erroe");

		}
		$abc->query($sql);
		if($abc->affected_rows==1){
			return true;
		}else{
			return false;   
		}
	}

}

?>