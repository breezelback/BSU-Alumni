<?php
header('Content-type: application/json');
require("mysqliConnection.php");

$database = new Database;

$currentYear = date("Y");

$january = $database->conn->query("SELECT COUNT(id) as total_jan FROM user_information WHERE YEAR(date_register) = '$currentYear' AND MONTH(date_register) = 01");
$february = $database->conn->query("SELECT COUNT(id) as total_feb FROM user_information WHERE YEAR(date_register) = '$currentYear' AND MONTH(date_register) = 02");
$march = $database->conn->query("SELECT COUNT(id) as total_march FROM user_information WHERE YEAR(date_register) = '$currentYear' AND MONTH(date_register) = 03");
$april = $database->conn->query("SELECT COUNT(id) as total_apr  FROM user_information WHERE YEAR(date_register) = '$currentYear' AND MONTH(date_register) = 04");
$mayo = $database->conn->query("SELECT COUNT(id) as total_may FROM user_information WHERE YEAR(date_register) = '$currentYear' AND MONTH(date_register) = 05");
$june = $database->conn->query("SELECT COUNT(id) as total_june FROM user_information WHERE YEAR(date_register) = '$currentYear' AND MONTH(date_register) = 06");
$july = $database->conn->query("SELECT COUNT(id) as total_july FROM user_information WHERE YEAR(date_register) = '$currentYear' AND MONTH(date_register) = 07");
$august = $database->conn->query("SELECT COUNT(id) as total_aug FROM user_information WHERE YEAR(date_register) = '$currentYear' AND MONTH(date_register) = 08");
$september = $database->conn->query("SELECT COUNT(id) as total_sept FROM user_information WHERE YEAR(date_register) = '$currentYear' AND MONTH(date_register) = 09");
$october = $database->conn->query("SELECT COUNT(id) as total_oct FROM user_information WHERE YEAR(date_register) = '$currentYear' AND MONTH(date_register) = 10");
$november = $database->conn->query("SELECT COUNT(id) as total_nov FROM user_information WHERE YEAR(date_register) = '$currentYear' AND MONTH(date_register) = 11");
$december = $database->conn->query("SELECT COUNT(id) as total_dec FROM user_information WHERE YEAR(date_register) = '$currentYear' AND MONTH(date_register) = 12");

$jan = $january->fetch_array();
$feb = $february->fetch_array();
$mar = $march->fetch_array();
$apr = $april->fetch_array();
$may = $mayo->fetch_array();
$jun = $june->fetch_array();
$jul = $july->fetch_array();
$aug = $august->fetch_array();
$sept = $september->fetch_array();
$oct = $october->fetch_array();
$nov = $november->fetch_array();
$dec = $december->fetch_array();


$data_graph = array(
    'jan' => $jan['total_jan'],
    'feb' => $feb['total_feb'],
    'march' => $mar['total_march'],
    'apr' => $apr['total_apr'],
    'may' => $may['total_may'],
    'june' => $jun['total_june'],
    'july' => $jul['total_july'],
    'aug' => $aug['total_aug'],
    'sept' => $sept['total_sept'],
    'oct' => $oct['total_oct'],
    'nov' => $nov['total_nov'],
    'dec' => $dec['total_dec'],
);

$database->conn->close();

print json_encode($data_graph);


?>
