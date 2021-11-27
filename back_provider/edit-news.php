<?php
    session_start();

    if(isset($_GET['file'])){
        $ext = pathinfo( $_GET['file'], PATHINFO_EXTENSION );
        $ext = strtolower($ext);

        if (strstr('.txt', $ext)) {
            $file = file('../database/cpi_covid/'.$_GET['file']);
            $_SESSION['fileCont'] = $file;
            $_SESSION['nameFile'] = $_GET['file'];
            header('Location: ../adm-page.php');
        }
    } else if (isset($_POST['file-title']) && isset($_POST['file-text']) && isset($_POST['file-img'])) {

        $file = '../database/cpi_covid/'.$_SESSION['nameFile'];

        if ($_POST['file-img'] == '') {
            $img = fgets(fopen($file, 'r'));
            var_dump($img);
        } else {
            $img = 'cpi-covid/'.$_POST['file-img'].PHP_EOL;
        }
        $handle = fopen($file, 'w');

        fwrite($handle,$img);
        fwrite($handle,$_POST['file-title'].PHP_EOL);
        fwrite($handle,$_POST['file-text'].PHP_EOL);

        if (fclose($handle)) {
            $_SESSION['message'] = "Notícia alterada com sucesso.";
            header('Location: ../adm-page.php');
        }

    } else {
        $_SESSION['message'] = "Erro durante a operação, tente novamente mais tarde...";
        header('Location: ../adm-page.php');
    }
    
?>