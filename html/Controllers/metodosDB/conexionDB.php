<?php
try
{
    $conexionDB = new PDO('mysql:host=localhost; dbname=mydb; chartset=gbk',  "root", "");
	$conexionDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo "ERROR: " . $e->getMessage();
}

?>
