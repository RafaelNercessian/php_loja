<?php require_once ("cabecalho.php"); ?>
<?php require_once ("conecta.php"); ?>
<?php require_once ("banco-produto.php"); ?>
<?php require_once ("logica-usuario.php") ?>
<?php require_once ("produto.php") ?>
<?php require_once ("categoria.php") ?>

            <?php
                $produto=new Produto();
                $produto->setNome($_POST["nome"]);
                $produto->setPreco($_POST["preco"]);
                $produto->setDescricao($_POST["descricao"]);
                $produto->setCategoria(new Categoria());
                $produto->getCategoria()->setId($_POST["categoria_id"]);

                if(array_key_exists('usado',$_POST)){
                  $produto->setUsado("true");
                }else{
                  $produto->setUsado("false");
                }

                if(insereProduto($conexao,$produto)){
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
