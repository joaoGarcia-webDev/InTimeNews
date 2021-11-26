<?php
    session_start();

    if(isset($_GET['file'])){
        $ext = pathinfo( $_GET['file'], PATHINFO_EXTENSION );
        $ext = strtolower($ext);

        if (strstr('.txt', $ext)) {
            $file = file('../database/cpi_covid/'.$_GET['file']);
            $_SESSION['fileCont'][0] = $file;
            $_SESSION['fileCont'][1] = $_GET['file'];
            var_dump($_SESSION['fileCont']);
            header('Location: ../adm-page.php');
        }
    } else if (isset($_POST['file-title']) && isset($_POST['file-text']) && isset($_POST['file-img'])) {

        $file = file('../database/cpi_covid/'.$_SESSION['fileCont'][1]);
        fopen($file, 'w');
        
        var_dump($file);

    } else {
        header('Location: ../adm-page.php');
    }
    
?>