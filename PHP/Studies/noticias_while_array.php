<?php

$noticias = array();

$noticias [1]['titulo'] = 'titulo da noticia 1';
$noticias [2]['titulo'] = 'titulo da noticia 2';
$noticias [3]['titulo'] = 'titulo da noticia 3';
$noticias [4]['titulo'] = 'titulo da noticia 4';


$noticias [1]['conteudo'] = 'conteudo da noticia 1';
$noticias [2]['conteudo'] = 'conteudo da noticia 2';
$noticias [3]['conteudo'] = 'conteudo da noticia 3';
$noticias [4]['conteudo'] = 'conteudo da noticia 4';


$idx = 1;
while($idx <= 4){
    echo $noticias[$idx]['titulo'];
    echo '<br/>';
    echo $noticias[$idx]['conteudo'];
    echo '<br/>';

    $idx = $idx + 1;
}



?>