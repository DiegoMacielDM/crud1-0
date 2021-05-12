<?php
include_once "conexao.php";

    try {
        $nome = filter_var($_POST['nome']);
        $descricaoCurso = filter_var($_POST['descricaoCurso']);
        $valor = filter_var($_POST['valor']);
        $cargaHoraria = filter_var($_POST['cargaHoraria']);

        $insert = $conexao->prepare("INSERT INTO cursos (nome, descricao, valor, carga_horaria) VALUES (:nome, :descricaoCurso, :valor, :cargaHoraria)");
        $insert->bindParam(":nome", $nome);
        $insert->bindParam(":descricaoCurso", $descricaoCurso);
        $insert->bindParam(":valor", $valor);
        $insert->bindParam(":cargaHoraria", $cargaHoraria);
        $insert->execute();

        header("location: ../index.php");

    } catch (\Throwable $e) {
        echo "Erro ao cadastrar! " . $e->getMessage();
    }




?>