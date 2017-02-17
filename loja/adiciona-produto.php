<?php require_once ("cabecalho.php"); ?>
<?php require_once ("conecta.php"); ?>
<?php require_once ("banco-produto.php"); ?>
<?php require_once ("logica-usuario.php") ?>
<?php require_once ("produto.php") ?>
<?php require_once ("categoria.php") ?>
<?php require_once ("ProdutoDAO.php") ?>
<?php require_once ("livro.php") ?>
<?php require_once ("livro-fisico.php") ?>
<?php require_once ("ebook.php") ?>
<?php require_once ("produto-factory.php") ?>
<?php verificaUsuario(); ?>


            <?php
              $tipoProduto=$_POST["tipoProduto"];
              $factory=new ProdutoFactory();
              $produto=$factory->criaPor($tipoProduto);
              $produto->atualizaBaseadoEm($_POST);

                $dao=new ProdutoDAO($conexao);
                if($dao->insereProduto($produto)){
            ?>



            <p class="alert-success">
              Produto <?= $produto->getNome() ?>, R$ <?= $produto->getPreco() ?> adicionado com sucesso</p>
            <?php
          }  else{
            ?>
            <p class="alert-danger">O produto <?= $produto->nome; ?> não foi adicionado</p>
            <?php
            }
            ?>
<?php require_once ("rodape.php"); ?>
