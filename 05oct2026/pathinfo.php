<?php 
    $path = 'C:\laragon\www\pwad73_php\05oct2026\myfile.txt';

    $info = pathinfo($path);
    echo "<pre>";
    print_r($info);

    echo $info['basename'];
    echo "<br>";
    echo $info['dirname'];
?>