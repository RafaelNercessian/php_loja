<?php require_once ("cabecalho.php") ?>
<?php require_once ("conecta.php") ?>
<?php require_once ("banco-categoria.php") ?>
<?php require_once ("logica-usuario.php") ?>
<?php require_once ("categoria.php") ?>
<?php require_once ("produto.php") ?>
<?php require_once ("banco-produto.php") ?>
<?php require_once ("CategoriaDAO.php") ?>
<?php require_once ("livro.php") ?>
<?php require_once ("livro-fisico.php") ?>
<?php require_once ("ebook.php") ?>
<?php require_once ("produto-factory.php") ?>
<?php verificaUsuario(); ?>
<?php
  $produto=new LivroFisico();
  $produto->setCategoria(new Categoria());
  $ehAlteracao=false;
  $action="adiciona-produto.php";
  if(array_key_exists('id',$_GET)){
    $id=$_GET["id"];
    $produto=buscaProdutos($conexao,$id);
    $ehAlteracao=true;
    $action="altera-produto.php";
  }
  $categoriaDao=new CategoriaDAO($conexao);
  $categorias=$categoriaDao->listaCategorias();
  $usado=$produto->getUsado()?"checked='checked'":"";

?>

            <h1><?=$ehAlteracao ? "Alterando":"Adicionando" ?> produto</h1>
            <form action="<?=$action?>" method="post">
                <input type="hidden" name="id" value="<?=$produto->getId() ?>">
                <div class="form-group">
                  <label for="nome">Nome:</label>
                  <input type="text" name="nome" class="form-control" value="<?=$produto->getNome()?>">
                </div>
                <div class="form-group">
                  <label for="preco">Preço:</label>
                  <input type="number" name="preco" class="form-control" value="<?=$produto->getPreco()?>">
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="usado" <?=$usado?> value="true">Usado
                  </label>
                </div>

                <div class="form-group">
                  <label>Categoria:</label>
                  <select name="categoria_id" class="form-control">
                  <?php foreach ($categorias as $categoria):
                    $essaEhACategoria=$produto->getCategoria()->getId()==$categoria->getId();
                    $selecao=$essaEhACategoria ? "selected='selected'" : "";?>
                    <option value="<?=$categoria->getId()?>"<?=$selecao?>>
                      <?=$categoria->getNome()?>
                    </option>
                  <?php endforeach ?>
                </select>
                </div>

                <div class="form-group">
                  <label for="descricao">Descrição:</label>
                  <textarea name="descricao" class="form-control"></textarea>
                </div>


                <div class="form-group">
                    <label>Tipo de produto</label>
                    <select name="tipoProduto" class="form-control">
                      <optgroup label="Livro">
                        <option value="Ebook">Ebook</option>
                        <option value="LivroFisico">Livro Físico</option>
                      </optgroup>
                    </select>
                </div>

                <div class="form-group">
                    <label>Watermark (quando for um ebook)</label>
                    <?php if($produto->temWaterMark()){
                      $waterMark=$produto->getWaterMark();
                    }else{
                      $waterMark="";
                    }?>
                    <input class="form-control" name="waterMark" value="<?=$waterMark?>"/>
                </div>

                <div class="form-group">
                    <label>Taxa de impressão (quando for um livro físico)</label>
                    <?php if($produto->temTaxaImpressao()){
                      $taxaImpressao=$produto->getTaxaImpressao();
                    }else{
                      $taxaImpressao="";
                    }?>
                    <input class="form-control" name="taxaImpressao" value="<?=$taxaImpressao?>"/>
                </div>

                <div class="form-group">
                  <label>ISBN (quando for um livro)</label>
                  <?php if ($produto->temIsbn()){
                    $isbn=$produto->getIsbn();
                  }else{
                    $isbn="";
                  }?>
                  <input class="form-control" name="isbn" value="<?=$isbn?>"/>
                </div>
                <input type="submit" value="cadastrar" class="btn btn-primary">
            </form>
<?php require_once ("rodape.php") ?>
