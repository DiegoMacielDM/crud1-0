<?php
include_once "conexao.php";

    try {
        $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        $nome = filter_var($_POST['nome']);
        $descricaoCurso = filter_var($_POST['descricaoCurso']);
        $valor = filter_var($_POST['valor']);
        $cargaHoraria = filter_var($_POST['cargaHoraria']);

        $update = $conexao->prepare("UPDATE cursos SET nome= :nome, descricao= :descricaoCurso, valor= :valor, carga_horaria= :cargaHoraria Where id = :id");
        
        $update->bindParam(":id", $id);
        $update->bindParam(":nome", $nome);
        $update->bindParam(":descricaoCurso", $descricaoCurso);
        $update->bindParam(":valor", $valor);
        $update->bindParam(":cargaHoraria", $cargaHoraria);
        $update->execute();

        header("location: ../index.php");

    } catch (PDOException $e) {
        echo "Erro ao editar o curso " . $e->getMessage();
        
    }



?>