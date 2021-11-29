<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Entre em Contato</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../projeto-integrador/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../projeto-integrador/css/estilo.css">
    <script src="/js/bootstrap.min.js"></script>
</head>

<body class="body-poli">

    <header>
        <?php include 'header.php'; ?>
    </header>

    <div class="row justify-content-center">

        <article class="col-sm-12 col-md-10 col-lg-10 col-xl-7 p-5 atc-qs">
            <h1 class="text-center mb-5">Entre de Contato</h1>

            <div class="float-sm-start float-md-start float-lg-start float-xl-start col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <p class="mb-lg-5" >Central de Ajuda: contato@central-ajuda.com</p>
                <p class="mb-lg-5">Telefone da Central de Ajuda: 11 95657 - 5859</p>
                <p>Relate um Problema: @resolver-problema.com</p>
            </div>


            <div class="float-sm-end float-md-end float-lg-end float-xl-end col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">

                <p>Alguma sujestão ou problema a declarar? Por favor adicione 
                    suas informações e nos escreva no local ao lado e logo entraremos em contato.</p>

                <form>

                    <div class="form-group">
                    <input class="form-control mb-2" type="text" placeholder="Nome Completo:">
                    <input class="form-control mb-2" type="tel" placeholder="Telefone:">
                    <input class="form-control mb-2" type="email" placeholder="E-mail:">
                    <input class="form-control mb-2" type="text" placeholder="Assunto:">


                        <textarea class="mb-2 form-control"rows="5"></textarea>
                

                    <input type="submit" class="btn btn-primary" value='Enviar'>
                </div>
                </form>

            </div>


        </article>

    </div>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>

</body>

</html>