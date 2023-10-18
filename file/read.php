<?php 



// $fp = fopen("./data.txt", "r"); //file open korbe ( r = read & w = write )
// while($line = fgets($fp)) {
//     echo $line ."<br>";
// }


// j porjonto read korbo seta thik kore dibo
$fp = fopen("./data.txt", "r");
$data = fgets($fp,6);
echo $data;
