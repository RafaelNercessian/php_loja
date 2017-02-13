<?php require_once 'conecta.php' ?>
<?php
  function listaProdutos($conexao){
    $produtos=array();
    $resultado=mysqli_query($conexao,"select p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id=c.id");
    while($array=mysqli_fetch_assoc($resultado)){
      $produto=new Produto();
      $produto->id=$array["id"];
      $produto->nome=$array["nome"];
      $produto->preco=$array["preco"];
      $produto->descricao=$array["descricao"];
      $produto->categoria=$array["categoria"];
      $produto->usado=$array["usado"];
      array_push($produtos,$produto);
    }
    return $produtos;
  }
  function insereProduto($conexao,$produto){
    $query="insert into produtos (nome,preco,descricao,categoria_id,usado) values ('{$produto->nome}',{$produto->preco},'{$produto->descricao}',{$produto->categoria_id},{$produto->usado})";
    $resultadoDaInsercao=mysqli_query($conexao,$query);
    return $resultadoDaInsercao;
  }
  function removeProduto($conexao,$id){
    $query="delete from produtos where id={$id}";
    return mysqli_query($conexao,$query);
  }
 ?>
