<?php
$sql_select = "SELECT * FROM biodata";
$result = $conn->query($sql_select);


if ($result->num_rows > 0) {
    echo "<h2>Data mahasiswa:</h2>";
    echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>npm</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Tanggal Lahir</th>
            <th>kelas</th>
            <th>aktiv</th>
        </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["npm"] . "</td>
            <td>" . $row["nama"] . "</td>
            <td>" . $row["email"] . "</td>
            <td>" . $row["tgllahir"] . "</td>
            <td>" . $row["kelas"] . "</td>
            <td>" . $row["aktiv"] . "</td>
            <td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> |
            <a href='delete.php?id=" . $row["id"] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Delete</a></td>
        </tr>";
    }

    echo "</table>";
} else {
    echo "Tidak ada data mahasiswa.";
}
$conn->close();