<?php 
/**
 * 
 */
require_once('models/Model.php');
class Post extends Model
{
	public function __construct(){
		$this->table = 'posts';
		parent::__construct();
	}

	//Phân trang
	public function paginite($limit=10,$page=1){
		$query = "SELECT * FROM posts ORDER BY `created_at` DESC limit ".(($page-1)*$limit).",".$limit."";
		$result = $this->conn->query($query);
		$posts = array();
		while($row = $result->fetch_assoc()) { 
			$posts[] = $row;
		}

		$query1="SELECT count(id) FROM posts";
		$result = $this->conn->query($query1);
		$row = $result->fetch_assoc();
		$_SESSION['total']=$row['count(id)'];
		return $posts;
	}

	function insert($data)
	{
		$query = "INSERT INTO $this->table ";
		$slug = $this->slug($data['title']);
		$user_id = $_SESSION['user']['id'];
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

		$query .= "($string1,`user_id`,`slug`, `created_at`  ) VALUES ($string2,'$user_id','$slug','" . date("y-m-d h:i:s") ."')";
		$status = $this->conn->query($query);
		return $status;
	}

	function edit($data, $id)
	{
		$query = "UPDATE $this->table SET";
		$string1 = '';
		$string2 = ',';
		$slug = $this->slug($data['title']);
		$user_id = $_SESSION['user']['id'];
		$i = 0;

		foreach ($data as $col => $value) {
			$i++;
			$string1 .= " `$col` = '$value'";
			if ($i!= count($data)) {
				$string1 .= $string2;
			}
		}
		$query .= "$string1   WHERE `id` =". $_POST['id'];
		// die($query);
		$conn = $this->conn;
		$status = $conn->query($query);
		return $status;
	}

	function slug($str) {
		$str = trim(mb_strtolower($str));
		$str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
		$str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
		$str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
		$str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
		$str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
		$str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
		$str = preg_replace('/(đ)/', 'd', $str);
		$str = preg_replace('/[^a-z0-9-\s]/', '', $str);
		$str = preg_replace('/([\s]+)/', '-', $str);
		return $str;
	}

	public function listByCategory($id){
		$query = "SELECT * FROM posts WHERE category_id=$id";
		$result = $this->conn->query($query);
		$posts = array();
		while ($row = $result->fetch_assoc()) {
			$posts[] = $row;
		}
		return $posts;
	}

	public function listNew(){
		$query = "SELECT * FROM posts ORDER BY `created_at` DESC";
		$result = $this->conn->query($query);

		while($row = $result->fetch_assoc()) { 
			$posts[] = $row;
		}

		return $posts;
	}
}

?>