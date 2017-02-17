<?php

  class Ebook extends Livro{

    private $waterMark;

    public function getWaterMark(){
      return $this->waterMark;
    }

    public function setWaterMark($waterMark){
      $this->waterMark=$waterMark;
    }

    function atualizaBaseadoEm($params){
      $this->setIsbn($params["isbn"]);
      $this->setWaterMark($params["waterMark"]);
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
