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

    <title>Dashboard</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('storage/dash.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 100%;
}
</style>
  </head>

  <body>
    <style>
    iframe{
        border: none;
        height: 1;
    }

</style>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  
  <div class="w3-display-middle">
    
<iframe name="iframe" id="frame1" height="20"></iframe>
<p name="result" id = "result" ></p>
<form class="uk-form-stacked" action="predict.php" method="post" name="form" target="iframe">
    



    


    <div class="uk-margin">
                        <label  for="form-stacked-select">Season</label>
        <div class="uk-form-controls">
            <select class="uk-select" name="season">
                <option name='2019'>2019</option>
                <option name='2018'>2018</option>
            </select>
        </div>

        <label  for="form-stacked-select">Team One</label>
        <div class="uk-form-controls">
            <select class="uk-select" name="t1">

                <option name='MI'>MI</option>
                <option name='CSK'>CSK</option>
                <option name='RCB'>RCB</option>
                <option name='RR'>RR</option>
                <option name='KXIP'>KXIP</option>
                <option name='DD'>DD</option>
                <option name='SRH'>SRH</option>
                <option name='KKR'>KKR</option>
            </select>
        </div>
        <label  for="form-stacked-select">Team Two</label>
        <div class="uk-form-controls">
            <select class="uk-select" name="t2">
                
                <option name='CSK'>CSK</option>
                <option name='MI'>MI</option>
                <option name='RCB'>RCB</option>
                <option name='RR'>RR</option>
                <option name='KXIP'>KXIP</option>
                <option name='DD'>DD</option>
                <option name='SRH'>SRH</option>
                <option name='KKR'>KKR</option>
            </select>
        </div>
        <label  for="form-stacked-select">Toss Winner</label>
        <div class="uk-form-controls">
            <select class="uk-select" name="tw">
                <option name='CSK'>CSK</option>
                <option name='MI'>MI</option>
                <option name='RCB'>RCB</option>
                <option name='RR'>RR</option>
                <option name='KXIP'>KXIP</option>
                <option name='DD'>DD</option>
                <option name='SRH'>SRH</option>
                <option name='KKR'>KKR</option>
            </select>
        </div>
        <label  for="form-stacked-select">Team Decision</label>
        <div class="uk-form-controls">
            <select class="uk-select" name="td">
                <option name='BAT'>BAT</option>
                <option name='BOWL'>BOWL</option>
            </select>
        </div>
        <label  for="form-stacked-select">Venue</label>
        <div class="uk-form-controls">
            <select class="uk-select" name="ven">
                <option name='Chennai'>Chennai</option>
                <option name='Mumbai'>Mumbai</option>
                <option name='Bangalore'>Bangalore</option>
                <option name='Jaipur'>Jaipur</option>
                <option name='Mohali'>Mohali</option>
                <option name='Delhi'>Delhi</option>
                <option name='Hyderbad'>Hyderbad</option>
                <option name='Kolkata'>Kolkata</option>
            </select>
        </div>
    </div>

    <div class="uk-margin">
        
        <div class="uk-form-controls">
        <input type="submit" name="submit" onclick="obj.myFunction()">
        </div>
    </div>


</form>

 </body>

<script>


    var obj = { 
      myFunction:function() {
                  var frames = window.frames;
                  frames1.location = "localhost/predict.php";
                
                  

                  
   

                  }
      };




    setTimeout(function(){
   window.location.reload(1);
}, 15000); 
        



</script>

 
    
    
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center">IPL Prediction</p>
  </div>

  <div class="w3-container w3-teal">
 <div class="w3-bar w3-black">
  <a class="w3-bar-item w3-button" href="dashboard.php">Home</a>
  <a class="w3-bar-item w3-button" href="about.php">About</a>
  <a class="w3-bar-item w3-button" href="#">Link 2</a>
  <a class="w3-bar-item w3-button" href="logout.php" >Logout</a>
</div>
</div> 

<div class="w3-sidebar w3-bar-block w3-light-grey" style="width:25%;opacity:0.8">
 <div style="margin-right:20%">

<div class="w3-container" style="opacity:1.2">
<b><h2 style="opacity: 20">Live Updates</h2></b>
<p><!-- start sw-rss-feed code --> 
<script type="text/javascript"> 


<!-- 
rssfeed_url = new Array(); 
rssfeed_url[0]="https://www.espncricinfo.com/rss/content/story/feeds/6.xml";  
rssfeed_frame_width="250"; 
rssfeed_frame_height="600"; 
rssfeed_scroll="on"; 
rssfeed_scroll_step="6"; 
rssfeed_scroll_bar="off"; 
rssfeed_target="_blank"; 
rssfeed_font_size="12"; 
rssfeed_font_face=""; 
rssfeed_border="on"; 
rssfeed_css_url="https://feed.surfing-waves.com/css/style5.css"; 
rssfeed_title="on"; 
rssfeed_title_name=""; 
rssfeed_title_bgcolor="#3366ff"; 
rssfeed_title_color="#fff"; 
rssfeed_title_bgimage=""; 
rssfeed_footer="off"; 
rssfeed_footer_name="rss feed"; 
rssfeed_footer_bgcolor="#fff"; 
rssfeed_footer_color="#333"; 
rssfeed_footer_bgimage=""; 
rssfeed_item_title_length="50"; 
rssfeed_item_title_color="#666"; 
rssfeed_item_bgcolor="#fff"; 
rssfeed_item_bgimage=""; 
rssfeed_item_border_bottom="on"; 
rssfeed_item_source_icon="off"; 
rssfeed_item_date="off"; 
rssfeed_item_description="on"; 
rssfeed_item_description_length="120"; 
rssfeed_item_description_color="#666"; 
rssfeed_item_description_link_color="#333"; 
rssfeed_item_description_tag="off"; 
rssfeed_no_items="0"; 
rssfeed_cache = "39cdf4a3d4a64b12ca5621fccfb439dc"; 
//--> 
</script> 




<script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script> 
<!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. --> 

<!-- end sw-rss-feed code --></p>
</div>

</div>

     
  	<?php require_once "inc/footer.php"; ?> 
  </body>
</html>
