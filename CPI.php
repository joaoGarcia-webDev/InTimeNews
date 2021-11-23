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
            <h1 class="big-title">Ultimas notícias da CPI da Covid-19</h1>
            <div class="initial-news col-sm-12 col-md-12 col-lg-6">
                <a href="https://g1.globo.com/politica/cpi-da-covid/noticia/2021/10/26/cpi-da-covid-aprova-relatorio-atribui-nove-crimes-a-bolsonaro-e-pede-80-indiciamentos.ghtml">
                    <section class="section-news">
                        <img src="img/cpi-covid/renam-calheiros-relatorio-cpi-covid.png" class="img-fluid" alt="Imagem de Renam Calheiros durante a reunião da CPI da COVID-19, notícia principal">
                        <div class="small-text">
                            <span class="under-img-text col">26/10/2021</span>
                            <span class="under-img-text col">tempo de leitura: 5 minutos</span>
                        </div>
                        <header class="news-header">
                            <h2 class="big-title">É aprovado relatório que pede indiciamento de Bolsonaro e outras 80 pessoas</h2>
                            <p class="text-lora news-text">
                                "Documento de 1.289 páginas, elaborado ao longo de seis meses, será enviado a órgãos de investigação. Texto inclui projetos para punir fake news e criar pensão para órfãos da pandemia."
                            </p>
                        </header>
                    </section>
                </a>
            </div>

            <div class="aside-news col-sm-12 col-md-12 col-lg-6">
                <a href="https://ultimosegundo.ig.com.br/politica/2021-11-22/moraes-nega-quebra-de-sigilo-de-bolsonaro-ja-autorizada-pela-cpi-da-covid.html">
                    <section class="section-news black col-12">
                        <img src="img/cpi-covid/bolsonaro.jpg" class="img-fluid col-12" alt="Imagem da notícia principal">
                        <div class="small-text">
                            <span class="under-img-text col">22/11/2021</span>
                            <span class="under-img-text col">tempo de leitura: 5 minutos</span>
                        </div>
                        <header class="news-header">
                            <h2>Moraes nega quebra de sigilo de Bolsonaro já autorizada pela CPI da Covid</h2>
                            <p class="text-lora news-text" style="color: #f0f0f0">
                                No documento aprovado pelos senadores, a CPI ainda pedia ainda para que Google, Facebook e Twitter fornecessem uma série de informações de Bolsonaro
                            </p>
                        </header>
                    </section>
                </a>
                <div class="last-news">
                    <a class="section-news col-sm-12 col-md-6" href="https://www.brasil247.com/cpicovid/senado-convocara-aras-para-saber-o-que-a-pgr-fara-com-o-relatorio-da-cpi-da-covid-diz-randolfe">
                        <section>
                            <img src="img/cpi-covid/senado.jpg" class="img-fluid col-12" alt="Imagem da notícia principal">
                            <div class="small-text">
                                <span class="under-img-text col">22/11/2021</span>
                                <span class="under-img-text col">tempo de leitura: 5 minutos</span>
                            </div>
                            <header class="news-header">
                                <h2>Senado convocará Aras </h2>
                                <p class="text-lora news-text">
                                    "Já faz um mês que entregamos o relatório da CPI sobre as pessoas que tem foro privilegiado,
                                    sobretudo o presidente. Queremos respostas!", escreveu o senador no Twitter
                                </p>
                            </header>
                        </section>
                    </a>
                    <a class="section-news col-sm-12 col-md-6" href="https://www.metropoles.com/colunas/guilherme-amado/stf-pode-decidir-este-ano-consequencia-da-cpi-da-covid-para-bolsonaro">
                        <section>
                            <img src="img/cpi-covid/STF.jpg" class="img-fluid col-12" alt="Imagem da notícia principal">
                            <div class="small-text">
                                <span class="under-img-text col">22/11/2021</span>
                                <span class="under-img-text col">tempo de leitura: 5 minutos</span>
                            </div>
                            <header class="news-header">
                                <h2>STF pode decidir este ano consequência da CPI da Covid para Bolsonaro</h2>
                                <p class="text-lora news-text">
                                    O prazo para que a PGR atue em cima das descobertas da CPI da Pandemia vai até 9 de dezembro e STF entra de recesso no dia 17
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
        cards-content -->
        <aside class="cards-content row">
            <div class="card col-sm-12 col-md-6 col-lg-3">
                <h2>Sobre Nós</h2>
                <p class="text-lora">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero facilis ipsa autem animi earum quod vel illum facere voluptatem mollitia. Maxime nemo nihil dolores earum possimus pariatur, atque itaque voluptatibus!</p>
                <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
            <div class="card col-sm-12 col-md-6 col-lg-3">
                <h2>Contato</h2>
                <p class="text-lora">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus eum excepturi necessitatibus eos ducimus sequi culpa unde odit incidunt adipisci alias perspiciatis saepe voluptas consequatur natus quis sit, impedit veniam.</p>
                <a href="#" class="btn btn-primary">Entrar em contato</a>
            </div>
            <div class="card col-sm-12 col-lg-3">
                <h3>Receba as ultimas noticías</h3>
                <p class="text-lora">Lorem ipsum dolor sit amet</p>

                <form action="#" method="post">
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Nome</label>
                        <input type="email" class="form-control" id="nameInput" placeholder="Nome do usuário">
                    </div>
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailInput" placeholder="name@example.com">
                    </div>
                    <button type="button" class="btn btn-primary">Enviar</button>
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