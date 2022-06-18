<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Super Choque</title>
</head>

<body>

    <div class="BotaoConteudoPrincipal">
        <button onclick="window.location.href='superchoque.php#topo';" class="btn btn-dark col-12 col-sm-12 col-md-12">Ir
            Direto para O conteúdo Principal</button>
    </div>

    <?php include 'header.php'; ?>

    <Header class="headerDoninha row">
        <img class="img-fluid" src="images/superchoquebanner.jpg"
            alt="Imagem do personagem Super Choque voando com seus raios e a o fundo está a cidade">

    </Header>

    <div class="container-fluid">



        <div class="row">

            <h1 id="topo" class="p-5 topo NomePersonagemMarvel">Super Choque</h1>

            <div class="col-12 col-lg-12 col-xl-8 float-xl-start">
                <article>

                    

                    <p class="pb-5 pt-5">
                        O Super Choque(Static Shock - em inglês), foi criado pelo próprios fundadores da editora Milestone Comics, Dwayne McDuffie,
                        Denis Cowan, Michal Davis e Derek T. Dingle, sua estreia ocorreu em sua primeria hq solo que foi lançada no ano de 1993, 
                        criado com o objetivo de dar representatividade pois o personagem é afroamericano. 
                    </p>

                    <div class="row">

                        <img class="col-12 col-sm-6 col-md-6 pb-5" src="images/superchoque2.png"
                            alt="Imagem do Super Choque voando ">

                        <img class="col-12 col-sm-6 col-md-6 pb-5" src="images/superchoque1.jpg"
                        alt="imagem do Super Choque em sua identidade secreta Virgil junto de seu amigo Gear">

                    </div>


                    <div>


                        <h2 class="p-5">Vídeos do Super Choque</h2>

                        <object class="col-12 col-sm-12 col-md-12 col-lg-6 pb-5 px-md-1 float-lg-start videoDoninha"
                            data="https://www.youtube.com/embed/L_f1L1YL_pg">Link do vídeo a abertura do seriado do super choque</object>

                        <object class="col-12 col-sm-12 col-md-12 col-lg-6 pb-5 px-md-1  videoDoninha"
                            data="https://www.youtube.com/embed/in8c2tvxU9U">Link para um trecho de um episódio da série</object>
                    </div>


                    <h2 class="p-5">
                        Resumo personagem
                    </h2>
                    <p class="pb-5">
                       o jovem Virgil Ovid Hawkins nascido em Dakota City, onde vive com seu pai e sua irmã. na escola sempre 
                       foi muito inteligente e justamente por isso sofria muito bullyng dos outros colegas de turma, mas não aguentava 
                       mais sofrer esse tipo de coisa e resolveu se vingar de um desses colegas. 
                    </p>

                    <img class="col-12 pb-5" src="images/superchoque3.jpeg"
                        alt="imagem do personagem Super Choque em três versões">

                    <p>
                        Para realizar essa vingança ele saiu pelas ruas procurando ele, mas nas ruas esbarrou com um conflito
                        entre gangues de Dakota City, logo a polícia chegou para acalmar os ânimos com gás lacrimogênio, mas ninguém
                        sabia que nesse gás possuia uma mistura mutante e todos que estavam ali inclusive Virgil ganharam superpoderes, foi assim 
                        que ele se tornou o Super Choque, mas alguns que estavam lá também ganharam poderes, mas se tornaram vilões e aproveitaram
                        para realizar crimes na cidade.
                    </p>

                </article>

                <!-- outros personagens -->
                <div class="col-lg-12 float-xl-end col-xl-12">
                    <h2 class="p-5">
                        Outros personagens
                    </h2>

                    <div class="row m-lg-5">
                        <Section class="col-12 col-md-6 col-lg-6  float-start">
                            <h6 class="invisible">Venom</h6> <!-- para ocultar o texto do titulo e não acusar "warning" no validador w3c-->
                            <img class="pb-5 col-6 col-md-6 col-xl-6 imagemPersonagemDC" src="images/Per-venom.png"
                                alt="Imagem do personagem Venom com metade de sua face, e a outra metade com a face de seu hospedeiro">
                            <p class="col-md-12">Conheça mais sobre Venom, famoso personagem da Marvel</p>
                            <button onclick="window.location.href='Venom.php'" class="botaonoticiaDC">Clique aqui</button>
                        </Section>

                        <Section class="pb-5 col-md-6 col-lg-6">
                            <h6 class="invisible">Loki</h6>
                            <img class="col-6 col-lx-6 pb-5 imagemPersonagemDC" src="images/Per-Loki.png"
                                alt="Imagem do persnogem Loki com sua roupa verde, com enfeites na cabeça cor de ouro e com um enorme sorriso diabólico">
                            <p class="col-md-12">Conheça mais sobre Loki, famoso personagem da Marvel</p>
                            <button onclick="window.location.href='Loki.php'" class="botaonoticiaDC">Clique
                                aqui</button>
                        </Section>
                    </div>
                </div>

            </div>



            <aside class="col-sm-12 col-md-12 col-lg-12 col-xl-4 ">

                <h2 class="p-5 "> Notícias</h2>

                <div class="row">

                    <div class=" pb-5 float-sm-start float-lg-none col-md-6 row-col-lg-6 col-xl-12">
                        <img class="col-12 col-sm-12 col-md-12" src="images/Sean-Gunn-Doninha.jpg"
                            alt="Imagem do Doninha com a frase (Sean Gunn as) sobre sua cabeça e fundo com a cor roxa">
                        <h3>Conheça quem Interpretou o Doninha</h3>
                        <h6>Autor: Állysson Ernandes</h6>
                        <p>Um breve resumo de como o Doninha foi criado e por quem foi interpretado no filme "Esquadão
                            Suícida."
                        </p>
                        <button onclick="window.location.href='materia-doninha.php'" class="botaonoticiaDC">Clique aqui</button>
                    </div>

                    <div class="pb-5 col-md-6 float-sm-end col-lg-6 col-xl-12">
                        <img class="col-12 col-sm-12 col-md-12" src="images/Loki10.jpg"
                            alt="Imagem do persnogem Loki com sua versão animada em quadrinhos">
                        <h3>Quais são os poderes do Loki, o Deus da trapaça?</h3>
                        <h6>Autor: Ana Clara</h6>
                        <p>Loki, o vilão que tem sua própria série no Disney+, é um dos personagens mais poderosos do
                            Universo Cinematográfico Marvel (MCU).
                        </p>
                        <button onclick="window.location='materia-loki3.php'" class="botaonoticiaDC">Clique aqui</button>
                    </div>
                </div>


            </aside>



            <footer class="BotaoVoltarAoTopo row">
                <button onclick="window.location.href='superchoque.php#topo';"
                    class="col-5 btn btn-dark justify-content-center">Voltar ao Topo</button>
            </footer>
        </div>

    </div>

    <?php include 'footer.php'; ?>

</body>

</html>