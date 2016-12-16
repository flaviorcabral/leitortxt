<?php
if($_GET['up'] == 't') {

    /* Pasta p/ enviar arquivo apos upload */
    $uploaddir = 'arquivos/';

    $uploadfile = $uploaddir . $_FILES['arquivo']['name'];

    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile))
        echo "Arquivo Enviado";
    else
        echo "Arquivo n&#227;o enviado";

}
else {
    ?>
    <html>
    <body>
    <form action="?up=t" method="POST" enctype="multipart/form-data">
        Enviar o arquivo: <input type="file" name="arquivo" size="20"><br>
        <input type="submit" value="Enviar">
    </form>
    </body>
    </html>
    <?php
}