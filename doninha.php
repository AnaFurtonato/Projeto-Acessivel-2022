<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Doninha</title>
</head>

<body>



    <div class="BotaoConteudoPrincipal">
        <button onclick="window.location.href='doninha.php#topo';" class="btn btn-dark col-12 col-sm-12 col-md-12">Ir
            Direto para O conteúdo Principal</button>
    </div>

    <?php include 'header.php'; ?>

    <Header class="headerDoninha row">
        <img class="img-fluid" src="images/ImagemPrincipalDoninha.png" alt="Imagem com fundo azul que mostra o personagem doninha nos quadrinhos da DC Comics">

    </Header>

    <div class="container-fluid">



        <div class="row">

            <h1 id="topo" class="p-5 topo NomePersonagemMarvel">Doninha</h1>

            <div class="col-12 col-lg-12 col-xl-8 float-xl-start">
                <article>



                    <p class="pb-5 pt-5">
                        O Doninha (em inglês, The Weasel), é a identidade de John Monroe, um vilão e inimigo do Nuclear.
                        Ele também já foi brevemente um membro do Esquadrão Suicida. Ele foi criado por Gerry Conway e
                        Rafael Kayanan e apareceu pela primeira vez em The Fury of Firestorm, The Nuclear Man Vol. 2 #36
                        (Junho de 1985).
                    </p>

                    <div class="row">

                        <img class="col-12 col-sm-6 col-md-6 pb-5" src="images/doninha1.jpg" alt="Imagem do doninha com uma bandeira enorme dos Estados Unidos atrás dele">

                        <img class="col-12 col-sm-6 col-md-6 pb-5" src="images/doninha2.jpg" alt="Doninha lambendo o vidro da porta sendo observado na prisão por outro detento que usa uma roupa laranja padrão de presidiário">

                    </div>


                    <div>


                        <h2 class="p-5">Vídeos do Doninha</h2>

                        <object class="col-12 col-sm-12 col-md-12 col-lg-6 pb-5 px-md-1 float-lg-start videoDoninha" data="https://www.youtube.com/embed/vjIyur_9J40">Lin do video do doninha se
                            afogando</object>

                        <object class="col-12 col-sm-12 col-md-12 col-lg-6 pb-5 px-md-1  videoDoninha" data="https://www.youtube.com/embed/I8_cXXcMg04">link video do doninha Acordando depois de
                            se afogar</object>
                    </div>


                    <h2 class="p-5">
                        Resumo personagem
                    </h2>
                    <p class="pb-5">
                        Eu tenho certeza que o Doninha foi responsável pela maioria das suas risadas em O Esquadrão
                        Suicida, embora ele na verdade tenha pouco tempo de tela, Mas agora veja quem realmente é o
                        Doninha e o seu passado sombrio.
                    </p>

                    <img class="col-12 pb-5" src="images/imagemDoninha2.png" alt="imagens do doninha na primeira versão dos quadrinhos, ondem era um homem fantasiado de doninha selvagem. Na imagem ao lado mostra uma versão lançada posteriormente onde o doninha era um animal mutante.">

                    <p>
                        Doninha fez sua estreia na DC Comics em junho de 1985, mas não como o estranho mutante que Sean
                        Gunn interpreta em O Esquadrão Suicida. Nos quadrinhos, Doninha, cujo nome verdadeiro é John
                        Monroe, é na verdade um ser humano que veste uma fantasia do mamífero homônimo para cometer seus
                        crimes.

                        Você pode estar se perguntando por que John Monroe escolheria uma criatura tão pequena e fofinha
                        para basear sua personalidade de supervilão. Se você presumiu que era por causa de seu apetite
                        carnívoro ou da superstição japonesa que sugere que a doninha é um prenúncio de infortúnio,
                        posso dizer que não tem nada a ver com nenhum dos dois. Na verdade, a verdadeira origem é um
                        pouco mais obscura.

                        A segunda vez que Weasel foi “ressuscitado” na DC Comics ocorreu durante a reinicialização dos
                        Novos 52. No entanto, este retorno veio com uma reinvenção completa do personagem como o híbrido
                        humano-animal completo que se tornaria um dos novos membros do Esquadrão Suicida no filme de
                        James Gunn.

                        Seu retorno ocorreu em uma edição do evento Vilania Eterna, também de Geoff Johns, em que
                        Doninha tenta emboscar Steve Trevor e Nevasca. Ele é parado, no entanto, quando Nevasca o
                        congela vivo.
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
                            <img class="pb-5 col-6 col-md-6 col-xl-6 imagemPersonagemDC" src="images/Per-venom.png" alt="Imagem do personagem Venom com metade de sua face, e a outra metade com a face de seu hospedeiro">
                            <p class="col-md-12">Conheça mais sobre Venon, famoso personagem da Marvel</p>
                            <button onclick="window.location.href='Venom.php'" class="botaonoticiaDC">Clique aqui</button>
                        </Section>

                        <Section class="pb-5 col-md-6 col-lg-6">
                            <h6 class="invisible">Loki</h6>
                            <img class="col-6 col-lx-6 pb-5 imagemPersonagemDC" src="images/Per-Loki.png" alt="Imagem do persnogem Loki com sua roupa verde, com enfeites na cabeça cor de ouro e com um enorme sorriso diabólico">
                            <p class="col-md-12">Conheça mais sobre Loki, famoso personagem da Marvel</p>
                            <button onclick="window.location.href='loki.php'" class="botaonoticiaDC">Clique
                                aqui</button>
                        </Section>
                    </div>
                </div>

            </div>



            <aside class="col-sm-12 col-md-12 col-lg-12 col-xl-4 ">

                <h2 class="p-5 "> Notícias</h2>

                <div class="row">

                    <div class=" pb-5 float-sm-start float-lg-none col-md-6 row-col-lg-6 col-xl-12">
                        <img class="col-12 col-sm-12 col-md-12" src="images/Sean-Gunn-Doninha.jpg" alt="Imagem do Doninha com a frase (Sean Gunn as) sobre sua cabeça e fundo com a cor roxa">
                        <h3>Conheça quem Interpretou o Doninha</h3>
                        <h6>Autor: Állysson Ernandes</h6>
                        <p>Um breve resumo de como o Doninha foi criado e por quem foi interpretado no filme "Esquadão
                            Suícida."
                        </p>
                        <button onclick="window.location='materia-doninha.php'" class="botaonoticiaDC">Clique aqui</button>
                    </div>

                    <div class="pb-5 col-md-6 float-sm-end col-lg-6 col-xl-12">
                        <img class="col-12 col-sm-12 col-md-12" src="images/Loki10.jpg" alt="Imagem do persnogem Loki com sua versão animada em quadrinhos">
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
                <button onclick="window.location.href='doninha.php#topo';" class="col-5 btn btn-dark justify-content-center">Voltar ao Topo</button>
            </footer>
        </div>

    </div>

    <?php include 'footer.php'; ?>

</body>

</html>