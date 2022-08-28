<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- jquery-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- bootstrap-->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


    <script src="assets/js/script.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <header class="p-5 bg-primary text-white text-center">
        <h1>Minha Página Inicial</h1>
    </header>

    <div class="container-fluid">
        <div class="row"> 
            <nav class="p-3 col-md-3 ">
                <h2>Menu</h2>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a id ="btnHome" class="nav-link" href="?controller=site&action=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a id ="btnAbout" class="nav-link" href="?controller=site&action=about">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a id ="btnProdutos" class="nav-link" href="?controller=site&action=produtos">Produtos e Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a id = "btnContatos" class="nav-link" href="?controller=site&action=contatos">Contatos</a>
                    </li>
                </ul>
                <h2>Clientes</h2>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=client&action=register">Cadastro</a>
                    </li>
                </ul>    
            </nav>
            <section class="p-3 col-md-9">

               
    