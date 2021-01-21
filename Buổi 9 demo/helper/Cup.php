<?php 
require_once('../helper/Connection.php');
require_once('../helper/Query.php');
	class Cup extends Query
		{
			protected $table;
			public function getList(){
				$result = $this->select($this->table);
				return $result;
			}
			public function create($data){
				$status = $this->insert($this->table,$data);
				return $status;
			}
			public function move($id){
				$status = $this->delete($this->table,$id);
				return $status;
			}
			public function fix($data,$id){
				$status = $this->update($this->table,$data,$id);
				return $status;
			}
		}
?>