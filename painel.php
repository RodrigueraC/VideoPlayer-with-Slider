<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/painel.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://kit.fontawesome.com/d8cce3c0e9.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <title>Prosw Treinamentos</title>

</head>
<body>
    
    <div class="main-content">

        <div class="nav">
            <header>
                <nav>
                    <a class="logo" href="/"></a>
                    <ul class="nav-list">
                        <li><a href="#container">Início</a></li>
                        <li><a href="#modulos">Módulos</a></li>
                        <li><a href="#duvidas">Dúvidas</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </nav>
            </header>
        </div>
        <div class="Vcontainer show-controls"> 

            <div class="wrapper">
                <div class="video-timeline">
                    <div class="progress-area">
                        <span>00:00</span>
                        <div class="progress-bar">
                        </div>
                    </div>
                </div>
                <ul class="video-controls">
                    <li class="options left">
                        <button class="volume"><i class="fa-solid fa-volume-high"></i></button>
                        <input type="range" min="0" max="1" step="any">
                        <div class="video-timer">
                            <p class="current-time">00:00</p>
                            <p class="separator">/</p>
                            <p class="video-duration">00:00</p>
                        </div>
                    </li>
                    <li class="options center">
                        <button class="skip-backwards"><i class="fas fa-backward"></i></buttton>
                        <button class="play-pause"><i class="fas fa-play"></i></buttton>
                        <button class="skip-forward"><i class="fas fa-forward"></i></buttton>
                    </li>
                    <li class="options right">
                        <div class="playback-content">
                            <button class="playback-speed"><span class="material-symbols-rounded">slow_motion_video</span></buttton>
                            <ul class="speed-options">
                                <li data-speed="2">2x</li>
                                <li data-speed="1.5">1.5x</li>
                                <li data-speed="1" class="active">Normal</li>
                                <li data-speed="0.75">0.75x</li>
                                <li data-speed="0.5">0.5x</li>
                            </ul>
                        </div>
                        <button class="pic-in-pic"><span class="material-icons">picture_in_picture_alt</span></buttton>
                        <button class="fullscreen"><i class="fa-solid fa-expand"></i></buttton>
                    </li>
                </ul>
            </div>

            <video class="main-video" src="assets/videos/sample.mp4"></video>

        </div>

        <div class="modulos">
            <section id="tranding">
                <div class="Mcontainer">
                    <h1 class="text-center section-heading">Módulos</h1>
                </div>
                <div class="Mcontainer">
                    <div class="swiper tranding-slider">
                        <div class="swiper-wrapper">
                            <!-- Slide Start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="assets/svgmodulos/Cadastros.png" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <div class="trainding-slide-content-bottom">
                                        <h2 class="nome-modulo">Cadastros</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide End -->
                            <!-- Slide Start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="assets/svgmodulos/Contas.png" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <div class="trainding-slide-content-bottom">
                                        <h2 class="nome-modulo">Contas</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide End -->
                            <!-- Slide Start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="assets/svgmodulos/Contratos.png" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <div class="trainding-slide-content-bottom">
                                        <h2 class="nome-modulo">Contratos</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide End -->
                            <!-- Slide Start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="assets/svgmodulos/ControleDePatrimonio.png" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <div class="trainding-slide-content-bottom">
                                        <h2 class="nome-modulo">Controle De Patrimonio</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide End -->
                            <!-- Slide Start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="assets/svgmodulos/Estoque.png" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <div class="trainding-slide-content-bottom">
                                        <h2 class="nome-modulo">Estoque</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide End -->
                            <!-- Slide Start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="assets/svgmodulos/FluxoDeCaixa.png" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <div class="trainding-slide-content-bottom">
                                        <h2 class="nome-modulo">Fluxo De Caixa</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide End -->
                            <!-- Slide Start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="assets/svgmodulos/ForcaDeVenda.png" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <div class="trainding-slide-content-bottom">
                                        <h2 class="nome-modulo">Força de Venda</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide End -->
                            <!-- Slide Start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="assets/svgmodulos/GestaoDeDocumentos.png" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <div class="trainding-slide-content-bottom">
                                        <h2 class="nome-modulo">Gestão de Documentos</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide End -->
                            <!-- Slide Start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="assets/svgmodulos/GestaoDeProcessos.png" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <div class="trainding-slide-content-bottom">
                                        <h2 class="nome-modulo">Gestão de Processos</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide End -->
                            <!-- Slide Start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="assets/svgmodulos/GestaoDeQualidade.png" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <div class="trainding-slide-content-bottom">
                                        <h2 class="nome-modulo">Gestão de Qualidade</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide End -->
                            <!-- Slide Start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="assets/svgmodulos/GestaoPessoal.png" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <div class="trainding-slide-content-bottom">
                                        <h2 class="nome-modulo">Gestão Pessoal</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide End -->
                            <!-- Slide Start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="assets/svgmodulos/InsumosePagamentos.png" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <div class="trainding-slide-content-bottom">
                                        <h2 class="nome-modulo">Insumos e Pagamentos</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide End -->
                            <!-- Slide Start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="assets/svgmodulos/Monitoramento.png" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <div class="trainding-slide-content-bottom">
                                        <h2 class="nome-modulo">Monitoramento</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide End -->
                            <!-- Slide Start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="assets/svgmodulos/Planejamentos.png" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <div class="trainding-slide-content-bottom">
                                        <h2 class="nome-modulo">Planejamento</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide End -->
                            <!-- Slide Start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="assets/svgmodulos/ServicosePosobra.png" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <div class="trainding-slide-content-bottom">
                                        <h2 class="nome-modulo">Serviços e Pós Obra</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide End -->
                        </div>

                        <div class="tranding-slider-control">
                            <div class="swiper-button-prev slider-arrow">
                                <ion-icon name="arrow-back-outline"></ion-icon>
                            </div>
                            <div class="swiper-button-next slider-arrow">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="duvidas">

        </div>
        
        <div class="contatos">

        </div>

    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" />
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    
    <script src="js/painel.js"></script>

</body>
</html>