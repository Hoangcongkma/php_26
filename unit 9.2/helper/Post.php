<?php 
require_once('../helper/Connection.php');
require_once('../helper/Query.php');
	class Post extends Query
		{
			private $table = 'posts';
			public function getList(){
				$posts = $this->select($this->table);
				return $posts;
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