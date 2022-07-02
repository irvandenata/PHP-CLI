<?php
function isPrime($number){
  if ($number == 1) {
      return "false";
  }
  for ($i = 2; $i <= $number / 2; $i++) {
      if ($number % $i == 0) {
          return "false";
      }
  }
  return "true";
}

echo "Jumlah Input : ";
$input = fopen("php://stdin", "r");
$length = intval(trim(fgets($input)));

$data = [];
for ($i = 0; $i < $length; $i++) {
    echo "isPrime : ";
    $input = fopen("php://stdin", "r");
    $number = trim(fgets($input));
    array_push($data, $number);
}
foreach ($data as  $value) {
echo isPrime(intval(trim($value)))."\n";
} 
fclose($input);








