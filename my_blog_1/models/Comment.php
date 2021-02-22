<?php 
require_once('models/Model.php');
/**
 * 
 */
class Comment extends Model
{
	
	public function __construct(){
		$this->table = 'comments';
		parent::__construct();
	}

	//danh sách comment đã phê duyệt
	public function select(){
		$query = "SELECT * FROM comments WHERE status = 1 ORDER BY `created_at` DESC";
		$result = $this->conn->query($query);
		
		$comment = array();
		while ($row = $result->fetch_assoc()) {
			$comment[] = $row;
		}
		return $comment;
	}

	//danh sách comment chưa phê duyệt
	public function list_request(){
		$query = "SELECT * FROM comments WHERE status = 0 ORDER BY `created_at` DESC";
		$result = $this->conn->query($query);
		
		$comment = array();
		while ($row = $result->fetch_assoc()) {
			$comment[] = $row;
		}
		return $comment;
	}

	//tạo mới comment
	public function insert($data){
		$query = "INSERT INTO $this->table ";
		$string1 = '';
		$string2 = '';
		$count = 0;

		foreach ($data as $col => $value) {
			$count++;
			$string1 .= "`" . $col . "`";
			if ($count != count($data)) {
				$string1 .= ",";
			}

			$string2 .= "'" . $value . "'";
			if ($count != count($data)) {
				$string2 .= ",";
			}
		}
		$query .= "($string1, `status`, `created_at`) VALUES ($string2,'0','" . date("y-m-d h:i:s") ."')";
		$status = $this->conn->query($query);
		if($status) {
			setcookie('msg','Bình luận đã được gửi cho quản trị viên phê duyệt!',time()+3);
		}else {
			setcookie('err','aaaaa',time()+3);
		}

		return $status;
	}

	//phê duyệt
	function approved($id){
		$query="UPDATE $this->table SET status = 1 WHERE id=".$id;
		$result=$this->conn->query($query);
		return $result;
	}

	//duyệt toàn bộ
	function approvedALL(){
		$query="UPDATE $this->table SET status = 1 WHERE status = 0";
		$result=$this->conn->query($query);
		return $result;
	}
}


?>