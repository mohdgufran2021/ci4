<?php

$a = 10;
switch ($a)
{
    case ($a<=20):

        echo 'Case 1';

    break;

    case ($a=10):

        echo 'Case 2';

        break;

    case ($a<=20):

        echo 'Case 3';

        break;

    case ($a<=10):

        echo 'Case 4';

        break;

    default :
        echo 'Your Number is Not Match';

}


?>
