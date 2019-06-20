<!--/*###############################################################

██████╗ ███████╗██╗   ██╗███████╗██╗██████╗ ███████╗
██╔══██╗██╔════╝██║   ██║██╔════╝██║██╔══██╗██╔════╝
██║  ██║█████╗  ██║   ██║███████╗██║██║  ██║█████╗  
██║  ██║██╔══╝  ╚██╗ ██╔╝╚════██║██║██║  ██║██╔══╝  
██████╔╝███████╗ ╚████╔╝ ███████║██║██████╔╝███████╗ SOFTWARE 0.0.1
╚═════╝ ╚══════╝  ╚═══╝  ╚══════╝╚═╝╚═════╝ ╚══════╝                                          
                                  
####################################################################/ -->

<?php 
require_once('core.php');
require_once('fonctions/contact.php');
$page = "".$lang['page_accueil']."";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<?php 
require_once('blocs/meta.php');
?>
<title><?php echo htmlspecialchars(trim($DetailsTableConfigurations['nom'])); ?> - <?php echo htmlspecialchars(trim($page)); ?></title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">       
<link rel="stylesheet" href="css/magnific-popup.css">       
<link rel="stylesheet" href="css/animate.css">       
<link rel="stylesheet" href="css/main.css"> 
<link rel="stylesheet" href="css/responsive.css"> 
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Sacramento" rel="stylesheet">
<link rel="icon" href="images/ico/favicon.ico"> 
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="../images/ico/apple-touch-icon-57-precomposed.html">    
<script type="text/javascript" src="plugins/date/date.js"></script>
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

<?php 
require_once('plugins/alerte.php');
?>

<div class="main-wrapper home-two">

<!-- Bloc Hello --> 
<?php include("blocs/hello.php"); ?>
<!-- Fin Bloc Hello -->

<!-- Bloc Navigation --> 
<?php include("blocs/navigation.php"); ?>
<!-- Fin Bloc Navigation -->         

<!-- Bloc Infos --> 
<?php include("blocs/infos.php"); ?>
<!-- Fin Bloc Infos -->

<!-- Bloc Skills --> 
<?php include("blocs/skills.php"); ?>
<!-- Fin Bloc Skills -->

<!-- Bloc Expériences --> 
<?php include("blocs/experiences.php"); ?>
<!-- Fin Bloc Expériences -->

<!-- Bloc Formations --> 
<?php include("blocs/formations.php"); ?>
<!-- Fin Bloc Formations -->

<!-- Bloc Portfolio --> 
<?php include("blocs/portfolio.php"); ?>
<!-- Fin Bloc Portfolio -->

<!-- Bloc Contact --> 
<?php include("blocs/contact.php"); ?>
<!-- Fin Bloc Contact -->

<!-- Bloc Actus --> 
<?php include("blocs/actus.php"); ?>
<!-- Fin Bloc Actus -->

<!-- Bloc Copyright --> 
<?php include("blocs/copyright.php"); ?>
<!-- Fin Bloc Copyright -->

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
<script src="js/waypoints.min.js"></script>
<script src="js/counterup.min.js"></script>                 
<script src="js/inview.min.js"></script>                 
<script src="js/easypiechart.js"></script>                 
<script src="js/magnific-popup.min.js"></script>                                     
<script src="js/main.js"></script>  
<!-- Fin Scripts -->          

</body>
</html>