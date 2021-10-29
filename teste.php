<?php
    $palavra = "SENAI";
    echo $palavra."<br/>";
    $cripto = base64_encode($palavra);
    echo $cripto."<br/>";
    $descripto = base64_decode($cripto);
    echo $descripto;
?>