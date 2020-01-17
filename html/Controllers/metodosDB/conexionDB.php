<?php
try
{
    $conexionDB = new PDO('mysql:host=localhost; dbname=servi301_sqlahuaca; chartset=gbk',  "root", "root");
	$conexionDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo "ERROR: " . $e->getMessage();
}

?>
