<?php

include_once 'file.php';

include_once 'classes/Cart.class.php';

session_start();
$_SESSION['cart'] = isset($_SESSION['cart']) ? $_SESSION['cart']: Cart::createCart();
$cart = &$_SESSION['cart'];

$cart->set_cart(8);
$cart->get_cart();

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="#">Добавить в корзину</a>
<br>
<a href="#">Корзина</a>
</body>
</html>
