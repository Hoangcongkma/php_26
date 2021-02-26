<?php 
/**
 * 
 */
class Post extends Model
{
	var $table = 'posts';
	// var $data = $_POST;
	
	function getAll()
	{
		return $this->select($this->table);
	}

	function getOnce()
	{
		$id = $_GET['id'];
		return $this->get_data($this->table, $id);
	}

	function create()
	{
		$data = $_POST;
		return $this->insert($this->table, $data);
	}

	function updateData()
	{
		$data = $_POST;
		return $this->update($this->table, $data);
	}

	function deleteData()
	{
		$id = $_GET['id'];
		return $this->delete($this->table, $id);
	}
}
	

 ?>