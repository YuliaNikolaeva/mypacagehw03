<?php

    include 'vendor/autoload.php';
    include 'textMaagic/Caps.php';

    $textCaps = new textMagic\Caps();

    echo $textCaps->makeCaps('aaaa');
?>