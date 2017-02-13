<?php require_once ("cabecalho.php") ?>
<?php require_once ("conecta.php") ?>
<?php require_once ("banco-categoria.php") ?>
<?php require_once ("logica-usuario.php") ?>
<?php require_once ("categoria.php") ?>
<?php $categorias=listaCategorias($conexao); ?>

            <h1>Formulário de Cadastro</h1>
            <form action="adiciona-produto.php" method="post">
                <div class="form-group">
                  <label for="nome">Nome:</label>
                  <input type="text" name="nome" class="form-control">
                </div>
                <div class="form-group">
                  <label for="preco">Preço:</label>
                  <input type="number" name="preco" class="form-control">
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="usado" value="true">Usado
                  </label>
                </div>

                <div class="form-group">
                  <label>Categoria:</label>
                  <select name="categoria_id" class="form-control">
                  <?php foreach ($categorias as $categoria):?>
                    <option value="<?=$categoria->id?>">
                      <?=$categoria->nome?>
                    </option>
                  <?php endforeach ?>
                </select>
                </div>

                <div class="form-group">
                  <label for="descricao">Descrição:</label>
                  <textarea name="descricao" class="form-control"></textarea>
                </div>
                <input type="submit" value="cadastrar" class="btn btn-primary">
            </form>
<?php require_once ("rodape.php") ?>
