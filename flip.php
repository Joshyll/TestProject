<?php
    session_start();
    
    $arg1 = $_REQUEST['text'];
    $ar = explode($arg1);
    
    $ret = "";
    $i = count($ar);
    
    for(; $i > 0; $i--)
    {
      $ret .=$ar[$i]." ";
    }
    
    echo $ret;
?>
