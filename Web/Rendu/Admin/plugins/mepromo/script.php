<script>
var xSeconds = 10000; // 1000 = 1 seconde
setTimeout(function() {
   $('#overlay').fadeOut('slow');
   $('#box').hide();
}, xSeconds);
</script>
<div id="overlay">
<div style='font-family: "Roboto";width: 100%;padding: 20px;background-image: linear-gradient(#2ecc71, #27ae60);border: 1px solid #27ae60;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;box-shadow: 0px 0px 10px 4px rgba(39, 173, 96, 0.75);-moz-box-shadow: 0px 0px 10px 4px rgba(39, 173, 96, 0.75);-webkit-box-shadow: 0px 0px 10px 4px rgba(39, 173, 96, 0.75);'>
<center><b><FONT COLOR="White"><?php echo 'Ce site utilise : PHP '. Phpversion(); ?></FONT></b></center>
</div>
</div>