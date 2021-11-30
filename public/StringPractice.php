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



public function Solve_17($str,$insert,$replace,$pos)
{
    //$rep = ' '.$rep.' ';
   $x = substr_replace($str,$insert,$replace,$pos);
   echo $x;
}




public function Solve_18($str,$start,$len)
{
    $x = substr($str,$start,$len);
    echo $x;
}



public function Solve_19($str,$remove)
{
  $x = trim($str,$remove);
  echo $x;

}


public function Solve_20($str,$remove,$sep)
{
// $x = explode($remove,$str);
// $y = implode($sep,$x);
// echo $y;

    $x = str_replace($remove,$sep,$str);
    echo $x;
}



public function Solve_21($str,$trim)
{
  $x = rtrim($str,$trim);
  echo $x;
}



public function Solve_22($str,$start, $len)
{
   $x = substr($str,$start,$len);
   echo $x;
}



public function Solve_23($str)
{
    $search = array("\\","\"","+",":","-","*","/");
    $replace = " ";
    echo str_replace($search,$replace,$str);
}




public function Solve_24($str,$start,$length)
{
    $x = substr($str,$start,$length);
    echo $x;
}




public function Solve_25($str,$replace,$find)
{
    $x = str_replace($find,$replace,$str);
    echo $x;
}



public function Solve_26()
{
//    $x = ord('a');       =>ascii value of a
//    $y = ord('z');       =>ascii value of z
    for ($i=ord('a');$i<ord('z');$i++)
    {
        echo chr($i);
    }
}



public function bubble_sort($arr=array())
{
   // sort($arr);
for ($i=1;$i<=count($arr)-1;$i++)
  {
      for ($j=0;$j<count($arr)-1;$j++)
      {
          if ($arr[$j]>$arr[$j+1])
          {
              $temp = $arr[$j];
              $arr[$j] = $arr[$j+1];
              $arr[$j+1] = $temp;

          }
      }
  }
  return $arr;
}


public function swap()
{
    $arr = array('a','b');
    $tem = $arr[0];
    $arr[0] = $arr[1];
    $arr[1] = $tem;
    print_r($arr);

}


private function merge($left_arr,$right_arr,$arr)
{
    $i = 0;
    $j = 0;
    $k = 0;
    while($i<count($left_arr) && $j<count($right_arr))
    {
        if ($left_arr[$i]<=$right_arr[$j])
        {
            $arr[$k] = $left_arr[$i];
            $i++;
        }
        else
        {
            $arr[$k] = $right_arr[$j];
            $j++;
        }
        $k++;
    }

    while($i<count($left_arr))
    {
        $arr[$k] = $left_arr[$i];
        $i++;
        $k++;
    }
    while($j<count($right_arr))
    {
        $arr[$k] = $right_arr[$j];
        $j++;
        $k++;
    }
    return $arr;
}



public function merge_sort($arr)
{
    $count = count($arr);
    if ($count>1){
        $var1 = array_chunk($arr,ceil($count/2));

        /*echo '<pre>';
        print_r($var1);echo '-----------------</pre>';*/

        $left_arr = $this->merge_sort($var1[0]);
        $right_arr = $this->merge_sort($var1[1]);
        $arr = $this->merge($left_arr,$right_arr,$arr);

    }
    return $arr;
}



public function simple_search($arr,$find)
{
    foreach ($arr as $key=>$value)
    {

        if ($find == $value)
        {
            return $key;

        }
    }
    return false;
}




public function binary_search($arr,$search,$first_index=0)
{
   $count = count($arr);

   if ($count>1)
   {
       $divide = array_chunk($arr,ceil($count/2));    //devide into two parts.
       $left_array = $divide[0];               //divided part 1.
       $right_array = $divide[1];                 //divided part 2.

/*        echo '<pre>';
        print_r($divide);die();*/

      $last_element_left = count($left_array)-1;
      if ($left_array[$last_element_left]>=$search)
      {
          //$last_index = $last_element_left;

/*          echo '<pre>';
          echo $left_array[$last_element_left];
          print_r($left_array);
          echo '</pre>';*/
          return $this->binary_search($left_array,$search,$first_index);
      }
      else
      {
          return $this->binary_search($right_array,$search,$first_index+count($left_array));
      }

   }
   if ($arr[0] == $search)
   {
   return $first_index;
   }
   else
   {
       return false;
   }
}




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
//$obj->Solve_17('The brown fox', 'quick' ,' ','4');   //no run
//$obj->Solve_18('The quick brown fox', '0' ,'3');
//$obj->Solve_19('000547023.24','0');
//$obj->Solve_20('The quick brown fox jumps over the lazy dog','fox',' ');
//$obj->Solve_21('The quick brown fox jumps over the lazy dog///','/');
//$obj->Solve_22('http://www.example.com/5478631','23','7');
//$obj->Solve_23('\"\1+2/3*2:2-3/4*3');
//$obj->Solve_24('The quick brown fox jumps over the lazy dog','0','25');
//$obj->Solve_25('2,543.12','',',');
//$obj->Solve_26();
/*$z = $obj->merge_sort(array(5,2,10,9,3,4,6,20,25,100,50));
echo '<pre>';
print_r($z);*/
$x = $obj->binary_search(array(1,2,3,4,5,6,7,8,9,10),9);
echo $x;
