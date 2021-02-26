<?php
require_once("connect.php");
class m_product extends connect {
	public function get_brand() {
		$sql = "SELECT * from product_brand";
		return $this->query($sql);
	}
	
	public function get_product() {
		$sql = "SELECT * FROM product";
		return $this->query($sql);
	}

	public function get_productId($id) {
		$sql = "SELECT * FROM product WHERE product_id=$id";
		return $this->getdata($sql);
	}

	public function get_productBrand($id) {
		$sql = "SELECT * FROM product WHERE product_brand_id=$id";
		return $this->query($sql);
	}

	public function delete_product($id) {
		$sql = "DELETE FROM product where product_id=$id";
		$this->exec($sql);
	}

	public function update_product($product_id,$name,$price,$images,$screen,$camera,$pin,$os,$brandid) {
		$sql = "UPDATE product set product_name = '$name', product_price = '$price', product_img = '$images', screen = '$screen', camera = '$camera', pin = '$pin', os = '$os', product_brand_id = '$brandid' WHERE product_id='$product_id'";
		$this->exec($sql);
		return $this;	
	}
	public function add_product($id,$name,$price,$img,$screen,$camera,$pin,$os,$brand){
		$sql = "INSERT INTO product(product_id,product_name,product_price,product_img,screen,camera,pin,os,product_brand_id)VALUES ('$id','$name',$price,'$img','$screen','$camera','$pin','$os','$brand')";
		$this->exec($sql);
		return $this;
	}
	public function get_member(){
		$sql = "SELECT * FROM users";
		return $this->query($sql);;
	}
}
?>