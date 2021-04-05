<?php 
// Deklarasi variabel
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "myDB";
// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die ("Connection failed: " . mysqli_connect_error());
}
// Query untuk meng-update data
$sql = "UPDATE buku_tamu SET NAMA='Bagas' WHERE ID_BT=3";

if (mysqli_query($conn, $sql)) {
    echo "Update successfully";
} else {
    echo "Error: " .$sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>