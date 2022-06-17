<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">


    <title>Contato</title>
</head>
<body>

    <div class="pb-3"><?php include 'header.php'; ?></div>


    <div class="container">
    <h1 class="pt-5 pb-5">
        Entre em Contato:
    </h1>
    
    <form>

        
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <input class="form-control mb-2" type="text" placeholder="Nome Completo:">
            <input class="form-control mb-2" type="tel" placeholder="Telefone:">
            <input class="form-control mb-2" type="email" placeholder="E-mail:">
            <input class="form-control mb-2" type="text" placeholder="Assunto:">
    
    
            <textarea class="mb-2 form-control" rows="12"></textarea>
    
    
            <input type="submit" class="btn btn-primary float-end" value='Enviar'>
        </div>
    </form>

    <div class="container pt-5">
        <Div class="d-flex">
            <span class="bi-telephone-fill mr-sm-2"></span>
            <p class="mx-4"> (11) 9999-9999</p>
        </Div>

        <Div class="d-flex">
            <span class="bi-envelope-fill"></span>
            <p class="mx-4"> contato@gmail.com</p>
        </Div>

        <Div class="d-flex">
            <span class="bi-geo-alt-fill"></span>
            <p class="mx-4"> Rua: São Jose, Nº89 - São Paulo/SP - 18938674</p>
        </Div>
    </div>
    
   <div class="pt-5"> <?php include 'footer.php'; ?> </div>
</div>

</body>
</html>

