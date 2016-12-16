<?php

class Artigos{

    private $con;

    function __construct() {
        $conexao = new Conexao();
        $this->con = $conexao->getConexao();
    }

    function inserir($registro) {
        $titulo = $registro['titulo'];
        $autores = $registro['autores'];
        $evento = $registro['evento'];
        $local = $registro['local'];
        $mes = $registro['mes'];
        $ano = $registro['ano'];
        $linkart = $registro['link_artigo'];
        $linkapres = $registro['link_apresentacao'];
        $linkeve = $registro['link_evento'];

        if($this->con->exec("INSERT INTO artigos (titulo,autores,evento,local,mes,ano,link_artigo,link_apresentacao,lin_evento) VALUES ('{$titulo}', '{$autores}', '{$evento}', '{$local}', '{$mes}', '{$ano}', '{$linkart}', '{$linkapres}', '{$linkeve}')")){
            return TRUE;
        }
        return FALSE;
    }

    function listaArtigos() {
        $lista = $this->con->query("SELECT * FROM artigos");

        if ($lista->rowCount() > 0) {

            return $lista->fetchALL(PDO::FETCH_ASSOC);
        }
        return FALSE;
    }



}
    /*function inserir($registro) {
        //essa variavel eh da conexao com o banco, preciso da palavra global para torna-la disponivel
        //aqui dentro da função
        global $conexao;
        //uso do PDO, para preparar uma consulta
        $consulta_preparada = $conexao->prepare("insert into artigos(titulo,autores,evento,local,mes,ano,link_artigo,link_apresentacao,link_evento)"
            . "values(?,?,?,?,?,?,?,?,?)");
        //os 's' são os tipos das colunas do banco. Cada ? da linha acima é trocado pelo valor correspondente
        //na linha abaixo
        $consulta_preparada->bind_param('sssssssss', $registro['titulo'], $registro['autores'], $registro['evento'], $registro['local'], $registro['mes'], $registro['ano'], $registro['link_artigo'], $registro['link_apresentacao'], $registro['link_evento']);
        //executo a 'consulta'
        $consulta_preparada->execute();
        //fecho essa consulta
        $consulta_preparada->close();

}*/