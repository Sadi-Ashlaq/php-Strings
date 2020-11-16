<?php
echo "<h1>1:A- transform a string all uppercase letters:";
echo "<br> <br>";
$name = "sadi nidal sadi ashlaq";
$name = strtoupper($name);
echo $name;

echo "<hr>";

echo "<h1>1:B- transform a string all lowercase letters:";
echo "<br> <br>";
$name = "SADI NIDAL SADI ASHLAQ";
$name = strtolower($name);
echo $name;

echo "<hr>";

echo "<h1>1:C- transform a string all lowercase letters:";
echo "<br> <br>";
$name = "sadi love coding";
$name = ucfirst($name);
echo $name;

echo "<hr>";

echo "<h1>1:C- transform a string all lowercase letters:";
echo "<br> <br>";
$name = "sadi love coding";
$name = ucwords($name);
echo $name;

echo "<hr>";

echo "<h1>2- Write a PHP script to split the following string:";
echo "<br> <br>";
$sampleString = "082307";
$sampleSplit = substr(chunk_split($sampleString, 2, ':'), 0, -1);
echo $sampleSplit;

echo "<hr>";

echo "<h1>3- Write a PHP script to check whether a string contains a specific string:";
echo "<br>";
echo "*The quick brown fox jumps ovr the lazy dog.*[task]";
echo "<br> <br>";
$sampleString2 = "The quick brown fox jumps ovr the lazy dog.";
if (strstr ( $sampleString2, 'task' ) === false) {
    echo "404 Not Found";
}

echo "<hr>";

echo "<h1>4- Write a PHP script to convert the value of a PHP variable to string:";
echo "<br> <br>";
$value = 35.55;
echo strval($value);

echo "<hr>";

echo "<h1>5- Write a PHP script to extract the file name from the following string:";
echo "<br> <br>";
$sampleString3 = "www.example.com/public_html/index.php";
$outPut = substr(strrchr($sampleString3, "/"), 1);
echo $outPut;

echo "<hr>";

echo "<h1>6- Write a PHP script to extract the username from the following email ID:";
echo "<br> <br>";
$email = 'Ayham@example.com';
$userName = strstr($email, '@',1);
echo $userName;

echo "<hr>";

echo "<h1>7- Write a PHP script to get the last three characters of a string:";
echo "<br> <br>";
$email = 'Ayham@example.com';
echo substr($email, -3);

echo "<hr>";

echo "<h1>8- Write a PHP script to format values in currency style:";
echo "<br> <br>";

$num1 = 65.45;
$num2 = 104.35;
$sum = $num1 + $num2;
echo number_format($sum, 2);

echo "<hr>";

echo "<h1>9- Write a PHP script to generate simple random passwords [do not use rand() function] form a given string:";
echo "<br> <br>";
$random = "123456789abcdefghijklmnopqrstuvwxyz@#$%^&*ABCDEFGHIJKLMNOPQRSTUVWXUZ";
echo substr(str_shuffle($random),0,10);

echo "<hr>";

echo "<h1>10- Write a PHP script to replace the first 'the' of the following string with 'that':";
echo "<br> <br>";
$text = "the quic brown fox jumps over the lazy dog";
echo str_replace('the', 'that', $text);

echo "<hr>";

echo "<h1>11- Write a PHP script to find the first character that is different between two strings:";
echo "<br> <br>";

$string1 = 'football';
$string2 = 'footboll';

echo "<hr>";

echo "<h1>12- Write a PHP script to put a string in an array:";
echo "<br> <br>";
$song = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$array = explode("\n", $song);
var_dump($array);

echo "<hr>";

echo "<h1>13- Write a PHP script to get the filename coponent of the following path:";
echo "<br> <br>";

$path = "https://ww.orange.com/index.php";
echo basename($path, ".php");

echo "<hr>";

echo "<h1>14- Write a PHP script to print the next charater of a specific character:";
echo "<br> <br>";
$letter = "f";
$nextLetter = ++$letter;
    echo $nextLetter;

echo "<hr>";

echo "<h1>15- Write a PHP script to remove a part of a string from the beginning:";
echo "<br> <br>";

$sampleString4 = "rayy@example.com";
echo trim($sampleString4, 'rayy');

echo "<hr>";

echo "<h1>16- Write a PHP script to get a hex dump of a string:";
echo "<br> <br>";
$sampleString4 = "rayy@example.com";
echo bin2hex($sampleString4);

echo "<hr>";

echo "<h1>17- Write a PHP script to insert a string at the specified position in a given string:";
echo "<br> <br>";

$fox = "The brown fox";
echo substr_replace($fox,"quick".' ' ,4, 0);

echo "<hr>";

echo "<h1>18- Write a PHP script to get the first word of a sentence:";
echo "<br> <br>";
$fox = "The quick brown fox";
$ex = explode(' ', trim($fox));
echo $ex[0];

echo "<hr>";

echo "<h1>19- Write a PHP script to remove all leading zeroes from a string:";
echo "<br> <br>";
$num = '000547023.24';
echo trim($num,'0');

echo "<hr>";

echo "<h1>20- Write a PHP script to remove part of a string:";
echo "<br> <br>";
$text = "The quick brown fox jumps over the lazy dog";
echo trim($text, 'fox');

echo "<hr>";

echo "<h1>20- Write a PHP script to remove part of a string:";
echo "<br> <br>";
    ?>