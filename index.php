<?php
require_once("class/modularisasi.php");
require_once("class/database.php");
require_once("template/header.php");
require_once("template/sidebar.php");
require_once("class/form.php");
$moduleName = strpos(@$_REQUEST["mod"], "/") ? str_split(@$_REQUEST["mod"], strpos(@$_REQUEST["mod"], "/"))[0] : @$_REQUEST['mod'];

$mod = [
    "home" => "module/home.php",
    "update" => "module/artikel/ubah.php",
    "about" => "module/artikel/tentang.php",
    "contact" => "module/artikel/kontak.php",
    "add" => "module/artikel/tambah.php",
    "delete" => "module/artikel/hapus.php",
    "error" => "module/artikel/error.php",
];

$moduleLoader = new Modularisasi($mod);
$moduleLoader->load($moduleName);
require_once("template/footer.php");
?>
