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
            $tipoProduto=$array["tipoProduto"];
            $factory=new ProdutoFactory();
            $produto=$factory->criaPor($tipoProduto);
            $produto->atualizaBaseadoEm($array);
            $produto->getCategoria()->setNome($array["categoria_nome"]);
            array_push($produtos,$produto);
        }
        return $produtos;
      }

      function insereProduto($produto){
        $isbn="";
        if(method_exists($produto,"getIsbn")){
          $isbn=$produto->getIsbn();
        }

        $waterMark="";
        if(method_exists($produto,"getWaterMark")){
          $waterMark=$produto->getWaterMark();
        }

        $taxaImpressao="";
        if(method_exists($produto,"getTaxaImpressao")){
          $taxaImpressao=$produto->getTaxaImpressao();
        }
        $query="insert into produtos (nome,preco,descricao,categoria_id,usado,isbn,waterMark,taxaImpressao,tipoProduto) values ('{$produto->getNome()}',{$produto->getPreco()},'{$produto->getDescricao()}',{$produto->getCategoria()->getId()},{$produto->getUsado()},'{$isbn}','{$waterMark}','{$taxaImpressao}','{$produto->getTipoProduto()}')";
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

        $tipoProduto=$array['tipoProduto'];
        $factory=new ProdutoFactory();
        $produto=$factory->criaPor($tipoProduto);
        $produto->atualizaBaseadoEm($array);

        return $produto;
      }

      function alteraProduto($produto){

        $isbn="";
        if(method_exists($produto,"getIsbn")){
          $isbn=$produto->getIsbn();
        }

        $waterMark="";
        if(method_exists($produto,"getWaterMark")){
          $waterMark=$produto->getWaterMark();
        }

        $taxaImpressao="";
        if(method_exists($produto,"getTaxaImpressao")){
          $taxaImpressao=$produto->getTaxaImpressao();
        }

        $query="update produtos set nome= '{$produto->getNome()}', preco={$produto->getPreco()},descricao='{$produto->getDescricao()}',categoria_id={$produto->getCategoria()->getId()},usado={$produto->getUsado()},isbn='{$isbn}',waterMark='{$waterMark}',taxaImpressao='{$taxaImpressao}',tipoProduto='{$produto->getTipoProduto()}' where id={$produto->getId()}";
        return mysqli_query($this->conexao,$query);
    }
  }
 ?>
