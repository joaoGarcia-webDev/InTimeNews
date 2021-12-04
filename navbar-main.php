<?php $mainFileName = basename($_SERVER['PHP_SELF'], '.php'); ?>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid px-md-5">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleMain" aria-controls="navbarToggleMain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="col-8 col-md-4 navbar-brand" href="index.php">
            <img class="img-fluid logo-img" src="img/svg/main_logo_v0.svg"
                alt="Logo principal do portal de notícias InTimeNews">
        </a>
        <div class="collapse navbar-collapse row" id="navbarToggleMain">
            <img src="img/just_example/banner-750x150.jpg" alt="Banner de exemplo" class="img-fluid banner">
            <ul class="navbar-nav mb-2 mb-lg-0 justify-content-end">
                <li class="nav-item ms-3 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="noticiaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Noticías</a>
                    <ul class="dropdown-menu" aria-labelledby="noticiaDropdown">
                        <li><a class="dropdown-item <?php if($mainFileName == 'cpi-hub'){echo 'disabled';}?>" href="cpi-hub.php">CPI da Covid</a></li>
                        <li><a class="dropdown-item <?php if($mainFileName == 'sint-tratam'){echo 'disabled';}?>" href="sint-tratam.php">Sintomas e Tratamentos</a></li>
                        <li><a class="dropdown-item <?php if($mainFileName == 'map-percent'){echo 'disabled';}?>" href="map-percent.php">Porcentagem de infectados</a></li>
                    </ul>
                </li>
                
                <li class="nav-item ms-3 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id=infoDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Informações gerais</a>
                    <ul class="dropdown-menu" aria-labelledby=infoDropdown">
                        <li><a class="dropdown-item <?php if($mainFileName == 'curiosity'){echo 'disabled';}?>" href="curiosity.php">Curiosidades</a></li>
                        <li><a class="dropdown-item <?php if($mainFileName == 'variants'){echo 'disabled';}?>" href="variants.php">Variantes</a></li>
                        <li><a class="dropdown-item <?php if($mainFileName == 'inovacao'){echo 'disabled';}?>" href="inovacao.php">Inovações</a></li>
                        <li><a class="dropdown-item <?php if($mainFileName == 'informacoes'){echo 'disabled';}?>" href="informacoes.php">Informações</a></li>
                    </ul>
                </li>

                <li class="nav-item ms-3 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="socialDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Area social</a>
                    <ul class="dropdown-menu" aria-labelledby="socialDropdown">
                        <li><a class="dropdown-item <?php if($mainFileName == 'auto-mail'){echo 'disabled';}?>" href="auto-mail.php">Notícias Automáticas</a></li>
                        <li><a class="dropdown-item <?php if($mainFileName == 'contact'){echo 'disabled';}?>" href="contact.php">Contato</a></li>
                        <li><a class="dropdown-item <?php if($mainFileName == 'about'){echo 'disabled';}?>" href="about.php">Quem somos</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item <?php if($mainFileName == 'normas'){echo 'disabled';}?>" href="normas.php">Normas de uso</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>