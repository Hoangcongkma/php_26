<?php

class CategoryModel extends Database{
	protected $db;

	public function __construct()
	{
		$this->db = new Database();
		$this->db->connect();
	}

	public function addCategory($name, $slug)
	{	
		$this->db->conn->real_escape_string($name);
		$sql = "INSERT INTO categories (name, slug)
							VALUES ('$name', '$slug')";
		$this->db->conn->query($sql);
	}

	public function getCategory($categoryId)
	{
		$sql = "SELECT * FROM categories WHERE id = $categoryId";
		$result = $this->db->conn->query($sql);
		$data = $result->fetch_array();

		return $data;
	}
        public function categoryList()
	{
		$sql = "SELECT * FROM categories";
		$result = $this->db->conn->query($sql);
		$list = array();
		while($data = $result->fetch_array()) {
			$list[] = $data;
		}

		return $list;
	}
	public function getCategory($categoryId)
	{
		$sql = "SELECT * FROM categories WHERE id = $categoryId";
		$result = $this->db->conn->query($sql);
		$data = $result->fetch_array();

		return $data;
	}
	public function editCategory($categoryId)
	{
		$sql = "UPDATE categories SET name = '$name' WHERE id = $categoryId";
		
		return $this->db->conn->query($sql);
	}
}