<?php require_once ("cabecalho.php");?>
<?php require_once ("logica-usuario.php"); ?>
<?php session_start(); ?>

    <h1>Bem-vindo</h1>
    <?php if(isset($_GET["sucesso"])){?>
      <p class="alert-success"><?=$_GET["sucesso"] ?></p>
    <?php } ?>
    <?php if(isset($_GET["logout"]) && $_GET["logout"]==true){?>
      <p class="alert-success">Deslogado com sucesso</p>
    <?php } ?>
    <?php
      if(usuarioEstaLogado()){
    ?>
    <p class="text-success">Você está logado como <?=usuarioLogado() ?></p>
    <p><a href="logout.php">Deslogar</a></p>
    <?php
      } else {
     ?>
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
<?php } require_once ("rodape.php") ?>
