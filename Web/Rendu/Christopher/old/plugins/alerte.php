<?php if(isset($_GET['inscription']) AND ($_GET['inscription'] == 'ok')) { ?>
<script>sweetAlert("Bravo !", "Votre inscription a bien été validé, vous pouvez maintenant vous connectez !", "success");</script>
<?php } ?>
<?php if(isset($erreurok)){echo '<script>sweetAlert("Bravo !", "'.$erreurok.'", "success");</script>'; } ?>
<?php if(isset($erreuroke)){echo '<script>sweetAlert("Bravo !", "'.$erreuroke.'", "success");</script>'; } ?>
<?php if(isset($erreur)){echo '<script>sweetAlert("Oops !", "'.$erreur.'", "error");</script>'; } ?>