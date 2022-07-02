<?php
$count = array_fill(0, 200, 0);

function getCharCountArray($str)
{
    global $count;
    for ($i = 0;
        $i < strlen($str); $i++) {
        $count[ord($str[$i])]++;
    }
}

function firstNonRepeating($str)
{
    global $count;
    getCharCountArray($str);
    $index = -1;
    for ($i = 0;
        $i < strlen($str); $i++) {
        if ($count[ord($str[$i])] == 1) {
            $index = $i;
            break;
        }
    }
    return $index;
}

echo "Masukkan Kalimat : ";
$input = fopen("php://stdin", "r");
$words = trim(fgets($input));

$index = firstNonRepeating($words);
if ($index == -1) {
    echo "Seluruh Huruf Berulang" .
        " atau String Kosong";
} else {
    echo "Huruf pertama yang tidak berulang adalah  " .
        $words[$index];
}

