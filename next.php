<?php
$transport = array('foot', 'bike', 'car', 'plane');
$mode = current($transport); // $mode = 'foot';
echo $mode;
$mode = next($transport);    // $mode = 'bike';
echo $mode;
$mode = next($transport);    // $mode = 'car';
echo $mode;
$mode = prev($transport);    // $mode = 'bike';
echo $mode;
$mode = end($transport);     // $mode = 'plane';
echo $mode;

 