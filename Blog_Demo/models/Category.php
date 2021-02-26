<?php 
	require_once('core/Model.php');
	class Category extends Model
	{
		private $table = "categories";
		public function getList(){
			$categories = $this->select($this->table);
			return $categories;
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
			$category = $this->getID($this->table,$id);
			return $category;
		}
		public function del($id){
			$status = $this->delete($this->table,$id);
			return $status;
		}
	}	
?>