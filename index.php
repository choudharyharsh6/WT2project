<?php 

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php"; 

?>
<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Home</title>

    <base href="/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
  </head>

  <body>
<div class="tm-navbar tm-navbar-overlay tm-navbar-transparent tm-navbar-contrast" data-uk-sticky='{"media":767,"showup":true,"animation":"uk-animation-slide-top","top":".uk-sticky-placeholder + *","clsinactive":"tm-navbar-transparent tm-navbar-contrast"}'>
<div class="uk-container uk-container-center">
<nav class="uk-navbar">
<a class="uk-navbar-brand" href="/">
<img class="tm-logo uk-responsive-height" src="/storage/a.png" alt="">
<img class="tm-logo-contrast uk-responsive-height" src="/storage/a.png" alt="">
</a>
<div class="uk-navbar-flip uk-hidden-small">
<ul class="uk-navbar-nav">
<li class=" uk-active">
<a href="/">Home</a>
</li>
<li class="">
<a href="https://www.iplt20.com/">IPL</a>
</li>
<li class="">
<a href="https://www.cricbuzz.com/">CRICBUZZ</a>
</li>
<li class="">
<a href="https://www.icc-cricket.com/">ICC</a>
</li>
<li class="">
<a href="https://github.com/choudharyharsh6/WT2project">Projects</a>
</li>
</ul>
</div>
<div class="uk-navbar-flip uk-visible-small">
<a href="#offcanvas" class="uk-navbar-toggle" data-uk-offcanvas></a>
</div>
</nav>
</div>
</div>
<div id="tm-hero" class="tm-hero uk-block uk-block-large uk-cover-background uk-flex uk-flex-middle tm-hero-padding uk-contrast" style="background-image: url('/storage/a.png');">
<div class="uk-container uk-container-center">
<section class="uk-grid uk-grid-match" data-uk-grid-margin>
<div class="uk-width-medium-1-1">
<div class="uk-panel  uk-text-center ">
<h1 class="uk-heading-large uk-margin-large-bottom">IPL Predictor for you.</h1>
<a class="uk-button uk-button-large" href="/login.php">LOGIN</a>
<a class="uk-button uk-button-large" href="/register.php">REGISTER</a>
</div>
</div>
</section>
</div>
</div>
<div id="tm-main" class="tm-main uk-block uk-block-default">
<div class="uk-container uk-container-center">
<div class="uk-grid" data-uk-grid-match data-uk-grid-margin>
<main class="uk-width-1-1">
<article class="uk-article uk-text-center">
<div class="uk-grid">
<div class="uk-width-medium-1-3 uk-margin-large-bottom">
<svg class="svg-icon" viewBox="0 0 20 20"><path d="M17.659,3.681H8.468c-0.211,0-0.383,0.172-0.383,0.383v2.681H2.341c-0.21,0-0.383,0.172-0.383,0.383v6.126c0,0.211,0.172,0.383,0.383,0.383h1.532v2.298c0,0.566,0.554,0.368,0.653,0.27l2.569-2.567h4.437c0.21,0,0.383-0.172,0.383-0.383v-2.681h1.013l2.546,2.567c0.242,0.249,0.652,0.065,0.652-0.27v-2.298h1.533c0.211,0,0.383-0.172,0.383-0.382V4.063C18.042,3.853,17.87,3.681,17.659,3.681 M11.148,12.87H6.937c-0.102,0-0.199,0.04-0.27,0.113l-2.028,2.025v-1.756c0-0.211-0.172-0.383-0.383-0.383H2.724V7.51h5.361v2.68c0,0.21,0.172,0.382,0.383,0.382h2.68V12.87z M17.276,9.807h-1.533c-0.211,0-0.383,0.172-0.383,0.383v1.755L13.356,9.92c-0.07-0.073-0.169-0.113-0.27-0.113H8.851v-5.36h8.425V9.807z"></path></svg>


<h3 class="uk-h2">Application Developer</h3>

</div>

</main>
</div>
</div>
</div>
<div id="tm-footer" class="tm-footer uk-block uk-block-secondary uk-contrast">
<div class="uk-container uk-container-center">

</div>
</div>
<div id="offcanvas" class="uk-offcanvas">
<div class="uk-offcanvas-bar uk-offcanvas-bar-flip">
<div class="uk-panel uk-text-center">
<a href="/">
<img src="/storage/LOGO.png" alt="">
</a>
</div>
<ul class="uk-nav uk-nav-offcanvas">
<li class=" uk-active">
<a href="/">Home</a>
</li>
<li class="">
<a href="https://www.iplt20.com/">IPL</a>
</li>
<li class="">
<a href="/workflow">Workflow</a>
</li>
<li class="">
<a href="/portfolio">Projects</a>
</li>
<li class="">
<a href="/me">Me</a>
</li>
<li class="">
<a href="/blog">Blog</a>
</li>
</ul>
</div>
</div>
  	<div class="uk-section uk-container">
  		<?php 
  			echo "Hello world. Today is: ";
  			echo date("Y m d");
  		?> 
  		<p>
  			<a href="/login.php">Login</a>
  			<a href="/register.php">Register</a>
  		</p>
  	</div>

  	<?php require_once "inc/footer.php"; ?> 
  </body>
</html>
