<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://techforge2.free.nf/images/";

    $games[1] = array("id"=>1, "nome"=>"Flap Burnes", "descricao"=>"FlappyBurnes um jogo de plataforma,com objetivo de maximo score. <br>
        O Protagonista é o nosso querido professor Burnes.<br>
        Burnes é um passaro, cuja sua comida favorita é o tão saboro bacon<Br>
            Burnes foi ao Médico recentemente, onde o mesmo pediu para parar de comer  bacon<br>
            Ajude nosso Protagonista nessa Jornada Dificil a desviar de todos os bacon possiveis!<br>
                      FlapBurnes e um Jogo Divertido e o mais importante com muito bacon.</p>",
    "poster"=>"{$path}poster 1.jpg","banner"=>"{$path}1.jpg",); 

    $games[2] = array("id"=>2, "nome"=>"Fuja das Cobras", "descricao"=>"<p> Fuja das cobras é um game de maior score, o objetivo pricipal é: <br>
    Desviar das cobras que caem no cenário e ao mesmo tempo coletar o maior numero de moedas .</p>",
    "poster"=>"{$path}poster 2.jpg","banner"=>"{$path}2.jpg",);

    $games[3] = array("id"=>3, "nome"=>"Splasck", "descricao"=>"Splasck é um jogo top-down, seu objetivo é desviar das balas dos inimigos e ao mesmo tempo<br>
    tentar eliminar o máximo de inimigos possiveis antes de chamarem reforços ",
    "poster"=>"{$path}poster 3.jpg","banner"=>"{$path}3.jpg",);

    
    echo json_encode($games);

    