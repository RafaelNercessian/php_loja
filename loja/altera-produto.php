<?php
    require_once 'cabecalho.php';
    require_once 'conecta.php';
    require_once 'banco-produto.php';
    require_once 'produto.php';
    require_once 'categoria.php';

    $produto=new Produto();
    $produto->setId($_POST["id"]);
    $produto->setNome($_POST["nome"]);
    $produto->setPreco($_POST["preco"]);
    $produto->setDescricao($_POST["descricao"]);
    $produto->setCategoria(new Categoria());
    $produto->getCategoria()->setId($_POST["categoria_id"]);

    if(array_key_exists('usado',$_POST)){
      $usado='true';
    }else{
      $usado='false';
    }

    $produto->setUsado($usado);

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
