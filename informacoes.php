<!DOCTYPE html>
<html lang="en">
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
        <section class="col-lg-12 col-md-12 col-sm-12 row mx-auto">
            <article>
                <h1 class="big-title">O que são as vacinas</h1>
                <p class="text-lora">As vacinas são a melhor opção na luta contra doenças infecciosas que atacam nosso organismo, elas são criadas a partir de partículas do próprio vírus ou bactéria, sendo ele inativo ou enfraquecido.
                Quando nosso organismo é atacado por esses agentes agressores, nosso sistema de defesa (imunológico) dispara uma reação em cadeia para impedir a ação desses agentes. Mas nem sempre essa reação é bem-sucedida e, quando isso ocorre, ficamos doentes.
                O que as vacinas fazem é 'fingir' que são agentes infecciosos de forma a estimular a produção de nossas defesas, com anticorpos específicos contra o vírus ou bacteria. Dessa forma é ensinado para nosso corpo uma forma eficaz de se defender e quando um ataque de verdade acontece nosso sistema imunológico utiliza a sua memória de defesa e limita o ataque do "inimigo" auxiliando em nossa melhora.
                </p>
            </article>    
        </section>

        <!--Section com links externos para outras informações-->
        <div class="row mx-auto">
            <div class="col-lg-4 col-md-4 col-sm-12 mx-auto">
                <a href="curiosity.php">
                <section class="external-news">
                    <img class="img-fluid" src="img/imagem-informacoes/imagem-curiosidades.png" alt="Imagem curiosidades">
                
                <div class="external-content texto-externo">
                        <h3>veja também</h3>
                        <p>conheça mais sobre pandemias</p>
                    </div>  
                </section>
                </a>  
             </div>

             <div class="col-lg-4 col-md-4 col-sm-12 mx-auto">
                <a href="#">
                <section class="external-news">
                    <img class="img-fluid" src="img/imagem-informacoes/img-virus.png" alt="Imagem virus">
                
                <div class="external-content texto-externo">
                        <h3>veja também</h3>
                        <p>Conheça as variantes do vírus da covid 19</p>
                    </div>  
                </section>
                </a>  
             </div>

             <div class="col-lg-4 col-md-4 col-sm-12 mx-auto">
                <a href="#">
                <section class="external-news">
                    <img class="img-fluid" src="img/imagem-informacoes/img-tosse.png" alt="Imagem curiosidades">
                
                <div class="external-content texto-externo">
                        <h3>veja também</h3>
                        <p>Os principais sintomas da covid</p>
                    </div>  
                </section>
                </a>  
            </div>
         </div>


         <!--Seção com mais informações sobre os tipos de vacinas-->
        
         <section class="mx-auto row col-lg-12 col-md-12 col-sm-12">
            <h1 class="big-title">Tipos de vacinas</h1>
                <p class="text-lora">Existem diversas formas de desenvolvimento de uma vacina, e todas elas são eficientes, algumas mais que as outras, mas todas elas cumprem bem o seu papel.</p>

            <h2 class="big-title">A tecnologia de vírus inativo</h2>
                <p class="text-lora">Usa o vírus em alguma célula ou ovos embrionados de galinha, assim o vírus passa por um processo de purificação e depois fica inativado. 
                Quando o corpo recebe a dose da vacina, o sistema imunológico entende que o patógeno está presente no organismo, e assim começa uma reação de defesa que desencadeia um desenvolvimento de anticorpos para combater o "inimigo".
                
                </p>
                <p class="text-lora"> Essa tecnologia é usada no desenvolvimento das vacinas Sinovac/Coronavac do instituto Butantan.</p>

            <h2 class="big-title">A vacina de vetor viral não replicante</h2>
                <p class="text-lora">O desenvolvimento dessa vacina é feito de forma em que os pesquisadores inserem os genes que codificam a produção da proteína "S" (que liga o coronavírus as nossas células) dentro de um vírus que não causa doença em humanos e ele também é incapaz de se reproduzir dentro do organismo.
                Após a vacinação, o vetor viral entra na célula e a proteína "S" se transforma em uma molécula de RNA mensageiro (mRNA), que leva com ela instruções para produzir a proteína "S", que é detectado pelo sistema imunológico e desencadeia a produção de anticorpos.
                </p>
                <p class="text-lora"> Essa tecnologia é usada no desenvolvimento das vacinas Oxford/AstraZeneca/Fiocruz,  Janssen e Sputnik V.</p>

            <h2 class="big-title">A vacina de RNA-mensageiro</h2>
                <p class="text-lora">É uma forma de desenvolvimento mais barata e rápida 
                em que os imunizantes são produzidos a partir da replicação de sequências de RNA por meio de engenharia genética. O mRNA(RNA-mensageiro) assume a forma da proteína spike, que é especifica do vírus da Covid-19 que tem a função de facilitar a invasão de células humanas, porém essa "cópia" não é prejudicial como o vírus verdadeiro, mas é sulficiente para dar início a uma reação do nosso sistema imunológico produzindo uma defesa sólida no organismo.
                </p>
                <p class="text-lora"> Essa tecnologia é usada no desenvolvimento das vacinas Pfizer/BioNTech e Moderna.</p>
         </section>

        <!-- MAIN FOOTER ======================= -->
        <?php include 'footer-main.php' ?>

        <!-- JS BOOTSTRAP 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

        </main>
</body>
</html>