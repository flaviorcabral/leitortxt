<?php

    include '../config.php';

    $c = new Controller();
    $c->leitura();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PET - Engenharia de Telecomunicações da UFF</title>
        <link href="../css/estilo.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="centralizado" id="conteudo">
            <?php include 'header.php' ?>
            <section>

                <h1>Bem-vindo ao conversor de arquivos tabelas Lua</h1>

                <?php include 'formulario.php'; ?>

            </section>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>
