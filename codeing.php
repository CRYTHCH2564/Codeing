
<?php

 

$white="\033[0;37m";
$res = "\033[7m";
$hitam = "\033[0;30m";
$abu2 = "\033[1;30m";
$putih = "\033[0;37m";
$putih2 = "\033[1;37m";
$red = "\033[0;31m";
$red2 = "\033[1;31m";
$green = "\033[0;32m";
$green2 = "\033[1;32m";
$yellow = "\033[0;33m";
$yellow2 = "\033[1;33m";
$blue = "\033[0;34m";
$blue2 = "\033[1;34m";
$purple = "\033[0;35m";
$purple2 = "\033[1;35m";
$lblue = "\033[0;36m";
$lblue2 = "\033[1;36m";
$hijau = "\33[0;32m";
$hijau1 = "\33[32;1m";
$hijau2 = "\e[1;32m";
$biru = "\33[0;36m";
$biru1 = "\33[36;1m";
$biru2 = "\e[1;34m";
$merah = "\33[31;1m";
$merah2 = "\e[1;31m";
$putih2 = "\33[37;1m";
$putih1 = "\e[1;37m";
$hitam = "\33[30;1m";
$kuning = "\33[33;1m";
$kuning1 = "\33[1;33m";
$kuning2 = "\e[1;33m";
$cyan = "\e[0;36m";
$cyan1 = "\e[1;36m";
$ungu = "\e[0;35m";
$ungu2 = "\e[1;35m";
$abu = "\e[0;33m";
$abu1 = "\e[0;37m";
$abu2 = "\e[1;30m";
$hijau = "\33[0;32m";
$hijau1 = "\33[32;1m";
$hijau2 = "\e[1;32m";
$biru = "\33[0;36m";
$biru1 = "\33[36;1m";
$biru2 = "\e[1;34m";
$merah = "\33[31;1m";
$merah2 = "\e[1;31m";
$putih2 = "\33[37;1m";
$putih1 = "\e[1;37m";
$hitam = "\33[30;1m";
$kuning = "\33[33;1m";
$kuning1 = "\33[1;33m";
$kuning2 = "\e[1;33m";
$cyan = "\e[0;36m";
$cyan1 = "\e[1;36m";
$ungu = "\e[0;35m";
$ungu2 = "\e[1;35m";
$abu = "\e[0;33m";
$abu1 = "\e[0;37m";
$abu2 = "\e[1;30m";

function curl($url, $post = 0, $httpheader = 0, $proxy = 0)
            { // url, postdata, http headers, proxy, uagent
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
                curl_setopt($ch, CURLOPT_TIMEOUT, 60);
                curl_setopt($ch, CURLOPT_COOKIE, true);
                //        curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
                //        curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
                if ($post)
                {
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                }
                if ($httpheader)
                {
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
                }
                if ($proxy)
                {
                    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
                    curl_setopt($ch, CURLOPT_PROXY, $proxy);
                    // curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
                    
                }
                curl_setopt($ch, CURLOPT_HEADER, true);
                $response = curl_exec($ch);
                $httpcode = curl_getinfo($ch);
                if (!$httpcode) return "Curl Error : " . curl_error($ch);
                else
                {
                    $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
                    $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
                    curl_close($ch);
                    return array(
                        $header,
                        $body
                    );
                }
            }

   function reporterror($open){
	system("cls");
	system("clear");
if($open==1){
return error_reporting(0);
return @error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
}else{

}
}

function removefile($fille){
system("del'.$fille.'");system("rm'.$fille.'");}         



function gett($url,$ua){
    return curl($url,'',$ua)[1];   
}

function postt($url,$data,$ua){
    return curl($url,$data,$ua)[1];   
}



function save($data, $data_post) {
    if (!file_get_contents($data)) {
        file_put_contents($data, "[]");
    }
    $json = json_decode(file_get_contents($data), 1);
    $arr = array_merge($json, $data_post);
    file_put_contents($data, json_encode($arr, JSON_PRETTY_PRINT));
}
/*if (!file_exists("data.json")) {

    while ("true") {

        system("clear");

        $r = readline("\033[1;97mInput Your Cookie : \033[1;92m");

        if (!$r == "") {

            break;

        }

    }

    $data = ["Cookie" => $r];

    save("data.json", $data);

}

*/

function strip()
{
    $green = "\e[1;32m";
    $blue = "\e[1;34m";
    $red = "\e[1;31m";
    $white = "\33[37;1m";
    $yellow = "\e[1;33m";
    $cyan = "\e[1;36m";
    $purple = "\e[1;35m";
    $gray = "\e[1;30m";

    echo $red . '  ≠' . $green . '==' . $blue . '==' . $white . '==' . $yellow . '==' . $cyan . '==' . $purple . '==' . $gray . '==' . $red . '==' . $green . '==' . $blue . '==' . $white . '==' . $yellow . '==' . $cyan . '==' . $purple . '==' . $gray . '==' . $red . '==' . $green . '==' . $blue . '==' . $white . '==' . $yellow . '==' . $cyan . '==' . $purple . '==' . $gray . '==' . $green . '==' . $blue . '==' . $white . '==' . $yellow . '==' . $cyan . '==' . $purple . '==' . $gray . '==' . $red . '==' . $green . '==' . $blue . '==' . $white . '==' . $yellow . '==' . $cyan . '==' . $purple . '==' . $gray . '==' . $red . "≠\n";
}

function color($nu)
{
    $res = "\033[7m";
$hitam = "\033[0;30m";
$abu2 = "\033[1;30m";
$putih = "\033[0;37m";
$putih2 = "\033[1;37m";
$red = "\033[0;31m";
$red2 = "\033[1;31m";
$green = "\033[0;32m";
$green2 = "\033[1;32m";
$yellow = "\033[0;33m";
$yellow2 = "\033[1;33m";
$blue = "\033[0;34m";
$blue2 = "\033[1;34m";
$purple = "\033[0;35m";
$purple2 = "\033[1;35m";
$lblue = "\033[0;36m";
$lblue2 = "\033[1;36m";
$hijau = "\33[0;32m";
$hijau1 = "\33[32;1m";
$hijau2 = "\e[1;32m";
$biru = "\33[0;36m";
$biru1 = "\33[36;1m";
$biru2 = "\e[1;34m";
$merah = "\33[31;1m";
$merah2 = "\e[1;31m";
$putih2 = "\33[37;1m";
$putih1 = "\e[1;37m";
$hitam = "\33[30;1m";
$kuning = "\33[33;1m";
$kuning1 = "\33[1;33m";
$kuning2 = "\e[1;33m";
$cyan = "\e[0;36m";
$cyan1 = "\e[1;36m";
$ungu = "\e[0;35m";
$ungu2 = "\e[1;35m";
$abu = "\e[0;33m";
$abu1 = "\e[0;37m";
$abu2 = "\e[1;30m";
$hijau = "\33[0;32m";
$hijau1 = "\33[32;1m";
$hijau2 = "\e[1;32m";
$biru = "\33[0;36m";
$biru1 = "\33[36;1m";
$biru2 = "\e[1;34m";
$merah = "\33[31;1m";
$merah2 = "\e[1;31m";
$putih2 = "\33[37;1m";
$putih1 = "\e[1;37m";
$hitam = "\33[30;1m";
$kuning = "\33[33;1m";
$kuning1 = "\33[1;33m";
$kuning2 = "\e[1;33m";
$cyan = "\e[0;36m";
$cyan1 = "\e[1;36m";
$ungu = "\e[0;35m";
$ungu2 = "\e[1;35m";
$abu = "\e[0;33m";
$abu1 = "\e[0;37m";
$abu2 = "\e[1;30m";

    $items = [$hitam,$abu2,$putih,$putih2,$red,$red2,$green,$green2,$yellow,$yellow2,$blue,$blue2,$purple,$purple2,$lblue,$lblue2,$hijau,$hijau1,$hijau2,$biru,$biru1,$biru2,$merah,$merah2,$hitam,$kuning,$kuning1,$kuning2,$cyan,$cyan1,$ungu,$ungu2,$abu,$abu1,$abu2];
    $count = count($items);
    $index = rand(0, $count - $nu);

    return $items[$index];
}


function timer($timer)
{
    $timr = time() + $timer;
    $sc=0;
    while (true):
        echo "\r                                                                          \r";
     
           $res = $timr - time();
        
        if ($res < 1) {
            break;
        }
        if ($sc>6) {
        $sc=0;
        }
        $yy=rand(1,5);
          $d1 = color($yy);
          $d2 = color($yy);
          $d3 = color($yy);
          $d4 = color($yy);
            $str = str_repeat($d1."•",$sc) . "                     \r";
        $sc=$sc+1;
        $a=date('i:s', $res);
$vv="\r.                   $d1 <Please $d2 Wait> $d3 $a $d4 $str                   \r";      
        echo$vv."\r";
        
        sleep(1);
    endwhile;
}
function captchaerror($timer,$captcha){
    global $green;
    $timr = time() + $timer;
    $sc=0;
    while (true):
        echo "\r                                                                          \r";
     
           $res = $timr - time();
        
        if ($res < 1) {
            break;
        }
        if ($sc>3) {
        $sc=0;
        }
        $yy=rand(1,5);
          $d1 = color($yy);
          $d2 = color($yy);
          $d3 = color($yy);
          $d4 = color($yy);
            $str = str_repeat($d1."•",$sc) . "                     \r";
        $sc=$sc+1;
        $a=date('i:s', $res);
$vv=$d2."<[ It Is Captcha ]=>".$green.$captcha;
        echo$vv.$d3.$str."\r";
sleep(1);
    endwhile;
}






function solve(){
  $h[]="Host: api-secure.solvemedia.com";
  $h[]="user-agent: Mozilla/5.0 (Linux; Android 10) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Mobile Safari/537.36";
  $h[]="accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7";
  $h[]="accept: image/avif,image/webp,image/apng,image/svg+xml,image/*,*/*;q=0.8";
  $h[]="sec-gpc: 1";
 return $h;
}
function gettbypass($url){
    return curl($url,'',solve())[1];
  }
function getbypass($url){
return gettbypass($url);
}


function bypass($img,$m){
$url = 'https://vision.googleapis.com/v1/images:annotate?key=AIzaSyC3y-Em42htSB8UEZPqptJ78rlvL58_h6Y'; // base64 encode image      
      $base64 = base64_encode(file_get_contents($img));
          $json_request = '{"requests": [{"image": {"content":"' . $base64 . '"},"features": [{"type": "TEXT_DETECTION","maxResults": 200}]}]}';    
          $curl = curl_init();    
          curl_setopt($curl, CURLOPT_URL, $url);   
           curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);    
           curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);   
            curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type: application/json"));                     
             curl_setopt($curl, CURLOPT_POST, true);   
             curl_setopt($curl, CURLOPT_POSTFIELDS, $json_request);  
            $json_response = curl_exec($curl);  
              $s = curl_getinfo($curl, CURLINFO_HTTP_CODE);   
               curl_close($curl);    
          //print_r($s);      
          if($m==1){
            $can=explode('"boundingPoly"',explode('"locale": "en"',$json_response)[1])[0];
            $otw=explode('\n"',explode('"description": "Enter the following:\n',$can)[1])[0];
            $wewe = str_replace('\n',' ',$otw);
            return $hyu =preg_replace("/[^a-zA-Z]/","", $wewe);
          }else{
          return $json_response; 
          }
}

function ocr($img){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api8.ocr.space/parse/image',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array('file '=> new CURLFILE($img),'language' => 'eng','isOverlayRequired' => 'true','isSearchablePdfHideTextLayer' => 'true','scale' => 'true','OCREngine' => '2'),
      CURLOPT_HTTPHEADER => array(
        'apikey: 5a64d478-9c89-43d8-88e3-c65de9999580'
      ),
    ));
    
    $response = curl_exec($curl);
    curl_close($curl);
    $a=explode('",',explode('ParsedText":"Enter the following:\n',$response)[1])[0];
    $captcha = preg_replace("/[^a-zA-Z]/",'', $a);
    return $captcha;
}


function dayandtime()
{    $green = "\e[1;32m";    $blue = "\e[1;34m";    $red = "\e[1;31m";    $white = "\33[37;1m";    $yellow = "\e[1;33m";    $cyan = "\e[1;36m";    $purple = "\e[1;35m";    $gray = "\e[1;30m";
    $items = [$green, $blue, $red, $white, $yellow, $cyan, $purple, $gray];    $count = count($items);    $index = rand(0, $count - 1);    $indexx = rand(0, $count - 2);    $d = $items[$index];    $a = $items[$indexx];
    $ipInfo = file_get_contents("http://ip-api.com/json/");
    $ipInfo = json_decode($ipInfo);
    $timezone = $ipInfo->timezone ?? null;
    $countrycode = $ipInfo->countryCode ?? null;
    $ip = $ipInfo->query ?? null;
    date_default_timezone_set($timezone);    echo $a . "Day:" . $d . "[" . $d . date("d-m-y") . $d . "]" . $a . "Time:" . $d . "[" . $d . date("H:i:s") . $d . "]";
}


function getUserAgent()
{
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_1) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0.1 Safari/604.3.5";
	$userAgentArray[] = "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.89 Safari/537.36 OPR/49.0.2725.47";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/604.4.7 (KHTML, like Gecko) Version/11.0.2 Safari/604.4.7";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36 Edge/15.15063";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36 Edge/16.16299";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/604.4.7 (KHTML, like Gecko) Version/11.0.2 Safari/604.4.7";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0.1 Safari/604.3.5";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64; rv:52.0) Gecko/20100101 Firefox/52.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; rv:11.0) like Gecko";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:52.0) Gecko/20100101 Firefox/52.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36 OPR/49.0.2725.64";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/604.4.7 (KHTML, like Gecko) Version/11.0.2 Safari/604.4.7";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/62.0.3202.94 Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; WOW64; rv:56.0) Gecko/20100101 Firefox/56.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Trident/7.0; rv:11.0) like Gecko";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:52.0) Gecko/20100101 Firefox/52.0";
	$userAgentArray[] = "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0;  Trident/5.0)";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; rv:52.0) Gecko/20100101 Firefox/52.0";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/63.0.3239.84 Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (X11; Fedora; Linux x86_64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.89 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0;  Trident/5.0)";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/603.3.8 (KHTML, like Gecko) Version/10.1.2 Safari/603.3.8";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0.1 Safari/604.3.5";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/603.3.8 (KHTML, like Gecko) Version/10.1.2 Safari/603.3.8";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; WOW64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0";
	$userAgentArray[] = "Mozilla/5.0 (iPad; CPU OS 11_1_2 like Mac OS X) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0 Mobile/15B202 Safari/604.1";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; Touch; rv:11.0) like Gecko";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:58.0) Gecko/20100101 Firefox/58.0";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Safari/604.1.38";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (X11; CrOS x86_64 9901.77.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.97 Safari/537.36";
	
	$getArrayKey = array_rand($userAgentArray);
	return $userAgentArray[$getArrayKey];
 }



 function channel(){
	
 global $white;
 global $red;
 global $res;
 global $green;
 
   
  $hh=5000;
    $arr = array(
"-------------------------------------------------------------------------",
"  _  ___     _  _______ _   _  ____ _   _ ____   ____ ____  ___ ____ _____",
" | |/ / |   | |/ /_   _| | | |/ ___| | | / ___| / ___|  _ \|_ _|  _ \_   _|",
" | ' /| |   | ' /  | | | |_| | |   | |_| \___ \| |   | |_) || || |_) || |",
" | . \| |___| . \  | | |  _  | |___|  _  |___) | |___|  _ < | ||  __/ | |",
" |_|\_\_____|_|\_\ |_| |_| |_|\____|_| |_|____/ \____|_| \_\___|_|    |_|",
"-------------------------------------------------------------------------"
);
     for ($b = 0; $b <= (count($arr) - 1); $b++) {
        $text = str_split($arr[$b]);
        for ($x = 0; $x <= (count($text) - 1); $x++) {
            $yy = rand(1, 5);
            echo color($yy).$text[$x];
            usleep($hh);
        }
        echo"\n";
       }
    
    $timr = time() + 7;
    $sc=0;
while (true):
    echo "\r                                                                          \r";
 
       $rees = $timr - time();
    
    if ($rees < 1) {
        break;
    }
    if ($sc>7) {
    $sc=0;
    }
    $sc=$sc+1;
        $str = str_repeat($white."•",$sc) . "                     \r";
    
    
$vv="$red $res Loading";
    echo$vv.$str;
    
    sleep(1);
endwhile;
   
    
         
         $arr = array(
"______________________ _________________________________________________________",       
"|  _____                                                                _____  |",
"| |     |   []Creator :        KCYTHCH                                 |     | |",
"| |     |   []Support By :     ME 55+                                  |     | |",
"| |     |   []Telegram By :    @KLKTHCH                                |     | |",
"| |     |   []Facebook By :    https://www.facebook.com/kcy.thch       |     | |",
"| |     |   []Instagram By :   clp_chth                                |     | |",
"| |_____|                                                              |_____| |",
"|______________________________________________________________________________|");
     for ($b = 0; $b <= (count($arr) - 1); $b++) {
        $text = str_split($arr[$b]);
        for ($x = 0; $x <= (count($text) - 1); $x++) {
            $yy = rand(1, 5);
            echo color($yy).$text[$x];
            usleep($hh);
        }
        echo"\n";
       }
       
  $ip= file_get_contents("http://ip-api.com/json/");
  $ip = json_decode($ip);
  $timezone = $ip->timezone ?? null;
   if($timezone==""){
   	exit;}
    $country= $ip->country ?? null;
    if($country==""){
   	exit;}
    $countrycode = $ip->countryCode ?? null;
    if($countrycode==""){
   	exit;}
    $ipphone= $ip->query ?? null;
    if($ipphone==""){
   	exit;}
   $status=$ip->status ?? null;
   if($status=="success"){

   
echo$white."••••••••••••••••••••••••••••••••••••••••••••••••••\n";
  $timr = time() + 10;
    $sc=0;
while (true):
    echo "\r                                                                          \r";
 
       $rees = $timr - time();
    
    if ($rees < 1) {
        break;
    }
    if ($sc>10) {
    $sc=0;
    }
    $sc=$sc+1;
        $str = str_repeat($white."•",$sc) . "                     \r";
    
    
$vv="$red $res Check Status ";
    echo$vv.$str;
    
    sleep(1);
endwhile;
   
   
echo$white."              Status".$red.":".$green.$status."\n";
echo$white." Time Zone".$red.":".$green.$timezone;           echo$white." County".$red.":".$green.$country."/".$countrycode."\n";
echo$white." IP".$red.":".$green.$ipphone."\n";
echo$white."••••••••••••••••••••••••••••••••••••••••••••••••••\n";
       
 }else{
 	echo$red."Error";
 system ("clear");exit;
 }

 }
 function logo($urlwebsite,$namewebsite,$name,$bal){
            global $white;
            global $green;
            global $red;
            global $green2;
            
echo$green2."••••••••••••••••••••••••••••••••••••••••\n";
if($urlwebsite==""){echo"\r\r";}
if(!$urlwebsite==""){
echo$white."URL Website".$red.":".$green.$urlwebsite."\n";}
if($namewebsite==""){echo"\r\r";}
if(!$namewebsite==""){
echo$white."Name Website".$red.":".$green.$namewebsite."\n";}
if($name==""){echo"\r\r";}
if(!$name==""){
echo$white."Name".$red.":".$green.$name."\n";}
if($bal==""){echo"\r\r";}
if(!$bal==""){
echo$white."Balance".$red.":".$green.$bal."\n";}
echo$green2."••••••••••••••••••••••••••••••••••••••••\n";
}

function checkrun($a,$b,$rese,$no){
  global $red,$white,$res;
$ao=explode($b,explode($a,$rese)["$no"])[0];
if($ao==""){
echo$white.str_repeat("•",15)."\n";
 $timr = time() + 10;
    $sc=0;
while (true):
    echo "\r                                                                          \r";
 
       $rees = $timr - time();
    
    if ($rees < 1) {
        break;
    }
    if ($sc>10) {
    $sc=0;
    }
    $sc=$sc+1;
        $str = str_repeat($white."•",$sc) . "                     \r";
    
    
$vv="$red $res Check Status ";
    echo$vv.$str;
    
    sleep(1);
endwhile;
echo$red."Scrpit Error\n";
echo$white.str_repeat("•",15)."\n";
exit;
}
}
       
  
        
            function text($ss,$rr,$bb){
                $hh=5000;
                global $white;
                echo$white."••••••••••••••••••••••••••••••••••••••\n";
                $arr = array("        [Status=>$ss","        [Reward=>$rr","        [Balance=>$bb");
                for ($b = 0; $b <= (count($arr) - 1); $b++) {
                  $text = str_split($arr[$b]);
                  for ($x = 0; $x <= (count($text) - 1); $x++) {
                      $yy = rand(1, 5);
                      echo color($yy).$text[$x];
                      usleep($hh);
                  }
                echo"\n";
                 }
                 echo$white."••••••••••••••••••••••••••••••••••••••\n";
                }
                
        



function cloud_ocr($var_194){
$var_195= [
    "content-type: multipart/form-data; boundary=----WebKitFormBoundarywCIIkh0aAx7NUXPm",
    "accept: application/json, text/javascript; q=0.01",
    "x-requested-with: XMLHttpRequest"];
$var_196=file_get_contents($var_194);
$var_147 = "------WebKitFormBoundarywCIIkh0aAx7NUXPm\nContent-Disposition: form-data; name=\"file[]\";\nfilename=\"png.png\"\nContent-Type: image/png\n
$var_196;
------WebKitFormBoundarywCIIkh0aAx7NUXPm--";
$var_200=postt("https://www.prepostseo.com/frontend/uploadImageToTextFiles",$var_147,$var_195);
$var_203=strpos($var_200,'tmp_imgs\/');
$var_203=substr($var_200,$var_203);
$var_203=str_replace('tmp_imgs\/','',$var_203);
$var_203=substr($var_203,0,strpos($var_203,'"'));
$var_195= [
    "content-type: application/x-www-form-urlencoded; charset=UTF-8",
    "accept: application/json, text/javascript; q=0.01",
    "x-requested-with: XMLHttpRequest"];
$var_147="submit=true&imgUrl=https://www.prepostseo.com/tmp_imgs/$var_203";
$var_121=postt("https://www.prepostseo.com/frontend/extractImgText",$var_147,$var_195);
$var_219=strpos($var_121,'following:\n');
$var_219=substr($var_121,$var_219);
$var_219=str_replace('following:\n','',$var_219);
$var_219=substr($var_219,0,strpos($var_219,'\n"'));
$var_219=str_replace('\n','',$var_219);
$var_219= preg_replace("/[^a-zA-Z]/", "", $var_219);
if(strlen($var_219) > 25){}else{return $var_219;} }


function random_name(){
    $url="https://randomuser.me/api/?format=json";
    $data=json_decode(file_get_contents($url),1);
    return $data;
  }
function f_explode($string, $start, $end,$no){ // source, first tag, end tag
        $str = explode($end,explode($start, $string)["$no"])[0];
return $str;}


function f_randomstring($length = 10) { // length
    $characters = '0123456789ABCDEFGHIJKLMNabcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function f_data($data){
return http_build_query($data);
}


function error($error){
$timr = time() + 3;
$sc=0;
while (true):
echo "\r                                                                          \r";

   $res = $timr - time();

if ($res < 1) {
    break;
}
if ($sc>3) {
$sc=0;
}
$yy=rand(1,5);
  $d1 = color($yy);
  $d2 = color($yy);
  $d3 = color($yy);
  $d4 = color($yy);
    $str = str_repeat($d1."•",$sc) . "                     \r";
$sc=$sc+1;
$a=date('i:s', $res);
$vv=$red."Error ".$error;      
echo  $vv.$d3.  $str;

sleep(1);
endwhile;
}

