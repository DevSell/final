<!--≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡
	¦														¦
	¦			   ___ _          _          ___  			¦
	¦			  / __\ |__  _ __(_)___     /   \ 			¦
	¦			 / /  | '_ \| '__| / __|   / /\ / 			¦
	¦			/ /___| | | | |  | \__ \  / /_//_ 			¦
	¦			\____/|_| |_|_|  |_|___/ /___,'(_)			¦
    ¦               										¦
	¦														¦
	≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡-->

<?php
require('global.php');
?>

<!DOCTYPE html>
    <html lang="fr" class="no-js one-page-layout">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="Site Officiel">
            <meta name="keywords" content="chrisd, site, officiel, développeur, dev, freelance">
            <meta name="author" content="<?= $site['nom']; ?>">
            <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
            <meta name="Geography" content="France"/>
            <meta name="country" content="France"/>
            <meta name="build" content="BUILD-V15219-ALPHA"/>
            <meta name="Language" content="French"/>
            <meta property="og:locale" content="fr_FR"/>
            <title><?= $site['nom']; ?> - Site Officiel</title>
            <meta name="identifier-url" content="<?= $site['lien']; ?>"/>
            <meta name="reply-to" content="<?= $site['email']; ?>"/>
            <meta property="og:site_name" content="<?= $site['nom']; ?>"/>
            <meta property="og:title" content="<?= $site['nom']; ?> - Site Officiel"/>
            <meta property="og:url" content="<?= $site['lien']; ?>"/>
            <meta property="og:description" content="Site Officiel"/>
            <link rel="canonical" href="<?= $site['lien']; ?>/"/>
            <link rel="shortcut icon" href="images/ico/favicon.ico">
            <link rel="apple-touch-icon" href="images/ico/apple-touch-icon.png">
            <link href='https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,700,700italic' rel='stylesheet' type='text/css'> 
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="css/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
            <link rel="stylesheet" type="text/css" href="css/fonts/fontello/css/fontello.css">
            <link rel="stylesheet" type="text/css" href="js/nprogress/nprogress.css">
            <link rel="stylesheet" type="text/css" href="js/jquery.magnific-popup/magnific-popup.css">
            <link rel="stylesheet" type="text/css" href="css/align.css">
            <link rel="stylesheet" type="text/css" href="css/layout.css">
            <link rel="stylesheet" type="text/css" href="css/shortcodes.css">
            <link rel="stylesheet" type="text/css" href="css/main.css">
            <link rel="stylesheet" type="text/css" href="css/768.css">
    		<script src="js/jquery-1.11.3.min.js"></script>
            <script src="js/jquery-migrate-1.2.1.min.js"></script>
            <script src="js/modernizr.min.js"></script>
            <script type="text/javascript" src="plugins/date/date.js"></script>
        </head>

	   <body>

            <!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ PHP ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
                <?php include 'plugins/mepromo/script.php'; ?>
            <!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ PHP ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->
    	
	       <div id="page" class="hfeed site">

		  	   <main id="main" class="site-main cd-main">
          
                    <!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ En-Tête ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
                        <?php include 'blocs/entete.php'; ?>
                    <!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ En-Tête ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->
                    
                    <!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ Contenu ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
                        <?php include 'blocs/contenu.php'; ?>
                    <!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ Contenu ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->
                
                    <!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ Copyright ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
                        <?php include 'blocs/copyright.php'; ?>
                    <!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ Copyright ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->
    
                </main>

                <!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ Prérequis ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
                    <div class="cd-folding-panel">
                        
                        <div class="fold-left"></div>
                        <div class="fold-right"></div>
                        
                        <div class="cd-fold-content">
                        </div>
                
                        <a class="cd-close" href="#"></a>
                        
                    </div> 
                <!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ Prérequis ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->

                <!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ Alertes ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
                <div class="site-alert animated"></div>
                <!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ Alertes ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->
                
            </div>

            <!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ Paragraphe Overlay ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
                        <div class="p-overlay"></div>
                        <div class="p-overlay"></div>
            <!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ Paragraphe Overlay ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->


        <!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ Prérequis JS ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
        <script src="js/jquery.address-1.5.min.js"></script>
        <script src="js/nprogress/nprogress.js"></script>
        <script src="js/fastclick.js"></script>
        <script src="js/typist.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>     
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBojdb5m-16wynJbIB7cVHKHDe5Is62pO0"></script>
        <script src="js/main.js"></script>
        <!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ Prérequis JS ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->
        
	</body>
</html>