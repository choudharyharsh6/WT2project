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
   
    <p class="w3-large w3-center">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.
The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face.  
The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).
At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments. WHO will continue to provide updated information as soon as clinical findings become available.
Stay informed:
Protect yourself: advice for the public 
Myth busters
Questions and answers
Situation reports
All information on the COVID-19 outbreak</p>
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
