<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Liens Externes -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        
        <!-- Liens Internes - JS -->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        
        <!-- Liens Internes - CSS -->
        <link rel="stylesheet" href="style/style.css">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Yassine BOUNOU - Projets</title>
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
                        <a href="" class="active">Projets</a>
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

        <div class="proj-intro">
        <span class="material-symbols-outlined">tactic</span>
            <p>J'ai pu durant ces deux dernières années accomplir plusieurs <b>projets</b>, que ce soit 
                seul ou en groupe, ce qui m'a appris à développer mes capacités
                et aptitudes à travailler en groupe mais aussi mes capacités en 
                terme d'informatique et de développement
            </p>
        </div>

        <hr class="first-hr">

        <p class="titre-proj">Projets Scolaires</p>

        <div class="proj-container">
                <div class="projets-nb1">
                    <img class="img-projet1" src="img/gsbfrais.png" alt="">
                    <p class="projet-desc"><strong>GSB Winforms</strong></p>
                        <a href="#winforms">
                            <div class="lien-projet-scolaire">
                                <p class="lien-proj">En savoir plus</p>
                                <img class="arrow-ios" src="img/arrow.png" alt="">
                            </div>  
                        </a> 
                </div>

                <div class="projets-nb1">
                    <img class="img-projet1" src="img/winforms.png" alt="">
                    <p class="projet-desc"><strong>GSB Laravel</strong></p>
                        <a href="#laravel">
                            <div class="lien-projet-scolaire">
                                <p class="lien-proj">En savoir plus</p>
                                <img class="arrow-ios" src="img/arrow.png" alt="">
                            </div>  
                        </a> 
                </div>

                <div class="projets-nb1">
                    <img class="img-projet1" src="img/projet_frais.png" alt="">
                    <p class="projet-desc"><strong>Asian Food</strong></p>
                        <a href="#asianfood">
                            <div class="lien-projet-scolaire">
                                <p class="lien-proj">En savoir plus</p>
                                <img class="arrow-ios" src="img/arrow.png" alt="">
                            </div>  
                        </a> 
                </div>
            <!-- </div> -->
            <!-- <div class="projets-nb2">
                <p class="projet-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel deserunt debitis, repellendus dolor sint, voluptate esse magnam iste possimus dolorem reprehenderit voluptates molestias vitae neque blanditiis tempora, praesentium eos illum?</p>
            </div>
            <div class="projets-nb2">
                <p class="projet-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur facere nihil laudantium cum omnis odit amet repudiandae, dignissimos minus reprehenderit. Est accusantium delectus maxime distinctio modi eius repudiandae ratione voluptatibus?</p>
            </div>
            <div class="projets-nb2">
                <p class="projet-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem totam minus, cupiditate expedita architecto ea porro facere ipsam aperiam repellendus sunt quibusdam, voluptatibus cum beatae fugiat natus sequi, non dignissimos?</p>
            </div> -->
        </div>

        <div class="projet-scolaire" id="winforms">
            <p class="titre-projet-scol">GSB Winforms</p>
            <p class="projet-scol1">
                J'ai réalisé à l'aide de mes connaissances et de la documentation donnée par mes 
                professeurs d'AP une mission en C# Winforms avec une base de données SQL Server. 
                Cette mission consistait en la gestion de frais dans un laboratoire nommé Galaxy Swiss Bourdin.
                J'ai réellement pu développer mes capacités à raisonner de manière informatique afin de
                trouver des solutions techniques à des problèmes donnés. J'ai du à plusieurs reprises, étant 
                confronté à des problèmes auxquels je n'avais jamais fait face, rechercher franchement sur
                le net des solutions car n'ayant personne à mes côtés pour m'aider, j'ai donc du compter sur
                moi même.
            </p>
        </div>

        <div class="projet-scolaire2" id="laravel">
            <p class="titre-projet-scol">GSB Laravel</p>
            <p class="projet-scol1">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Quasi fugiat atque amet iste error consequuntur minus ullam obcaecati,
                vero molestias distinctio eligendi ab repellendus quo voluptate 
                laboriosam accusantium expedita velit.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde,
                qui commodi. Hic asperiores quibusdam sed qui! Molestiae repellendus 
                upiditate distinctio. Quam reiciendis culpa sequi laudantium 
                inventore distinctio voluptates, ex ducimus.
            </p>
        </div>

        <div class="projet-scolaire" id="asianfood">
            <p class="titre-projet-scol">Asian Food</p>
            <p class="projet-scol1">
                Asian food est un projet réalisé en première année en duo.
                J'ai eu l'occasion d'apprendre pour la première fois à travailler en groupe 
                (mode de travail très courant dans le monde de l'informatique) ce qui m'a permis 
                donc de découvrir à quoi cela s'apparentait. Concernant le projet, il s'agit 
                d'une application web extranet pour un restaurant nommé Asian Food permettant de gérer 
                les stocks de produits (légumes, fruits, viandes, etc...) et faire des commandes.
                J'ai réalisé ce projet avec les langages suivants : PHP, JavaScript, HTML, CSS.
            </p>
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
    </body>
</html>

<style>
    .lien-projet-scolaire{
        display: flex;
        flex-direction: row;
        margin-top: 20px;
        width: 200px;
        transition: all 0.3s ease;
    }

    .lien-projet-scolaire:hover{
        padding-left: 8px;
    }

    html{
        scroll-behavior: smooth;
    }   

    .arrow-ios{
        margin-top: 3.5px;
        margin-left: 5px;
        width: 20px;
        height: 20px;
    }

    .lien-proj{
        color: black;
    }

    .titre-projet-scol{
        text-align: center;
        padding-top: 50px;
        font-size: 30px;
    }

    .projet-scol1{
        text-align: center;
        padding: 50px 10% 50px;
    }

    .projet-scolaire2{
        height:360px;
        background-color: #fff;
    }

    .projet-scolaire{
        height: 360px;
        background-color: #ECECEC;
    }

    .titre-proj{
        font-size: 25px;
        text-align: center;
        margin-bottom: 50px;
    }

    .projet-desc{
        margin-top: 20px;
    }

    .material-symbols-outlined{
    font-variation-settings:
    'FILL' 0,
    'wght' 400,
    'GRAD' 0,
    'opsz' 24;
    color: black;
    }

    .img-projet1{
        width: 230px;
        border-radius: 3px;
        height: 180px;
    }

    .proj-intro {
        padding: 100px 30%;
        text-align: center;
    }

    .first-hr{
        margin-top: 40px;
        margin-bottom: 100px;
        width: 75%;
        margin-left: 12.5%;
        border: 0.25px solid;
        color: #E4E9E9;
    }

    .proj-container{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        width: 75%;
        margin: auto;
        justify-content: center;
        margin-bottom: 125px;
        }

    .projets-nb1{
        margin: 0px 35px 0px 35px;
        background-color: #ECECEC;
        width: 288px;
        color: black;
        padding: 1.8rem;
        border-radius: 5px;
        
    }
    
    /* .projets-nb2{
        margin: 70px 35px 0px 35px;
        background-color: #ECECEC;
        color: black;
        width: 25%;
        border-radius: 5px;
        padding: 1.25rem;
    } */
</style>