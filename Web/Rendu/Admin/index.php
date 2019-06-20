<?php
    require('global.php');
    $session = "Chris";
    
    /* ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ Modifier ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ */
    if(isset($_POST['modif-article'])) {
        include('php/modif-article.php');
    }
    if(isset($_POST['modif-client'])) {
        include('php/modif-client.php');
    }
    if(isset($_POST['modif-competence'])) {
        include('php/modif-competence.php');
    }
    if(isset($_POST['modif-exp'])) {
        include('php/modif-exp.php');
    }
    if(isset($_POST['modif-port'])) {
        include('php/modif-port.php');
    }
    if(isset($_POST['modif-sco'])) {
        include('php/modif-sco.php');
    }
    if(isset($_POST['modif-ser'])) {
        include('php/modif-service.php');
    }
    /* ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ Modifier ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ */
    
    
    /* ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ Supprimer ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ */
    if(isset($_POST['suppr-art'])) {
        include('php/suppr-art.php');
    }
    if(isset($_POST['suppr-cli'])) {
        include('php/suppr-cli.php');
    }
    if(isset($_POST['suppr-comp'])) {
        include('php/suppr-comp.php');
    }
    if(isset($_POST['suppr-exp'])) {
        include('php/suppr-exp.php');
    }
    if(isset($_POST['suppr-port'])) {
        include('php/suppr-port.php');
    }
    if(isset($_POST['suppr-sco'])) {
        include('php/suppr-sco.php');
    }
    if(isset($_POST['suppr-ser'])) {
        include('php/suppr-ser.php');
    }
    /* ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ Supprimer ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ */
    
    
    /* ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ Ajouter ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ */
    if(isset($_POST['ajout-article'])) {
        include('php/ajout-article.php');
    }
    if(isset($_POST['ajout-client'])) {
        include('php/ajout-client.php');
    }
    if(isset($_POST['ajout-competence'])) {
        include('php/ajout-competence.php');
    }
    if(isset($_POST['ajout-exp'])) {
        include('php/ajout-exp.php');
    }
    if(isset($_POST['ajout-port'])) {
        include('php/ajout-port.php');
    }
    if(isset($_POST['ajout-sco'])) {
        include('php/ajout-sco.php');
    }
    if(isset($_POST['ajout-ser'])) {
        include('php/ajout-ser.php');
    }
    /* ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ Ajouter ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title><?= $site['nom']; ?> - Site Officiel</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<script src="plugins/pace/pace.js"></script>
<script src="plugins/ckeditor/ckeditor.js"></script>
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">

</head>
<body>

    <?php if(isset($erreurok)){echo '<script>sweetAlert("Bravo !", "'.$erreurok.'", "success");</script>'; } ?>
    <?php if(isset($erreur)){echo '<script>sweetAlert("Oops !", "'.$erreur.'", "error");</script>'; } ?>

    <!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ Navigation ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
            <?php include 'blocs/navigation.php'; ?>
    <!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ Navigation ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->


    <!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ En-Tête ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
    <?php include 'blocs/entete.php'; ?>
    <!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ En-Tête ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->


  <div class="container">
    <div class="section">
        <br>

        <div id="accueil" class="col s12 white">
            <ul class="collapsible">

                <!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ Modifier Articles ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
                        <?php include 'blocs/modif-articles.php'; ?>
                <!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ Modifier Articles ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->


                <!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ Modifier Clients ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
                        <?php include 'blocs/modif-clients.php'; ?>
                <!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ Modifier Clients ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->


                <!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ Modifier Compétences ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
                        <?php include 'blocs/modif-competences.php'; ?>
                <!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ Modifier Compétences ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->


                <!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ Modifier Expérience ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
                        <?php include 'blocs/modif-exp.php'; ?>
                <!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ Modifier Expérience ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->


                <!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ Modifier Portfolio ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
                        <?php include 'blocs/modif-portfolio.php'; ?>
                <!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ Modifier Portfolio ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->


                <!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ Modifier Scolarité ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
                        <?php include 'blocs/modif-scolarite.php'; ?>
                <!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ Modifier Scolarité ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->


                <!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ Modifier Services ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
                        <?php include 'blocs/modif-services.php'; ?>
                <!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ Modifier Services ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->


            </ul>
        </div>

                <!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ Ajouter Article ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
                <?php include 'blocs/ajout-article.php'; ?>
                <!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ Ajouter Article ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->

        <div id="clients" class="col s12 white">
            <div class="col s12 m6">
            <div class="card white">
            <div class="card-content black-text">
            <span class="card-title">+ Client</span>
            <br>
            <p>
            <form class="col s12">
            <div class="row">
            <div class="input-field col s6">
            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
            <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Last Name</label>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
            <input disabled value="I am not editable" id="disabled" type="text" class="validate">
            <label for="disabled">Disabled</label>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
            <input id="password" type="password" class="validate">
            <label for="password">Password</label>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
            </div>
            </div>
            <div class="row">
            <div class="col s12">
            This is an inline input field:
            <div class="input-field inline">
            <input id="email_inline" type="email" class="validate">
            <label for="email_inline">Email</label>
            <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
            </div>
            </div>
            </div>
            </form>
            </p>
            </div>
            <div class="card-action">
            <a href="#">This is a link</a>
            <a href="#">This is a link</a>
            </div>
            </div>
            </div>
        </div>

        <div id="competences" class="col s12 white">
            <div class="col s12 m6">
            <div class="card white">
            <div class="card-content black-text">
            <span class="card-title">+ Compétence</span>
                <br>
                <p>
                <form class="col s12">
                <div class="row">
                <div class="input-field col s6">
                <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
                </div>
                </div>
                <div class="row">
                <div class="input-field col s12">
                <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                <label for="disabled">Disabled</label>
                </div>
                </div>
                <div class="row">
                <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
                </div>
                </div>
                <div class="row">
                <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
                </div>
                </div>
                <div class="row">
                <div class="col s12">
                This is an inline input field:
                <div class="input-field inline">
                <input id="email_inline" type="email" class="validate">
                <label for="email_inline">Email</label>
                <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                </div>
                </div>
                </div>
                </form>
                </p>
            </div>
            <div class="card-action">
            <a href="#">This is a link</a>
            <a href="#">This is a link</a>
            </div>
            </div>
            </div>
        </div>

        <div id="experiences" class="col s12 white">
            <div class="col s12 m6">
            <div class="card white">
            <div class="card-content black-text">
            <span class="card-title">+ Expérience</span>
            <br>
            <p>
            <form class="col s12">
            <div class="row">
            <div class="input-field col s6">
            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
            <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Last Name</label>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
            <input disabled value="I am not editable" id="disabled" type="text" class="validate">
            <label for="disabled">Disabled</label>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
            <input id="password" type="password" class="validate">
            <label for="password">Password</label>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
            </div>
            </div>
            <div class="row">
            <div class="col s12">
            This is an inline input field:
            <div class="input-field inline">
            <input id="email_inline" type="email" class="validate">
            <label for="email_inline">Email</label>
            <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
            </div>
            </div>
            </div>
            </form>
            </p>
            </div>
            <div class="card-action">
            <a href="#">This is a link</a>
            <a href="#">This is a link</a>
            </div>
            </div>
            </div>
        </div>

        <div id="portfolio" class="col s12 white">
            <div class="col s12 m6">
            <div class="card white">
            <div class="card-content black-text">
            <span class="card-title">+ Portfolio</span>
            <br>
            <p>
            <form class="col s12">
            <div class="row">
            <div class="input-field col s6">
            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
            <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Last Name</label>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
            <input disabled value="I am not editable" id="disabled" type="text" class="validate">
            <label for="disabled">Disabled</label>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
            <input id="password" type="password" class="validate">
            <label for="password">Password</label>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
            </div>
            </div>
            <div class="row">
            <div class="col s12">
            This is an inline input field:
            <div class="input-field inline">
            <input id="email_inline" type="email" class="validate">
            <label for="email_inline">Email</label>
            <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
            </div>
            </div>
            </div>
            </form>
            </p>
            </div>
            <div class="card-action">
            <a href="#">This is a link</a>
            <a href="#">This is a link</a>
            </div>
            </div>
            </div>
        </div>


        <div id="scolarite" class="col s12 white">
            <div class="col s12 m6">
            <div class="card white">
            <div class="card-content black-text">
            <span class="card-title">+ Scolarité</span>
            <br>
            <p>
            <form class="col s12">
            <div class="row">
            <div class="input-field col s6">
            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
            <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Last Name</label>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
            <input disabled value="I am not editable" id="disabled" type="text" class="validate">
            <label for="disabled">Disabled</label>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
            <input id="password" type="password" class="validate">
            <label for="password">Password</label>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
            </div>
            </div>
            <div class="row">
            <div class="col s12">
            This is an inline input field:
            <div class="input-field inline">
            <input id="email_inline" type="email" class="validate">
            <label for="email_inline">Email</label>
            <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
            </div>
            </div>
            </div>
            </form>
            </p>
            </div>
            <div class="card-action">
            <a href="#">This is a link</a>
            <a href="#">This is a link</a>
            </div>
            </div>
            </div>
        </div>

        <div id="services" class="col s12 white">
            <div class="col s12 m6">
            <div class="card white">
            <div class="card-content black-text">
            <span class="card-title">+ Service</span>
            <br>
            <p>
            <form class="col s12">
            <div class="row">
            <div class="input-field col s6">
            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
            <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Last Name</label>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
            <input disabled value="I am not editable" id="disabled" type="text" class="validate">
            <label for="disabled">Disabled</label>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
            <input id="password" type="password" class="validate">
            <label for="password">Password</label>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
            </div>
            </div>
            <div class="row">
            <div class="col s12">
            This is an inline input field:
            <div class="input-field inline">
            <input id="email_inline" type="email" class="validate">
            <label for="email_inline">Email</label>
            <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
            </div>
            </div>
            </div>
            </form>
            </p>
            </div>
            <div class="card-action">
            <a href="#">This is a link</a>
            <a href="#">This is a link</a>
            </div>
            </div>
            </div>
        </div>

    </div>
  </div>

    <!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ Copyright ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
            <?php include 'blocs/copyright.php'; ?>
    <!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ Copyright ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->


   <!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ Scripts ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="js/materialize.js"></script>
      <script src="js/init.js"></script>
        <script>
$(document).ready(function() {
                  $('input#input_text, textarea#textarea2').characterCounter();
                  });
        $(document).ready(function(){
                          $('.tabs').tabs();
                          });
    $(document).ready(function(){
                      $('.collapsible').collapsible();
                      });
    $(document).ready(function(){
                      $('.tooltipped').tooltip();
                      });
    $(document).ready(function(){
                      $('.modal').modal();
                      });

$(document).ready(function(){
                  $('select').formSelect();
                  });
        </script>
    <!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ Scripts ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->

  </body>
</html>
