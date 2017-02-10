<?php require_once ("cabecalho.php") ?>
    <h1>Bem-vindo</h1>
    <?php
      if (isset($_COOKIE["usuario_logado"])){
    ?>
    <p class="alert-success">Você está logado como <?=$_COOKIE["usuario_logado"]?>!</p>
    <?php } else{ ?>
      <p class="alert-danger">Usuário ou senha inválida!</p>
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
    <?php }?>
<?php require_once ("rodape.php") ?>
