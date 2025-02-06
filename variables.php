<?php

echo  $__SERVER['SCRIPT_NAME'];
echo '</br>';
echo  $__SERVER['REMOTE_ADDR'];

$name = "George";

function pri(){
    global $name;
    echo $name;
}

pri();

function pri2(){
    $name = "John"; 
    echo ($GLOBALS['name']);
    echo '</br>';
    echo $GLOBALS['name'];
    echo '</br>';
    echo $name;
}

echo '</br>';
pri2();



?>