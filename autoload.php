<?php
spl_autoload_register ('myAutoload');
function myAutoload($className)
{
	$filePath = './classes/' . $className . '.class.php';
	if (file_exists($filePath)) {
		include "$filePath";
	}
}

?>