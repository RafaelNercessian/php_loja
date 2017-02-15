<?php
  class ProdutoDAO{

      private $conexao;

      function __construct($conexao){
        $this->conexao=$conexao;
      }


      function listaProdutos(){
        $produtos=array();
        $resultado=mysqli_query($this->conexao,"select p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id=c.id");
        while($array=mysqli_fetch_assoc($resultado)){
          $produto=new Produto();
          $produto->setId($array["id"]);
          $produto->setNome($array["nome"]);
          $produto->setPreco($array["preco"]);
          $produto->setDescricao($array["descricao"]);
          $produto->setUsado($array["usado"]);
          $produto->setCategoria(new Categoria());
          $produto->getCategoria()->setId($array["categoria_id"]);
          $produto->getCategoria()->setNome($array["categoria_nome"]);
          array_push($produtos,$produto);
        }
        return $produtos;
      }
      function insereProduto($produto){
        $query="insert into produtos (nome,preco,descricao,categoria_id,usado) values ('{$produto->getNome()}',{$produto->getPreco()},'{$produto->getDescricao()}',{$produto->getCategoria()->getId()},{$produto->getUsado()})";
        $resultadoDaInsercao=mysqli_query($this->conexao,$query);
        return $resultadoDaInsercao;
      }
      function removeProduto($id){
        $query="delete from produtos where id={$id}";
        return mysqli_query($this->conexao,$query);
      }

      function buscaProdutos($id){
        $query="select p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id=c.id where p.id={$id}";
        $resultado=mysqli_query($this->conexao,$query);
        $array=mysqli_fetch_assoc($resultado);

        $produto=new Produto();
        $produto->setId($array["id"]);
        $produto->setNome($array["nome"]);
        $produto->setPreco($array["preco"]);
        $produto->setDescricao($array["descricao"]);
        $produto->setUsado($array["usado"]);

        $produto->setCategoria(new Categoria());
        $produto->getCategoria()->setId($array["categoria_id"]);
        $produto->getCategoria()->setNome($array["categoria_nome"]);

        return $produto;
      }

      function alteraProduto($produto){
        $query="update produtos set nome= '{$produto->getNome()}', preco={$produto->getPreco()},descricao='{$produto->getDescricao()}',categoria_id={$produto->getCategoria()->getId()},usado={$produto->getUsado()} where id={$produto->getId()}";
        return mysqli_query($this->conexao,$query);
    }
  }
 ?>
