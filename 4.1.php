<?php
function alphabeticalOrder($str)
{

 $chars = str_split($str);

 sort($chars);

 return implode('', $chars);
}


$inputStr = 'edrkbnjkaebwjkebjk';
$result = alphabeticalOrder($inputStr);
echo $result;
