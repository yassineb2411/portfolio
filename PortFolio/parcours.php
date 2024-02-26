<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Liens Internes -->
    <link rel="stylesheet" href="style/style.css">

    <!-- Liens Externes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Liens Internes - JS -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <title>Yassine BOUNOU - Parcours</title>
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
                    <a href="index.php">Qui suis-je</a>
                </li>
                <li>
                    <a href="" class="active">Parcours</a>
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

    <section class="timeline-section">
        <div class="timeline-items">
            <div class="timeline-item">
                <div class="timeline-date">2022</div>
                <div class="timeline-content">
                    <h3>Intégration du BTS SIO</h3>
                    <p>Après une année passée dans une école d'informatique qui ne m'a pas réellement plue mais 
                        qui m'a malgré tout permis de trouver ma voie professionnelle,
                        j'ai intégré via Parcoursup le BTS SIO du lycée Voillaume d'Aulnay-sous-bois.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">2021</div>
                <div class="timeline-content">
                    <h3>Obtention du Baccalauréat</h3>
                    <p>J'ai en premier temps intégré le lycée Saint-Charles en 2018 (après avoir obtenu le brevet),
                        ensuite est venue la période Covid, bien évidemment difficile pour pas mal de personnes ainsi que pour moi...
                        Après certaines complications dans mon lycée j'ai décidé de changer d'établissement intégrant ainsi 
                        le lycée Saint-André à Choisy-le-roi. J'y ai donc par la suite obtenu mon Baccalauréat général spécialités 
                        Mathématiques et Physique-Chimie. </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">2018</div>
                <div class="timeline-content">
                    <h3>Obtention du Brevet</h3>
                    <p>En 2018, après avoir integré l'établissement Saint-Charles situé à Athis-mons
                        en région parisienne, j'ai obtenu mon brevet avec la mention bien.</p>
                </div>
            </div>
        </div>
    </section>

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
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
    <p class="copyright">© Yassine Bounou Tout droits réservés</p>
    </footer>

    <style>
        

        .timeline-section{
	        min-height: 100vh;
	        padding: 100px 15px 150px;
        }

        .timeline-items{
            max-width: 1000px;
            margin:auto;
            display: flex;
            flex-wrap: wrap;
        }

        .timeline-item{
            margin-bottom: 40px;
            width: 100%;
            position: relative;
        }

        .timeline-item:last-child{
            margin-bottom: 0;
        }

        .timeline-item:nth-child(odd){
            padding-right: calc(50% + 30px);
            text-align: right;
        }

        .timeline-item:nth-child(even){
            padding-left: calc(50% + 30px);
        }

        .timeline-dot{
            height: 16px;
            width: 16px;
            background-color: #fefefe;
            position: absolute;
            left: calc(50% - 8px);
            border-radius: 50%;
            top:10px;
        }

        .timeline-date{
            font-size: 18px;
            color: #fefefe;
            margin:6px 0 15px;
        }

        .timeline-content{
            background-color: #fefefe;
            padding: 30px;
            border-radius: 5px;
        }

        .timeline-content h3{
            font-size: 22px;
            color: #11101b;
            margin:0 0 10px;
            font-weight: bold;
        }

        .timeline-content p{
            color: #11101b;
            font-size: 16px;
            font-weight: 300;
            line-height: 22px;
        }

        @media(max-width: 767px){
            .timeline-items::before{
                left: 7px;
            }
            .timeline-item:nth-child(odd){
                padding-right: 0;
                text-align: left;
            }
            .timeline-item:nth-child(odd),
            .timeline-item:nth-child(even){
                padding-left: 37px;
            }
            .timeline-dot{
                left:0;
            }
        }

        *{
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
            box-sizing: border-box;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("img/computer_wp.jpg") no-repeat center;
            background-size: cover;
            filter: blur(0px); 
            z-index: -1; 
        }

        body {
            width: 100%;
            height: 100vh;
            background: #fefefe;
        }

        header{
            width: 100%;
            height: 80px;
            background: #11101b;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 100px;
        }

        .logo{
            font-size: 28px;
            font-weight: bold;
            color: #fefefe;
        }

        .hamburger{
            display: none;
        }

        .nav-bar ul{
            display: flex; 
        }

        .nav-bar ul li a{
            display: block;
            color: #fefefe;
            font-size: 20px;
            padding: 10px 25px;
            border-radius: 50px;
            transition: 0.2s;
            margin: 0 5px;
        }

        .nav-bar ul li a:hover{
            color: #11101b;
            background: #fefefe;   
        }

        .nav-bar ul li a.active{
            color: #11101b;
            background: #fefefe;
        }

        @media only screen and (max-width: 1320px) {
            header{
                padding: 0 50px;
            }
        }

        @media only screen and (max-width: 1100px) {
            header{
                padding: 0 30px;
            }
        }

        @media only screen and (max-width: 900px) {
            .hamburger{
                display: block;
                cursor: pointer;
            }
            .hamburger .line{
                width: 30px;
                height: 3px;
                background: #fefefe;
                margin: 6px 0;
            }
            .nav-bar{
                height: 0;
                position: absolute;
                top: 80px;
                left: 0;
                right: 0;
                width: 100vw;
                background: #11101b;
                transition: 0.5s;
                overflow: hidden;
                z-index: 1;
            }

            .nav-bar.active{
                height: 500px;
            }

            .nav-bar ul{
                display: block;
                width: fit-content;
                margin: 80px auto 0 auto;
                text-align: center;
                transition: 0.5s;
                opacity: 0;
            }

            .nav-bar.active ul{
                opacity: 1;
            }
            .nav-bar ul li a{
                margin-bottom: 12px;
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