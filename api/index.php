<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portfolio - Basma Elmaimouni</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- ===== NAVBAR ===== -->
    <header>
        <nav>
            <h2 class="logo">Basma<span>.</span></h2>

            <ul>
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#about">À propos</a></li>
                <li><a href="#ateliers">Ateliers</a></li>
                <li><a href="#projets">Projets</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>


    <!-- ===== ACCUEIL ===== -->
    <section id="accueil" class="hero">

        <div class="hero-text">
            <p class="welcome">Bienvenue sur mon portfolio</p>

            <h1>
                Bonjour, je suis <span>Basma Elmaimouni</span>
            </h1>

            <h3>Développeuse Web</h3>

            <p>
                Je suis passionnée par le développement web et la création
                de sites modernes, simples et efficaces.
            </p>

            <a href="#ateliers" class="btn">Voir mes ateliers</a>
        </div>

        <div class="hero-image">
            <div class="circle">
                <span>&lt;/&gt;</span>
            </div>
        </div>

    </section>


    <!-- ===== À PROPOS ===== -->
    <section id="about" class="about">

        <h2 class="title">À propos de moi</h2>

        <div class="about-content">

            <div>
                <h3>Qui suis-je ?</h3>

                <p>
                    Je suis Basma Elmaimouni, une étudiante passionnée
                    par le développement web. Durant ma formation,
                    j'ai réalisé plusieurs ateliers et projets qui
                    m'ont permis de développer mes compétences.
                </p>

                <p>
                    J'aime apprendre de nouvelles technologies et
                    transformer mes idées en projets web.
                </p>
            </div>

            <div class="skills">
                <h3>Mes compétences</h3>

                <p>HTML</p>
                <div class="skill-bar">
                    <div class="html">90%</div>
                </div>

                <p>CSS</p>
                <div class="skill-bar">
                    <div class="css">85%</div>
                </div>

                <p>JavaScript</p>
                <div class="skill-bar">
                    <div class="js">75%</div>
                </div>

                <p>PHP</p>
                <div class="skill-bar">
                    <div class="php">70%</div>
                </div>
            </div>

        </div>

    </section>


    <!-- ===== ATELIERS ===== -->
    <section id="ateliers" class="ateliers">

        <h2 class="title">Mes ateliers</h2>

        <p class="section-text">
            Découvrez les différents ateliers réalisés durant ma formation.
        </p>

        <div class="cards">

            <div class="card">
                <span class="number">01</span>
                <h3>Atelier HTML</h3>
                <p>Création et structure des pages web avec HTML.</p>

                <a href="ateliers/atelier1.php">Voir l'atelier</a>
            </div>

            <div class="card">
                <span class="number">02</span>
                <h3>Atelier CSS</h3>
                <p>Mise en forme et création d'un design web.</p>

                <a href="ateliers/atelier2.php">Voir l'atelier</a>
            </div>

            <div class="card">
                <span class="number">03</span>
                <h3>Atelier JavaScript</h3>
                <p>Création d'interactions avec JavaScript.</p>

                <a href="ateliers/atelier3.php">Voir l'atelier</a>
            </div>

            <div class="card">
                <span class="number">04</span>
                <h3>Atelier PHP</h3>
                <p>Création de formulaires et traitement des données.</p>

                <a href="ateliers/atelier4.php">Voir l'atelier</a>
            </div>

            <div class="card">
                <span class="number">05</span>
                <h3>Atelier SQL</h3>
                <p>Création et manipulation d'une base de données.</p>

                <a href="ateliers/atelier5.php">Voir l'atelier</a>
            </div>

            <div class="card">
                <span class="number">06</span>
                <h3>Atelier Projet</h3>
                <p>Réalisation d'un projet web complet.</p>

                <a href="ateliers/atelier6.php">Voir l'atelier</a>
            </div>

        </div>

    </section>


    <!-- ===== PROJETS ===== -->
    <section id="projets" class="projects">

        <h2 class="title">Mes projets</h2>

        <div class="project-box">

            <div class="project">
                <h3>Student Market</h3>

                <p>
                    Une plateforme destinée aux étudiants pour acheter
                    et vendre des produits et services.
                </p>

                <a href="#" class="btn-small">Voir le projet</a>
            </div>


            <div class="project">
                <h3>Portfolio</h3>

                <p>
                    Mon portfolio personnel qui présente mes compétences,
                    mes ateliers et mes différents projets.
                </p>

                <a href="#" class="btn-small">Voir le projet</a>
            </div>

        </div>

    </section>


    <!-- ===== CONTACT ===== -->
    <section id="contact" class="contact">

        <h2 class="title">Contact</h2>

        <p>
            Vous souhaitez me contacter ? N'hésitez pas à m'envoyer
            un message.
        </p>

        <a href="contact.php" class="btn">Me contacter</a>

    </section>


    <!-- ===== FOOTER ===== -->
    <footer>

        <p>
            © 2026 Basma Elmaimouni - Portfolio
        </p>

    </footer>


    <script src="script.js"></script>

</body>
</html>