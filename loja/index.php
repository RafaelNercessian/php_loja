<?php require_once ("cabecalho.php") ?>
    <h1>Bem-vindo</h1>
    <?php
      if (isset($_GET["login"]) && $_GET["login"]==1){
    ?>
    <p class="alert-success">Logado com sucesso!</p>
    <?php } ?>
    <?php if (isset($_GET["login"]) && $_GET["login"]==0){ ?>
      <p class="alert-danger">Usuário ou senha inválida!</p>
    <?php }?>
    <h2>Login</h2>
    <form action="login.php" method="post">
      <div class="form-group">
        <label for="">Login:</label>
          <input type="text" class="form-control" name="login">
      </div>
      <div class="form-group">
        <label for="">Senha:</label>
          <input type="password" class="form-control" name="senha">
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
<?php require_once ("rodape.php") ?>
