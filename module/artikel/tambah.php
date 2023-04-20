<?php
$database = new Database();
if (isset($_POST['create'])) {
    $data = [
        'nim' => $_POST['nim'],
        'nama' => $_POST['nama'],
        'kelas' => $_POST['kelas']
    ];
    $database->insert("data_mahasiswa", $data);
    header("location: home");
}

$form = new Form("", "create");
$form->addField("nim", "Nim");
$form->addField("nama", "Nama");
$form->addField("kelas", "Kelas");
$form->displayForm();
