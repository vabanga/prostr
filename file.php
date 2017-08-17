<?php



abstract class Product {
	protected $tovar1 = "Товар номер один";
	protected $price1 = "2000";
	protected $tovar2 = "Товар номер два";
	protected $price2 = "4000";
	abstract protected function tovar1();
	abstract protected function tovar2();
}

include 'autoload.php';

$obj1 = new extProduct();
$obj1->tovar1();

$obj1 = new extProduct();
$obj1->tovar2();

?>