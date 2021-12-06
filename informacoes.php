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
        <link rel="stylesheet" href="css/info.css">


      <title>Informaçoes</title>
  </head>
<body class="bg-ligth">
        <!-- MAIN NAVBAR ======================= -->
        <?php include 'navbar-main.php'; ?>

        <!-- PAGE CONTENT -->
        <main class="container-xxl">

        <!--Section com conteúdo-->
        <section class="row col-lg-12 col-md-12 col-sm-12 ">
            <article class="col-lg-12 col-md-12 col-sm-12">
                <h1 class="big-title">O que são as vacinas</h1>
                <p class="text-lora">A pandemia da covid-19 transformou nossa forma de viver, trouxe a nós uma realidade de máscaras e álcool gel. Nesse tempo muitas pessoas foram atingidas pela doença que ao todo já contaminou mais de 260 milhões de pessoas e deixou mais de 5 milhões de mortos pelo mundo todo.
                Mas a morte não é o único malefício que o vírus causa, ele também é capaz de deixar inúmeras sequelas que prejudicam a qualidade de vida pós infecção por muito tempo.
                Uma pequena parcela da população é chamada de "Assintomáticos" pois eles podem ser infectados pelo vírus e transmitilo, mas não sentem os seus sintomas.
                </p>
            </article>    
        
                
                <section class="row col-lg-12 col-md-12 col-sm-12">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <a href="vacinas.php">
                    <section class="external-news">
                        <img class="img-fluid" src="img/imagem-informacoes/imagem-curiosidades.png" alt="Imagem vacinas">
            
                    <div class="external-content texto-externo">
                            <h3>veja também</h3>
                            <p>Saiba mais vacinas contra a covid</p>
                        </div>
                    </section>
                    </a>
                 </div>

                 <div class="col-lg-4 col-md-4 col-sm-12">
                    <a href="assintomaticos.php">
                    <section class="external-news">
                        <img class="img-fluid" src="img/imagem-informacoes/image-assintomaticos.jpg" alt="Imagem assintomaticos">
            
                    <div class="external-content texto-externo">
                            <h3>veja também</h3>
                            <p>Saiba mais sobre o que são assintomáticos</p>
                        </div>
                    </section>
                    </a>
                 </div>

                 <div class="col-lg-4 col-md-4 col-sm-12">
                    <a href="sequelas.php">
                    <section class="external-news">
                        <img class="img-fluid" src="img/imagem-informacoes/img-tosse.png" alt="Imagem sequelas">
            
                    <div class="external-content texto-externo">
                            <h3>veja também</h3>
                            <p>Saiba mais quais são as sequelas da Covid</p>
                        </div>
                    </section>
                    </a>
   
                </section>

        </main>

        <!-- MAIN FOOTER ======================= -->
       
        <?php include 'footer-main.php' ?>
        

        <!-- JS BOOTSTRAP 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>