<?php
    $idade = $_GET["idade"];
    if($idade < 16 && $idade != null){
        echo "<figure>
        <img src='nop.jpg' alt='Erro de visualização de imagem' width='400px'>
        </figure>";
        echo "<h1>Você infelizmente ainda não pode votar, a partir dos 16 anos é possível votar e a partir dos 18 anos é necessário votar, caso contrario será multado(a).</h1>";
    }
    elseif($idade > 16 && $idade < 18){
        echo "<figure>
        <img src='yep.jpg' alt='Erro de visualização de imagem' width='400px'";
        echo "<h1>Parabéns você já está apto a votar, mas não se preocupe, você só tem a obrigação cívil de votar após completar 18 anos.</h1>";
    }
    elseif($idade >= 18){
        echo "<figure>
        <img src='tiosam.jpg' alt='Erro de visualização de imagem' width='400px'>
        </figure>";
        echo "<h1>ATENÇÃO, você já passou dos 18 anos e tem a obrigação de votar, caso não vote justifique sua ausência ou será multado.</h1>";
    }