<?php

include_once("banco1.php");

$id = $_GET['id'];
$result_deleta = "DELETE FROM tbembalagem WHERE id = '$id'";
$result_deleta = mysqli_query($conn, $result_deleta);

echo "<script> window.location = 'embalagem.php';</script>";

?>