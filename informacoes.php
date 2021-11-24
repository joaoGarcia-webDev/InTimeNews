<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FAVICON -->
        <link rel="stylesheet" href="">
        <!-- BOOTSTRAP 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- BOOTSTRAP ICONS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

        <!-- CUSTOM CSS -->
        <link rel="stylesheet" href="css/main-page.css">
        <link rel="stylesheet" href="css/info.css">


      <title>Informaçoes</title>
  </head>
<body>
        <!-- MAIN NAVBAR ======================= -->
        <?php include 'navbar-main.php'; ?>

        <!-- PAGE CONTENT -->
        <main class="container-xxl">

        <!--Section com conteúdo-->

        <section>
            <div id="carouselInfos" class="carousel carousel-dark slide" data-bs-interval="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselInfos" data-bs-target="#conteudo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselInfos" data-bs-target="#conteudo" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselInfos" data-bs-target="#conteudo" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/imagem-informacoes/img-5-slides-1200.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption carrosel">
                            <h2>VACINAS</h2>
                        </div>
                        </div>
            
                        <div class="carousel-item">
                        <img src="img/imagem-informacoes/img-6-slides-slides.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h2>AGRADECIMENTOS </h2>
                        </div>
                        </div>
            
                        <div class="carousel-item">
                        <img src="img/imagem-informacoes/img-4-slides-1200.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h2>DIFERENTES VACINAS</h2>
            
                        </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselInfos" data-bs-target="#conteudo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselInfos" data-bs-target="#conteudo" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
        </section>


        </main>

        <!-- MAIN FOOTER ======================= -->
        <?php include 'footer-main.php' ?>

        <!-- JS BOOTSTRAP 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>