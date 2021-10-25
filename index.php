<!DOCTYPE html>
<html lang="pt-br">

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

    <title>InTime News - Portal de Notícias</title>

</head>

<body>

    <!-- MAIN NAVBAR ======================= -->
    <?php include 'navbar-main.php'; ?>

    <!-- PAGE CONTENT -->
    <main class="container-xxl">
        <!-- ================
        section-news -->
        <section class="section-news-content mx-auto row">
            <div class="initial-news col-sm-12 col-md-12 col-lg-6">
                <article class="article-news">
                    <header class="news-header">
                        <h1>Notícia principal da pag</h1>
                        <div class="news-img row">
                            <img src="img/just_example/news-250x250.jpg" class="img-fluid col-12" alt="Imagem da notícia principal">
                            <span class="under-img-text col">25/10/2021</span>
                            <span class="under-img-text col">tempo de leitura: 5 minutos</span>
                        </div>
                    </header>
                    <p class="news-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum fugiat dolore sapiente vitae doloribus.
                    </p>
                </article>
            </div>
            
            <div class="aside-news col-sm-12 col-md-12 col-lg-6 row">
                <article class="article-news col-12">
                    <header class="news-header">
                        <h2>Notícia principal da pag</h2>
                        <div class="news-img row">
                            <img src="img/just_example/news-250x250.jpg" class="img-fluid col-12" alt="Imagem da notícia principal">
                            <span class="under-img-text col">25/10/2021</span>
                            <span class="under-img-text col">tempo de leitura: 5 minutos</span>
                        </div>
                    </header>
                    <p class="news-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum fugiat dolore sapiente vitae doloribus.
                    </p>
                </article>

                <article class="article-news col-sm-12 col-md-6 col-lg-6">
                    <header class="news-header">
                        <h2>Notícia principal da pag</h2>
                        <div class="news-img row">
                            <img src="img/just_example/news-250x250.jpg" class="img-fluid col-12" alt="Imagem da notícia principal">
                            <span class="under-img-text col">25/10/2021</span>
                            <span class="under-img-text col">tempo de leitura: 5 minutos</span>
                        </div>
                    </header>
                    <p class="news-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum fugiat dolore sapiente vitae doloribus.
                    </p>
                </article>

                <article class="article-news col-sm-12 col-md-6 col-lg-6">
                    <header class="news-header">
                        <h2>Notícia principal da pag</h2>
                        <div class="news-img row">
                            <img src="img/just_example/news-250x250.jpg" class="img-fluid col-12" alt="Imagem da notícia principal">
                            <span class="under-img-text col">25/10/2021</span>
                            <span class="under-img-text col">tempo de leitura: 5 minutos</span>
                        </div>
                    </header>
                    <p class="news-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum fugiat dolore sapiente vitae doloribus.
                    </p>
                </article>
            </div>
        </section>
        <!-- section-news
        ================ -->

        <!-- <section class="section-personal-pages">
            <h2>Informações gerais</h2>
            <div class="personal-page-card row">
                <div class="col-6">
                    <img class="img-fluid" src="img/just_example/news-250x250.jpg" alt="Imagem das paginas pessoais">
                </div>
                <div class="personal-page-text col-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque nihil autem ab quod impedit velit dicta ducimus, laudantium.</p>
                </div>
                <div class="under-card col-12 row">
                    <span class="col">25/10/2021</span><span class="col">João Victor Garcia</span>
                </div>
            </div>
        </section> -->

    </main>
    

    <!-- MAIN FOOTER ======================= -->
    <?php include 'footer-main.php' ?>

    <!-- JS BOOTSTRAP 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>