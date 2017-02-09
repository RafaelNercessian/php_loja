<?php require_once ("cabecalho.php") ?>
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
                <div class="form-group">
                  <label for="descricao">Preço:</label>
                  <textarea name="descricao" class="form-control"></textarea>
                </div>
                <input type="submit" value="cadastrar" class="btn btn-primary">
            </form>
<?php require_once ("rodape.php") ?>
