<?php
require('./functionBdd.php');
$tab = recupTable($mysql, 'type_societes');
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>ISAAC - Intelligence artificielle</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/animate.css">
        
        <!--Meta -->
        <meta name="viewport" content="initial-scale=1">
        
        
        <!--Meta Twitter Card-->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="ISAAC Intelligence artificielle">
        <meta name="twitter:description" content="Je suis ISAAC et je vous accompagne dans la création de votre boîte ! :)">
        <meta name="twitter:site" content="@isaac__ia">
        <meta name="twitter:creator" content="@isaac__ia">
        <meta name="twitter:image" content="http://www.isaac-ia.com/img/isaac-logo.jpg">

        <!--Meta Open Graph-->
        <meta property="og:title" content="ISAAC Intelligence artificielle" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.isaac-ia.com/" />
        <meta property="og:image" content="http://www.isaac-ia.com/img/isaac-logo.jpg" />
        <meta property="og:description" content="Je suis ISAAC et je vous accompagne dans la création de votre boîte ! :)" />
        <meta property="og:site_name" content="ISAAC" />
        
        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        
        <!--Favicon-->
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="http://www.isaac-ia.com/img/favicon/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://www.isaac-ia.com/img/favicon/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://www.isaac-ia.com/img/favicon/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://www.isaac-ia.com/img/favicon/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="http://www.isaac-ia.com/img/favicon/apple-touch-icon-60x60.png" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="http://www.isaac-ia.com/img/favicon/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="http://www.isaac-ia.com/img/favicon/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="http://www.isaac-ia.com/img/favicon/apple-touch-icon-152x152.png" />
        <link rel="icon" type="image/png" href="http://www.isaac-ia.com/img/favicon/favicon-196x196.png" sizes="196x196" />
        <link rel="icon" type="image/png" href="http://www.isaac-ia.com/img/favicon/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/png" href="http://www.isaac-ia.com/img/favicon/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="http://www.isaac-ia.com/img/favicon/favicon-16x16.png" sizes="16x16" />
        <link rel="icon" type="image/png" href="http://www.isaac-ia.com/img/favicon/favicon-128.png" sizes="128x128" />
        <meta name="application-name" content="Isaac"/>
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="http://www.isaac-ia.com/img/favicon/mstile-144x144.png" />
        <meta name="msapplication-square70x70logo" content="http://www.isaac-ia.com/img/favicon/mstile-70x70.png" />
        <meta name="msapplication-square150x150logo" content="http://www.isaac-ia.com/img/favicon/mstile-150x150.png" />
        <meta name="msapplication-wide310x150logo" content="http://www.isaac-ia.com/img/favicon/mstile-310x150.png" />
        <meta name="msapplication-square310x310logo" content="http://www.isaac-ia.com/img/favicon/mstile-310x310.png" />

        <!--Optimizely-->
        <script src="https://cdn.optimizely.com/js/8152643656.js"></script>

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
        
        <!--Google Analytics-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	</head>
    <body>

         
        <!--Section gauche-->
        <section class="societeMenu">
            <div class="admin-menuback"></div>
            <div class="logo"></div>
            <ul class="menuBO">  
                <li class="picto1">Dashboard</li>
                <li class="picto2 selected">Ma société</li>
                <li class="picto3">Mes documents</li>
                <li class="picto4">Mes tâches</li>
                <li class="picto5">Mes ressources</li>
                <li class="picto6">Mon agenda</li>
                <li class="picto7">Mon carnet d'adresse</li>
            </ul>
            <!--
            <div class="question">
                    <input type="text" name="question" id="form-question-dashboard" placeholder="Une question ?" />
                    <div class="picto8"></div>
            </div>
            -->
        </section>
        
        
        <!--Section droite-->
        <section class="societeBoard">
            <div class="header">
                <div class="admin-boardback"></div>
                <ul class="menu-account">
                    <a href="#" class="badge1" data-badge="27">
                        <li class="picto-bell"></li>
                    </a>
                    <a href="#">
                        <li>
                            <img src="img/dashboard/user-photo.png">
                        </li>
                    </a>
                </ul>
            </div>
            
            <h1>Ma société</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis ipsum pulvinar, rutrum lorem non, blandit mi. Donec ullamcorper bibendum neque mollis semper. Sed ultrices lorem a enim viverra, non semper neque venenatis. Praesent mattis urna ac consectetur imperdiet.</p>
            
            <form>
            <ul class="forms-societe">
                        <li>
                            <label class="picto-nom-societe" for="nom-societe"></label>
                            <input type="text" name="nom" id="nom-societe" placeholder="Nom de la société" autofocus required/>
                        </li>
                        <li>
                            <label class="picto-forme-juridique" for="forme-juridique"></label>
                            <select name="formeJuridique" id="forme-juridique">
								<option value="">Forme Juridique</option>
                                <?php		
								foreach ($tab as $key => $value) {
									?>
									<option value="<?php echo $value[0]; ?>"><?php echo $value[1]; ?></option>
									<?php
								}
								?>
                            </select>


                          
                        </li>
                        <li>
                            <input type="email" name="email-societe" id="email-societe" placeholder="Adresse e-mail de la société" required/>
                            <label class="picto-email-societe" for="email-societe"></label>
                        </li>
                        <li>
                            <input type="text" name="siret" id="siret" placeholder="Numéro de SIRET" required/>
                            <label class="picto-siret" for="siret"></label>

                        </li>
                        <li>
                            <input type="tel" name="password-verif" id="form-password-2" placeholder="Numéro de téléphone" required/>
                            <label class="picto-tel" for="tel"></label>
                        </li>
                        <li>
                            <input type="text" name="marque" id="marque" placeholder="Type de marque" required/>
                            <label class="picto-marque" for="marque"></label>
                        </li>
                        <li class="bo-checkbox">
                            <input type="checkbox" id="bo-so-cbox1" value="bo-so-cbox1">
                            <label  for="bo-so-cbox1" class="label">Sonore</label>
                        </li>
                        <li class="bo-checkbox">
                            <input type="checkbox" id="bo-so-cbox2" value="bo-so-cbox2">
                            <label  for="bo-so-cbox2" class="label">Hologramme</label>
                        </li>
                        <li class="bo-checkbox">
                            <input type="checkbox" id="bo-so-cbox3" value="bo-so-cbox3">
                            <label  for="bo-so-cbox3" class="label">Tridimensionnelle</label>
                        </li>
                        <li class="bo-checkbox">
                            <input type="checkbox" id="bo-so-cbox4" value="bo-so-cbox4">
                            <label for="bo-so-cbox4" class="label">Couleurs</label>
                        </li>
                        <li class="bo-checkbox">
                            <input type="checkbox" id="bo-so-cbox5" value="bo-so-cbox5">
                            <label for="bo-so-cbox5" class="label">Autres caractéristiques</label>
                        </li>
                </ul>
                
            <ul class="forms-societe">
                        <li>
                            <input type="text" name="adresse-so" id="adresse-so" placeholder="Adresse de la société" required/>
                            <label class="picto-adresse-so" for="adresse-so"></label>
                        </li>
                        <li>
                            <input type="text" name="cp-so" id="cp-so" placeholder="Code postal" required/>
                            <label class="picto-cp-so" for="cp-so"></label>
                        </li>
                        <li>
                            <input type="text" name="ville-so" id="ville-so" placeholder="Ville" required/>
                            <label class="picto-ville-so" for="ville-so"></label>
                        </li>
                        <li>
                            <input type="text" name="pays-so" id="pays-so" placeholder="Pays" required/>
                            <label class="picto-pays-so" for="pays-so"></label>
                        </li>
                        <li>
                            <textarea type="text" name="description" id="description" placeholder="Description" required rows="10" cols="40"></textarea>
                            <label class="picto-description" for="description"></label>                  
                        </li>
                
                
                
                </ul>
                </form>
            
           
        </section>
        <div class="intercom">
            <a href="">
                <div class="intercom-badge"></div>
            </a>
        </div>
                
        
    </body>
    
    <script>
        var vid = document.getElementById("vid");
        vid.playbackRate = 0.5;
    </script>
    <!-- Wow -->
    <script src="dist/wow.min.js"></script>
    <script>new WOW().init();</script>
</html>

        