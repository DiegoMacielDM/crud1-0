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
            <i class="far fa-newspaper"></i> Novo Produtos</h3><hr>
            <form action="cadastrarCurso.php" method="POST">
                
                
                <label >Nome do curso</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome"><br><br> 
                <label >Descrição do curso</label>
                <input type="text" class="form-control" name="descricaoCurso" placeholder="Descrição do Curso"><br><br> 
                <label >Valor</label>
                <input type="text" class="form-control" name="valor" placeholder="valor"><br><br> 
                <label >Carga horária</label>
                <input type="text" class="form-control" name="cargaHoraria" placeholder="Carga horária"><br><br> 

                <button class="btn btn-primary">Cadastrar curso</button>
                </form>

        </div>
        </div>
    </div>
    
</body>
</html>