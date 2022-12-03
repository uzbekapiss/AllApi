<?php
if(isset($_GET['url'])){
	$url = get($_GET['url']);
	file_put_contents("telegraph.apk",$url);
	echo "telegraph.apk";
	}else{
		echo "Urlni Kiriting";
		}
function get($url){
$ch = curl_init($url);
        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_HEADER => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36',
            CURLOPT_FOLLOWLOCATION => 3,
            CURLOPT_ENCODING => 'utf-8',
            CURLOPT_AUTOREFERER => false,
            CURLOPT_REFERER => $url,
            CURLOPT_CONNECTTIMEOUT => 30,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_COOKIEFILE => 'cookie.txt',
            CURLOPT_COOKIEJAR => 'cookie.txt',
        );
        curl_setopt_array($ch, $options);

        if (defined('CURLOPT_IPRESOLVE') && defined('CURL_IPRESOLVE_V4')) {

            curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);

        }
        $data = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $data;
}
?>
