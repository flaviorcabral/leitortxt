<?php

include '../config.php';

$c = new Controller();
$artigos = $c->listaArtigos();

if ($artigos > 0) { // inicia o loop que vai mostrar todos os dados
    echo "<ul>";
    foreach($artigos as $artigo):
        echo "<li>";
        echo $artigo['titulo'] . "- (<a href=" . $artigo['link_artigo'] . ">artigo aceito</a>) ," .
        $artigo['autores'] . ", " .
        $artigo['evento'] . ",(<a href=" . $artigo['lin_evento'] . ">link do evento</a>) " .
        $artigo['local'] . ", " .
        $artigo['mes'] . ", " .
        $artigo['ano'];
        echo "</li>";
    endforeach;
    echo "</ul>";
} else {
    echo "<h2>Não há artigos salvos.</h2>";
}
?>
