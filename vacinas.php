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
        <link rel="stylesheet" href="css/vacinas.css">
        <link rel="stylesheet" href="css/assintomaticos.css">


      <title>Vacinas</title>
  </head>
<body class="bg-ligth">
        <!-- MAIN NAVBAR ======================= -->
        <?php include 'navbar-main.php'; ?>

        <!-- PAGE CONTENT -->
        <main class="container-xxl">
        
        <div class="separador-branco col-lg-12 col-md-12 col-sm-12">
            <header class="col-lg-9 col-md-9 col-sm-12 mx-auto">
                <h1 class="title-vacinas">A vacinação é talvez o momento mais importante na batalha contra uma doença que devasta a população mundial, e não devemos nunca negar à essa ferramenta de imunização.</h1>
                <h2 class="text-lora mt-3 mb-5">O Brasil já alcançou um total de 62,9% de vacinados - números tirados de "Our World In Data".</h2>
            </header>
        </div>

        <!--Section com conteúdo-->
        <section class="col-lg-12 col-md-12 col-sm-12 row mx-auto">
             <img class="mx-auto mt-5 col-lg-8 col-md-8 col-sm-12 img-fluid"src="img/imagem-informacoes/imagem-vacinas2.jpg" alt="Imagem vacinas">
             <p class="mt-0 mb-5 mx-auto col-lg-8 col-md-8 col-sm-12">Mulher com seringa: vacinas são importantes na batalha contra agentes nocívos - foto: Pixabay</p>
            <article class="mx-auto col-lg-8">
                <h2 class="big-title">O que são as vacinas</h2>
                <p class="text-lora">As vacinas são a melhor opção na luta contra doenças infecciosas que atacam nosso organismo, elas são criadas a partir de partículas do próprio vírus ou bactéria, sendo ele inativo ou enfraquecido.
                Quando nosso organismo é atacado por esses agentes agressores, nosso sistema de defesa (imunológico) dispara uma reação em cadeia para impedir a ação desses agentes. Mas nem sempre essa reação é bem-sucedida e, quando isso ocorre, ficamos doentes.
                O que as vacinas fazem é 'fingir' que são agentes infecciosos de forma a estimular a produção de nossas defesas, com anticorpos específicos contra o vírus ou bacteria. Dessa forma é ensinado para nosso corpo uma forma eficaz de se defender e quando um ataque de verdade acontece nosso sistema imunológico utiliza a sua memória de defesa e limita o ataque do "inimigo" auxiliando em nossa melhora.
                </p>
            </article>    
        </section>


         <!--Seção com mais informações sobre os tipos de vacinas-->
        <div  class="mx-auto row col-lg-12 col-md-12 col-sm-12">
         <section class="vacinas-info col-lg-8 col-md-12 col-sm-12 mx-auto">
            <h1 class=" mt-5 big-title">Tipos de vacinas</h1>
                <p class="text-lora">Existem diversas formas de desenvolvimento de uma vacina, e todas elas são eficientes, algumas mais que as outras, mas todas elas cumprem bem o seu papel.</p>

                <ul class="my-5">
                <li>  
                    <strong>Leia também:</strong> <a href="assintomaticos.php"> Assintomáticos pré-sintomáticos e sintomáticos são classificações da Organização Mundial da Saúde (OMS) para se referir às pessoas contaminadas pelo novo coronavírus.</a>
                </li> 
            </ul>

            <h2 class=" mt-5 big-title">A tecnologia de vírus inativo</h2>
                <p class="text-lora">Usa o vírus em alguma célula ou ovos embrionados de galinha, assim o vírus passa por um processo de purificação e depois fica inativado. 
                Quando o corpo recebe a dose da vacina, o sistema imunológico entende que o patógeno está presente no organismo, e assim começa uma reação de defesa que desencadeia um desenvolvimento de anticorpos para combater o "inimigo".
                </p>
                <p class="mb-5 text-lora"> Essa tecnologia é usada no desenvolvimento das vacinas Sinovac/Coronavac do instituto Butantan.</p>
            
           

            <h2 class="mt-5 big-title">A vacina de vetor viral não replicante</h2>
                <p class="text-lora">O desenvolvimento dessa vacina é feito de forma em que os pesquisadores inserem os genes que codificam a produção da proteína "S" (que liga o coronavírus as nossas células) dentro de um vírus que não causa doença em humanos e ele também é incapaz de se reproduzir dentro do organismo.
                Após a vacinação, o vetor viral entra na célula e a proteína "S" se transforma em uma molécula de RNA mensageiro (mRNA), que leva com ela instruções para produzir a proteína "S", que é detectado pelo sistema imunológico e desencadeia a produção de anticorpos.
                </p>
                <p class="mb-5 text-lora"> Essa tecnologia é usada no desenvolvimento das vacinas Oxford/AstraZeneca/Fiocruz,  Janssen e Sputnik V.</p>

            <h2 class="mt-3 big-title">A vacina de RNA-mensageiro</h2>
                <p class="text-lora">É uma forma de desenvolvimento mais barata e rápida 
                em que os imunizantes são produzidos a partir da replicação de sequências de RNA por meio de engenharia genética. O mRNA(RNA-mensageiro) assume a forma da proteína spike, que é especifica do vírus da Covid-19 que tem a função de facilitar a invasão de células humanas, porém essa "cópia" não é prejudicial como o vírus verdadeiro, mas é sulficiente para dar início a uma reação do nosso sistema imunológico produzindo uma defesa sólida no organismo.
                </p>
                <p class="text-lora"> Essa tecnologia é usada no desenvolvimento das vacinas Pfizer/BioNTech e Moderna.</p>
         </section>
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