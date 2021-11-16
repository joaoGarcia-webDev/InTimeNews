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
    <link rel="stylesheet" href="css/custom-variants.css">

    <title>InTime News - Variantes da COVID-19</title>

</head>

<body>

    <!-- MAIN NAVBAR ======================= -->
    <?php include 'navbar-main.php'; ?>

    <!-- PAGE CONTENT -->
    <main class="container-xxl">
        
        <article class="row">
            <h1 class="big-title">Variantes da COVID-19</h1>

            <section class="variants-card col-12 col-lg-6">
                <a href="#" class="card single-variant">
                    <img src="img/just_example/virus.png" alt="Virus image">
                    <h2>Variante Alfa</h2>
                    <small>B.1.1.7</small>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quas voluptatem similique minima, molestiae maxime itaque exercitationem mollitia quia dolor aspernatur consequatur tempora numquam neque odit aut laborum provident nobis.</p>
                </a>
                <a href="#" class="card single-variant">
                    <img src="img/just_example/virus.png" alt="Virus image">
                    <h2>Variante Beta</h2>
                    <small>B.1.351</small>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quas voluptatem similique minima, molestiae maxime itaque exercitationem mollitia quia dolor aspernatur consequatur tempora numquam neque odit aut laborum provident nobis.</p>
                </a>
                <a href="#" class="card single-variant">
                    <img src="img/just_example/virus.png" alt="Virus image">
                    <h2>Variante Gama</h2>
                    <small>P.1</small>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quas voluptatem similique minima, molestiae maxime itaque exercitationem mollitia quia dolor aspernatur consequatur tempora numquam neque odit aut laborum provident nobis.</p>
                </a>
                <a href="#" class="card single-variant">
                    <img src="img/just_example/virus.png" alt="Virus image">
                    <h2>Variante Delta</h2>
                    <small>B.1.617.2</small>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quas voluptatem similique minima, molestiae maxime itaque exercitationem mollitia quia dolor aspernatur consequatur tempora numquam neque odit aut laborum provident nobis.</p>
                </a>
            </section>

            <section class="aside-content col-12 col-lg-4 offset-lg-2">
                <div class="bg-dark-blue col-md-5 col-lg-12">
                    <h3>Ultimas notícias</h3>
                    <div class="content-news">
                        <img src="img/just_example/news-250x250.jpg" width="75px" height="75px"alt="">
                        <div class="text-content">
                            <h4>Notícia CPI</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="content-news">
                        <img src="img/just_example/news-250x250.jpg" width="75px" height="75px"alt="">
                        <div class="text-content">
                            <h4>Notícia CPI</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="content-news">
                        <img src="img/just_example/news-250x250.jpg" width="75px" height="75px"alt="">
                        <div class="text-content">
                            <h4>Notícia CPI</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-dark-blue col-md-5 col-lg-12">
                    <h3>Taxa de Infectados</h3>
                    <p>Variante A</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                    <p>Variante A</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                    <p>Variante A</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                    <p>Variante A</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                </div>
            </section>
        </article>

    </main>
    

    <!-- MAIN FOOTER ======================= -->
    <?php include 'footer-main.php' ?>

    <!-- JS BOOTSTRAP 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>