<?php

echo "<pre>";

$save_folder = "photos";

if (!is_dir($save_folder)) {
    mkdir($save_folder, 0777);
};

$error = false;

foreach ($_FILES["file-input"]["name"] as $key => $name) {
    $ext = pathinfo($name)["extension"];
    $saveFileName = $save_folder . "/" . uniqid() . "." . $ext;

    if (!move_uploaded_file($_FILES["file-input"]["tmp_name"][$key], $saveFileName)) {
        $error = true;
    }
}

if ($error === false) {
    header("Location:gallery.php");
}

// $ext = pathinfo($_FILES["file-input"]["name"])["extension"];
// $saveFileName = $save_folder . "/" . uniqid() . "." . $ext;

// if (move_uploaded_file($_FILES["file-input"]["tmp_name"], $saveFileName)) {
//     header("Location:gallery.php");
// };



print_r($_FILES);
