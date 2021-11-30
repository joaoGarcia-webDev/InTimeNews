<?php
session_start();

if (isset($_POST['email']) && $_POST['email'] != '' || $_SESSION['admloged']) {
    $_SESSION['admloged'] = true;
} else { $_SESSION['admloged'] = false; }


if ($_SESSION['admloged']) {
?>

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
                    <a href="index.php" class="navbar-brand">
                        <img src="img/svg/main_logo_v0.svg" class="img-fluid" alt="Logo principal do portal de notícias InTimeNews">
                    </a>
                    <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>

            <!-- INSIDE INITIAL CONTENT -->
            <section class="inside-content row">
            <?php
                if (isset($_SESSION['fileCont']) && $_SESSION['fileCont'] != '') {
                    $fileEdit = $_SESSION['fileCont'];
                    unset($_SESSION['fileCont']);
                    
                    ?>
                    <h1 class="big-title">Revisão/Manutenção da notícia</h1>
                    <section class="form-edit my-3 col-12 col-md-12 col-lg-6">
                        <form action="back_provider/edit-news.php" method="post" enctype="multipart/form">

                            <div class="content-file-form">
                                <div class="my-3 title-file">
                                    <label for="fileTitle" class="form-label">Titulo da Notícia</label>
                                    <!-- RECEBE O TITULO DO ARQUIVO -->
                                    <input name="file-title" class="form-control form-control-lg" id="fileTitle" type="text" placeholder="Titulo" value="<?php echo $fileEdit[1]; ?>">
                                </div>    
                                <div class="my-3 text-file">
                                    <label for="fileText" class="form-label">Conteudo da Notícia</label>
                                    <!-- RECEBE O CONTEUDO DO ARQUIVO -->
                                    <textarea name="file-text" class="form-control" id="fileText" rows="10"><?php
                                            $cont = 0;
                                            foreach ($fileEdit as $row) {
                                                if ($cont > 1) {
                                                    echo $row;
                                                }                                            $cont++;
                                            }
                                        ?></textarea>
                                </div>
                            </div>
                            <!-- RECEBE A IMAGEM DA PRIMEIRA LINHA -->
                            <div class="my-3 img-file">
                                <img src="<?php echo 'img/'.$fileEdit[0] ?>" class="img-fluid" alt="Imagem atual da notícia que esta selecionada para revisão">
                                <label for="formFile" class="form-label">Adicione uma nova imagem</label>
                                <input name="file-img" class="form-control" type="file" id="formFile">
                            </div>
                            <button type="submit" class="btn btn-primary">Salvar as alterações</button>
                        </form>
                    </section>

            <?php } 
            else { 
                if (isset($_SESSION['message'])) {
                echo "<div class='response-message'>
                    <h3 class'big-title'>".$_SESSION['message']."</h3>
                </div>";
                unset($_SESSION['message']);
                    }
                ?>

                <h1 class="big-title">Ultimas notícias da página</h1>
                <div class="card-content col-12 col-md-6 col-lg-4">

                <!-- GET ALL NEWS FILES TO GENERATE CARDS -->
                <?php
                    include 'back_provider/lastmodified-inc.php';
                    $fileDatas = dirList('database/cpi_covid/', $sortOrder);

                    for ($i=0; $i < count($fileDatas); $i += 2) {

                        $fileName = "?file=".$fileDatas[$i];
                        $fileTitle = file('database/cpi_covid/'.$fileDatas[$i]);
                        $fileTitle = $fileTitle[1];
                        $fileData = date ("d/m/Y H:i:s.", $fileDatas[$i+1]);
                        ?>
                        
                        <div class="card news">
                            <div class="text-content">
                                <p>notícias CPI COVID-19</p>
                                <h2><?php echo $fileTitle; ?></h2>
                                <small><?php echo $fileData; ?></small>
                            </div>
                            <a href="back_provider/edit-news.php<?php echo $fileName;?>">
                                <i class="bi bi-pencil-fill"></i>
                            </a>
                        </div>

                <?php
                    }
                ?>

                    
                </div>
                <div class="size-content col-12 col-md-6 col-lg-4">
                    <div class="card size justify-content-center">
                        <h2>Portal de Notícias em MB</h2>
                        <div class="percent">
                            <svg>
                                <circle cx="70" cy="70" r="70"></circle>
                                <circle cx="70" cy="70" r="70"></circle>
                            </svg>
                            <div class="number">
                                <!-- MELHORAR A CONTAGEM DE BYTES -->
                                <?php
                                    $size = 0;
                                    $path    = './';
                                    $files = scandir($path);
                                    $files = array_diff(scandir($path), array('.', '..'));
                                    foreach($files as $file){
                                        $size += filesize($file);
                                    }
                                    echo "<h3>". round(($size/30000), 2). "<span>MB</span></h3>";
                                ?>
                            </div>
                        </div>
                        <div class="img-folder">
                            <?php
                            function folderSize($dir)
                            {
                                $size = 0;

                                foreach (glob(rtrim($dir, '/').'/*', GLOB_NOSORT) as $each) {
                                    $size += is_file($each) ? filesize($each) : folderSize($each);
                                }
                            
                                return round(($size/1000));
                            }

                            echo "<i class='bi bi-image'></i><span>".folderSize('img/'). "MB</span>";
                            ?>
                            
                        </div>               
                    </div>
                </div>
            <?php } ?>
            </section>


        </main>
    </div>
    <!-- JS BOOTSTRAP 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>

<?php } else{ $_SESSION['error'] = "<p class='text-danger'>Faça o login antes de entrar na pagina de administrador!</p>"; header('Location: back_provider/adm-page-login.php'); }?>