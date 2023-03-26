<?php
require_once "koneksi.php";

$nim = $_GET['nim'];
$myArray = array();
if ($result = mysqli_query($conn, "SELECT * FROM logkondite WHERE nim=$nim")) {
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    mysqli_close($conn);
    echo json_encode($myArray);
}

