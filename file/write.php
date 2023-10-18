<?php 


$fp = fopen("./data.txt", "w");
for($i=0; $i<10; $i++){
    fwrite($fp, "Hello  {$i}\n");
}

