<?php
$a = [];
$b = [];
$res = [0,0];
echo "A : \n";
for ($i=0; $i < 3 ; $i++) { 
 $input = fopen("php://stdin", "r");
 $item = trim(fgets($input));

 array_push($a,$item);
}


echo "\nB : \n";
for ($i = 0; $i < 3; $i++) {
    $input = fopen("php://stdin", "r");
    $item = trim(fgets($input));

    array_push($b, $item);
}
for ($i = 0; $i < 3; $i++) {
     if($a[$i] == $b[$i]) continue;
     $a[$i] > $b[$i] ? $res[0] += 1 : $res[1] += 1 ;
}
echo "\n";

foreach ($res as  $value) {
 echo $value."  " ;
}





?>



