

<nav class="nav-extended">
<div class="nav-wrapper white">
&nbsp;&nbsp;<a href="#" class="brand-logo"><i class="material-icons left">brush</i><?= $site['nom']; ?></a>
<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
<ul id="nav-mobile" class="right hide-on-med-and-down">
<li>
<div class="switch">
<label>
Off
<input type="checkbox">
<span class="lever"></span>
On
</label>
</div>
</li>

<li><a class="tooltipped" target="_blank" href="<?php if ($session == 'Chris'): ?>https://chrisd.fr<?php else: ?>https://hadil.chrisd.fr<?php endif ?>" data-position="bottom" data-tooltip="Site"><i class="material-icons">public</i></a></li>
<li><a class="tooltipped" href="logout" data-position="bottom" data-tooltip="Déconnexion"><i class="material-icons">power_settings_new</i></a></li>
</ul>
</div>
<div class="nav-content grey darken-2">
<ul class="tabs tabs-transparent">
<li class="tab"><a class="active" href="#accueil"><i class="material-icons">home</i></a></li>
<li class="tab"><a href="#articles">+ Article</a></li>
<li class="tab"><a href="#clients">+ Client</a></li>
<li class="tab"><a href="#competences">+ Compétence</a></li>
<li class="tab"><a href="#experiences">+ Expérience</a></li>
<li class="tab"><a href="#portfolio">+ Portfolio</a></li>
<li class="tab"><a href="#scolarite">+ Scolarité</a></li>
<li class="tab"><a href="#services">+ Service</a></li>
</ul>
</div>
</nav>

<ul class="sidenav" id="mobile-demo">
<li><a href="sass.html">Sass</a></li>
<li><a href="badges.html">Components</a></li>
<li><a href="collapsible.html">JavaScript</a></li>
</ul>

