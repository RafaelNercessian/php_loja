<?php require_once 'cabecalho.php'; ?>
<?php if (isset($_GET["falha"])){?>
  <p class="alert-danger"><?=$_GET["falha"] ?></p>
<?php } ?>
<form action="envia-contato.php" method="post">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" class="form-control">
    </div>
    <div class="form-group">
      <label for="mensagem">Mensagem</label>
      <textarea name="mensagem" id="mensagem" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php require_once 'rodape.php' ?>
