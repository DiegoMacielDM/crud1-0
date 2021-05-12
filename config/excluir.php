<?php
include_once "conexao.php";

    try {
        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
        $delete = $conexao->prepare("DELETE FROM cursos Where id =:id");
        $delete->bindParam(":id", $id);
        $delete->execute();

        header("location: ../index.php");

    } catch (PDOException $e) {
        echo "Erro ao excluir o curso. - ". $e->getMessage();
    }


?>