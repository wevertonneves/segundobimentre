<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/stem/images/";

    $games[1] = array("id"=>1, "nome"=>"Flap Burnes", "descricao"=>"<p>FlappyBurnes um jogo de plataforma,com objetivo de maximo score. <br>
        O Protagonista é o nosso querido professor Burnes.<br>
        Burnes é um passaro, cuja sua comida favorita é o tão saboro bacon<Br>
            Burnes foi ao Médico recentemente, onde o mesmo pediu para parar de comer  bacon<br>
            Ajude nosso Protagonista nessa Jornada Dificil a desviar de todos os bacon possiveis!<br>
                      FlapBurnes e um Jogo Divertido e o mais importante com muito bacon.</p>",
    "poster"=>"{$path}poster 1.jpg","banner"=>"{$path}imagem de fundo 11.jpg",); 

    $games[2] = array("id"=>2, "nome"=>"Game 2", "descricao"=>"<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>",
    "poster"=>"{$path}poster 2.jpg","banner"=>"{$path}imagem de fundo 2.jpg",);

    $games[3] = array("id"=>3, "nome"=>"Game 3", "descricao"=>"<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>",
    "poster"=>"{$path}poster 3.jpg","banner"=>"{$path}imagem de fundo 3.jpg",);

    
    echo json_encode($games);

    