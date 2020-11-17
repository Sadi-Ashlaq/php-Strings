<?php

//////////////////////           1           ////////////////////////////

function year_check($my_year)
{
   if ($my_year % 400 == 0)
      print("It is a leap year");
   if ($my_year % 4 == 0)
      print("It is a leap year");
   else if ($my_year % 100 == 0)
      print("It is not a leap year");
   else
      print("It is not a leap year");
}
$my_year = 2024;
year_check($my_year);

echo "<br>";
echo "<hr>";
//////////////////////           2           ////////////////////////////



echo "<br>";
echo "<hr>";
//////////////////////           3           ////////////////////////////
function test($x, $y) 
{
    return $x == $y ? ($x + $y)*3 : $x + $y;
}
echo test(1, 2)."\n";
echo test(3, 2)."\n";
echo test(2, 2)."\n"; 

echo "<br>";
echo "<hr>";
//////////////////////           4           ////////////////////////////
function test($n) 
{
     $x = 51;

     if ($n > $x)
     {
       return ($n - $x)*3;
     }
   return $x - $n;
}
echo test(53)."\n";
echo test(30)."\n";
echo test(51)."\n"; 


echo "<br>";
echo "<hr>";
//////////////////////           5           ////////////////////////////
function test($x, $y) 
{
    return ($x == 30) || ($y == 30) || ($x + $y == 30);
}

var_dump(test(30, 0));
var_dump( test(25, 5));
var_dump( test(20, 30));
var_dump(test(20, 25));  

echo "<br>";
echo "<hr>";
//////////////////////           6           ////////////////////////////
function test($x) 
{
   if(abs($x - 100) <= 10 || abs($x - 200) <= 10)
            return true;
     return false;
}

var_dump(test(103));
var_dump(test(90));
var_dump(test(89)); 

echo "<br>";
echo "<hr>";
//////////////////////           7           ////////////////////////////
function test($n) 
{
   return $n % 3 == 0 || $n % 7 == 0;
}

var_dump(test(3));
var_dump(test(14));
var_dump(test(12));
var_dump(test(37));

echo "<br>";
echo "<hr>";
//////////////////////           8           ////////////////////////////


echo "<br>";
echo "<hr>";
//////////////////////           9           ////////////////////////////
function test($s, $n) 
{
   return substr($s,0,$n).substr($s,$n+1,strlen($s)-$n);
}

echo test("Python", 1)."\n";
echo test("Python", 0)."\n";
echo test("Python", 4)."\n";

echo "<br>";
echo "<hr>";
//////////////////////           10           ////////////////////////////
function test($x, $y) 
{
    return ($x >= 100 && $x <= 200) || ($y >= 100 && $y <= 200);
}

var_dump(test(100, 199));
var_dump(test(250, 300));
var_dump(test(105, 190));

echo "<br>";
echo "<hr>";
//////////////////////           11           ////////////////////////////
function test($x, $y) 
{
    return ($x >= 100 && $x <= 200) || ($y >= 100 && $y <= 200);
}

var_dump(test(100, 199));
var_dump(test(250, 300));
var_dump(test(105, 190));

echo "<br>";
echo "<hr>";
//////////////////////           12           ////////////////////////////
function test($x, $y, $z) 
{
  $max = max($x, max($y, $z));
  return $max;
}

echo test(1, 2, 3)."\n";
echo test(1, 3, 2)."\n";
echo test(1, 1, 1)."\n";
echo test(1, 2, 2)."\n";

echo "<br>";
echo "<hr>";
//////////////////////           13           ////////////////////////////
function test($x, $y, $z) 
{
  $max = max($x, max($y, $z));
  return $max;
}

echo test(1, 2, 3)."\n";
echo test(1, 3, 2)."\n";
echo test(1, 1, 1)."\n";
echo test(1, 2, 2)."\n";

echo "<br>";
echo "<hr>";
//////////////////////           14           ////////////////////////////
function test($x, $y)
{
   return $x == 5 || $y == 5 || $x + $y == 5 || abs($x - $y) == 5;
 }

var_dump(test(5, 4));
var_dump(test(4, 3));
var_dump(test(1, 4));



?>