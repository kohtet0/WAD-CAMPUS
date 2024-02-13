<?php


header("Content-type:application/json");

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    $message = json_encode(["message" => "POST method only!"]);
    die($message);
}

if (empty($_POST["breadth"]) || empty($_POST["width"])) {
    $message = json_encode(["message" => "Require both width and breadth!"]);
    die($message);
}

$area = $_POST["width"] * $_POST["breadth"];
$_POST["area"] = $area . " sqft";

echo json_encode($_POST);
