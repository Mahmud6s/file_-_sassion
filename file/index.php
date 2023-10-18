<?php

// $newName = "John Doe";
// file_put_contents("./data.txt", $newName."<br>");               // file er modde lichu rakhte put_contents use korbo
// // file_put_contents("./data.txt", $newName."\n", FILE_APPEND); // file er modde append korbo

$data = file_get_contents("./data.txt");                           // file er modde get korbe
// $data = file_get_contents("http://localhost:8081/hello.php");
echo nl2br($data);