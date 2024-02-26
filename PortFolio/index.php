<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" type="image/jpg" href="img/developpeur.png">


    <!-- Liens Externes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Liens Internes - CSS -->
    <link rel="stylesheet" href="style/style.css">

    <!-- Liens Internes - JS -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <title>Yassine BOUNOU - Qui suis-je</title>
</head>
<body>
    <header>
        <div class="logo">Yassine BOUNOU</div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li>
                    <a href="" class="active">Qui suis-je</a>
                </li>
                <li>
                    <a href="parcours.php">Parcours</a>
                </li>
                <li>
                    <a href="projets.php">Projets</a>
                </li>
                <li>
                    <a href="veille.php">Veille</a>
                </li>
                <li>
                    <a href="experiences.php">Expériences</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="home">
        <div class="home-content">
            <h1>Bienvenue !</h1>
            <h3>Je suis Yassine</h3>
            <p>Un étudiant passionné d'informatique et de plein d'autres choses encore. Je suis animé par une ambition débordante et un esprit perfectionniste dans tout ce qui me tient à cœur. Explorez mon portfolio pour découvrir mon parcours, mes compétences et ma volonté constante de repousser les limites de l'innovation technologique.</p>
            <div class="btn-box">
                <a href="fichiers/CV Yassine Bounou 2024.pdf">Mon CV</a>
                <!--<a href="https://drive.google.com/file/d/1Hwa1P-gazQzZs_40FdLOZJMh14inhkYO/view" target="_blank">Mon CV</a>-->
            </div>
        </div>
        <div class="home-content">
            <img src="img/profile_image.jpg" alt="" class="img-profil">
        </div>
    </div>


    <hr class="first-hr">

    <h3 class="comp-titre">Mes compétences techniques</h3>

    <div class="comp-bloc1">
        <div class="comp1">
            <img id="compimg" class="comp-img" src="img/html-5.png" alt="">
            <!-- <div id="myModal" class="modal">
                <div class="modal-content">
                    <span id="closeModalBtn" class="close">&times;</span>
                    <p>Welcome to this beautiful modal! It's designed to catch your attention.</p>
                </div>
            </div> -->
        </div>

        <div class="comp2">
            <img id="compimg2" class="comp-img" src="img/css-3.png" alt="">
        </div>

        <div class="comp3">
            <img class="comp-img" src="img/c-sharp.png" alt="">
        </div>

        <div class="comp4">
            <img class="comp-img" src="img/php.png" alt="">
        </div>

        <div class="comp5">
            <img class="comp-img" src="img/mysql.png" alt="">
        </div>

        <div class="comp6">
            <img class="comp-img" src="img/python.png" alt="">
        </div>
    </div>

    <div class="comp-bloc2">
        <div class="comp7">
            <img class="comp-img2" src="img/js.png" alt="">
        </div>

        <div class="comp8">
            <img class="comp-img2" src="img/wordpress.png" alt="">
        </div>

        <div class="comp9">
            <img class="comp-img2" src="img/icons8-office-365-512.png" alt="">
        </div>
    </div>

    <!-- <hr class="second-hr"> -->

    <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Navigation</h4>
  	 			<ul>
  	 				<li><a href="index.php">Qui suis-je</a></li>
  	 				<li><a href="#">Parcours</a></li>
  	 				<li><a href="#">Expériences</a></li>
  	 				<li><a href="#">Projets</a></li>
                    <li><a href="#">Veille</a></li>
                    <li><a href="contact.php">Contact</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Coordonnées</h4>
  	 			<ul>
  	 				<li><a href="mailto:bounou.yassine.sio@gmail.com">bounou.yassine.sio</a></li>
  	 				<li><a href="#">0783858643</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Socials</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fa-brands fa-github"></i></a>
  	 				<a href="#"><i class="fa-brands fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
    <p class="copyright">© Yassine Bounou Tout droits réservés</p>
    </footer>

    <!-- <script>
        //HTML
        let compimg = document.getElementById("compimg");
        let modal = document.getElementById("myModal");
        let closeModalBtn = document.getElementById("closeModalBtn");

        compimg.addEventListener("click", function() {
            modal.style.display = "block";
        });

        closeModalBtn.addEventListener("click", function() {
            modal.style.display = "none";
        });

        window.addEventListener("click", function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });

        //CSS
        let compimg2 = document.getElementById("compimg2");
        let modal2 = document.getElementById("myModal");
        let closeModalBtn2 = document.getElementById("closeModalBtn");

        compimg2.addEventListener("click", function() {
            modal.style.display = "block";
        });

        closeModalBtn2.addEventListener("click", function() {
            modal.style.display = "none";
        });

        window.addEventListener("click", function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    </script> -->

    <style>
        /* .modal .footer-col h4{
            color: rgba(0, 0, 0, 0.7);
        } */

        /* .modal {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .modal-content {
            position: relative;
            background-color: #ffffff;
            margin: 10% auto;
            padding: 20px;
            width: 50%;
            border-radius: 8px;
            box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.3);
        }

        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            transition: color 0.2s;
        }

        .close:hover,
        .close:focus {
            color: #ff5b5b;
        } */

        .first-hr{
            margin-top: 40px;
            width: 75%;
            margin-left: 12.5%;
            border: 0.25px solid;
            color: #E4E9E9;
        }

        .second-hr{
            margin-bottom: 40px;
            width: 75%;
            margin-left: 12.5%;
            border: 0.25px solid;
            color: #E4E9E9;
        }

        .comp-titre{
            padding-top: 40px;
            font-size: 32px;
            text-align: center;
        }

        .comp-bloc1{
            width: 80%;
            margin: auto;
            padding-top: 80px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin-bottom: 50px;
        }

        .comp-bloc2{
            width: 80%;
            padding-bottom: 80px;
            display: flex;
            margin: auto;
            flex-direction: row;
            justify-content: center;
        }

        .comp-img{
            margin-left: 30px;
            margin-right: 30px;
            width: 100px;
            height: 100px;
            transition: transform .1s;
        }

        .comp-img:hover{
            transform: scale(1.25); 
        }

        .comp-img2{
            margin-left: 50px;
            margin-right: 50px;
            width: 100px;
            height: 100px;
            transition: transform .1s;
        }

        .comp-img2:hover{
            transform: scale(1.25); 
        }

        .home{
            display: flex;
            flex-direction: row;
            padding: 20px 20px;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .home-content{
            padding: 50px 50px;
            width: 570px;
        }

        .home-content p{
            padding: 20px 0px 30px 0px;
            font-size: 17px;
        }

        .home-content h3{
            font-size: 32px;
            color: #00abf0;
        }

        .home-content h1{
            font-size: 50px;
        }

        .img-profil{
            width: 300px;
            border-radius: 100%;
            margin-left: 30%;
            box-shadow: 10px 11px 59px 1px rgba(0,0,0,0.75);
            -webkit-box-shadow: 10px 11px 59px 1px rgba(0,0,0,0.75);
            -moz-box-shadow: 10px 11px 59px 1px rgba(0,0,0,0.75);   
        }

        .btn-box{
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            width: 345px;
            height: 50px;
        }

        .btn-box a{
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 150px;
            height: 100%;
            background: #00abf0;
            border-radius: 8px;
            font-size: 19px;
            color: white;
            font-weight: 600;
            letter-spacing: 1px;
            z-index: 0;
            position: relative;
            overflow: hidden; 
        }

        .btn-box a::before{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: #081b29;
            z-index: -1;
            transition: width 0.5s; 
        }

        .btn-box a:hover::before{
            width: 100%;
        }

        @media screen and (max-width: 900px) {
            .home{
                display: flex;
                flex-direction: column;
            }

            .home-content{
                height: auto;
                text-align: center;
                padding: 10% 20%;
            }
        }
    </style>

    <script>
        hamburger = document.querySelector(".hamburger");
        hamburger.onclick = function(){
            navBar = document.querySelector(".nav-bar");
            navBar.classList.toggle("active");
        }
    </script>
</body>
</html>