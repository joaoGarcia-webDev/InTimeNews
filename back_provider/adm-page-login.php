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
    <link rel="stylesheet" href="../css/main-page.css">
    <link rel="stylesheet" href="../css/custom-adm-page.css">

    <title>InTime News - Portal de Notícias</title>

</head>
<body class="adm-login">
    <main>
        <div class="card login-card">
            <header>
                <h1 class="big-title">Login da pagina de Administrator</h1>
                <h2 class="my-2">Se você acessou esta pagina e não é uma pessoa autorizada peço que acesse <a href="../index.php">Pagina Inicial</a> para continuar aproveitando todo o conteúdo de nosso site.</h2>
            </header>
            <form action="../adm-page.php" method="post" enctype="multipart/form">
                <div class="mb-5">
                    <label for="loginInput" class="form-label">Login</label>
                    <input type="email" class="form-control" id="loginInput">
                    <label for="passwordInput" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="passwordInput">
                </div>
                <button type="submit" class="btn-login btn btn-primary">Enviar</button>
            </form>
        </div>
    </main>

    <!-- JS BOOTSTRAP 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>