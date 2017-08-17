<?php
class extProduct extends Product
{
	public function tovar1(){
		echo "<b>Товары</b>:<br>";
		$a = "$this->tovar1 = $this->price1"." рублей<br>";
		echo $a;
	}
	public function tovar2(){
		echo "$this->tovar2 = $this->price2"." рублей<br>";
	}
}
?>