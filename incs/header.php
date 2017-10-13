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

                        <div class="ss-header area-redes">
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

                            <div id="icon-mobile">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                            <!-- end .icon-mobile -->

                        </div>
                        <!-- end .ss-header -->

                        <div class="ss-header area-rep">
                            <a href="representantes.php" class="btn btn-no-refresh btn-header">Área do representante</a>
                        </div>
                        <!-- end .ss-header -->  

                    </div> 
                    <!-- end .ss-row -->             

                </div>
                <!-- end .container -->

            </div>
            <!-- end .hd-top -->

            <div class="hd-bottom">

                <div class="container">

                    <nav>

                        <div class="menu">

                            <ul id="menu-principal">
                                <li class="ativo"><a href="index.php">Home</a></li>
                                <li class="menu-item-has-children">
                                    <a href="sobre.php">Sobre a starlux</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Quem Somos</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Vídeo Institucional</a></li>
                                                <li><a href="#">Diretoria</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">História</a></li>
                                    </ul>
                                </li>
                                <li><a href="produtos.php">Produtos</a></li>
                                <li><a href="tabela-de-cores.php">Tabela de cores</a></li>
                                <li><a href="simulador-cores.php">Simulador de cores</a></li>
                                <li><a href="dicas-solucoes.php">Dicas e soluções</a></li>
                                <li><a href="contato.php">Contato</a></li>
                            </ul>

                        </div>
                        <!-- .menu -->

                        <div class="menu-mobile">

                            <span id="close">
                                <img src="./imgs/close.svg">
                            </span>

                            <ul>
                                <li><a href="index.php" class="ativo">Home</a></li>
                                <li class="hasSubmenu">
                                    <a href="sobre.php">Sobre a starlux</a>
                                    <ul class="submenu">
                                        <li class="hasMenuSub">
                                            <a href="#">Quem Somos</a>
                                            <ul class="menu-submenu">
                                                <li><a href="#">Vídeo Institucional</a></li>
                                                <li><a href="#">Diretoria</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">História</a></li>
                                    </ul>
                                </li>
                                <li><a href="produtos.php">Produtos</a></li>
                                <li><a href="tabela-de-cores.php">Tabela de cores</a></li>
                                <li><a href="simulador-cores.php">Simulador de cores</a></li>
                                <li><a href="dicas-solucoes.php">Dicas e soluções</a></li>
                                <li><a href="contato.php">Contato</a></li>
                                <li><a href="representantes.php">Área do Representante</a></li>
                            </ul>

                        </div>
                        <!-- .menu-mobile -->

                    </nav>
                    <!-- end .menu -->

                </div>
                <!-- end .container -->

            </div>
            <!-- end .hd-bottom -->

        </header>
        <!-- end #hd-principal -->