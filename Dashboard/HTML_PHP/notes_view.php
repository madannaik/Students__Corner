
<?php
session_start();
$id = isset($_GET['id'])?$_GET['id']:"";
$dataBase = new PDO("mysql:host=localhost;dbname=studentscorner","raj","test1234");
// $id = isset($_GET['id'])?$_GET['id']:"";
$st = $dataBase->prepare("select * from pdf where pdf_id=?");
$st->bindParam(1,$id);
$st->execute();
$row = $st->fetch();
// $file = '../pdf/network.pdf';

// Header content type
header('Content-type: application/pdf');

header('Content-Disposition: inline; filename="' . $row['pdf_name'] . '"');

header('Content-Transfer-Encoding: binary');

header('Accept-Ranges: bytes');

echo "<a href=".$row['pdf_data']."></iframe>";
