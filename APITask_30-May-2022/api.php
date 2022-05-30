<?php

$con=mysqli_connect("localhost","root","","apidb");


header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = file_get_contents("php://input");
$da = json_decode($data, true);
$name=$da['name'];
$age=$da['age'];

mysqli_query($con,"UPDATE `info` SET age='$age' WHERE name='$name'");

?>
