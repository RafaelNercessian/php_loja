<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minha loja</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/loja.css">
</head>

<body>
  <?session_start();?>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Minha Loja</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="produto-formulario.php">Adiciona Produto</a>
                    </li>
                    <li><a href="produto-lista.php">Produtos</a></li>
                    <li>
                        <a href="contato.php">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>



    <main class="container">
        <article class="principal">
