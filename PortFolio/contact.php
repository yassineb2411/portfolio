<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Liens Externes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
    <!-- Liens Internes - JS -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Liens Internes - CSS -->
    <link rel="stylesheet" href="style/style.css">

    <title>Yassine BOUNOU - Contact</title>
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
                    <a href="" class="active">Contact</a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="contact-container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Contacte-moi</h2>
				<input type="text" class="field" placeholder="Nom et Prénom">
				<input type="text" class="field" placeholder="Email">
				<input type="text" class="field" placeholder="Téléphone">
				<textarea placeholder="Message" class="field"></textarea>
				<button class="btn">Envoyer</button>
			</div>
		</div>
	</div>

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

    <script>
        hamburger = document.querySelector(".hamburger");
        hamburger.onclick = function(){
            navBar = document.querySelector(".nav-bar");
            navBar.classList.toggle("active");
        }
    </script>

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body{
            height: 100vh;
            width: 100%;
        }

        .contact-container {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px 30px;
        }

        .contact-container:after{
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background: url("img/miami_it.jpg") no-repeat center;
            background-size: cover;
            filter: blur(50px);
            z-index: -1;
        }

        .contact-box{
            max-width: 850px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: #fff;
            box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
        }

        .left{
            background: url("img/iphone_mac.jpg") no-repeat center;
            background-size: cover;
            height: 100%;
        }

        .right{
            padding: 25px 40px;
        }

        h2{
            position: relative;
            padding: 0 0 10px;
            margin-bottom: 10px;
        }

        h2:after{
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            height: 4px;
            width: 50px;
            border-radius: 2px;
            background-color: #00abf0;
        }

        .field{
            width: 100%;
            border: 2px solid rgba(0, 0, 0, 0);
            outline: none;
            background-color: rgba(230, 230, 230, 0.6);
            padding: 0.5rem 1rem;
            font-size: 1.1rem;
            margin-bottom: 22px;
            transition: .3s;
        }

        .field:hover{
            background-color: rgba(0, 0, 0, 0.1);
        }

        textarea{
            min-height: 150px;
        }

        .btn{
            width: 100%;
            padding: 0.5rem 1rem;
            background-color: #00abf0;
            color: #fff;
            font-size: 1.1rem;
            border: none;
            outline: none;
            cursor: pointer;
            transition: .3s;
        }

        .btn:hover{
            background-color: #24262b;
        }

        .field:focus{
            border: 2px solid rgba(30,85,250,0.47);
            background-color: #fff;
        }

        @media screen and (max-width: 880px){
            .contact-box{
                grid-template-columns: 1fr;
            }
        }

        .nav-bar {
            z-index: 1;
        }

        /* .footer {
            background-color: #24262b;
            padding: 70px 0;
        }

        .footer .container {
            max-width: 1170px;
            margin: auto;
        }

        .footer .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; 
        }

        .footer-col {
            width: 25%;
            padding: 0 15px;
            text-align: center;
        }

        .footer-col h4 {
            font-size: 18px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }

        .footer-col h4::before {
            content: '';
            position: absolute;
            left: 50%; 
            bottom: -10px;
            transform: translateX(-50%); 
            background-color: #ffffff;
            height: 2px;
            box-sizing: border-box;
            width: 50px;
        }

        .footer-col ul li:not(:last-child) {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            font-size: 16px;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #bbbbbb;
            display: block;
            transition: all 0.3s ease;
        }

        .footer-col ul li a:hover {
            color: #ffffff;
            padding-left: 8px;
        }

        .footer-col .social-links a {
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255, 255, 255, 0.2);
            margin: 0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #ffffff;
            transition: all 0.5s ease;
        }

        .footer-col .social-links a:hover {
            color: #24262b;
            background-color: #ffffff;
        }

        @media (max-width: 767px) {
            .footer-col {
                width: 50%;
                margin-bottom: 30px;
            }
        }

        @media (max-width: 574px) {
            .footer-col {
                width: 100%;
            }
        } */
    </style>
</body>
</html>




