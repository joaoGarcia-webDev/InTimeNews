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
    <link rel="stylesheet" href="css/variants-map-cpi.css">

    <title>InTime News - Notícias da CPI da COVID-19</title>

</head>

<body class="bg-light">

    <!-- MAIN NAVBAR ======================= -->
    <?php include 'navbar-main.php'; ?>

    <!-- PAGE CONTENT -->
    <main class="container-lg">
        <div class="row">
            <!-- ================
            article-news -->
            <article class="col-sm-12 col-md-8">

                <?php
                    include 'back_provider/lastmodified-inc.php';

                    $fileData = dirList('database/cpi_covid/', $sortOrder);
                    $cont = 0;
                    $fileContent = array();
                    $fileCont = 0;
                
                    foreach ($fileData as $data) {
                        if ($cont % 2 == 0) {
                            $fileName[] = $data;
                            $file = file('database/cpi_covid/'.$data);
                
                            $contRow = 0;
                            echo "<br>";
                
                            foreach ($file as $fileRow){
                                if ($contRow == 0) {
                                    $fileContent[$fileCont]['img'] = $fileRow;
                                    $contRow++;
                                } else if ($contRow == 1) {
                                    $fileContent[$fileCont]['title'] = $fileRow;
                                    $contRow++;
                                } else if ($contRow == 2){
                                    $fileContent[$fileCont]['subTitle'] = $fileRow;
                                    $contRow++;
                                }
                            }
                
                            $fileCont++;
                        }
                        $cont++;
                    }
                    var_dump($fileContent);


                ?> 

                <h1 class="big-title mb-5">Ultimas Notícias da CPI da COVID-19</h1>
                <?php
                $cont = 0;
                foreach ($fileContent as $content) {
                ?>

                <section class="section-news-cpi my-3">
                    <a href="cpi-news.php?file=<?php echo $fileName[$cont]; ?>" class="row">
                        <img class="img-fluid col-12 col-md-6" src="img/<?php echo $fileContent[$cont]['img']; ?>" alt="">
                        <div class="text-content col">
                            <h2 class="big-title"><?php echo $fileContent[$cont]['title']; ?></h2>
                            <p class="text-lora"><?php echo $fileContent[$cont]['subTitle']; ?></p>
                            <small>Publicado em 00/00/0000</small>
                        </div>
                    </a>
                </section>
                <?php
                $cont++;
                }
                ?>
                

            </article>
            <!-- article-news
            ================ -->      

            <!-- ================
            aside-links -->
            <aside class="col-sm-12 col-md-4">
                <form action="auto-mail.php" method="post" class="form-automail my-5 p-2">
                    
                    <label for="form-mail" class="big-title form-label">Receba as ultimas notícias</label>
                    <div class="input-btn">
                        <input type="email" name="email" class="form-control" id="form-mail" placeholder="nome@exemplo.com">
                        <button type="submit" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89.471-1.178-1.178.471L5.93 9.363l.338.215a.5.5 0 0 1 .154.154l.215.338 7.494-7.494Z"/>
                            </svg>
                        </button>
                    </div>
                </form>

                <nav class="aside-nav navbar nav p-4"> 
                    <h3 class="big-title">Informações que podem te interessar</h3>
                    <ul class="">
                        <li><a href="iformacoes.php">Informações gerais</a></li>
                        <li><a href="variants.php">Variantes da COVID</a></li>
                        <li><a href="curiosity.php">Curiosidades</a></li>
                        <li><a href="inovacao.php">Inovações da pandemia</a></li>
                    </ul>
                </nav>
            </aside>
            <!-- aside-links
            ================ -->     
        </div> 
    </main>
    

    <!-- MAIN FOOTER ======================= -->
    <?php include 'footer-main.php' ?>

    <!-- JS BOOTSTRAP 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>