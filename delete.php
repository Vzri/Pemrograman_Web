<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $delete_id = $_GET["id"];

    $sql_delete = "DELETE FROM biodata WHERE id='$delete_id'";

    if ($conn->query($sql_delete) === true) {
        // Redirect ke halaman awal (index.php) setelah menghapus data
        header("Location: index.php");
        exit(); 
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
