<!DOCTYPE html>
<html lang="pt-BR">
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inovações</title>
   <!-- BOOTSTRAP 5 -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/main-page.css">
    <link rel="stylesheet" href="css/inov-style.css">
  
  </head>
  
<body>

  <?php include 'navbar-main.php'; ?>
    
  <main>
    <article>
      <section class="container prim">
        <div class="row">

          <section class="col-12">

            <div class="card1 sombra" >
              <div class="card-body">
                <h3 class="card-title ti">Inovações</h3>
                <p class="tx">O surgimento da pandemia afetou a vida de todos no mundo fazendo com que por proteção global governantes de seus respectivos países fizessem com que a população seguisse com isolamento em suas casas, fechando comércios, escolas, empresas e etc... Mas o mundo tinha que voltar a funcionar então essas áreas tiveram que inovar para que volte dando proteção a todos os envolvidos.</p>              </div>
              </div>
            </div>

          </section>
          
        </div>
      </section>  
        
          <!-- Link Para o conteudo -->
      <section class="container seg">
        <div class="row">

          <section class="col-sm-12 col-md-12 col-lg-6 cd1">

            <div class="maincard sombra zoom" style="width: 39rem;">
            <a href="inovacao_Escola.php">
              <img src="img/inovacao/escola-ed.png" class="imgint" alt="Uma sala de aula com alunos usando máscara.">
            </a>
              <div class="card-body">
                <h3 class="card-title">Escola</h3>
                <p class="card-text">Uma das áreas mais afetadas sem duvidas foram as escolas, com a paralização geral das escolas muitas escolas ficaram à deriva sem saber o que fazer, mas a solução foram aulas online. </p>
              </div>
            </div>

          </section>

          <section class="col-sm-12 col-md-12 col-lg-6 cd1">

            <div class="maincard sombra zoom" style="width: 39rem;">
            <a href="inovacao_Trabalho.php">
              <img src="img/inovacao/trabalho-ed.png" class="imgint" alt="...">
            </a>
              <div class="card-body">
                <h3 class="card-title">Trabalho</h3>
                <p class="card-text">Por conta da pandemia muito comércios não conseguiram manter seus negócios por muito tempo e tiveram que fechar, mas os que se renovaram para trabalhar em segurança conseguiram driblar esse problema e inovar seus negócios.</p>                   
              </div>
            </div>  

          </section>

        </div>
      </section>

      <section class="container seg">
        <div class="row">

          <section class="col-sm-12 col-md-12 col-lg-6 cd1">

            <div class="maincard sombra zoom" style="width: 39rem;">
            <a href="inovacao_Familia.php">
              <img src="img/inovacao/familia-ed.png" class="imgint" alt="...">
            </a>
              <div class="card-body">
                <h3 class="card-title">Família</h3>
                <p class="card-text">Nos tempos difíceis a família sempre é a porta para melhor ajuda, nessa pandemia não foi diferente, para se tornar o novo normal mais aceitável a família é o principal pilar para esses tempos difíceis.</p>
              </div>
            </div>

          </section>

          <section class="col-sm-12 col-md-12 col-lg-6 cd1">

            <div class="maincard sombra zoom" style="width: 39rem;">
            <a href="inovacao_Tecnologia.php">
              <img src="img/inovacao/tec-ed.png" class="imgint" alt="...">
            </a>
              <div class="card-body">
                <h3 class="card-title">Tecnologia</h3>
                <p class="card-text">Como toda crise mundial a humanidade usa essa oportunidade para evoluir e melhorar, com a pandemia não foi diferente com inovações para que o mundo não pare completamente, dando oportunidades que mudaram o mundo.</p>                   
              </div>
            </div>  

          </section>

        </div>
      </section>

    </article>
  </main>
  
    <?php include 'footer-main.php' ?>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>