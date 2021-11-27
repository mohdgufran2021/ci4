<?php

$city = array('Lucknow', 'Delhi', 'Kanpur', 'Haidrabad', 'Noida');
//   OR
//$city = array();
//$city[] = 'Lucknow';
//$city[] = 'Delhi';
//$city[] = 'Kanpur';
//$city[] = 'Haidrabad';
//$city[] = 'Noida';
 echo '<pre>';
print_r($city);

//if we access separate value(any one or one by one) of an array, then we can access by
echo 'This values are called separately using syntax (echo $var_name[] ="value";)';
echo $city[] = "lucknow";   //index=0
echo '<br>';
echo $city[] = "Delhi";   //index=1
echo '<br>';
echo $city[] = "Kanpur";   //index=2
echo '<br>';
echo $city[] = "Haidrabad";   //index=3
echo '<br>';
echo $city[] = "Noida";   //index=4
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// or we call the value of an array by its index, then we can access
echo 'This value is called separately using syntax (echo $var_name[index_number];)';
echo '<br>';
echo $city[2];
