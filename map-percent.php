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

    <title>InTime News - Portal de Notícias</title>

</head>

<body class="bg-light">

    <!-- MAIN NAVBAR ======================= -->
    <?php include 'navbar-main.php'; ?>

    <!-- PAGE CONTENT -->
    <main class="container-xxl">
        <div class="main-content row">
            <div class="map-content col-sm-12 col-md-6">
                <h1 class="big-title">Mapa de Infectados no Brasil</h1>

                <!-- MAP CDN WITH datawrapper -->
                <iframe title="Numero de Infectados" aria-label="map" id="datawrapper-chart-1Bceo" src="https://datawrapper.dwcdn.net/1Bceo/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="656"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();
                </script>
            </div>
            <article class="article-content col-12 col-md-5 offset-md-1">
                <h2 class="big-title">Números do Brasil</h2>

                <aside class="aside-map">
                    <div class="card card-numbers my-1 bg-danger">
                        <h3>22.094.459</h3>
                        <p>Casos confirmados</p>
                    </div>
                    <div class="card card-numbers my-3 bg-success">
                        <h3>133.911.230</h3>
                        <p>Pessoas totalmente vacinadas</p>
                    </div>
                    <div class="card table-card">
                        <?php
                        function numPercent($num){
                            $num = ($num*100)/22094459;
                            return round($num,2).'%';
                        }
                        ?>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Regiões</th>
                                    <th scope="col">% Casos</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Sul</th>
                                    <td><?php echo numPercent(4303180);?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Sudeste</th>
                                    <td><?php echo numPercent(8611547);?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Centro-Oeste</th>
                                    <td><?php echo numPercent(2381434);?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Norte</th>
                                    <td><?php echo numPercent(1889833);?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Nordeste</th>
                                    <td><?php echo numPercent(4908465);?></td>
                                </tr>
                                
                            </tbody>
                        </table>
                        <span>Fonte: <a href="https://covid.saude.gov.br/">CORONAVÍRUS BRASIL</a></span>
                    </div>
                </aside>
            </article>
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