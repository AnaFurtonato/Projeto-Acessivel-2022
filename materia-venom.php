<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Matéria - Venom</title>
</head>


<body>


    <div class="BotaoConteudoPrincipal">
        <button class="btn btn-dark col-12 col-sm-12 col-md-12" onclick="window.location.href='materia-venom.php#topo';">Ir
            Direto para O conteúdo Principal</button>
    </div>

    <?php include 'header.php'; ?>

    <header class="col-sm-12 col-md-12 col-lg-12">
        <img class="img-fluid w-100" src="images/art-venom-venom.jpg" alt="magem do pernsonagem venom com fundo da imagem em um degradê azul">
    </header>


    <div class="container-fluid">
        <main>
            <div class="row">
                <h1 id="topo" class="nommat">Venom</h1>
                <article class="col-xs-10 col-sm-12 col-md-12 col-lg-9">

                    <p class="ppmat">
                        Ao contrário de muitos outros personagens da Marvel, Venom não foi criado por Stan Lee. O
                        personagem foi na verdade a criação de um fã do Homem-Aranha que foi adaptado pelos escritores
                        para se tornar o vilão.</p>

                    <p class="ppmat">Mike Zeck foi o artista que desenhou o traje, enquanto Roger Stern concebeu a ideia da origem alienígena do seu traje.
                    </p>

                    <h3 class="hmat pt-5">Quando ele apareceu pela primeira vez?</h3>
                    <p class="ppmat">A primeira aparição de Venom aconteceu em aconteceu em maio de 1984, em The Amazing Spider-Man #252, quando o Homem-Aranha também apareceu em seu traje preto pela primeira vez.</p>



                    <div class="row justify-content-around">
                        <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xs-10  pt-5">
                            <img class="col-12 rounded" src="images/venomhq.jpg" alt="Imagem de venom sentado em um trono de ossos dando um sorriso">
                        </div>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xs-10 pt-5">
                            <img class="col-12 rounded border" src="images/venon4.jpg" alt="venom com uma expressão de grito correndo atrás de alguém">
                        </div>
                    </div>

                    <h3 class="hmat pt-5">Quem são seus maiores inimigos de todos?</h3>
                    <p class="ppmat">Venom desenvolveu um rancor contra o Homem-Aranha pela rejeição do herói à sua influência.

                        Desde que Venom se tornou um anti-herói, Carnificina se tornou seu maior inimigo. Sua rivalidade decorre do fato de Carnificina ser filho de Venom e do fato de que o primeiro não sente remorso, ao contrário de Venom, e é muito mais forte do que seu pai.</p>
                </article>




                <aside class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">

                    <h2 class="p-4">Outras Notícias</h2>


                    <div class="row">
                        <div class="col-md-6 col-lg-12 float-start">
                            <div class="card">
                                <section class="sec3">
                                    <img class="card-img-top" src="images/batman296x176.jpg" alt="Personagem Batman, com sua versão animada a esqueda e sua versão live action a direita.">
                                    <h3 class="hmat">Batman</h3>
                                    <h5 class="hmat1">Autora: Ana Clara</h5>
                                    <p class="pmat">Conheça mais sobre o Batman, protetor de Gotham City</p>
                                    <a href="materia-batman.php" class="btn btn-primary buttonm">Saiba mais</a>
                                </section>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-12 float-start">
                            <div class="card ">
                                <section class="sec3">
                                    <img class="card-img-top" src="images/arc296x176.jpg" alt="Personagem Arqueiro-Verde, com sua versão animada a esqueda e sua versão live action a direita.">
                                    <h3 class="hmat">Arqueiro-Verde</h3>
                                    <h5 class="hmat1">Autor: Nayara Nunes</h5>
                                    <p class="pmat">O que aconteceu com Stephen Amell, ator que interpretava Arqueiro
                                        Verde na série Arrow?</p>
                                    <a href="materia-Arqueiro.php" class="btn btn-primary buttonm">Saiba mais</a>
                                </section>
                            </div>
                        </div>


                    </div>
                </aside>

                <footer class="BotaoVoltarAoTopo row pt-5">
                    <button onclick="window.location.href='materia-venom.php#topo';" class="col-5 btn btn-dark justify-content-center">Voltar ao Topo</button>
                </footer>
            </div>
        </main>

    </div>

    <?php include 'footer.php'; ?>

</body>

</html>