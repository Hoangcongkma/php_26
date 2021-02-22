<?php 

include 'Connection.php';
class Model
{
	protected $conn;
	protected $table;

	function __construct(){
		$connect = new Connection();

		$this->conn = $connect->connect();
	}

	function select(){
		$query = "SELECT * FROM $this->table";

		$result = $this->conn->query($query);
		
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}

	function insert($data)
	{
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

		$query .= "($string1, `created_at`  ) VALUES ($string2,'" . date("y-m-d h:i:s") ."')";
		$status = $this->conn->query($query);
		return $status;
	}

//edit process
	function edit($data, $id)
	{
		$query = "UPDATE $this->table SET";

		$string1 = '';
		$string2 = ',';
		$i = 0;

		foreach ($data as $col => $value) {
			$i++;
			$string1 .= " `$col` = '$value'";
			if ($i!= count($data)) {
				$string1 .= $string2;
			}
		}
		$query .= $string1 . " WHERE `id` = " . $id;
		$conn = $this->conn;
		$status = $conn->query($query);
		return $status;
	}

//get data
	function get_data($id)
	{
		$query = "SELECT * FROM $this->table WHERE `id` = $id";
		$result = $this->conn->query($query);
		$data = $result->fetch_assoc();
		return $data;
	}

//delete
	function delete($id)
	{
		$query = "DELETE FROM $this->table WHERE `$this->table`.`id` = $id";
		$status = $this->conn->query($query);
		return $status;
	}

	public function getByName($name){
		$query = "SELECT * FROM $this->table WHERE user_name = '$name' ";
		$result = $this->conn->query($query);
		$user = $result->fetch_assoc();
		return $user;
	}

	/*
    *Hàm tìm kiếm có điều kiện
    *@params array $data
    *@return array
    */
	public function findWhere($data)
	{
		$string_1 = "";
		$i = 0;
		$query = "SELECT * FROM  $this->table WHERE ";
		foreach($data as $column => $value){
			$string_1 .= $column . " = " ."'". $value ."'";
			$i++;

			if($i != count($data)) {
				$string_1 .= " AND ";
			} 
		}

		$query = $query . $string_1;

		$result = $this->connection->query($query);
		$data = array();

		while($row = $result->fetch_assoc()){
			$data[] = $row;
		}

		return $data;
	}


	//search
	public function searchName($key){
		$query = "SELECT * FROM $this->table WHERE title LIKE '%".$key."%'";
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}

	//bài viết mới
	public function getNew($limit=6){
		$query = "SELECT * FROM posts ORDER BY `created_at` DESC LIMIT " . $limit;
		$result = $this->conn->query($query);

		while($row = $result->fetch_assoc()) { 
			$posts[] = $row;
		}

		return $posts;
	}

    //xem nhiều
	public function mostView($limit=4){
		$query = "SELECT posts.id,posts.title, posts.thumbnail,posts.created_at,posts.view_count, categories.name FROM posts INNER JOIN categories ON categories.id= 4 ORDER BY posts.view_count DESC LIMIT " . $limit;

		$result = $this->conn->query($query);
		while($row = $result->fetch_assoc()) { 
			$posts[] = $row;
		}

		return $posts;
	}

    //công thức mới
	public function newRecipes(){
		$query = "SELECT posts.id,posts.title, posts.thumbnail,posts.created_at, categories.name FROM posts INNER JOIN categories ON categories.id= 4 ORDER BY posts.created_at DESC LIMIT 2";
		$result = $this->conn->query($query);

		while($row = $result->fetch_assoc()) { 
			$posts[] = $row;
		}

		return $posts;
	}

    //láy bài viết
	public function getPost($id){
		$query = "SELECT * FROM posts WHERE `id` = $id";
		$result = $this->conn->query($query);
		
		$data = $result->fetch_assoc();
		$query="UPDATE posts SET view_count=".($data['view_count']+1)." WHERE id= ".$id;
		$result = $this->conn->query($query);
		return $data;
	}

	//lấy toàn bộ bài viết
	public function getAll(){
		$query = "SELECT posts.id,posts.title, posts.thumbnail,posts.created_at, categories.name FROM posts INNER JOIN categories ON categories.id= 4 ORDER BY posts.created_at DESC";
		$result = $this->conn->query($query);

		while($row = $result->fetch_assoc()) { 
			$posts[] = $row;
		}

		return $posts;
	}
}


?>