<?php

class game
{
    public $Football;
    public $Cricket;

    function set_game1($N)
    {
        $this->Football = $N;
    }
          public function get_game1()
          {
              return $this->Football;
          }




    function set_game2($N)
    {
        $this->Cricket = $N;
    }
    public function get_game2()
    {
        return $this->Cricket;
    }
}

$obj = new game;

 var_dump($obj instanceof game);





//$obj->set_game1('ludo');
//$obj->set_game2('Basketball');
//
//
//echo $obj->get_game1();
//echo $obj->get_game2();
