<?php
// definindo o nome do arquivo
    $nomeArquivo = "usuarios.json";
    $logado = false;

    function cadastrarUsuario($usuario) {
        // pegando a variável pra dentro função
        global $nomeArquivo;
        // pegando o conteúdo do arquivo usuarios.json
        $usuariosJson = file_get_contents($nomeArquivo);
        // transformando o json em array associativo
        $arrayUsuarios = json_decode($usuariosJson, true);
        // adicionando um novo usuario para o array associativo
        array_push($arrayUsuarios['usuarios'], $usuario);
        // transformando o array associativo em json
        $usuariosJson = json_encode($arrayUsuarios);
        // colocando o json de volta para o arquivo usuarios.json
        $cadastrou = file_put_contents($nomeArquivo, $usuariosJson);
        // retornando true ou false
        return $cadastrou;
    }

    function logarUsuario($email, $senha) {
        global $nomeArquivo;
        $logado = false;

        $usuariosJson = file_get_contents($nomeArquivo);

        $arrayUsuarios = json_decode($usuariosJson, true);

        foreach($arrayUsuarios["usuarios"] as $chave => $valor) {
            if ($valor["email"] == $email && password_verify($senha, $valor["senha"])) {
                return $logado = true;
                break;

            }
        }
        return $logado;
    }

?>