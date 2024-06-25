<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://techforge2.free.nf/images/";


    /*essas são as imagens que ficam depois que seleciona ver detalalhes*/

    $fotos[1] = array(
        array("foto"=>"{$path}1.1.jpg"),
        array("foto"=>"{$path}1.2.jpg"),
        array("foto"=>"{$path}1.3.jpg"),
        array("foto"=>"{$path}1.4.jpg"),
    );

    $fotos[2] = array(
        array("foto"=>"{$path}2.1.jpg"),
        array("foto"=>"{$path}2.2.jpg"),
        array("foto"=>"{$path}2.3.jpg"),
        array("foto"=>"{$path}2.4.jpg"),
    );

    $fotos[3] = array(
        array("foto"=>"{$path}3.1.jpg"),
        array("foto"=>"{$path}3.2.jpg"),
        array("foto"=>"{$path}3.3.jpg"),
        array("foto"=>"{$path}3.4.jpg"),
    );

    

    echo json_encode($fotos);

