<?php

class Stack
{
 const SIZE = 10;
 private $items = array();
 private $top = -1;


 public function debug()
 {
     echo '<pre>';
     print_r($this->items);
     echo '</pre>';
 }




 public function push($item)
 {


   if ($this->top < self::SIZE-1)
   {
       $this->top++;
       $this->items[$this->top]=$item;

   }
   else
   {
       echo 'Stack is Overflow.';
   }

 }


 public function pop()
 {

     if ($this->top > -1)
     {
         $item = $this->items[$this->top];
         unset($this->items[$this->top]);
         $this->top--;
         return $item;
     }
     else
     {
         echo'Your Stack is Empty.';
     }

 }


 public function is_empty()
 {
  if ($this->top==-1)
  {
      return TRUE;
  }
  else
  {
      return FALSE;
  }



 }
 public function peek()
 {

     if ($this->top > -1)
     {
         return $this->items[$this->top];

     }
     else
     {
         echo'Your Stack is Empty.';
     }

 }


}
$obj = new Stack();

$obj->push(2);
$obj->push(3);
$obj->push(4);
$obj->push(5);
/*$obj->push(4);
$obj->push(4);
$obj->push(4);
$obj->push(4);
$obj->push(4);
$obj->push(4);
$obj->push(4);
$obj->push(4);
$obj->push(4);
$obj->push(4);
$obj->push(4);*/
$obj->debug();


$obj->pop();
/*$obj->pop();*/
$obj->debug();




echo $obj->peek();
