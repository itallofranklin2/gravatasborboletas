<?php include'header.php'?>
<div class="musica">
<div class="camada">
<div class="container">
    <div class="col-md-8 wow fadeInLeft">
        <h2>Spotify</h2>
        <iframe src="https://open.spotify.com/embed/artist/2BVTjukCdUA30KBPjIXflg" width="100%" height="400" frameborder="0" allowtransparency="true"></iframe>
    </div>
    <div class="col-md-4 wow fadeInRigth">
       <h2>Downloads</h2>
        <div class="box-single">
           <!-- <div class="row">
                <img src="img/fotos-da-banda/cover.jpg" alt="">
            </div>-->
            <div class="row">
                <ul>
                    <li>
                       <a href="musica/tempestade_particular.mp3" download>Tempestade Particular <img src="img/icones/download-vermelho.png" alt=""></a>
                    </li>
                    <li>
                       <a type="button" href="musica/tananam.mp3" download>Tananam <img src="img/icones/download-vermelho.png" alt=""></a>
                    </li>
                    <li>
                       <a type="button" href="musica/compre_e_trabalhe.mp3" download>Compre e Trabalhe <img src="img/icones/download-vermelho.png" alt=""></a>
                    </li>
                    <li>
                       <a type="button" href="musica/um_cara_sem_sentido.mp3" download>Um Cara Sem Sentido <img src="img/icones/download-vermelho.png" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--
<div class="container">
    <div class="col-md-6 div col-md-offset-3">
        <div class="box-single">
            <div class="row">
                <img src="img/fotos-da-banda/cover.jpg" alt="">
            </div>
            <div class="row">
               <audio src="" controls id="audioPlayer">
                   sorry, your browser doesn't support html5!
               </audio>
                <ul id="playlist">
                    <li class="current-song">
                       <div class="col-md-10">
                           <a href="musica/tempestade_particular.mp3">Tempestade Particular</a>
                       </div>
                       <div class="col-md-2">
                           <a type="button" href="img/N%25C3%25A3o%2520Fazem%2520Festas%2520Chiques/03_Tempestade%20Particular.mp3" target="_blank">Baixar</a>
                       </div>
                    </li>
                    <li>
                       <div class="col-md-10">
                           <a href="musica/tananam.mp3">Tananam</a>
                       </div>
                       <div class="col-md-2">
                           <a href="">Baixar</a>
                       </div>
                    </li>
                    <li>
                       <div class="col-md-10">
                           <a href="img/N%25C3%25A3o%2520Fazem%2520Festas%2520Chiques/02_Compre%20e%20Trabalhe.mp3">Compre e Trabalhe</a>
                       </div>
                       <div class="col-md-2">
                           <a href="">Baixar</a>
                       </div>
                    </li>
                    <li>
                       <div class="col-md-10">
                           <a href="img/N%25C3%25A3o%2520Fazem%2520Festas%2520Chiques/04_Um%20Cara%20Sem%20Sentido.mp3">Um Cara Sem Sentido</a>
                       </div>
                       <div class="col-md-2">
                           <a href="">Baixar</a>
                       </div>
                    </li>
                </ul>
                <script src="https://code.jquery.com/jquery-2.2.0.js"></script>
                <script>
                audioPlayer();
                    function audioPlayer(){
                        var currentSong = 0;
                        $("#audioPlayer")[0].src = $("playlist li a")[0];
                        $("#audioPlayer")[0].play;
                        $("#playlist li a").click(function(e){
                                          e.preventDefault();
                        $("#audioPlayer")[0].src = this;
                        $("#audioPlayer")[0].play;
                        $("#playlist li").removeClass("current-song");
                        currentSong = $(this).parent().index();
                        $(this).parent().addClass("current-song");
                    });
                        
                        $("#audioPlayer")[0].addEventListener("ended", function(){
                            currentSong++;
                            if(currentSong == $("playlist li a").length)
                                currentSong = 0;
                            $("#playlist li").removeClass("current-song");
                            $("#playlist li:eq("+currentSong+")").addClass("current-song");
                            $("#audioPlayer")[0].src = $("playlist li a")[currentSong].href;
                        });
                        
                    }
                </script>
            </div>
        </div>
    </div>
</div>
<!--<div class="container">
    <h2>Músicas & Downloands</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="thumbnail-musica">
                <div class="row">
                    <div class="col-md-4"><img src="img/fotos-da-banda/cover.jpg" alt=""></div>
                    <div class="col-md-6">informação</div>
                </div>
                <div class="row">
                    <div class="audio green-audio-player">
                      <div class="loading">
                        <div class="spinner"></div>
                      </div>
                      <div class="play-pause-btn">  
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                          <path fill="#566574" fill-rule="evenodd" d="M18 12L0 24V0" class="play-pause-icon" id="playPause"/>
                        </svg>
                      </div>

                      <div class="controls">
                        <span class="current-time">0:00</span>
                        <div class="slider" data-direction="horizontal">
                          <div class="progress">
                            <div class="pin" id="progress-pin" data-method="rewind"></div>
                          </div>
                        </div>
                        <span class="total-time">0:00</span>
                      </div>

                      <div class="volume">
                        <div class="volume-btn">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#566574" fill-rule="evenodd" d="M14.667 0v2.747c3.853 1.146 6.666 4.72 6.666 8.946 0 4.227-2.813 7.787-6.666 8.934v2.76C20 22.173 24 17.4 24 11.693 24 5.987 20 1.213 14.667 0zM18 11.693c0-2.36-1.333-4.386-3.333-5.373v10.707c2-.947 3.333-2.987 3.333-5.334zm-18-4v8h5.333L12 22.36V1.027L5.333 7.693H0z" id="speaker"/>
                          </svg>
                        </div>
                        <div class="volume-controls hidden">
                          <div class="slider" data-direction="vertical">
                            <div class="progress">
                              <div class="pin" id="volume-pin" data-method="changeVolume"></div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <audio crossorigin>
                        <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/355309/Swing_Jazz_Drum.mp3" type="audio/mpeg">
                      </audio>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="thumbnail-musica">
                <div class="row">
                    <div class="col-md-4"><img src="img/fotos-da-banda/cover.jpg" alt=""></div>
                    <div class="col-md-6">informação</div>
                </div>
                <div class="row">
                    <div class="audio green-audio-player">
                      <div class="loading">
                        <div class="spinner"></div>
                      </div>
                      <div class="play-pause-btn">  
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                          <path fill="#566574" fill-rule="evenodd" d="M18 12L0 24V0" class="play-pause-icon" id="playPause"/>
                        </svg>
                      </div>

                      <div class="controls">
                        <span class="current-time">0:00</span>
                        <div class="slider" data-direction="horizontal">
                          <div class="progress">
                            <div class="pin" id="progress-pin" data-method="rewind"></div>
                          </div>
                        </div>
                        <span class="total-time">0:00</span>
                      </div>

                      <div class="volume">
                        <div class="volume-btn">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#566574" fill-rule="evenodd" d="M14.667 0v2.747c3.853 1.146 6.666 4.72 6.666 8.946 0 4.227-2.813 7.787-6.666 8.934v2.76C20 22.173 24 17.4 24 11.693 24 5.987 20 1.213 14.667 0zM18 11.693c0-2.36-1.333-4.386-3.333-5.373v10.707c2-.947 3.333-2.987 3.333-5.334zm-18-4v8h5.333L12 22.36V1.027L5.333 7.693H0z" id="speaker"/>
                          </svg>
                        </div>
                        <div class="volume-controls hidden">
                          <div class="slider" data-direction="vertical">
                            <div class="progress">
                              <div class="pin" id="volume-pin" data-method="changeVolume"></div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <audio crossorigin>
                        <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/355309/Swing_Jazz_Drum.mp3" type="audio/mpeg">
                      </audio>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="thumbnail-musica">
                <div class="row">
                    <div class="col-md-4"><img src="img/fotos-da-banda/cover.jpg" alt=""></div>
                    <div class="col-md-6">informação</div>
                </div>
                <div class="row">
                  <audio controls>
                      <source src="img/N%25C3%25A3o%2520Fazem%2520Festas%2520Chiques/03_Tempestade%20Particular.mp3" type="audio/mpeg">
                  </audio>
                   <!--<audio id="demo" preload="auto" controls autoplay src="img/N%25C3%25A3o%2520Fazem%2520Festas%2520Chiques/03_Tempestade%20Particular.mp3"></audio>
                    <div>
                      <button onclick="document.getElementById('demo').play()">Reproduzir o áudio</button>
                      <button onclick="document.getElementById('demo').pause()">Pausar o áudio</button>
                      <button onclick="document.getElementById('demo').volume+=0.1">Aumentar o volume</button>
                      <button onclick="document.getElementById('demo').volume-=0.1">Diminuir o volume</button>
                    </div>
                    <script>
                    var v = document.getElementsById('demo')[0];
                    v.play();
                    </script>--
                </div>
            </div>
        </div>
    
        <div class="col-md-6">
            <div class="thumbnail-musica">
                <div class="row">
                    <div class="col-md-4"><img src="img/fotos-da-banda/cover.jpg" alt=""></div>
                    <div class="col-md-7"><h3>Tempestade Particular</h3></div>
                </div>
                <div class="row">
                    <div class="media-wrapper">
                        <audio id="player2" preload="none" controls style="max-width:100%;">
                            <source src="img/N%25C3%25A3o%2520Fazem%2520Festas%2520Chiques/03_Tempestade%20Particular.mp3" type="audio/mp3">
                        </audio>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
            <div class="thumbnail-musica">
                <div class="row">
                    <div class="col-md-4"><img src="img/fotos-da-banda/cover.jpg" alt=""></div>
                    <div class="col-md-6">informação</div>
                </div>
                <div class="row">
                    <div class="media-wrapper">
                        <audio id="player2" preload="none" controls style="max-width:100%;">
                            <source src="http://www.musicasparaouvir.org/wp-content/uploads/2015/10/01-Presente-de-um-Beija-Flor-Ao-Viv.mp3" type="audio/mp3">
                        </audio>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="thumbnail-musica">
                <div class="row">
                    <div class="col-md-4"><img src="img/fotos-da-banda/cover.jpg" alt=""></div>
                    <div class="col-md-6">informação</div>
                </div>
                <div class="row">
                    
                </div>
            </div>
        </div>
    </div>
</div>-->
</div>
</div>
<?php include'footer.php'?>