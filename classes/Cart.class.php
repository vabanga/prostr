<?php

class Cart
{
	private $cartGoods;

	function __construct()
	{
		$_SESSION['cart'] = empty($_SESSION['cart']) ? array() : $_SESSION['cart'];
		$this->cartGoods = array();
		foreach ($_SESSION['cart'] as $prod_id => $num)
		{
			$query = 'SELECT products.id, products.name, prices.price
                     FROM products, prices
                     WHERE products.id='. $prod_id .'
                     and prices.prod_id=products.id and prices.cant_min<='. $num .' and prices.cant_max>='. $num;
			$sql = mysqlQuery($query);
			$row = mysql_fetch_assoc($sql);
			$this->cartGoods[] = array(
				'id'        => $row['id'],
				'name'      => $row['name'],
				'price'     => $row['price'],
				'cantidad'  => $num
			);
		}

	}


	public function addGood($prod_id, $num)
	{
		if (array_key_exists($prod_id, $_SESSION['cart']))
			$_SESSION['cart'][$prod_id] += $num;
		else
			$_SESSION['cart'][$prod_id] = $num;

		$query = 'SELECT products.id, products.name, prices.price
                     FROM products, prices
                     WHERE products.id='. $prod_id .'
                     and prices.prod_id=products.id and prices.cant_min<='. $num .' and prices.cant_max>='. $num;
		$sql = mysqlQuery($query);
		$row = mysql_fetch_assoc($sql);
		$this->cartGoods[] = array(
			'id'        => $row['id'],
			'name'      => $row['name'],
			'price'     => $row['price'],
			'cantidad'  => $num
		);

	}

	public function getCart()
	{
		return $this->cartGoods;
	}
}

?>