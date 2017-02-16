<?php

class Produto{
  private $id;
  private $nome;
  private $preco;
  private $descricao;
  private $categoria;
  private $usado;

  public function temIsbn(){
    return $this instanceof Livro;
  }


  function calculaImposto(){
    return $this->preco - $this->preco*0.195;
  }


public function subtraiDesconto($valor){
  if($valor==null){
    $valor=0.05;
  }
  if($valor>0 && $valor<1){
    $this->preco-=$this->preco*valor;
  }
  return $this->preco;
}

public function getId(){
  return $this->id;
}

public function getNome(){
  return $this->nome;
}

public function getPreco(){
    return $this->preco;
}

public function getDescricao(){
    return $this->descricao;
}

public function getCategoria(){
    return $this->categoria;
}

public function getUsado(){
  return $this->usado;
}

public function setId($id){
  return $this->id=$id;
}

public function setNome($nome){
  return $this->nome=$nome;
}

public function setPreco($preco){
    return $this->preco=$preco;
}

public function setDescricao($descricao){
    return $this->descricao=$descricao;
}

public function setCategoria($categoria){
    return $this->categoria=$categoria;
}

public function setUsado($usado){
  return $this->usado=$usado;
}
}

 ?>
