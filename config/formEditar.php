<?php
include_once "conexao.php";

    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $consulta = $conexao->query("SELECT * FROM cursos where id = '$id'");
    $linha = $consulta->fetch(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/88686832e3.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <h3 style="text-align:center; margin-top: 30px">
            <i class="far fa-newspaper"></i> Editar Curso</h3><hr>
            <form action="editar.php" method="POST">
                
                
                <label >Nome do curso</label>
                <input type="text" class="form-control" name="nome" value="<?php echo $linha['nome']?>" id="nome"><br><br> 
                <label >Descrição do curso</label>
                <input type="text" class="form-control" name="descricaoCurso" value="<?php echo $linha['descricao']?>" id="descricao"><br><br> 
                <label >Valor</label>
                <input type="text" class="form-control" name="valor" value="<?php echo $linha['valor']?>" id="valor"><br><br> 
                <label >Carga horária</label>
                <input type="text" class="form-control" name="cargaHoraria" value="<?php echo $linha['carga_horaria']?>" id="cargaHoraria" ><br><br> 
                <input type="hidden" name="id" value="<?php echo $linha['id']?>">
                <button class="btn btn-primary">Editar curso</button>
                </form>

        </div>
        </div>
    </div>
    
</body>
</html>