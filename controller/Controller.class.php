<?php

define('TAMANHO_REGISTRO', 9);

class Controller{

    function formata_registro(&$registro, $dados) {
        $chave = trim($dados[0], " ");
        $valor = trim(trim($dados[1]), ",");
        $registro[$chave] = $valor;
    }

    function leitura(){
        if(isset($_REQUEST['upload'])){
        //recupero o nome do arquivo que foi enviado pelo formulário preenchido(é um arquivo temporário)
        $arquivo = $_FILES['data']['tmp_name'];

//abro o arquivo para leitura(por isso o "r") para conseguir manuseá-lo
        $ponteiro_arquivo = fopen($arquivo, "r");
//crio um array vazio para guardar as informações que vou extrair de cada registro
        $registro = array();
//enquanto o arquivo não tiver chegado ao final
        while (!feof($ponteiro_arquivo)) {
            //leio uma linha
            $linha = fgets($ponteiro_arquivo);
            //se tiver um "=" na linha, eu a separo em duas: uma antes e outra depois do "="
            $array = explode("=", $linha);
            //se o array acima tiver 2 elementos, significa que eu tenho uma linha do tipo: titulo = "bla"
            if (count($array) > 1) {
                //função no arquivo funcoes_auxiliares.php
                $this->formata_registro($registro, $array);
            }
            //se eu já consegui preencher um registro com todos seus atributos
            if (count($registro) == TAMANHO_REGISTRO) {
                //insiro no banco(função no arquivo insercao_banco.php)
                print_r($registro);
                $art = new Artigos();

                $art->inserir($registro);
                //tenho que resetar o registro, para guardar um novo
                $registro = array();
            }
        }
//fecho o arquivo que abri para leitura
        fclose($ponteiro_arquivo);
//fecho a conexão com o banco de dados que abri(isso foi feito no arquivo insercao_banco.php)

//redireciono para a página que lista os artigos
         header("Location: listarartigos.php");
        }
    }

    function listaArtigos() {
        $chm = new Artigos();
        $lista = $chm->listaArtigos();

        return $lista;
    }


}