<?php
include 'koneksi.php';

$Id_dokter = $_GET['Id_dokter'];

$sql = "DELETE FROM tb_jaga WHERE Id_dokter='$Id_dokter'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

header('Location: jaga.php');
exit;

$conn->close();
?>