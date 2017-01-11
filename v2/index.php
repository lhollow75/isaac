<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>ISAAC Intelligence artificielle</title>
		<link rel="stylesheet" href="main.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
        
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="http://www.isaac-ia.com/img/favicon/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://www.isaac-ia.com/img/favicon/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://www.isaac-ia.com/img/favicon/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://www.isaac-ia.com/img/favicon/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="http://www.isaac-ia.com/img/favicon/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="http://www.isaac-ia.com/img/favicon/apple-touch-icon-152x152.png" />
        <link rel="icon" type="image/png" href="http://www.isaac-ia.com/img/favicon/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="http://www.isaac-ia.com/img/favicon/favicon-16x16.png" sizes="16x16" />
        <meta name="application-name" content="Isaac"/>
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="http://www.isaac-ia.com/mstile-144x144.png" />

        <!-- Hotjar Tracking Code for www.isaac-ia.com -->
        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:380826,hjsv:5};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
        </script>
	
	<?php 
	phpinfo();
	session_start();
	if (isset($_SESSION['login']) and $_SESSION['login']==true){
		var_dump($_SESSION);
		echo "Bonjour ".utf8_encode($_SESSION["prenom"]);
		?>
		<a class="btn_logout" href="../logout.php">Deconnexion</a>
		<?php
	} else {
		?>
		<a class="btn_inscription" href="connexion.php">Se connecter</a>
		<a class="btn_inscription" href="../logon.php">S'inscrire</a>
		<?php
	}
	?>
	</head>

<body>
    



    
    
    
<div class="lp">
    
	<section id="intro">
		<div id="logo-isaac">
            <a href="http://www.isaac-ia.com" title="Retour à l'accueil">
            <img src="img/isaac-logo.svg" alt="Isaac, votre assistant sur-mesure">
            </a>
        </div>
        <img class="intro-line" src="img/intro-hr.gif">

		<h1>Coucou, je m'appelle Isaac !</h1>
		<p>Je suis le partenaire sur-mesure pour votre entreprise</p>
        
        <div class="search_section">
            <!--Champs de saisie-->
            <input type="email" id="email" placeholder="Entrez votre email pour recevoir la newsletter..."/>
            <!--Bouton d'envoi-->
            <div class="button">
                <button type="submit" id="getemail">
                    <span class="sendmail"></span>
                </button>
            </div>
		</div>
        
	</section>

	<section id="section1">
        <div class="description">
            <h2>Vous venez de créer votre entreprise et vous souhaitez lui donner toutes les chances de réussir&nbsp;?</h2>
    
            <p>Vous êtes au bon endroit. Je m’appelle ISAAC, je prends vie grâce au logiciel Watson d’IBM et je serai votre interlocuteur privilégié si nous collaborons. Ma mission&nbsp;? Vous conseiller au bon moment et vous accompagner au quotidien pour prendre en charge certaines de vos tâches et répondre à vos questions.</p>
            
            <p>On estime que près de 90% des start-ups échouent lors de la première année : alors, prêts à faire partie des 10% restants&nbsp;?</p>
        </div>
        
        <img src="img/picto-network.svg">
    </section>
    
	<section id="section2">
        <img src="img/isaac-logo-color.png">
        
        <div class="description">
            <h2>Plus qu’un simple assistant, je vous accompagne 24h/24.</h2>
            
            <p>Je réponds à toutes vos questions <strong>en temps réel</strong> mais je suis également force de propositions et vous soumet, selon vos besoins, des solutions innovantes &amp; différenciantes.</p>
            
            <p>Aide au management d’équipes, à l’organisation interne de votre entreprise, à l’analyse de vos données : je suis <strong>votre partenaire idéal.</strong></p>
            
            <p>À votre écoute, je sais également faire preuve de discernement pour vous proposer <strong>des solutions sur-mesure</strong> différenciantes.</p>
        </div>
    </section>
    
    <section class="bg1"></section>

	<section id="section5">
        <div class="description">
            
            
            
            <h2>Présent à tout moment,<br> je vous offre une expérience cross-platforms</h2>

            
                <div class="platform">
                    <img class="cp-small" src="img/cp-laptop.svg" alt="">
                    <h3>Desktop</h3>
                    <p>Je suis intégré aux ordinateurs de chaque employé, à travers une interface ergonomique et entièrement personnalisable.</p>
                </div>    
            
                <div class="platform">
                    <img class="cp-big"  src="img/cp-objet.svg">
                    <h3>Objet physique</h3>
                    <p>Présent au sein de votre entreprise sous la forme d’objet connecté, je protège vos données, en les traitant en circuit fermé.</p>
                </div>   
                
                <div class="platform">
                    <img class="cp-small" src="img/cp-smartphone.svg">
                    <h3>Mobile</h3>
                    <p>Responsive, vous pouvez m’emporter partout avec vous, lors de vos rendez-vous professionnels.</p>
                </div>   

        </div>
    </section>

 	<section id="section3">
        <div class="description">
            <h2>L’ensemble de mes fonctionnalités,<br>pour vous aider dans votre projet</h2>
            
            <div class="article">
                <img src="img/features-brainstorm.svg" alt="Aide">
                
                <p>Je vous aide à l’élaboration de votre stratégie et la personnalise en fonction de vos besoins.</p>
            </div>
            
            <div class="article">
                <img src="img/features-analytics.svg" alt="Synthèse">
                
                <p>Je synthétise vos KPI pour les rendre plus intelligibles et vous propose un plan d’actions adapté.</p>
            </div>
            
            <div class="article">
                <img src="img/features-help.svg" alt="Informations">
                
                <p>Pour toujours rester en veille sur l’actualité de votre secteur, je vous tiens informé des dernières nouveautés et vous propose de nouvelles solutions pour optimiser votre projet d’entreprise.</p>
            </div>
            
            <div class="article">
                <img src="img/features-visibility.svg" alt="Accompagnement">
                
                <p>J’accompagne vos employés au quotidien afin de répondre à leurs questions, d’automatiser les tâches de leur choix et de leur proposer de nouvelles méthodologies de travail.</p>
            </div>
            
        </div>
    </section>

    
	<section id="section4">
        <div class="description">
            <p>Restez informé des dernières actualités d’Isaac<br>en souscrivant à la newsletter.</p>            
        </div>
        
        <div class="search_section">
            <input type="email" id="email" placeholder="Entrez votre email pour recevoir la newsletter..."/>
            
            <div class="button">
                <button id="getemail">
                    <span class="sendmail"></span>
                </button>
            </div>
    </section>
    

    
	<section id="section6">
        <div class="bg">
            <div class="description">
                <h2>Contactez-nous pour plus d’informations</h2>
                
                <p>Vous souhaitez plus d’informations concernant le projet Isaac ? <br>N’hésitez pas à nous contacter dès maintenant.</p>
            </div>
            
            <div class="description">
                
                    <input type="email" id="form-mail" placeholder="Votre email..."/>
                    
                    <textarea type="text" id="form-message" placeholder="Votre message..."></textarea>
                    
                    <div class="form-button">
                        <button id="getform">
                            <span class="sendmail"></span>
                        </button>
                    </div>

            </div>
        </div>
    </section>

    
    
    <footer>
        <div class="footer-line"></div>
        
        <div class="signature">  
            <img src="img/cp-objet.svg">
            <p>Isaac 2017 - Tous droits réservés - <a onclick="ga('send', 'event', 'isaac-lp', 'mentions-legales', 'lien', {'nonInteraction': 1});" href="http://www.isaac-ia.com/mentions.html">Mentions légales</a></p>
        </div>
        
        <ul class="social">
            
            
            <a onclick="ga('send', 'event', 'isaac-lp', 'rs-facebook', 'lien', {'nonInteraction': 1});" href="https://www.facebook.com/isaac.intelligence.artificielle/" title="Suivre Isaac sur Facebook" target="_blank">
                <li id="facebook"></li>
            </a>
            
            <a onclick="ga('send', 'event', 'isaac-lp', 'rs-twitter', 'lien', {'nonInteraction': 1});" href="https://twitter.com/isaac__ia" title="Suivre Isaac sur Twitter" target="_blank"><li id="twitter"></li></a>
                            
            <!--<a onclick="ga('send', 'event', 'isaac-lp', 'rs-linkedin', 'lien', {'nonInteraction': 1});" href="#" target="_blank"><li id="linkedin"></li></a>-->
        </ul>
        
    </footer>
        
<!--Analytics Google-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89779336-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
