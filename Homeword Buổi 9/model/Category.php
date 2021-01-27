<?php 

require_once('Model.php');
/**
 * 
 */
class Category extends Model
{
	var $table = 'categories';
	
	public function getALL(){
		return $this->select($this->table);
	}

	public function addNew($data){
		return $this->insert($this->table, $data);
	}

	public function deleteCategory($id){
		return $this->delete($this->table, $id);
	}

	public function getData($id){
		return $this->get_data($this->table, $id);
	}

	public function editData($data, $id){
		return $this->update($this->table, $data, $id);
	}

} 

 ?>