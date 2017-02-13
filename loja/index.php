<?php require_once ("cabecalho.php");
      session_start(); ?>
<?php require_once ("logica-usuario.php"); ?>

    <?php
      if(isset($_GET["falhaDeSeguranca"])){
     ?>
     <p class="alert-danger">Você não tem acesso a esta funcionalidade!</p>
     <?php
   } else{
      ?>

      <?php if(isset($_GET["logout"]) && $_GET["logout"]==true){ ?>
        <p class="alert-success">Deslogado com sucesso!</p>
      <?php } ?>

    <h1>Bem-vindo</h1>
    <?php
       if(usuarioEstaLogado()){
    ?>
    <p class="alert-success">Você está logado como <?=usuarioLogado()?>!</p>
    <p><a href="logout.php">Deslogar</a></p>
    <?php } else{ ?>
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
    <?php }?>
<?php require_once ("rodape.php") ?>
