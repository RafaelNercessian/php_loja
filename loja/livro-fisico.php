<?php

  class LivroFisico extends Livro{

    private $taxaImpressao;

    function getTaxaImpressao(){
      return $this->taxaImpressao;
    }

    function setTaxaImpressao($taxaImpressao){
      $this->taxaImpressao=$taxaImpressao;
    }

    function atualizaBaseadoEm($params){
      $this->setIsbn($params["isbn"]);
      $this->setTaxaImpressao($params["taxaImpressao"]);
      $this->setId($params["id"]);
      $this->setNome($params["nome"]);
      $this->setPreco($params["preco"]);
      $this->setDescricao($params["descricao"]);
      $this->setCategoria(new categoria());
      $this->getCategoria()->setId($params["categoria_id"]);
      $this->setTipoProduto($params["tipoProduto"]);
      if(array_key_exists("usado",$params)){
        $this->setUsado("true");
      }else{
        $this->setUsado("false");
      }
    }
  }

?>
