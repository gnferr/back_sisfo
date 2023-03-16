<?php

require "koneksi.php";

$nim = $_POST['nim'];
$password = $_POST['password'];

$result = array();
$queryResult = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim='" . $nim . "' and password='" . $password . "' ");
while ($fetchData = mysqli_fetch_array($queryResult)) {
    $result[] = $fetchData;
}
echo json_encode($result);
