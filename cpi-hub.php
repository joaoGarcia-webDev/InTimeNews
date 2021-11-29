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
    <link rel="stylesheet" href="css/cpi.css">

    <title>InTime News - Portal de Notícias</title>

</head>

<body class="bg-light">

    <!-- MAIN NAVBAR ======================= -->
    <?php include 'navbar-main.php'; ?>

    <!-- PAGE CONTENT -->
    <main class="container-lg">
        <!-- ================
        article-news -->
        <article>

            <h1 class="big-title mb-5">Ultimas Notícias da CPI da COVID-19</h1>
            <section class="section-news-cpi my-3">
                <a href="cpi-news.php" class="row">
                    <img class="img-fluid col-12 col-md-6" src="img/cpi-covid/renam-calheiros-relatorio-cpi-covid.png" alt="">
                    <div class="text-content col">
                        <h2 class="big-title">News title</h2>
                        <p class="text-lora">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eveniet veniam provident perspiciatis, cumque commodi perferendis mollitia odit eius blanditiis hic repellat debitis ab officia error dolores quia est culpa.</p>
                        <small>Publicado em 00/00/0000</small>
                    </div>
                </a>
            </section>

        </article>
        <!-- article-news
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