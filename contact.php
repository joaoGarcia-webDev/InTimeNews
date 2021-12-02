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
    <link rel="stylesheet" href="css/about-mail-contact.css">

    <title>InTime News - Portal de Notícias</title>

</head>

<body class="bg-light">

    <!-- MAIN NAVBAR ======================= -->
    <?php include 'navbar-main.php'; ?>

    <!-- PAGE CONTENT -->
    <main class="container-xxl">
        <section class="row mail-content">
            <div class="text-content col-sm-12 col-md-6 col-lg-4 offset-lg-2">
                <div class="header">
                    <h1 class="big-title">Cadastre-se e receba as ultimas notícias por e-mail</h1>
                    <p class="my-4">Finalizando o cadastro você passa a receber, de forma gratuita, todas as notícias diretamente no seu e-mail, dessa forma você fica por dentro de todos os acontecimentos sobre a pandemia da COVID-19</p>
                </div>
                <div class="last-text">
                    <p>Não utilizamos essas informações para nada além do serviço prestado. Para mais informações acesse <a href="normas.php">Termos de Uso</a>.</p>
                </div>
            </div>

            <div class="form-content col-sm-12 col-md-6 col-lg-5">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" value="<?php echo $name; ?>" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email"
                        value="<?php echo $email; ?>"
                        class="form-control"
                        id="email"
                        aria-describedby="subEmail">
                        <div id="subEmail" class="form-text">As notícias serão enviadas para este e-mail</div>
                    </div>
                    <div class="mb-3">
                        <label for="select" class="form-label">Quais notícias deseja receber?</label>
                        <select id="select" class="form-select">
                            <option>Todas</option>
                            <option>CPI - COVID-19</option>
                            <option>Sintomas e Tratamentos</option>
                        </select>
                    </div>
                    
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="checkBox">
                        <label class="form-check-label" for="checkBox">Concordo com os <a href="normas.php">Termos de uso.</a></label>
                    </div>
                    <button type="submit" class="btn mt-5 btn-primary">Enviar</button>
                </form>
            </div>
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