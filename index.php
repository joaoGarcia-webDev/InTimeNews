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

<body class="bg-light">

    <!-- MAIN NAVBAR ======================= -->
    <?php include 'navbar-main.php'; ?>

    <!-- PAGE CONTENT -->
    <main class="container-xxl">
        <!-- ================
        article-news -->
        <article class="article-news-content mx-auto row">
            <h1 class="big-title">Ultimas Notícias</h1>

            <?php 
                include 'back_provider/lastmodified-inc.php';
                $fileData = dirList('database/cpi_covid/', $sortOrder);
                for ($i=0; $i < 8; $i++) { 
                    if ($i % 2 == 0) {
                        $fileName[] = $fileData[$i];
                    }
                }
            ?>

            <div class="initial-news col-sm-12 col-md-12 col-lg-6">
                <a href="#?=<?php echo $fileName[1] ?>">
                    <section class="section-news">
                        <img src="img/cpi-covid/renam-calheiros-relatorio-cpi-covid.png" class="img-fluid" alt="Imagem de Renam Calheiros durante a reunião da CPI da COVID-19, notícia principal">
                        <div class="small-text">
                            <span class="under-img-text col">26/10/2021</span>
                            <span class="under-img-text col">tempo de leitura: 5 minutos</span>
                        </div>
                        <header class="news-header">
                            <h2 class="big-title">É aprovado relatório que pede indiciamento de Bolsonaro e outras 77 pessoas</h2>
                            <p class="text-lora news-text">
                                O relatório final da Comissão Parlamentar de Inquérito (CPI) da Covid.
                            </p>
                        </header>
                    </section>
                </a>
            </div>

            <div class="aside-news col-sm-12 col-md-12 col-lg-6">
                <a href="#?=<?php echo $fileName[2] ?>">
                    <section class="section-news black col-12">
                        <img src="img/cpi-covid/grafico-casos-confirmados.png" class="img-fluid col-12" alt="Imagem do grafico entre os casos confirmados do brasil e seu crescimento">
                        <div class="small-text">
                            <span class="under-img-text col">15/11/2021</span>
                            <span class="under-img-text col">tempo de leitura: 5 minutos</span>
                        </div>
                        <header class="news-header">
                            <h2>Os alertas da quarta onda de COVID-19</h2>
                            <p class="text-lora news-text">
                                Com o surto de casos de Covid-19 em vários países da Europa, China e Rússia, a Organização Mundial da Saúde (OMS) afirmou nesta segunda-feira (22) que o mundo está entrando em uma quarta onda da pandemia do novo coronavírus.
                            </p>
                        </header>
                    </section>
                </a>
                <div class="last-news">
                    <a class="section-news col-sm-12 col-md-6" href="?=<?php echo $fileName[0] ?>">
                        <section>
                            <img src="img/cpi-covid/brasil-supera-eua.png" class="img-fluid col-12" alt="Imagem de uma vacina em um fundo preto">
                            <div class="small-text">
                                <span class="under-img-text col">18/11/2021</span>
                                <span class="under-img-text col">tempo de leitura: 5 minutos</span>
                            </div>
                            <header class="news-header">
                                <h2>Brasil supera EUA em taxa de vacinados</h2>
                                <p class="text-lora news-text">
                                    Já são 59,9% de brasileiros totalmente imunizados contra o coronavírus
                                </p>
                            </header>
                        </section>
                    </a>
                    <a class="section-news col-sm-12 col-md-6" href="?=<?php echo $fileName[3] ?>">
                        <section>
                            <img src="img/cpi-covid/brasil-taxa-mortes.jpg" class="img-fluid col-12" alt="Imagem proxima de uma lapide cheio de flores">
                            <div class="small-text">
                                <span class="under-img-text col">18/11/2021</span>
                                <span class="under-img-text col">tempo de leitura: 5 minutos</span>
                            </div>
                            <header class="news-header">
                                <h2>Brasil tem salto de 15% em taxa de mortes</h2>
                                <p class="text-lora news-text">
                                    País registrou cerca de 195,5 mil mortes a mais que em 2019, a maior alta histórica, a maioria de idosos.
                                </p>
                            </header>
                        </section>
                    </a>
                </div>
            </div>
        </article>
        <!-- article-news
        ================ -->

        <!-- ================
        personal-pages -->
        <section class="pages-content mx-auto row">
            <h2 class="big-title">Informações Gerais</h2>
            <div class="col-12 col-lg-6">
                <div class="initial-page">
                    <img src="img/curiosidade/curiosidade.jpg" class="img-fluid col-12" alt="Imagem da seção de curiosidades">
                    <div class="small-text">
                        <small>Beatriz</small>
                        <small>18/11/2021</small>
                    </div>
                    <div class="text-content">
<!--                        <h2 class="text-curiosity">Curiosidades</h2>-->
                        <p class="text-lora text-black">Para saber mais sobre o Covid <a href="curiosity.php">Clique aqui.</a> </p>
                    </div>
                </div>
            </div>
            <div class="side-pages col-12 col-lg-6">
                <div class="single-page">
                    <img src="img/just_example/news-250x250.jpg" alt="">
                    <div class="text-content">
                        <h2>personal page</h2>
                        <p class="text-lora">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, ea possimus.</p>
                        <div class="small-text"><small>Autor</small><small>13/11/2021</small></div>
                    </div>
                </div>
                <div class="single-page">
                    <img src="img/just_example/news-250x250.jpg" alt="">
                    <div class="text-content">
                        <h2>personal page</h2>
                        <p class="text-lora">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, ea possimus.</p>
                        <div class="small-text"><small>Autor</small><small>13/11/2021</small></div>
                    </div>
                </div>
                <div class="single-page">
                    <img src="img/just_example/news-250x250.jpg" alt="">
                    <div class="text-content">
                        <h2>personal page</h2>
                        <p class="text-lora">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, ea possimus.</p>
                        <div class="small-text"><small>Autor</small><small>13/11/2021</small></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- personal-pages
        ================ -->

        <!-- ================
        cards-content -->
        <aside class="cards-content row">
            <div class="card col-sm-12 col-md-6 col-lg-3">
                <h2>Sobre Nós</h2>
                <p class="text-lora my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero facilis ipsa autem animi earum quod vel illum facere voluptatem mollitia. Maxime nemo nihil dolores earum possimus pariatur, atque itaque voluptatibus!</p>
                <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
            <div class="card col-sm-12 col-md-6 col-lg-3">
                <h2>Contato</h2>
                <p class="text-lora my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus eum excepturi necessitatibus eos ducimus sequi culpa unde odit incidunt adipisci alias perspiciatis saepe voluptas consequatur natus quis sit, impedit veniam.</p>
                <a href="#" class="btn btn-primary">Entrar em contato</a>
            </div>
            <div class="card col-sm-12 col-lg-3">
                <h3>Receba as ultimas noticías</h3>
                <p class="text-lora my-4">Lorem ipsum dolor sit amet</p>

                <form action="#" method="post">
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Nome</label>
                        <input type="email" class="form-control" id="nameInput" placeholder="Nome do usuário">
                    </div>
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailInput" placeholder="name@example.com">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </aside>
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