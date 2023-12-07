<?php

$nama = $npm = $email = $tgllahir = $kelas = $aktiv = "";
$namaErr = $npmErr = $emailErr = $tgllahirErr = $kelasErr = $aktivErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["submit"])){
        if (empty($_POST["nama"])) {
            $namaErr = "Name is required";
          } else {
            $nama = test_input($_POST["nama"]);
          }
    }   
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(isset($_POST["submit"])){
      if (empty($_POST["npm"])) {
          $npmErr = "npm is required";
        } else {
          $npm = test_input($_POST["npm"]);
        }
  }   
}
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }