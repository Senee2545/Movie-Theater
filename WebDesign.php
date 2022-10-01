<?php
session_start();
    $_SESSION;
    include("connection.php");
    include("function.php"); 
    $userData = check_login($conn);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <Title>Movies Booking Page.com</Title>
        <style>
            body{
                background: linear-gradient(black,darkred,black);
                width:100%;
                margin:auto;
            }
            header{
                position: relative;
                border-radius: 20px;
            }

            * {box-sizing: border-box;}
            body {font-family: Verdana, sans-serif;}
            .mySlides {display: none;}
            img {vertical-align: middle;}

        

            /* Slideshow container */
            .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
            border-radius: 20px;
            }

            /* Number text (1/3 etc) */
            .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
            }
            /* The dots/bullets/indicators */
            .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
            }
            .active {
            background-color: #717171;
            }

            /* Fading animation */
            .fade {
            animation-name: fade;
            animation-duration: 1.5s;
            }

            @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
            }

            /* On smaller screens, decrease text size */
            @media only screen and (max-width: 300px) {
            .text {font-size: 11px}
            }

            /* card */
            header .cards{
                margin: auto;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            header .cards .card{
                width: 220px;
                height: 300px;
                margin: 0px 5px;
                border-radius: 15px;
                
            }

            header .cards .card img{
                width: 100%;
                height: 100%;
                border-radius: 15px;
                transition: all 200ms ease-in-out;
            }

            header .cards .card img:hover{
                transform: scale(1.1);
                cursor: pointer;
            }

            header .cards .card .heading1{
                color: white;
                line-height: 1.5;
                
            }
            
            /* Promotion */
            header .promo{
                margin: auto;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            header .promo .promotion{
                width: 350px;
                height: 300px;
                margin: 0px 5px;
                border-radius: 15px;
            }

            header .promo .promotion img{
                width: 100%;
                height: 100%;
                border-radius: 15px;
                transition: all 200ms ease-in-out;
            }

            header .promo .promotion img:hover{
                transform: scale(1.1);
                cursor: pointer;
            }


            .heading1 h4{
                font-size: 14px;
            }

            .heading1 p2{
                font-size: 12px;
            }

            p1 {
            font-size: 42px;
            color: wheat;
            font-style: normal;
            font-weight: bold;
            }

            a { 
            text-decoration: none; 
            color: white;
            }
   
        </style>
        
    </head>
    <body>
        <div style="background-color: black; font-size: 20px; font-family: Arial, Helvetica, sans-serif;
        padding: 30px; margin: 30px; color: white;">
             <img src="https://cdn-icons-png.flaticon.com/512/1169/1169097.png" width="120px" style="padding-left:10px;">&emsp;&emsp;
             
             <div style="float:right; margin-top:25px;margin-right:100px">
             <a href="WebDesign.php">
                <span id="Op1" onmouseover="document.getElementById('Op1').style.fontSize='22px';"
                onmouseout="document.getElementById('Op1').style.fontSize='20px';"> HOME &emsp;&emsp; </span>
             </a>
              
             <a href="Movie.html">
                <span id="Op2" onmouseover="document.getElementById('Op2').style.fontSize='22px';"
              onmouseout="document.getElementById('Op2').style.fontSize='20px';"> MOVIE &emsp;&emsp;</span>
             </a>

             <a href="Cinema.html">
              <span id="Op3" onmouseover="document.getElementById('Op3').style.fontSize='22px';"
              onmouseout="document.getElementById('Op3').style.fontSize='20px';"> CINEMA &emsp;&emsp;</span>
             </a>
              
              <span id="Op4" onmouseover="document.getElementById('Op4').style.fontSize='22px';"
              onmouseout="document.getElementById('Op4').style.fontSize='20px';"> INVESTOR RELATIONS &emsp;&emsp;</span>

              <a href="News.html">
                <span id="Op5" onmouseover="document.getElementById('Op5').style.fontSize='22px';"
              onmouseout="document.getElementById('Op5').style.fontSize='22px';"> NEWS &emsp;&emsp;</span>
              </a>

              <a href="Promotion.html">
                <span id="Op6" onmouseover="document.getElementById('Op6').style.fontSize='22px';"
              onmouseout="document.getElementById('Op6').style.fontSize='20px';"> PROMOTION &emsp;&emsp;</span>
              </a>

              <a href="FQAs.html">
              <span id="Op7" onmouseover="document.getElementById('Op7').style.fontSize='22px';"
              onmouseout="document.getElementById('Op7').style.fontSize='20px';"> FQAs &emsp;&emsp;</span>
              </a>
            
             </div>

        </div> 
        <header>
            <div class="slideshow-container">

                <div class="mySlides fade">
                  <div class="numbertext">1 / 7</div>
                  <img src="Image/OnepieceFilmred.jpg" width="100%">
                </div>
                
                <div class="mySlides fade">
                  <div class="numbertext">2 / 7</div>
                  <img src="Image/HarryPotter.jpg" width="100%">      
                </div>
    
                <div class="mySlides fade">
                    <div class="numbertext">3 / 7</div>
                    <img src="Image/Promotion1.jpg" width="100%">
                </div>
    
                <div class="mySlides fade">
                    <div class="numbertext">4 / 7</div>
                    <img src="Image/Promotion2.jpg" width="100%">      
                </div>
                
                <div class="mySlides fade">
                  <div class="numbertext">5 / 7</div>
                  <img src="Image/minions2.jpg" width="100%">
                </div>
    
                <div class="mySlides fade">
                    <div class="numbertext">6 / 7</div>
                    <img src="Image/Thor.jpg" width="100%">
                </div>
    
                <div class="mySlides fade">
                    <div class="numbertext">7 / 7</div>
                    <img src="Image/Spiderman.jpg" width="100%">
                </div>
                
                </div>
                <br>
                
                <div style="text-align:center">
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span>
                  <span class="dot"></span>
                  <span class="dot"></span>
                  <span class="dot"></span>
                </div>
                
                <script>
                    let slideIndex = 0;
                    showSlides();
                    
                    function showSlides() {
                      let i;
                      let slides = document.getElementsByClassName("mySlides");
                      let dots = document.getElementsByClassName("dot");
                      for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                      }
                      slideIndex++;
                      if (slideIndex > slides.length) {slideIndex = 1}    
                      for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                      }
                      slides[slideIndex-1].style.display = "block";  
                      dots[slideIndex-1].className += " active";
                      setTimeout(showSlides, 4000); // Change image every 4 seconds
                    }
                    </script>
                    
                      
                <div style="font-family: Arial, Helvetica, sans-serif; padding-left: 10px; color: white;">
                    <span id="Pj0" style=" color:gold; font-size: 30px;"><u><b>Projecting</b></u></span>
                    <span id="Pj1" onmouseover="document.getElementById('Pj1').style.color='gold';"
                          onmouseout="document.getElementById('Pj1').style.color='white';"><b> &emsp;&emsp;IMAX &emsp;</b></span>
            
                    <span id="Pj2" onmouseover="document.getElementById('Pj2').style.color='gold';"
                          onmouseout="document.getElementById('Pj2').style.color='white';"><b> 4DX &emsp;</b></span>
    
                    <span id="Pj3" onmouseover="document.getElementById('Pj3').style.color='gold';"
                          onmouseout="document.getElementById('Pj3').style.color='white';"><b> KIDS CINEMA &emsp;</b></span>
    
                    <span id="Pj4" onmouseover="document.getElementById('Pj4').style.color='gold';"
                          onmouseout="document.getElementById('Pj4').style.color='white';"><b> Contact Sales &emsp;</b></span>
                </div><br>

                <p1> Now Showing </p1><br>
                <br>

                <!-- Movie select -->
                <div class="cards">
                    <div class="card">
                        <a href="ThorWeb.php">
                            <img src="Image/Thormovie.jpg">
                        </a>
                        <div class="heading1">
                            <h4> Thor: Love and Thunder</h4>
                            <p2> 119 mins | Action/Adventure</p2>
                        </div>
                        
                    </div>
                    <div class="card">
                        <a href="HarryPotterWeb.php">
                            <img src="Image/HarryPottermovie.jpg">
                        </a>
                        <div class="heading1">
                            <h4> Harry Potter: the Prisoner of Azkaban </h4>
                            <p2> 142 mins | Fantasy/Adventure</p2>
                        </div>
                    </div>
                    <div class="card">
                        <a href="Minion2Web.php">
                            <img src="Image/Minionsmovie.jpg">
                        </a>
                        <div class="heading1">
                            <h4> Minions 2 </h4>
                            <p2> 90 mins | Comedy/Adventure</p2>
                        </div>
                    </div>
                    <div class="card">
                        <a href="TopGunWeb.php">
                            <img src="Image/TopGunmovie.jpg">
                        </a>
                        <div class="heading1">
                            <h4> Top Gun: Maverick </h4>
                            <p2> 130 mins | Action/Adventure</p2>
                        </div>
                    </div>
                    <div class="card">
                        <a href="SpidermanWeb.php">
                            <img src="Image/Spidermanmovie.jpg">
                        </a>
                        <div class="heading1">
                            <h4> Spiderman: No Way Home </h4>
                            <p2> 148 mins | Action/Adventure</p2>
                        </div>
                    </div>
                    <div class="card">
                        <a href="Plan75Web.php">
                            <img src="Image/Plan75movie.jpg">
                        </a>
                        <div class="heading1">
                            <h4> Plan 75 </h4>
                            <p2> 112 mins | Drama/Fantasy</p2>
                        </div>
                    </div>
                </div><br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <!-- line two --> 
                <div class="cards">
                    <div class="card">
                        <a href="Buppe2Web.php">
                            <img src="Image/Thaimovie1.jpg">
                        </a>
                        <div class="heading1">
                            <h4> Buppe 2 </h4>
                            <p2> 166 mins | Romance/Comedy</p2>
                        </div>
                    </div>
                    <div class="card">
                        <a href="OnePieceWeb.php">
                            <img src="Image/opmovie.jpg">
                        </a>
                        <div class="heading1">
                            <h4> One Piece Film: Red </h4>
                            <p2> 115 mins | Action/Adventure</p2>
                        </div>
                    </div>
                    <div class="card">
                        <a href="SuperPetWeb.php">
                            <img src="Image/Superpet.jpg">
                        </a>
                        <div class="heading1">
                            <h4> DC League of Super-Pets </h4>
                            <p2> 105 mins | Adventure/Sci-fi</p2>
                        </div>
                    </div>
                    <div class="card">
                        <a href="HuntWeb.php">
                            <img src="Image/Huntmovie.jpg">
                        </a>
                        <div class="heading1">
                            <h4> Hunt </h4>
                            <p2> 131 mins | Action/Thriller</p2>
                        </div>
                    </div>
                    <div class="card">
                        <a href="invitationWeb.php">
                            <img src="Image/invitationmovie.jpg">
                        </a>   
                        <div class="heading1">
                            <h4> The Invitation </h4>
                            <p2> 104 mins | Horror/Mystery</p2>
                        </div>
                    </div>
                    <div class="card">
                        <a href="BrahmastraWeb.php">
                        <img src="Image/Brahmastramovie.jpg">
                        </a>
                        <div class="heading1">
                            <h4> Brahmastra </h4>
                            <p2> 166 mins | Adventure/Fantasy </p2>
                        </div>
                    </div>
                </div><br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <!-- Coming Soon line -->

                <p1> Coming Soon </p1><br>
                <br>

                <div class="cards">
                    <div class="card">
                        <a href="avatarWeb.html">
                        <img src="Image/avatarmovie.jpg">
                        </a>
                        <div class="heading1">
                            <h4> Avatar 2 </h4>
                            <p2> 2022 | Sci-fi/Action </p2>
                        </div>
                    </div>
                    <div class="card">
                        <a href="blackAdamWeb.html">
                        <img src="Image/BlackAdam.jpg">
                        </a>
                        <div class="heading1">
                            <h4> Black Adam </h4>
                            <p2> 2022 | Action/Fantasy </p2>
                        </div>
                    </div>
                    <div class="card">
                        <a href="johnwickWeb.html">
                        <img src="Image/Johnwickmovie.jpg">
                        </a>
                        <div class="heading1">
                            <h4> John Wick 4 </h4>
                            <p2> 2023 | Action/Thriller </p2>
                        </div>
                    </div>
                    <div class="card">
                        <a href="DargonBallWeb.html">
                        <img src="Image/DargonBallmovie.jpg">
                        </a>
                        <div class="heading1">
                            <h4> Dargonball: Super Hero </h4>
                            <p2> 2022 | Adventure/Fantasy </p2>
                        </div>
                    </div>
                    <div class="card">
                        <a href="AmsterdamWeb.html">
                        <img src="Image/Amsterdammovie.jpg">
                        </a>
                        <div class="heading1">
                            <h4> Amsterdam </h4>
                            <p2> 2022 | Drama/Mystery </p2>
                        </div>
                    </div>
                    <div class="card">
                        <a href="StrangeworldWeb.html">
                        <img src="Image/Strangeworldmovie.jpg">
                        </a>
                        <div class="heading1">
                            <h4> Strange World </h4>
                            <p2> 2022 | Action/Comedy </p2>
                        </div>
                    </div>
                </div><br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <!-- Promotion -->
                <p1> Promotion </p1><br>
                <br>

                <div class="promo">
                    <div class="promotion">
                        <img src="Image/Promo1.jpg">
                    </div>
                    <div class="promotion">
                        <img src="Image/Promo2.jpg">
                    </div>
                    <div class="promotion">
                        <img src="Image/Promo3.jpg">
                    </div>
                    <div class="promotion">
                        <img src="Image/Promo4.jpg">
                    </div>
                </div>              
        </header>
</html>
