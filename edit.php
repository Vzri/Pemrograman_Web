<?php
include 'connect.php';

$edit_id = $_GET["id"];
$sql_edit = "SELECT * FROM biodata WHERE id = $edit_id";
$result_edit = $conn->query($sql_edit);

if ($result_edit->num_rows > 0) {
    $edit_data = $result_edit->fetch_assoc();
    $conn->close();
    
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <title>Edit Biodata Mahasiswa</title>
        <link rel='stylesheet' type='text/css' href='style.css'>
    </head>
    <body>
        <h1>Edit Biodata Mahasiswa</h1>
        <form method='post' action='update.php'>
            <input type='hidden' name='edit_id' value='" . $edit_data["id"] . "'/>
            <p>
                <label>NPM : </label>
                <input type='text' value='" . $edit_data["npm"] . "' name='npm' maxlength='16' size='25'/>
            </p>
            <p>
                <label>Nama : </label>
                <input type='text' value='" . $edit_data["nama"] . "' name='nama' maxlength='35' size='25'/>
            </p>
            <p>
                <label>E-mail : </label>
                <input type='email' value='" . $edit_data["email"] . "' size='25' name='email'  />
            </p>
            <p>
                <label>Tanggal Lahir : </label>
                <input type='date' value='" . $edit_data["tgllahir"] . "' name='tgllahir' min='1963-12-31' max='2023-12-31' />
            </p>
            <p>
                <label>Kelas : </label>
                <input type='radio' name='kelas' value='3IA01' " . ($edit_data["kelas"] === "3IA01" ? "checked" : "") . " /> 3IA01
                <input type='radio' name='kelas' value='3IA02' " . ($edit_data["kelas"] === "3IA02" ? "checked" : "") . " /> 3IA02
                <input type='radio' name='kelas' value='3IA06' " . ($edit_data["kelas"] === "3IA06" ? "checked" : "") . " /> 3IA06
                <input type='radio' name='kelas' value='3IA08' " . ($edit_data["kelas"] === "3IA08" ? "checked" : "") . " /> 3IA08
            </p>
            <p>
                <label><b>Keaktivan</b></label><br /><br />
                <label>Aktiv : </label>
                <input type='radio' name='aktiv' value='1' " . ($edit_data["aktiv"] === 1 ? "checked" : "") . " /> Ya
                <input type='radio' name='aktiv' value='0' " . ($edit_data["aktiv"] === 0 ? "checked" : "") . " /> Tidak
            </p>
            <br /><br />
            <input type='submit' name='submit' value='Update'>
        </form>
    </body>
    </html>";
} else {
    echo "Data tidak ditemukan.";
    $conn->close();
}
?>
