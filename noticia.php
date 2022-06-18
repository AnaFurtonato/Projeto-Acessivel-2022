<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <title>Notícia Comics</title>
</head>

    
<body>



    <div class="BotaoConteudoPrincipal">
        <button onclick="window.location.href='noticia.php#Noticias';" class="btn btn-dark col-12 col-sm-12 col-md-12">Ir
            Direto para O conteúdo Principal</button>
    </div>

    <?php include 'header.php'; ?>
    
    <header class= "col-sm-12 col-md-12 col-lg-12">
    
        <img class="img-fluid" id="img1" src="images/marvelxdc1440x250.jpg" alt="Logo da Marvel do lado esquerdo e logo da DC ao lado direito em preto e branco.">
    </header>

    <h1 id="Noticias" class="h1not">Últimas notícias</h1>

    <div class="container-fluid">
        <main>
            

            <div class="row">

                <aside class="asidnot">    
                    <h2 class="noth1">DC Comics</h2>

                    <div class="col-sm-12 col-md-5 col-lg-5 sectionnot">
                        <div class="card">
                            <section class="sec1">
                                <img class="card-img-top" src="images/arc3390x194.jpg" alt="Personagem Arqueiro Verde, com sua versão animada a esqueda e sua versão live action a direita.">
                                <h2 class="hmat">Arqueiro Verde</h2>
                                <h4 class="hmat1">Autor: Nayara Nunes</h4>
                                <p class="pmat">Conheça mais sobre o Arqueiro Verde, personagem inspirado em Robin Hood e quem é o ator por trás dele.</p>
                                <button class="btn btn-primary buttonnoticia" onclick="window.location.href='materia-arqueiro.php';">Saiba mais</button>
                            </section>
                        </div>
                    </div>

                    
                    <div class="col-sm-12 col-md-5 col-lg-5 sectionnot">
                        <div class="card">
                            <section class="sec2">
                                <h6 class="invisible">batman</h6> 
                                <img class="card-img-top" src="images/batman390x194.jpg" alt="Personagem Batman, com sua versão animada a esqueda e sua versão live action a direita.">
                                <h2 class="hmat">Batman</h2>
                                <h4 class="hmat1">Autor: Ana Clara</h4>
                                <p class="pmat">Conheça mais sobre o Batman, protetor de Gotham City</p>
                                <button type="button" class="btn btn-primary buttonnoticia" onclick="window.location.href='';">Saiba mais</button>
                            </section>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-5 col-lg-5 sectionnot">
                        <div class="card">
                            <section class="sec1">
                                <img class="card-img-top" src="images/Doninha390x194.jpg" alt="Personagem Doninha, com sua versão animada a esqueda e sua versão live action a direita.">
                                <h2 class="hmat">Doninha</h2>
                                <h4 class="hmat1">Autor: Allysson Ernandes</h4>
                                <p class="pmat">Conheça mais curiosidades sobre O Doninha, personagem da DC Comics</p>
                                <button type="button" class="btn btn-primary buttonnoticia" onclick="window.location.href='materia-doninha.php';">Saiba mais</button>
                            </section>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-5 col-lg-5 sectionnot">
                        <div class="card">
                            <section class="sec2">
                                <img class="card-img-top" src="images/superchoquenot390x194.jpg" alt="Super-Choque, com sua versão animada a esqueda e sua versão live action a direita.">
                                <h2 class="hmat">Super-Choque</h2>
                                <h4 class="hmat1">Autor: Júlio Gabriel</h4>
                                <p class="pmat">O jovem Virgil Hawkins ganha incríveis poderes eletromagnéticos
                                    após de ser exposto a um estranho gás.</p>
                                <button type="button" class="btn btn-primary buttonnoticia" onclick="window.location.href='materia-superchoque.php';">Saiba mais</button>
                            </section>
                        </div>
                    </div>

                    <h2 class="noth1">Marvel</h2>

                    <div class="col-sm-12 col-md-5 col-lg-5 sectionnot">
                        <div class="card">
                            <section class="sec1">
                                <img class="card-img-top" src="images/babygroot390x194.jpg" alt="Personagem Groot, com sua versão animada a esqueda e sua versão live action a direita.">
                                <h2 class="hmat">Baby Groot</h2>
                                <h4 class="hmat1">Autor: Nayara Nunes</h4>
                                <p class="pmat">Conheça mais sobre do Baby Groot e quem é o ator por trás dele.</p>
                                <button type="button" class="btn btn-primary buttonnoticia" onclick="window.location.href='';">Saiba mais</button>
                            </section>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-5 col-lg-5 sectionnot">
                        <div class="card">
                            <section class="sec2">
                                <img class="card-img-top" src="images/loki390x194.jpg" alt="Personagem Loki, com sua versão animada a esqueda e sua versão live action a direita.">
                                <h2 class="hmat">Loki</h2>
                                <h4 class="hmat1">Autor: Ana Clara</h4>
                                <p class="pmat">Conheça mais sobre Loki, famoso personagem da Marvel</p>
                                <button type="button" class="btn btn-primary buttonnoticia" onclick="window.location.href='materia-loki.php';">Saiba mais</button>
                            </section>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-5 col-lg-5 sectionnot">
                        <div class="card">
                            <section class="sec1">
                                <img class="card-img-top" src="images/panteranot390x194.jpg" alt="Personagem Pantera Negra, com sua versão animada a esqueda e sua versão live action a direita.">
                                <h2 class="hmat">Pantera Negra</h2>
                                <h4 class="hmat1">Autor: Júlio Gabriel</h4>
                                <p class="pmat">Conheça a história de T'Challa, o famoso Pantera Negra -
                                    Wakanda
                                    Forever</p>
                                <button type="button" class="btn btn-primary buttonnoticia" onclick="window.location.href='materia-pantera.php';">Saiba mais</button>
                            </section>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-5 col-lg-5 sectionnot">
                        <div class="card">
                            <section class="sec2">
                                <img class="card-img-top" src="images/venom390x194.jpg" alt="Personagem Venom, com sua versão animada a esqueda e sua versão live action a direita.">
                                <h2 class="hmat">Venom</h2>
                                <h4 class="hmat1">Autor: Allysson Ernandes</h4>
                                <p class="pmat">Conheça mais sobre Venom, famoso personagem da Marvel</p>
                                <button onclick="window.location.href='materia-venom.php';" type="button" class="btn btn-primary buttonnoticia">Saiba mais</button>
                            </section>
                        </div>
                    </div>
                </aside>

                <footer class="BotaoVoltarAoTopo row">
                    <button onclick="window.location.href='noticia.php#Noticias';"
                        class="col-5 btn btn-dark justify-content-center">Voltar ao Topo</button>
                        
                    </footer>

                    <?php include 'footer.php'; ?>


            </div>    
        </main>
    </div>    

    <footer>
    </footer>

</body>
</html>