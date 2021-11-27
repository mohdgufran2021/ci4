<?php

class StringPractice
{

public function Solve_1($str)
{
    echo strtoupper($str);
    echo '<br>';

    echo strtolower($str);
    echo '<br>';


    echo ucfirst($str);
    echo '<br>';


    echo ucwords($str);
    echo '<br>';}



public function Solve_2($str)
{
    $A = chunk_split($str, 2, ':');
    echo substr($A, 0, -1);
    echo '<br>';}




public function Solve_3($str, $search)
{
    if(stripos($str, $search) === false)
    {
        echo 'Your Character is Not Found='.$search;
    }
else
    {
        echo 'Your Character is Found='.$search;
    }}




public function Solve_4($number)
{
   var_dump(strval($number));}




public function Solve_5($str)
{
 //$str =  'www.example.com/public_html/index.php';

 echo basename($str);}




public function Solve_6($email)
{
    $x = explode('@', $email);
   // print_r($x);
    echo $x['0'];}



public function Solve_7($str, $n, $l)
{
    $x = substr($str, $n, $l);
    echo $x;}



public function Solve_8($value1,$value2,$d)
{
    $x = $value1 + $value2;
    $y = number_format($x,$d);
    echo $y;}






public function Solve_9($str,$n)
{
  $x =  str_shuffle($str);
  $y = substr($x,1,$n);
  echo $y;}




public function Solve_10($str,$find,$replace)
{
    $y = strpos($str,$find);
    $x = strlen($find);
    $z = substr_replace($str,$replace,$y,$x);
    echo $z;}


public function Solve_11($str1,$str2)
{
    $length1 = strlen($str1);
    $length2 = strlen($str2);

    //Selecting Smallest Length.
    $small_length = $length1;
    if ($length2<$length1)
    {
        $small_length =$length2;
    }
  for($i=0;$i<=$small_length-1;$i++)
  {
    if ($str1[$i] !== $str2[$i])
    {
        echo $i.' '.$str1[$i].' vs '.$str2[$i];
        break;
    }}
}



public function Solve_12($separator,$str)
{
    $x = explode($separator,$str);
    echo '<pre>';
    var_dump($x);}




public function Solve_13($str,$p)
{
 $x = basename($str,$p);
 echo $x;}



public function Solve_14($a)
{
    $x = ord($a)+1;
    if ($x>122)
    {
        $x = 97;
    }
    echo chr($x);}




public function Solve_15($str,$offset)
{
//   $x = explode($sep,$str,$limit);
//   echo $x;
     $len = strlen($str);
     $x = substr($str,$offset,$len);
     echo $x;}



public function Solve_16($str)
{
    $x = bin2hex($str);
    echo $x;}



//public function Solve_17($str,$insert,$replace,$pos)
//{
//    //$rep = ' '.$rep.' ';
//   $x = substr_replace($str,$insert,$replace,$pos);
//   echo $x;
//}


}

$obj = new StringPractice();

//$obj->Solve_1('your name');
//$obj->Solve_2('082307');
//$obj->Solve_3('0820307', '1');
//$obj->Solve_4(123456);
//$obj->Solve_5('www.example.com/public_html/index.php');
//$obj->Solve_6('rayy@example.com');
//$obj->Solve_7('rayy@example.com', 13, 3);
//$obj->Solve_8(65.45,104.35,2);
//$obj->Solve_10('the quick brown fox jumps over the lazy dog.','the','That');
//$obj->Solve_11("football", "footboll");
//$obj->Solve_12("\n","Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.");
//$obj->Solve_13("https://www.w3resource.com/index.php",'.php');
//$obj->Solve_14('y');
//$obj->Solve_15('rayy@example.com', '5');
//$obj->Solve_16('rayy@example.com');
$obj->Solve_17('The brown fox', 'quick' ,' ','4');   //no run
