<?php
    require "req/funcoesLogin.php";
    include "inc/head.php";

        if ($_REQUEST) {
            $nome = $_REQUEST["nome"];
            $email = $_REQUEST["email"];
            $senha = $_REQUEST["senha"];
            $confirmarSenha = $_REQUEST["confirmPassword"];

            echo $nome . " " . $email . " " . $senha . " " . $confirmarSenha;
            exit;
        }
    ?>

<body>
    <div class="page-center">
        <h2>Cadastre-se</h2>
    <form action="cadastro.php" method="post" class="col-md-7">
        <div class="col-md-12">
            <label for="inputName">Nome</label>
            <input type="text" name="nome" class="form-control" id="inputName">
        </div>
        <div class="col-md-12">
            <label for="inputEmail">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail">
        </div>
        <div class="col-md-12">
            <label for="senha">Senha</label>
            <input type="password" name="senha" class="form-control" id="inputSenha">
        </div>
        <div class="col-md-12">
            <label for="confirmPassword">Confirmar senha</label>
            <input type="password" name="confirmPassword" class="form-control" id="confirmPassword">
        </div>
        <div class="col-md-12">
            <button class="btn btn-primary" type="submit">Cadastrar</button>
            <a href="login.php" class="col-md-offset-9">Fazer Login!</a>
        </div>
    </form>
    </div>
</body>

<?php

    include "inc/footer.php";

?>