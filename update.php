<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $edit_id = $_POST["edit_id"];
    $npm = $_POST["npm"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $tgllahir = $_POST["tgllahir"];
    $kelas = isset($_POST["kelas"]) ? $_POST["kelas"] : "";
    $aktiv = isset($_POST["aktiv"]) ? ($_POST["aktiv"] === "1" ? 1 : 0) : 0;

    $sql_update = "UPDATE biodata SET npm='$npm', nama='$nama', email='$email', tgllahir='$tgllahir', kelas='$kelas', aktiv='$aktiv' WHERE id=$edit_id";

    if ($conn->query($sql_update) === true) {
        echo "<p style='color: green;'>Data berhasil diperbarui.</p>";
        header("Location: index.php");
            exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
