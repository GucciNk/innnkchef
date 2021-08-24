<?php
$serverName ="localhost";
$dBUsername ="root";
$dbPassword ="";
$dBName ="innnk";

$conn = mysqli_connect($serverName,$dBUsername,$dbPassword,$dBName);
if(!$conn){
    die("COnnection failed:".mysqli_connect_error());
}