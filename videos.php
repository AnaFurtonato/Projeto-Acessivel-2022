<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="bodyvid">

<div class="container-fluid">

    <?php include 'header.php'; ?>

    <header class="header_videos">
        <button onclick="window.location.href='videos.html#inicio';" class=" btnini btn btn-primary col-12 col-sm-12 col-md-12">Ir Direto para O conteúdo Principal</button>
    </header>

    <article class = "artvideos row col-sm-12 col-md-12 col-lg-12"> 

        <h1 id="inicio">Mais Vistos</h1>

            <div class = "div_trail col-sm-12 col-md-6 col-lg-6">
                <object  class="objvid" data="https://www.youtube.com/embed/wL4a4MafSjQ"></object>
            </div>

            <div class = "div_trail col-sm-12 col-md-6 col-lg-6">
                <object class="objvid" data="https://www.youtube.com/embed/aiVYED4NVvI"></object>
            </div>


    </article>

    <aside class = "row col-sm-12 col-md-12 col-lg-12">
        
        <h2 class="h2asside">Trailers</h2>
             <div class = "div_trail col-sm-12 col-md-6 col-lg-6">
                <object class="objvid" data="https://www.youtube.com/embed/77fe8sHFG6M"></object>
             </div>

             <div class = "div_trail col-sm-12 col-md-6 col-lg-6">
                <object class="objvid" data="https://www.youtube.com/embed/EQxCycVTfcU"></object>
            </div>
                
        <h2 class="h2asside">Videos</h2>
              <div class = "div_trail col-sm-12 col-md-6 col-lg-6">
                  <object class="objvid" data="https://www.youtube.com/embed/Z-XmayVcGN4"></object>
              </div>

              <div class = "div_trail col-sm-12 col-md-6 col-lg-6">
                  <object class="objvid" data="https://www.youtube.com/embed/Wn4CnKpnOl8"></object>
              </div>


    </aside>
    <footer class="footervid">
        <button  onclick="window.location.href='videos.html#inicio';" class="btnfoot btn btn-primary" >Voltar ao Topo</button>
    </footer>
    
    <?php include 'footer.php'; ?> 
</div>


</body>

</html>