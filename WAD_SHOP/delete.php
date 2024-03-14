<?php


$conn = mysqli_connect("localhost", "kohtet", "kohtet404", "wad_shop");

if (!$conn) {
    die(mysqli_connect_errno());
}


$id = $_GET["row_id"];

// sql

$sql = "DELETE FROM products WHERE id = $id ";


// query

$query = mysqli_query($conn, $sql);


if ($query) {
    header("Location:index.php");
}
