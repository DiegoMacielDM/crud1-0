<?php
include_once "config/conexao.php";
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
            <h3 style="text-align:center; margin-top: 30px"> <i class="fas fa-list"></i> Lista de Produtos</h3><hr>
            <table class="table">
                 <thead>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Carga Horária</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    <?php
            
                        try {
                             $consulta = $conexao->query("SELECT * FROM cursos");
                             while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                                echo "<td>$linha[id]</td><td>$linha[nome]</td><td>$linha[descricao]</td><td>R$ $linha[valor]</td><td>$linha[carga_horaria] hrs</td>"
                        
                    ?>
                   
                    <td><i class="fas fa-edit" style="color: green;"></i> <a href="<?php echo"config/formEditar.php?id=$linha[id]"?>" style="text-decoration: none; color: black" > Editar </a></td>
                    <td><i class="fas fa-trash-alt" style="color: red;"></i> <a href="<?php echo"config/excluir.php?id=$linha[id]"?>" style="text-decoration: none; color: black"> Excluir </a></td>
                    </tbody>
                    <?php
                        }
                    ?>
                  
                    <br>
                    <?php
                       
                        } catch (PDOException $e) {
                            echo "Falha ao consultar o banco de dados" . $e->getMessage();
                        }          
                    
                    
                    ?>
                    
                

            </table>
             <?php 
             echo $consulta->rowCount() . " Registro exibidos | <a href='config/formCadastro.php'> Novo cadastro </a>";
             ?>

        </div>
        </div>
    </div>
    
</body>
</html>