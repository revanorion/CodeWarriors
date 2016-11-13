<?php
// $_POST is the serialized form data
header("Content-Type: text/javascript; charset=utf-8");
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST, PUT');
// dump all the data from $_POST
var_dump($_POST);
// store specific $_POST attribute into variable
$lole = $_POST["name"];
// display the data
echo $lole;
// another way to display the data
echo $_POST["name"];
?>