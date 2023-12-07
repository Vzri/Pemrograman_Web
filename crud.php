<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit"])) {
        // Logika untuk tombol submit
        $npm = $_POST["npm"];
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $tgllahir = $_POST["tgllahir"];
        $kelas = isset($_POST["kelas"]) ? $_POST["kelas"] : "";
        $aktiv = isset($_POST["aktiv"]) ? ($_POST["aktiv"] === "1" ? 1 : 0) : 0;
        
        $sql = "INSERT INTO biodata (npm, nama, email, tgllahir, kelas, aktiv)
        VALUES ('$npm', '$nama', '$email', '$tgllahir', '$kelas', '$aktiv')";

        if ($conn->query($sql) === true) {
            echo "<p style='color: green;'>Data berhasil disimpan.</p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
     } elseif (isset($_POST["reset"])) {
        // Logika untuk tombol reset
        $sql_reset_delete = "DELETE FROM biodata";
        $sql_reset_increment = "ALTER TABLE biodata AUTO_INCREMENT = 1";
    
        if ($conn->query($sql_reset_delete) === true && $conn->query($sql_reset_increment) === true) {
            echo "<p style='color: red;'>Semua record berhasil dihapus.</p>";
            echo "<p style='color: red;'>masukan kembali data.</p>";
        } else {
            echo "<p style='color: red;'>Error deleting records: " . $conn->error . "</p>";
            echo "<p style='color: red;'>Error resetting AUTO_INCREMENT: " . $conn->error . "</p>";
        }
    }
}
?>
