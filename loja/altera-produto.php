<?php
    require_once 'cabecalho.php';
    require_once 'conecta.php';
    require_once 'banco-produto.php';
    require_once 'produto.php';
    require_once 'categoria.php';
    require_once ("livro.php");
    require_once ("livro-fisico.php");
    require_once ("ebook.php");
    require_once ("produto-factory.php");

    $tipoProduto=$_POST["tipoProduto"];
    $factory=new ProdutoFactory();
    $produto=$factory->criaPor($tipoProduto);
    $produto->atualizaBaseadoEm($_POST);

    if(alteraProduto($conexao,$produto)){?>



    <p class="text-success">
      O produto <?=$produto->getNome() ?>,<?=$produto->getPreco() ?> foi alterado.
    </p>
    <?php
        } else {
            $msg=mysqli_error($conexao);
    ?>
      <p class="text-danger">O produto <?=$produto->getNome()?> não foi alterado: <?=$msg?></p>
    <?php
      }
      require_once 'rodape.php';
?>
