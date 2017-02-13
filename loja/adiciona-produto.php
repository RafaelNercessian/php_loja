<?php require_once ("cabecalho.php"); ?>
<?php require_once ("conecta.php"); ?>
<?php require_once ("banco-produto.php"); ?>
<?php require_once ("logica-usuario.php") ?>
<?php require_once ("produto.php") ?>

            <?php
                $produto=new Produto();
                $produto->nome=$_POST["nome"];
                $produto->preco=$_POST["preco"];
                $produto->descricao=$_POST["descricao"];
                $produto->categoria_id=$_POST["categoria_id"];

                if(array_key_exists('usado',$_POST)){
                  $produto->usado="true";
                }else{
                  $produto->usado="false";
                }

                if(insereProduto($conexao,$produto)){
            ?>
            <p class="alert-success">
              Produto <?= $produto->nome ?>, R$ <?= $produto->preco ?> adicionado com sucesso</p>
            <?php
          }  else{
            ?>
            <p class="alert-danger">O produto <?= $produto->nome; ?> não foi adicionado</p>
            <?php
            }
            ?>
<?php require_once ("rodape.php"); ?>
