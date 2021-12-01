<?php

class ForLoop
{

    public function fun1()
    {
        for ($i=1;$i<=5;$i++)
        {
            for ($j=1;$j<=$i;$j++)
            {
                echo "*";
            }
            echo '<br>';
        }

        for($i=1;$i<=4;$i++)
        {
            for ($j=1;$j<=5-$i;$j++)
            {
                echo '*';
            }
            echo '<br>';
        }
    }

    public function fun2($num)
    {
        $fact = 1;
        for ($i=$num;$i>=1;$i--)
        {
            $fact = $fact * $i;
        }
        echo $fact;
    }


    public function fun3()
    {
        for ($i=0;$i<=99;$i++)
        {
            if ($i>0)
            {

                if ($i<=9)
                {
                    echo '0'.$i.',';
                }
                else
                {
                    echo $i.',';
                }
            }

        }
    }



    public function fun4($str,$find)
    {
        for ($i=0;$i<strlen($str);$i++)
        {

             $substr = substr($str,$i,1);
             if ($substr===$find)
             {
                 $count = $count + 1;
             }
        }
        echo $count;
    }



    public function fun5()
    {
        for ($i=1;$i<=50;$i++)
        {
            if ($i%3 == 0)
            {
                echo 'FIZZ'.'<br>';
            }
            elseif ($i%5 == 0)
            {
                echo 'BUZZ'.'<br>';
            }
            else
            {
                echo $i;
            }
            if ($i%3 == 0 && $i%5 == 0)
            {
                echo 'FIZZBUZZ'.'<br>';
            }
        }
    }



    public function fun6($n)
    {
        $value = 1;
        for ($i=0;$i<=$n;$i++)
        {
            for ($j=1;$j<=$i;$j++)
            {
                echo $value.' ';
                $value++;
            }
            echo '<br>';
        }
    }



    public function fun7($n)       //print fabonacci series of $n numbers.
    {
        $val1 = 0;
        $val2 = 1;

        for ($i=0;$i<=$n;$i++)
        {
            $result = $val1 + $val2;
            $val1 = $val2;
            $val2 = $result;
            echo $result.',';
        }
    }



    public function quick_sort($arr=array())
    {
        if (count($arr)>1)
        {
       $pivot = $arr[count($arr)-1];
       $left_arr = array();
       $right_arr = array();
       for ($i=0;$i<=count($arr)-2;$i++)
       {
           if ($arr[$i]<$pivot)
           {
               $left_arr[] = $arr[$i];
           }
           else
           {
               $right_arr[] = $arr[$i];
           }
       }
       $left_arr = $this->quick_sort($left_arr);
       $right_arr = $this->quick_sort($right_arr);
       $arr = array();
       for ($i=0;$i<=count($left_arr)-1;$i++)
       {
           $arr[] = $left_arr[$i];
       }
       $arr[] = $pivot;
        for ($i=0;$i<=count($right_arr)-1;$i++)
        {
           $arr[] = $right_arr[$i];
        }
        }
        return $arr;
    }



    public function insertion_sort($arr=array())
    {
        for ($i = 1; $i<count($arr); $i++)
        {
            $key = $arr[$i];
            for ($j=$i-1;$j>=0;$j--)
            {
                if ($arr[$j] > $key)
                {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }
        return $arr;
    }




}
$obj =new ForLoop();

//$obj->fun1();
//$obj->fun2(4);
//$obj->fun3();
//$obj->fun4('w3resource','r');
//$obj->fun5();
//$obj->fun6(11);
//$obj->fun7(12);
echo '<pre>';
//print_r( $obj->quick_sort(array(2,4,5,7,1)));

print_r($obj->insertion_sort(array(2,5,8,4,9,10)));
