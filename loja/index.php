<?php require_once ("cabecalho.php");
      session_start(); ?>
<?php require_once ("logica-usuario.php"); ?>

    <h1>Bem-vindo</h1>
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
