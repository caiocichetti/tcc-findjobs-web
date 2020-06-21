<?php
    session_start();
    include('conexao.php');

    // verifico se está logado, assim impedindo acessar direto no url
    if (!isset($_SESSION['logado'])) {
        header('Location: index.php');
    }    
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/projetos.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="shortcut icon" href="img/LogoBranca32.png"/>
    <title>Find Jobs</title>
</head>
<body>
    <header class="topo">
        <img src="img/LogoAzul.png">
        <nav class="menu">
            <div class="icones">
                <h1 class="twitter"><a href="https://twittercom/" target="_blank"><i class="fab fa-twitter-square"></i></a></h1>
                <h1 class="facebook"><a href="https://pt-br.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a></h1>
            </div>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="">Aulas</a></li>
                <li><a href="projetos.php">Projetos</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="sair.php">Sair</a></li>
            </ul>
        </nav>
        <div class="enjoy">
            <h1>Bem vindo a area de projetos!</h1>
            <p>Aqui você encontra diversas opções de projetos para ingressar :)</p>
            <div class="button">
                <a href="" class="btn btn-one">Criar projeto</a>
            </div>
        </div>
    </header>
    <section>
        <div class="projetos">
            <div class="projeto">
                <img src="img/projeto.png" alt="Avatar">
                <div class="container-p">
                    <h4>Dono</h4>
                    <p>Linguagem</p>
                    <p>Valor</p>
                    <br><p>Preciso de uma calculadora de imc</p>
                    <div class="button-p">
                        <a href="" class="btn-p btn-one">Tenho Interesse</a>
                    </div>
                </div>
            </div>
            <div class="projeto">
                <img src="img/projeto2.png" alt="Avatar">
                <div class="container-p">
                    <h4>Dono</h4>
                    <p>Linguagem</p>
                    <p>Valor</p>
                    <br><p>Preciso de uma calculadora de imc</p>
                    <div class="button-p">
                        <a href="" class="btn-p btn-one">Tenho Interesse</a>
                    </div>
                </div>
            </div>
            <div class="projeto">
                <img src="img/projeto3.png" alt="Avatar">
                <div class="container-p">
                    <h4>Dono</h4>
                    <p>Linguagem</p>
                    <p>Valor</p>
                    <br><p>Preciso de uma calculadora de imc</p>
                    <div class="button-p">
                        <a href="" class="btn-p btn-one">Tenho Interesse</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</body>
</html>