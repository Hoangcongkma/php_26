<?php
	function pay($key,$quantity) {
		$p = new m_product();
		$pro = $p->get_productId($key);
		if(isset($_SESSION['cart'][$key])){
			$quantity += $_SESSION['cart'][$key]['qty'];
			update_item($key,$quantity);
			return;
		}
		$price = $pro['product_price'];
		$img = $pro['product_img'];
		$total = $price * $quantity;
		$item = array(
			'name'=>$pro['product_name'],
			'price'=>$price,
			'img'=>$img,
			'qty'=>$quantity,
			'total'=> $total
		);
		$_SESSION['cart'][$key]=$item;
	}
	function update_item($key,$quantity){
		$quantity = (int) $quantity;
		if($quantity<=0){
			unset($_SESSION['cart'][$key]);
		}else {
			$_SESSION['cart'][$key]['qty']=$quantity;
			$total = $_SESSION['cart'][$key]['price'] * $_SESSION['cart'][$key]['qty'];
			$_SESSION['cart'][$key]['total'] = $total;
		}
	}
	function get_subtotal(){
		$subtotal = 0;
		foreach ($_SESSION['cart'] as $item){
			$subtotal += $item['total'];
		}
		$subtotal = number_format($subtotal);
		return $subtotal;
	}
	function get_subtotalitem(){
		$subtotalitem = 0;
		foreach ($_SESSION['cart'] as $item){
			$subtotalitem += $item['qty'];
		}
		$subtotalitem = number_format($subtotalitem);
  		return $subtotalitem;
	}
?>