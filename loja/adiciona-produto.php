<?php require_once ("cabecalho.php"); ?>
<?php require_once ("conecta.php"); ?>
<?php require_once ("banco-produto.php"); ?>
            <?php
                $nome=$_POST["nome"];
                $preco=$_POST["preco"];
                $descricao=$_POST["descricao"];
                if(insereProduto($conexao,$nome,$preco,$descricao)){
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
