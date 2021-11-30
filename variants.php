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
    <link rel="stylesheet" href="css/custom-variants.css">

    <title>InTime News - Variantes da COVID-19</title>

</head>

<body>

    <!-- MAIN NAVBAR ======================= -->
    <?php include 'navbar-main.php'; ?>

    <!-- PAGE CONTENT -->
    <main class="container-xxl">
        
        <article class="row">
            <h1 class="big-title">Variantes da COVID-19</h1>

            <section class="variants-card col-12 col-lg-6">
                <div class="card single-variant">
                    <img src="img/just_example/virus.png" alt="Virus image">
                    <h2>Variante Alfa</h2>
                    <small>B.1.1.7</small>
                    <p> A Alfa, detectada inicialmente na Inglaterra, mostra grande capacidade de transmissão, causando novas infecções. Desta forma, “praticamente dominou o cenário nos países onde circulou, por causa da sua capacidade de replicação”. Em compensação, esta não mostrou habilidade em driblar a proteção. Essa variação do vírus já não tinha essa propriedade de resistir aos fatores de proteção, principalmente os anticorpos que a gente produz para se proteger, seja com estímulo da vacina ou da própria doença.</p>
                    <span>Fonte: <a href="https://olhardigital.com.br/2021/08/19/coronavirus/covid-19-variante-alfa-beta-gama-e-delta-conheca-todas/">Olhar Digital - Entenda a variante Alfa, Beta, Gama e Delta</a></span>
                </div>
                <div class="card single-variant">
                    <img src="img/just_example/virus.png" alt="Virus image">
                    <h2>Variante Beta</h2>
                    <small>B.1.351</small>
                    <p>Originada na África do Sul, a Beta possui características inversas, e foi a que menos se espalhou pelo mundo. Essa variante da Covid-19 possui a mesma mutação da Alfa além de outras como a K417N e a E484K. A principal preocupação dessa cepa é com a imunidade concedida pelas vacinas.</p>
                    <span>Fonte: <a href="https://olhardigital.com.br/2021/08/19/coronavirus/covid-19-variante-alfa-beta-gama-e-delta-conheca-todas/">Olhar Digital - Entenda a variante Alfa, Beta, Gama e Delta</a></span>
                </div>
                <div class="card single-variant">
                    <img src="img/just_example/virus.png" alt="Virus image">
                    <h2>Variante Gama</h2>
                    <small>P.1</small>
                    <p>A variante brasileira Gama apresenta um pouco das duas características. Ela é mais transmissível, mas nem tanto quanto a Alfa. Tem capacidade de contornar o sistema de defesa, mas não exatamente como a Beta. Essa variante foi descoberta no Brasil, em Manaus e foi responsável por uma enorme onda de casos de Covid-19 na capital do Amazonas. Possui características semelhantes a Beta, sendo mais transmissível. Todas as vacinas são eficazes contra ela com duas doses, indicam os estudos.</p>
                    <span>Fonte: <a href="https://olhardigital.com.br/2021/08/19/coronavirus/covid-19-variante-alfa-beta-gama-e-delta-conheca-todas/">Olhar Digital - Entenda a variante Alfa, Beta, Gama e Delta</a></span>
                </div>
                <div class="card single-variant">
                    <img src="img/just_example/virus.png" alt="Virus image">
                    <h2>Variante Delta</h2>
                    <small>B.1.617.2</small>
                    <p>A mais recente das variantes, originária da Índia, é mais transmissível que a cepa original. “É duas vezes mais transmissível e tem, não tanto quanto a Beta, a capacidade de contornar os nossos mecanismos de defesa”, detalha o infectologista. Com essas duas características, a mutação merece mais atenção. “A variante mostrou-se um problema por onde passou”, alerta.</p>
                    <span>Fonte: <a href="https://olhardigital.com.br/2021/08/19/coronavirus/covid-19-variante-alfa-beta-gama-e-delta-conheca-todas/">Olhar Digital - Entenda a variante Alfa, Beta, Gama e Delta</a></span>
                </div>
                <div class="card single-variant">
                    <img src="img/just_example/virus.png" alt="Virus image">
                    <h2>Variante Ômicron</h2>
                    <small>B.1.1.529</small>
                    <p>O surgimento de uma variante no novo coronavírus confirmado em regiões da África preocupa especialistas internacionais de saúde. Batizada de Ômicron - letra grega correspondente à letra “o” do alfabeto</p>
                    <p>Nos casos analisados, constatou-se que a variante é portadora de dezenas de mutações genéticas que podem afetar os índices de contágio e de letalidade. A OMS, entretanto, afirmou que ainda não há estudos suficientes para afirmar as propriedades da Ômicron, mas que já existem esforços científicos acelerados para estudar as amostras</p>
                    <span>Fonte: <a href="https://agenciabrasil.ebc.com.br/saude/noticia/2021-11/covid-19-o-que-se-sabe-ate-agora-da-variante-omicron">Agência Brasil - Covid-19: o que se sabe até agora da variante Ômicron</a></span>
                </div>
            </section>

            <aside class="aside-content col-12 col-lg-4 offset-lg-2">
                <div class="div-news col-md-5 col-lg-12">
                    <h3 class="bg-dark-blue">Ultimas notícias</h3>
                    <?php
                        include 'back_provider/lastmodified-inc.php';
                        $fileData = dirList('database/cpi_covid/', $sortOrder);
                        for ($i=0; $i < 6; $i++) { 
                            if ($i % 2 == 0) {
                                $fileName[] = $fileData[$i];
                                $file = file('database/cpi_covid/'.$fileData[$i]);
                                $fileInformation[] = $file[0];
                                $fileInformation[] = $file[1];
                                $fileInformation[] = $file[2];
                            }
                        }
                    ?>
                    <div class="content-news">
                        <a href="#?=<?php echo $fileName[0]?>" class="text-content">
                            <h4 class="big-title"><?php echo $fileInformation[1]; ?></h4>
                            <p><?php echo implode(' ', array_slice(str_word_count($fileInformation[2], 2), 0, 15)).'...'; ?></p>
                        </a>
                    </div>
                    <div class="content-news">
                        <a href="#?=<?php echo $fileName[1]?>" class="text-content">
                            <h4 class="big-title"><?php echo $fileInformation[4]; ?></h4>
                            <p><?php echo implode(' ', array_slice(str_word_count($fileInformation[5], 2), 0, 15)).'...'; ?></p>
                        </a>
                    </div>
                    <div class="content-news">
                        <a href="#?=<?php echo $fileName[2]?>" class="text-content">
                            <h4 class="big-title"><?php echo $fileInformation[7]; ?></h4>
                            <p><?php echo implode(' ', array_slice(str_word_count($fileInformation[8], 2), 0, 15)).'...'; ?></p>
                        </a>
                    </div>
                </div>

                <div class="div-news col-md-5 col-lg-12">
                    <h3 class="bg-dark-blue">Taxa de Transmissão</h3>
                    <p>Variante Alfa</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">55%</div>
                    </div>
                    <p>Variante Beta</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">40%</div>
                    </div>
                    <p>Variante Gama</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div>
                    <p>Variante Delta</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">80%</div>
                    </div>
                    <p>Variante Ômicron</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%</div>
                    </div>
                </div>
            </aside>
        </article>

    </main>
    

    <!-- MAIN FOOTER ======================= -->
    <?php include 'footer-main.php' ?>

    <!-- JS BOOTSTRAP 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>