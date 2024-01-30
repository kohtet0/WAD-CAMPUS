<?php

// touch("hello.txt");

// mkdir("Hello", 0757);

// var_dump(is_file("hello.txt"));
// var_dump(is_dir("Hello"));
// var_dump(unlink("hello.txt"));
// rmdir("Hello");

$fileName = "my.txt";

if (!file_exists($fileName)) {
    touch($fileName);
};

$fileStream = fopen($fileName, "a");

fwrite($fileStream, "hello");

fclose($fileStream);