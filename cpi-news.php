<?php 
if (!(isset($_GET['file'])) && $_GET['file'] == '') {
    header("Location: cpi-hub.php");
    exit;
}
$fileName = $_GET['file'];
if (!(file_exists('database/cpi_covid/'.$fileName))) {
    header("Location: cpi-hub.php");
    exit;
}
$file = "database/cpi_covid/".$fileName;
$fileTime = date("d/m/Y",filectime($file));
$file = file("database/cpi_covid/".$fileName);
$contRow = 0;

foreach ($file as $filerow){
    if ($contRow == 0) {
        $fileContent['img'] = $filerow;
        $contRow++;
    } else if ($contRow == 1) {
        $fileContent['title'] = $filerow;
        $contRow++;
    } else if ($contRow == 2){
        $fileContent['subTitle'] = $filerow;
        $contRow++;
    } else if ($contRow > 2){
        $fileContent[] = $filerow;
        $contRow++;
    }
}
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
    <link rel="stylesheet" href="css/variants-map-cpi.css">

    <title>InTime News - Notícias da CPI da COVID-19</title>

</head>

<body class="bg-light">

    <!-- MAIN NAVBAR ======================= -->
    <?php include 'navbar-main.php'; ?>

    <!-- PAGE CONTENT -->
    <main class="container-lg">
        <!-- ================
        article-news -->
        <article class="row">
            <header class="news-header">
                <h1 class="big-title"><?php echo $fileContent['title']; ?></h1>
                <p class="initial-text text-lora">
                    <?php echo $fileContent['subTitle']; ?>
                </p>
                <span class="mt-3"><?php echo $fileTime; ?></span>
            </header>
            <img src="img/<?php echo $fileContent['img']; ?>" alt="" class="main-img img-fluid">
            <div class="main-text mt-5">
                <?php
                    for ($i=0; $i < (count($fileContent)-4); $i++) { 
                        echo "<p>".$fileContent[$i]."</p>";
                    }
                ?>
                <a href="<?php echo $fileContent[(count($fileContent)-4)]; ?>">Fonte</a>
            </div>

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