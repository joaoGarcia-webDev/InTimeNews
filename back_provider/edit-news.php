<?php
    session_start();

    if(isset($_GET['file'])){
        $ext = pathinfo( $_GET['file'], PATHINFO_EXTENSION );
        $ext = strtolower($ext);

        if (strstr('.txt', $ext)) {
            $file = file('../database/cpi_covid/'.$_GET['file']);
            $_SESSION['fileCont'] = $file;
            var_dump($_SESSION['fileCont']);
            header('Location: ../adm-page.php');
        }
    } else {
        header('Location: ../adm-page.php');
    }
    
?>