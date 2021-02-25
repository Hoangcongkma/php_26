<?php 
	require_once('core/Model.php');
	class User extends Model
	{
		private $table = "users";
		public function check($username,$password){
			$data = $this->where($this->table,[
				'name' => $username,
				'password' => $password
			]);
			if (count($data) == 1) {
				return true;
			}
			else
				return false;
		}
		public function getList(){
			$users = $this->select($this->table);
			return $users;
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
		public function find($id){
			$user = $this->getID($this->table,$id);
			return $user;
		}
		public function del($id){
			$status = $this->delete($this->table,$id);
			return $status;
		}
	}	
?>