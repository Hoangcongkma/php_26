<?php 
	require_once('core/Model.php');
	class Post extends Model
	{
		private $table = "posts";
		private $table1 = "categories";
		private $table3 = "users";
		public function getList(){
			$posts = $this->select($this->table);
			return $posts;
		}
		public function getListView(){
			$posts = $this->selectView($this->table);
			return $posts;
		}
		public function getKeyPost($data){
			$posts = $this->keySearch($this->table,$data);
			return $posts;
		}
		public function create($data){
			$status = $this->insert($this->table,$data);
			return $status;
		}
		public function fix($data,$id){
			$status = $this->update($this->table,$data,$id);
			return $status;
		}
		public function find($id){
			$post = $this->getID($this->table,$id);
			return $post;
		}
		public function findC($id){
			$category = $this->getID($this->table1,$id);
			return $category;
		}
		public function findU($id){
			$user = $this->getID($this->table3,$id);
			return $user;
		}
		public function del($id){
			$status = $this->delete($this->table,$id);
			return $status;
		}
	}	
?>