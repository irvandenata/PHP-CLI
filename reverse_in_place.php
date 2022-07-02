<?php
function reverse($words){
 $newWords = [];
 $words = explode(' ',$words);
 foreach ($words as  $word) {
   array_push($newWords,strrev($word));
 }
 return implode(' ',$newWords);
}


echo "Insert Words : ";
$input = fopen("php://stdin", "r");
$words = trim(fgets($input));
echo reverse($words);



