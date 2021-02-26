<?php
	require_once("connect.php");
	class order extends connect{
		public function CreateOder($UserID){
			$db= new connect();
	        $date = new DateTime("now");
	        $dateCreate = $date->format("Y-m-d");
	        $id = rand();
	        $select = "INSERT INTO `orders` values('$id','$dateCreate','0','$UserID')";
	        $db->exec($select);
	        $int = $db->getdata("SELECT `orderid` from `orders` order by `orderid` DESC limit 1");
	        return $int[0];
	    }
	    public function insertOderDetail($oderID,$proID,$proName,$price,$Quantily,$Total){
	    	$db= new connect();
	        $strQuery = "INSERT INTO `order_detail` values ('$oderID','$proID','$proName','$price','$Quantily','$Total')";
	        $result = $db->exec($strQuery);
	    }
	    public function updateOderTotal($oderID,$Total){
	    	$db= new connect();
	        $strQuery = "UPDATE `orders` SET `total` = $Total WHERE `orderid` = $oderID";
	        $result = $db->exec($strQuery);
	    }
	    public function getOrder($oderID){
	    	$db= new connect();
	        $select = "SELECT * FROM `orders` WHERE `orderid`= '$oderID'";
	        $result = $db->getdata($select);
	        return $result;
	    }
	    public function getOderDetail($orderId){
	    	$db= new connect();
	        $select= "SELECT `orders`.`orderid`, `date`, `orders`.`total`, `userid`, `p_price`, `quantity`, `p_name` FROM `orders` INNER JOIN `order_detail` ON `orders`.`orderid` = `order_detail`.`orderid` WHERE `orders`.`orderid` = '$orderId'";
	        $result = $db->query($select);
	        return $result;
	    }
	    function getlistorder(){
	    	$db= new connect();
	        $select = "select * from `orders`";
	        $result = $db->query($select);
	        return $result;
	    }  
	}
?>