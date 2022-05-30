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
$query="UPDATE `info` SET age='$age' WHERE name='$name'";
if(mysqli_query($con,$query))
{

    echo '<script>
    alert("you updated your age successfully");
    </script>';
}
else
'<script>
    alert("you updated your age successfully");
    </script>';?>
