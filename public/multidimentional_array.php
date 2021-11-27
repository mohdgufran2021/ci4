<?php

$grandfatherfamily = array('BigFather' => array('N1', 'N2', 'N3', 'N4'), 'Father' => array('Na1', 'Na2', 'Na3', 'Na4'), 'Uncle' => array('Nm1', 'Nm2', 'Nm3', 'Nm4'));


echo '<pre>';
print_r($grandfatherfamily);

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';



//if we access the single array of father index, then:
echo '<pre>';
print_r($grandfatherfamily['Father']);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';





//if we access the single value of array of Father index, then:
echo '<pre>';
echo $grandfatherfamily['Father'][2];



?>
