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
        cards-content -->
        <div class="card">
        <h2 class="text-title-curiosity btn-primary">CURIOSIDADES</h2>
        </div>
        <br><br>
        <h5 class="text-title-curiosity">Durante a pandemia na qual vivemos, surgiram diversas curiosidades, as quais
            com o tempo elas foram sendo explicadas. Pudemos perceber que no início muitos foram pesquisar sobre pandemias
            e foi dada uma certa atenção a gripe espanhola que também chegou a atingir o Brasil, outras dúvidas também
            foram surgindo, como vou me proteger do Covid - 19? Qual alcool devo usar? Qualquer um serve? Por que o alcool
            70º mata o vírus? Estas dúvidas que no inicio foram frequentes hoje sabemos se não todas a maioria das respostas.
            Por tanto trago algumas curiosidades dobre o assunto:</h5><br><br><br>


        <aside class="cards-content row">
            <div class="card col-sm-12 col-md-6 col-lg-3">
                <h2>10 curiosidades sobre o Covid-19 Que talves você não sabe</h2>
<!--                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero facilis ipsa autem animi earum quod vel illum facere voluptatem mollitia. Maxime nemo nihil dolores earum possimus pariatur, atque itaque voluptatibus!</p>-->
                <a href="ten_curiosity.php" class="btn btn-primary">Saiba mais</a>
            </div>
            <div class="card col-sm-12 col-md-6 col-lg-3">
                <h2>As 5 maiores pandemias. Sim, a pandemia que vivemos não foi a única</h2>
<!--                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus eum excepturi necessitatibus eos ducimus sequi culpa unde odit incidunt adipisci alias perspiciatis saepe voluptas consequatur natus quis sit, impedit veniam.</p>-->
                <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
            <div class="card col-sm-12 col-lg-3">
                <h3>Gripe espanhola X Covid-19
                    quais as suas igualdades</h3>
<!--                <p>Lorem ipsum dolor sit amet</p>-->
                <a href="#" class="btn btn-primary">Saiba mais</a>

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