<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
require("dbcon.php");

$obj = new DbCon();
echo($obj->showHotels($_REQUEST["area"]));
?>