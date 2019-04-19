<?php

    include "inc/head.php";
    include "inc/header.php";


    if ($_FILES) {
        if ($_FILES["arquivo"]["error"] == UPLOAD_ERR_OK) {
            $nomeArquivo = $_FILES["arquivo"]["name"];
            $nomeTemp = $_FILES["arquivo"]["tmp_name"];
            $pastaRaiz = dirname(__FILE__);
            $pastaDesejada = "\assets\img\\";
            $caminhoCompleto = $pastaRaiz . $pastaDesejada . "avatar.png";
            move_uploaded_file($nomeTemp, $caminhoCompleto);
        }
    }

?>

<div class="page-center">
    <div class="col-md-3">
        <div class="thumbnail">
            <img src="assets/img/avatar.png" alt="Foto de Perfil">
            <div class="caption">
                <h2><?php echo $nomeLogado ?></h2>
                <p><?php echo $emailLogado ?></p>
                <form action="usuario.php" method="post" enctype="multipart/form-data">
                <label class="btn btn-info" for="inputArquivo">Escolha sua foto</label>
                <input type="file" class="hidden" name="arquivo" id="inputArquivo">
                <button type="submit" class="btn btn-primary">Enviar</button>
                </form>    
            </div>
        </div>
    </div>
</div>

<?php
    include "inc/footer.php";
?>