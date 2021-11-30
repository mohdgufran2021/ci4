<?php

class Queue
{
    const SIZE = 10;
    private $items = array();
    private $top = -1;

   public function is_empty()
   {
       $items = array();
       if (count($items) != 0)
       {
           echo 'exist';
       }
       else
       {
           echo 'Empty';
       }
   }


   public function enqueue($item)
   {
       $temp = array();
       $temp[0] = $item;
       $key=1;
           for ($i=0;$i<count($this->items);$i++)
           {
               $temp[$key] = $this->items[$i];
               $key++;
           }
           $this->items = $temp;
   }


   public function peek(){}


   public function dequeue($item)
   {
       if ()
   }
}



$obj =new Queue();

$obj->is_empty();

$obj->enqueue(4);
