<?php
require_once "koneksi.php";
$myArray = array();
if ($result = mysqli_query($conn, "SELECT * FROM mahasiswa")) {
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    mysqli_close($conn);
    echo json_encode($myArray);
}
