<?php
require_once "koneksi.php";

$nim = $_GET['nim'];

$SQL = $conn->prepare("SELECT * FROM nilai WHERE nim=$nim");
$SQL->bind_param("i", $nim);
$SQL->execute();
$hasil = $SQL->get_result();
$myArray = array();
while ($users = $hasil->fetch_array(MYSQLI_ASSOC)) {
    $myArray = $users;
}
echo json_encode($myArray);
