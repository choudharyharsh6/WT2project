<?php 

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php"; 

	ForceLogin();

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Page Title</title>

    <base href="/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('/storage/bground.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
  </head>

  <body>
<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  
  <div class="w3-display-middle">
   
    <p class="w3-large w3-center">
    	
    	Some IPL Information

    </p>
  </div>

  <div class="w3-container w3-teal">
 <div class="w3-bar w3-black">
  <a class="w3-bar-item w3-button" href="/dashboard.php">Home</a>
  <a class="w3-bar-item w3-button" href="/about.php">About</a>
  <a class="w3-bar-item w3-button" href="#">Link 2</a>
  <a class="w3-bar-item w3-button" href="/logout.php">Logout</a>
</div>
</div> 




</div>

     
  	<?php require_once "inc/footer.php"; ?> 
  </body>
</html>
