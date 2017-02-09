<?php require_once ("cabecalho.php"); ?>
<?php require_once ("conecta.php"); ?>
<?php require_once ("banco-produto.php"); ?>
            <?php
                $nome=$_POST["nome"];
                $preco=$_POST["preco"];
                $descricao=$_POST["descricao"];
                $categoria_id=$_POST["categoria_id"];
                $usado=$_POST['usado'];

                if(array_key_exists('usado',$_POST)){
                  $usado="true";
                }else{
                  $usado="false";
                }

                if(insereProduto($conexao,$nome,$preco,$descricao,$categoria_id,$usado)){
            ?>
            <p class="alert-success">
              Produto <?= $nome ?>, R$ <?= $preco ?> adicionado com sucesso</p>
            <?php
          }  else{
            ?>
            <p class="alert-danger">O produto <?= $nome; ?> não foi adicionado</p>
            <?php
            }
            ?>
<?php require_once ("rodape.php"); ?>
