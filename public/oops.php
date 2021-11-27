<?php


abstract class Fruits
{
    //Properties
    public $name;
    public $color;
    public $taste;
    public $size;



    //Methods
    function set_name($n)
    {
        $this->name = $n;
    }

    public function get_name()
    {
        return $this->name . '<br>';
    }




    function set_color($c)
    {
        $this->color = $c;
    }
    public function get_color()
    {
        return $this->color . '<br>';
    }



    function set_taste($t)
    {
        $this->taste = $t;
    }

    public function get_taste()
    {
        return $this->taste . '<br>';
    }



    function set_size($s)
    {
        $this->size = $s;
    }

    public function get_size()
    {
        return $this->size . '<br>';
    }
    abstract public function someMethod1();
}

class strawberry extends Fruits
{
    public function someMethod1()
    {

    }
}


$object = new strawberry;


$object->set_name('<h1> Name </h1> = Mango');
$object->set_color('<h1> Color </h1> = Yellow');
$object->set_taste('<h1> Taste </h1> = Sweet');
$object->set_size('<h1> Size </h1> = Normal');


echo $object->get_name() .'<br>';
echo $object->get_color() .'<br>';
echo $object->get_taste() .'<br>';
echo $object->get_size() .'<br>';

