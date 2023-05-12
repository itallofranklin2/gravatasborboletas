<?php include'header.php';?>
    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill img1"></div>
                <div class="carousel-caption">
                    <h2 style="color:transparent !important;"></h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
            <div class="fill img3">
               <!-- <div class="embed-responsive embed-responsive-16by9">
                     <video muted width="100%" preload="auto" loop="" autoplay="" style="visibility: visible; width: 100%;" poster="">
                        <source src="videos/Mini%20Doc%20do%20EP%20N%C3%A3o%20Fazem%20Festas%20Chiques%20-%20Parte%201.mp4" type="video/mp4">
                        <source src="videos/Mini%20Doc%20do%20EP%20N%C3%A3o%20Fazem%20Festas%20Chiques%20-%20Parte%201.mp4" type="video/webm">
                        <source src="videos/Mini%20Doc%20do%20EP%20N%C3%A3o%20Fazem%20Festas%20Chiques%20-%20Parte%201.mp4" type="video/ogg">
                    </video>
                </div> -->       
            </div>
                <div class="carousel-caption">
                    <h2 style="color:transparent !important;"></h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill img2"></div>
                <div class="carousel-caption">
                    <h2 style="color:transparent !important;"></h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>

    <section id="sobre">
        <div class="container">
           <div class="col-md-7 wow fadeInUp">
               <h3 style="color:red; text-align: center;">Gravatas Borboletas</h3>
               <p>A ideia de começar a banda surgiu quando os dois amigos de infância Diego Barros (guitarra) e João Pedro (voz) decidiram começar a praticar guitarra. Os outros integrantes Pedro Afonso (bateria) e, mais tarde, Gabriel Gaalta (baixo) se juntaram à dupla pouco após os primeiros contatos com os instrumentos que faltavam para compor o grupo. Os músicos começaram a fazer ensaios descontraídos, sem o intuito inicial de crescer na cena de Fortaleza. Só após perceber que a banda estava evoluindo, eles começaram a fazer composições sérias e surgiu o interesse em gravar. Na tentativa de unir musicalmente a banda, os ensaios se tornaram frequentes. Só agora, após 3 anos de preparação, e após a gravação ao vivo do EP Gravatas Borboletas: Não Fazem Festas Chiques, a banda se sente com a confiança necessária para realizar apresentações marcantes.</p>
           </div>
           <div class="col-md-5 wow fadeInRight">
               <img src="img/ensaio/banda_index.JPG" width="100%" alt="">
           </div>
        </div>
    </section>
    <section id="videos">
       <div class="camada">
        <div class="container wow fadeInUp">
            <h2>Galeria</h2>
            <div class="row">
                
                <div class="col-md-4 wow fadeInUp">
                   <h3>Fotos</h3>
                   <a href="fotos.php">
                   <div class="hoverzoom">
                      <img src="img/fotos-da-banda/logo_oficial.jpg" alt="">
                       <div class="retina">
                            <img src="img/icones/loupe.png" alt="">
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4 wow fadeInUp">
                    <h3>Videos</h3>
                     <a href="videos.php">
                       <div class="hoverzoom">
                          <img src="img/fotos-da-banda/logo_oficial.jpg" alt="">
                           <div class="retina">
                                <img src="img/icones/youtube.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 wow fadeInUp">
                     <h3>Músicas & Downloads</h3>
                      <a href="musicas.php">
                       <div class="hoverzoom">
                          <img src="img/fotos-da-banda/logo_oficial.jpg" alt="">
                           <div class="retina">
                                <img src="img/icones/music-player.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                
                
              </div>
        </div>
        </div>
    </section>
   
    <section id="banda">
        <div class="container wow fadeInUp">
           <h2>Banda</h2>
            <div class="col-md-3 wow fadeInLeft">
                <img class="img-circle-person" src="img/ensaio/diego-perfil.JPG" width="100%" height="250px" alt="">
                <p>Diego Barros</p>
                <p>Guitarrista</p>
            </div>
            <div class="col-md-3 wow fadeInDown">
                <img class="img-circle-person" src="img/ensaio/gabriel.JPG" width="100%" height="250px" alt="">
                <p>Gabriel Gaalta</p>
                <p>Baixo</p>
            </div>
            <div class="col-md-3 wow fadeInUp">
                <img class="img-circle-person" src="img/ensaio/joao.JPG" width="100%" height="250px" alt="">
                <p>João Pedro</p>
                <p>Vocalista</p>
            </div>
            <div class="col-md-3 wow fadeInRight">
                <img class="img-circle-person" src="img/ensaio/pedro_perfil.JPG" width="100%" height="250px" alt="">
                <p>Pedro Afonso</p>
                <p>Batera</p>
            </div>
        </div>
    </section>
   <!-- <section id="calendario">
       <div class="camada">
            <div class="container">
                <div class="row">        
                   <div class="col-md-5 wow fadeInDown">
                     <h2 style="margin-top:150px;">Shows --</h2>
                     
                     <!--<div class="hoverzoom shows">
                          <img src="img/ensaio/C%C3%B3pia%20de%20IMG_2789%20(2).JPG" alt="">
                           <div class="retina">
                                
                            </div>
                        </div>
                      <!--<div class="caixa-show"></div>--
                   </div>
                   <div class="col-md-5 wow fadeInDown">
                   <div class="hoverzoom shows">
                          <img src="img/ensaio/C%C3%B3pia%20de%20IMG_2789%20(2).JPG" alt="">
                           <div class="retina">
                                <a href="calendario.php">Confira aqui</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <section id="midias">
        <div class="container">
            <div class="col-md-6 wow fadeInLeft facebook1">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FGravatasBorboletas%2F&tabs=timeline&width=500&height=447&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
            <div class="col-md-6 wow fadeInLeft facebook2">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FGravatasBorboletas%2F&tabs=timeline&width=300&height=447&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
            <!--<div class="col-md-6 wow fadeInLeft facebook3">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FGravatasBorboletas%2F&tabs=timeline&width=400&height=447&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>-->
            <div class="col-md-5 wow fadeInRight">
                <!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/6c59474dded05cc8a80ec5add1d0567a.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>

            </div>
        </div>
    </section>
    <?php include'footer.php';?>