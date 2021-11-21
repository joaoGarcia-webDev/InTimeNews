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
    <link rel="stylesheet" href="css/custom-adm-page.css">

    <title>InTime News - Portal de Notícias</title>

</head>

<body class="bg-light">
    <div class="row">
        <aside class="aside-content col-2 col-md-1">
            <div class="icon-content">
                <a href="#" class="aside-ico active">
                    <i class="bi bi-house-door"></i>
                </a>
                <a href="#" class="aside-ico">
                    <i class="bi bi-newspaper"></i>
                </a>
                <a href="#" class="aside-ico">
                    <i class="bi bi-info-circle"></i>
                </a>
            </div>
            <div class="back-home">
                <a href="index.php" class="aside-ico">
                    <i class="bi bi-arrow-return-left"></i>
                </a>
            </div>
        </aside>

        <main class="main-adm col">
            <nav class="navbar">
                <div class="container-fluid">
                    <a class="navbar-brand">
                        <img src="img/svg/main_logo_v0.svg" class="img-fluid" alt="Logo principal do portal de notícias InTimeNews">
                    </a>
                    <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>
            <section class="inside-content row">
                <h1 class="big-title">Ultimas notícias da página</h1>
                <div class="card-content col-11 col-md-6 col-lg-4">
                    <div class="card news">
                        <div class="text-content">
                            <p>notícias antigas</p>
                            <h2>Nome Notícia</h2>
                            <small>07/11/2021</small>
                        </div>
                        <a href="#">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                    </div>
                    <div class="card news">
                        <div class="text-content">
                            <p>notícias antigas</p>
                            <h2>Nome Notícia</h2>
                            <small>07/11/2021</small>
                        </div>
                        <a href="#">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                    </div>
                </div>
                <div class="size-content col-11 col-md-6 col-lg-4">
                    <div class="card size">

                    <!-- MELHORAR A CONTAGEM DE BYTES -->
                    <?php
                        $size = 0;
                        $path    = './';
                        $files = scandir($path);
                        $files = array_diff(scandir($path), array('.', '..'));
                        foreach($files as $file){
                            $size += filesize($file);
                        }
                        echo "<h1>". $size. "</h1>";
                    ?>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <!-- JS BOOTSTRAP 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>