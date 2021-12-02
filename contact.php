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
                    <h1 class="big-title">Entre em contato com nossa equipe</h1>
                    <p class="my-4">Nós do Portal de Notícias In Time News estamos sempre a disposição para um contato mais proximo entre nossos usuários, disponibilizando nosso e-mail e contato para caso de dúvidas, sugestões ou elogios</p>
                </div>
                <div class="last-text-contact">
                    <p>Não utilizamos essas informações para nada além do serviço prestado. Para mais informações acesse <a href="normas.php">Termos de Uso</a>.</p>
                </div>
            </div>

            <div class="form-content col-sm-12 col-md-6 col-lg-5">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email"
                        class="form-control"
                        id="email"
                        aria-describedby="subEmail">
                        <div id="subEmail" class="form-text">Em caso de resposta por parte da equipe, o email sera enviado para este endereço</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">confirme o E-mail</label>
                        <input type="email"
                        class="form-control"
                        id="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="textArea">Qual sua mensagem?</label>
                        <textarea class="form-control" placeholder="Digite sua mensagem aqui." id="textArea" style="height: 100px"></textarea>
                    </div>
                    
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="checkBox">
                        <label class="form-check-label" for="checkBox">Concordo com os <a href="normas.php">Termos de uso.</a></label>
                    </div>
                    <button type="submit" class="btn mt-5 btn-primary">Enviar</button>
                </form>
            </div>
        </section>

        <div class="map-content my-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.9879122680104!2d-47.13622688447634!3d-23.5329371664296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf0d54817a1725%3A0x3dcff522a27b9b96!2sFaculdade%20de%20Tecnologia%20de%20S%C3%A3o%20Roque!5e0!3m2!1spt-BR!2sbr!4v1638474162602!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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