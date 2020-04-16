
<?php
$season=$_POST['season'];
$t1=$_POST['t1']; 
$t2=$_POST['t2']; 
$tw=$_POST['tw']; 
$td=$_POST['td'];
$ven=$_POST['ven'];
			echo "<html>";
			echo "<body>";
			echo "<p>";
			echo "</p>";
			echo "</body>";
			echo "</html>";



$get_data = callAPI('POST', 'http://localhost:5000/server/'.$season.'-'.$t1.'-'.$t2.'-'.$tw.'-'.$td.'-'.$ven.'', false);
//$get_data = callAPI('POST', 'http://127.0.0.1:5000/server/2019-MI-RR-RR-BAT-Mumbai', false);
//$response = json_decode($get_data, true);
//$errors = $response['response']['errors'];
//$data = $response['response']['data'][0];  

function callAPI($method, $url, $data){
   $curl = curl_init();
   switch ($method){
      case "POST":
         curl_setopt($curl, CURLOPT_POST, 1);
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         break;
      case "PUT":
         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
         break;
      default:
         if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
   }
   // OPTIONS:
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
   // EXECUTE:
   $result = curl_exec($curl);
   curl_close($curl);
   return $result;
}
?>

<script>

parent.document.getElementById("result").innerHTML = "Predicted winner is :<?php echo $get_data?>";
</script>


