<?php 
	require_once('core/Model.php');
	class Comment extends Model
	{
		private $table = "comment";
		public function getList(){
			$comments = $this->select($this->table);
			return $comments;
		}
		public function create($data){
			$status = $this->insert($this->table,$data);
			return $status;
		}
		public function find($id){
			$comment = $this->getPost($this->table,$id);
			return $comment;
		}
		public function del($id){
			$status = $this->delete($this->table,$id);
			return $status;
		}
	}	
?>