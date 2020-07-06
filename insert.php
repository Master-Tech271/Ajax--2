<?php

$name = $_REQUEST['name'];
$age = $_REQUEST['age'];

$con = mysqli_connect('localhost', 'root', '', 'testing');

$q = "INSERT INTO `ajax`(`name`, `age`) VALUES ('$name', '$age')";

$r = mysqli_query($con, $q);

if($r)
	echo "data inserted!..";

else
	echo 'error!..';

?>