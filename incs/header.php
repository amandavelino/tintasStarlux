<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Tintas Starlux</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon/favicon.ico" type="image/x-icon">         
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <?php
        $servidor = $_SERVER['SERVER_NAME'];
        $pagina = $_SERVER ['REQUEST_URI'];
        $www = "/";
        //echo $pagina;
    ?>
    <body <?php if($pagina !== "/index.php"): ?>class="page-internas"<?php endif; ?>>
    
        <header id="hd-principal">

            <div class="hd-top">

                <div class="container">

                    <div class="ss-row">
                        <div class="ss-header">
                            <ul class="redes-sociais">
                                <li class="icon-face"><a href="#" target="_blank"><img src="imgs/icon-facebook.png" alt="Facebook"></a></li>
                                <li class="icon-instagram"><a href="#" target="_blank"><img src="imgs/icon-instagram.png" alt="Instagram"></a></li>
                                <li class="icon-linkedin"><a href="#" target="_blank"><img src="imgs/icon-linkedin.png" alt="LinkedIn"></a></li>
                                <li class="icon-googleplus"><a href="#" target="_blank"><img src="imgs/icon-google-plus.png" alt="GooglePlus"></a></li>
                            </ul>
                        </div>
                        <!-- end .ss-header -->

                        <div class="ss-header">
                            <a href="index.php" class="icon-logo">
                                <img src="imgs/logo-tintas-starlux.svg" onerror="this.onerror=null;this.src='imgs/logo-tintas-starlux.png';" width="270" border="0">
                            </a>
                        </div>
                        <!-- end .ss-header -->

                        <div class="ss-header">
                            <a href="representantes.php" class="btn btn-no-refresh btn-header">Área do representante</a>
                        </div>
                        <!-- end .ss-header -->  
                    </div>              

                </div>
                <!-- end .container -->

            </div>
            <!-- end .hd-top -->

            <div class="hd-bottom">

                <div class="container">

                    <nav class="menu">

                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="sobre.php" class="ativo">Sobre a starlux</a></li>
                            <li><a href="produtos.php">Produtos</a></li>
                            <li><a href="tabela-de-cores.php">Tabela de cores</a></li>
                            <li><a href="#">Simulador de cores</a></li>
                            <li><a href="#">Dicas e soluções</a></li>
                            <li><a href="#">Contato</a></li>
                        </ul>

                    </nav>
                    <!-- end .menu -->

                </div>
                <!-- end .container -->

            </div>
            <!-- end .hd-bottom -->

        </header>
        <!-- end #hd-principal -->