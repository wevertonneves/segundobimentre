<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/stem/images/";

    $banners[0] = array("nome"=>"flap burner","imagem"=>"{$path}3.jpg","id_game"=>3);
    $banners[1] = array("nome"=>"Game 2","imagem"=>"{$path}1.jpg","id_game"=>1);
    $banners[2] = array("nome"=>"Game 3","imagem"=>"{$path}2.jpg","id_game"=>2);

    echo json_encode($banners);