<?php


    include 'vendor/autoload.php';
    include 'textMagic/Caps.php';

    $textCaps = new textMagic\Caps();

    echo $textCaps->makeCaps('aaaa');
?>