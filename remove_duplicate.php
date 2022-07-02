<?php


echo "Jumlah Data : ";
$input = fopen("php://stdin", "r");
$length = intval(trim(fgets($input)));


$data = [];
for ($i = 0; $i < $length; $i++) {
    echo "Nilai Ke".($i+1)." : ";
    $input = fopen("php://stdin", "r");
    $number = trim(fgets($input));
    array_push($data, $number);
}
$data = array_unique($data);
foreach ($data as $value) {
    echo $value . ", ";
}



