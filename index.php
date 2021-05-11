<?php


    include 'vendor/autoload.php';
    include 'textMagic/Caps.php';

    $textCaps = new Caps();

    echo $textCaps->makeCaps('aaaa');
?>