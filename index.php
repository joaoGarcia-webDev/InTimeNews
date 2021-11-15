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
        article-news -->
        <article class="article-news-content mx-auto row">
            <h1>Ultimas Notícias</h1>
            <div class="initial-news col-sm-12 col-md-12 col-lg-6">
                <section class="section-news">
                    <img src="img/just_example/news-250x250.jpg" class="img-fluid" alt="Imagem da notícia principal">
                    <div class="small-text">
                        <span class="under-img-text col">25/10/2021</span>
                        <span class="under-img-text col">tempo de leitura: 5 minutos</span>
                    </div>
                    <header class="news-header">
                        <h2>Notícia principal da pag</h2>
                        <p class="news-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum fugiat dolore sapiente vitae doloribus.
                        </p>
                    </header>
                </section>
            </div>
            
            <div class="aside-news col-sm-12 col-md-12 col-lg-6">
                <section class="section-news col-12">
                    <img src="img/just_example/news-250x250.jpg" class="img-fluid col-12" alt="Imagem da notícia principal">
                    <div class="small-text">
                        <span class="under-img-text col">25/10/2021</span>
                        <span class="under-img-text col">tempo de leitura: 5 minutos</span>
                    </div>
                    <header class="news-header">
                        <h2>Notícia principal da pag</h2>
                        <p class="news-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum fugiat dolore sapiente vitae doloribus.
                        </p>
                    </header>
                </section>

                <div class="last-news">
                    <section class="section-news col-sm-12 col-md-6">
                        <img src="img/just_example/news-250x250.jpg" class="img-fluid col-12" alt="Imagem da notícia principal">
                        <div class="small-text">
                            <span class="under-img-text col">25/10/2021</span>
                            <span class="under-img-text col">tempo de leitura: 5 minutos</span>
                        </div>
                        <header class="news-header">
                            <h2>Notícia principal da pag</h2>
                            <p class="news-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </header>
                    </section>

                    <section class="section-news col-sm-12 col-md-6">
                        <img src="img/just_example/news-250x250.jpg" class="img-fluid col-12" alt="Imagem da notícia principal">
                        <div class="small-text">
                            <span class="under-img-text col">25/10/2021</span>
                            <span class="under-img-text col">tempo de leitura: 5 minutos</span>
                        </div>
                        <header class="news-header">
                            <h2>Notícia principal da pag</h2>
                            <p class="news-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </header>
                    </section>
                </div>
            </div>
        </article>
        <!-- article-news
        ================ -->

        <!-- ================
        personal-pages -->
        <section class="pages-content mx-auto row">
            <h1>Informações Gerais</h1>
            <div class="col-12 col-lg-6">
                <div class="initial-page">
                    <img src="img/just_example/news-250x250.jpg" alt="">
                    <div class="small-text">
                        <small>Autor</small>
                        <small>13/11/2021</small>
                    </div>
                    <div class="text-content">
                        <h2>personal page</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, ea possimus.</p>
                    </div>
                </div>
            </div>
            <div class="side-pages col-12 col-lg-6">
                <div class="single-page">
                    <img src="img/just_example/news-250x250.jpg" alt="">
                    <div class="text-content">
                        <h2>personal page</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, ea possimus.</p>
                        <div class="small-text"><small>Autor</small><small>13/11/2021</small></div>
                    </div>
                </div>
                <div class="single-page">
                    <img src="img/just_example/news-250x250.jpg" alt="">
                    <div class="text-content">
                        <h2>personal page</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, ea possimus.</p>
                        <div class="small-text"><small>Autor</small><small>13/11/2021</small></div>
                    </div>
                </div>
                <div class="single-page">
                    <img src="img/just_example/news-250x250.jpg" alt="">
                    <div class="text-content">
                        <h2>personal page</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, ea possimus.</p>
                        <div class="small-text"><small>Autor</small><small>13/11/2021</small></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- personal-pages
        ================ -->

        <!-- ================
        cards-content -->
        <section class="cards-content row">
            <div class="card col-sm-12 col-md-6 col-lg-3">
                <h2>Sobre Nós</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero facilis ipsa autem animi earum quod vel illum facere voluptatem mollitia. Maxime nemo nihil dolores earum possimus pariatur, atque itaque voluptatibus!</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card col-sm-12 col-md-6 col-lg-3">
                <h2>Contato</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus eum excepturi necessitatibus eos ducimus sequi culpa unde odit incidunt adipisci alias perspiciatis saepe voluptas consequatur natus quis sit, impedit veniam.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card col-sm-12 col-lg-3">
                <h3>Receba as ultimas noticías</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                <form action="#" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nome</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                    <button type="button" class="btn btn-primary">Primary</button>
                </form>
            </div>
        </section>
        <!-- cards-content
        ================ -->
    </main>
    

    <!-- MAIN FOOTER ======================= -->
    <?php include 'footer-main.php' ?>

    <!-- JS BOOTSTRAP 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>