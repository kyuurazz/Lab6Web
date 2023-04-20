<?php
$database = new Database();
$id = strpos(@$_REQUEST["mod"], "/") ? str_split(@$_REQUEST["mod"], strpos(@$_REQUEST["mod"], "/") + 1)[1] : @$_REQUEST['mod'];
$database->delete("data_mahasiswa", "id=" . $id);
header('location: ../home');
?>
