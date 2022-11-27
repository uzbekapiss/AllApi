<?php
if(isset($_GET['url'])){
$url = url($_GET['url']);
function url($url){
   header("Content-Type: application/json; charset=UTF-8");
    error_reporting(0);
$link       =  $text;
$hmo    = array();
$hmo[]  = 'origin: https://onlinevideoconverter.pro';
$hmo[]  = 'referer: https://onlinevideoconverter.pro/';
$hmo[]  = 'cookie: PHPSESSID=4mdf8cprpesd9a9jp0e9ir28su';
$hmo[]  = 'user-agent: Mozilla/5.0 (Linux; Android 11; M2101K6I) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.89 Mobile Safari/537.36'; 
    $curl = curl_init();
    $config = array(
    CURLOPT_URL => "https://api.onlinevideoconverter.pro/api/convert",
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $hmo,
    CURLOPT_POSTFIELDS => array(
       'url'=>$link,
        )
  );

   curl_setopt_array($curl, $config);
   $response = curl_exec($curl);
   curl_close($curl);
$json =  json_decode($response);

return $json;
}
print(json_encode($url));
}
?>
