<?php

//coloer
$reset = "\033[0m";  // Text Reset
  
    // Regular Colors
$black = "\033[0;30m";   // BLACK
$red = "\033[0;31m";     // RED
$green = "\033[0;32m";   // GREEN
$yellow = "\033[0;33m";  // YELLOW
$blue = "\033[0;34m";    // BLUE
$purple = "\033[0;35m";  // PURPLE
$cyan = "\033[0;36m";    // CYAN
$white = "\033[0;37m";   // WHITE


   // Bold
$black_bold = "\033[1;30m";  // BLACK
$red_bold = "\033[1;31m";    // RED
$green_bold = "\033[1;32m";  // GREEN
$yellow_bold = "\033[1;33m"; // YELLOW
$blue_bold = "\033[1;34m";   // BLUE
$purple_bold = "\033[1;35m"; // PURPLE
$cyan_bold = "\033[1;36m";   // CYAN
$white_bold = "\033[1;37m";  // WHITE


    // Underline
$black_underline = "\033[4;30m";  // BLACK
$red_underline = "\033[4;31m";    // RED
$green_underline = "\033[4;32m";  // GREEN
$yellow_underline = "\033[4;33m"; // YELLOW
$blue_underline = "\033[4;34m";   // BLUE
$purple_underline = "\033[4;35m"; // PURPLE
$cyan_underline = "\033[4;36m";   // CYAN
$white_underline = "\033[4;37m";  // WHITE

 // Background
$black_background = "\033[40m";  // BLACK
$red_background = "\033[41m";    // RED
$green_background = "\033[42m";  // GREEN
$yellow_background = "\033[43m"; // YELLOW
$blue_background = "\033[44m";   // BLUE
$purple_background = "\033[45m"; // PURPLE
$cyan_background = "\033[46m";   // CYAN
$white_background = "\033[47m";  // WHITE

    // High Intensity
$black_bright = "\033[0;90m";  // BLACK
$red_bright = "\033[0;91m";    // RED
$green_bright = "\033[0;92m";  // GREEN
$yellow_bright = "\033[0;93m"; // YELLOW
$blue_bright = "\033[0;94m";   // BLUE
$purple_bright = "\033[0;95m"; // PURPLE
$cyan_bright = "\033[0;96m";   // CYAN
$white_bright = "\033[0;97m";  // WHITE

// Bold High Intensity
$black_bold_bright = "\033[1;90m"; // BLACK
$red_bold_bright = "\033[1;91m";   // RED
$green_bold_bright = "\033[1;92m"; // GREEN
$yellow_bold_bright = "\033[1;93m";// YELLOW
$blue_bold_bright = "\033[1;94m";  // BLUE
$purple_bold_bright = "\033[1;95m";// PURPLE
$cyan_bold_bright = "\033[1;96m";  // CYAN
$white_bold_bright = "\033[1;97m"; // WHITE

// High Intensity backgrounds
$black_background_bright = "\033[0;100m";// BLACK
$red_background_bright = "\033[0;101m";// RED
$green_background_bright = "\033[0;102m";// GREEN
$yellow_background_bright = "\033[0;103m";// YELLOW
$blue_background_bright = "\033[0;104m";// BLUE
$purple_background_bright = "\033[0;105m"; // PURPLE
$cyan_background_bright = "\033[0;106m";  // CYAN
$white_background_bright = "\033[0;107m";   // WHITE
 
 

//function curl
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
    if ($post) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    }
    if ($httpheader) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
    }
    if ($proxy) {
        curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
        curl_setopt($ch, CURLOPT_PROXY, $proxy);
        // curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    }
    curl_setopt($ch, CURLOPT_HEADER, true);
    $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch);
    if (!$httpcode) {
        return "Curl Error : " . curl_error($ch);
    } else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        curl_close($ch);
        return array(
                        $header,
                        $body
                    );
    }
}
function gett($url, $httpheader)
{
    return curl($url, '', $httpheader)[1];
}
function postt($url, $data, $httpheader)
{
    return curl($url, $data, $httpheader)[1];
}
//function reporterror
function reporterror($file, $report = 0, $removetext = 0)
{
    if ($report) {
        return error_reporting(0);
        return @error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    }
    if ($removetext) {
        system("cls");
        system("clear");
    }
    if ($file) {
        return system("del'.$file.'");
        return system("rm'.$file.'");
    }
}


//function save file
function save($data, $data_post)
{
    if (!file_get_contents($data)) {
        file_put_contents($data, "[]");
    }
    $json = json_decode(file_get_contents($data), 1);
    $arr = array_merge($json, $data_post);
    file_put_contents($data, json_encode($arr, JSON_PRETTY_PRINT));
}
/*if (!file_exists("data.json")){
    while ("true"){
system("clear");
$r = readline("\033[1;97mInput Your Cookie : \033[1;92m");
if (!$r == "") {
break;}}
$data = ["Cookie" => $r];
save("data.json", $data);
}*/


//function Text coloer
function strip(){
$green = "\e[1;32m";$blue = "\e[1;34m";
$red = "\e[1;31m";$white = "\33[37;1m";
$yellow = "\e[1;33m";$cyan = "\e[1;36m";
$purple = "\e[1;35m";$gray = "\e[1;30m";
echo $red . '  ≠' . $green . '==' . $blue . '==' . $white . '==' . $yellow . '==' . $cyan . '==' . $purple . '==' . $gray . '==' . $red . '==' . $green . '==' . $blue . '==' . $white . '==' . $yellow . '==' . $cyan . '==' . $purple . '==' . $gray . '==' . $red . '==' . $green . '==' . $blue . '==' . $white . '==' . $yellow . '==' . $cyan . '==' . $purple . '==' . $gray . '==' . $green . '==' . $blue . '==' . $white . '==' . $yellow . '==' . $cyan . '==' . $purple . '==' . $gray . '==' . $red . '==' . $green . '==' . $blue . '==' . $white . '==' . $yellow . '==' . $cyan . '==' . $purple . '==' . $gray . '==' . $red . "≠\n";
}
 
function color($nu){
$res = "\033[7m";$hitam = "\033[0;30m";$abu2 = "\033[1;30m";$putih = "\033[0;37m";$putih2 = "\033[1;37m";$red = "\033[0;31m";
$red2 = "\033[1;31m";$green = "\033[0;32m";$green2 = "\033[1;32m";$yellow = "\033[0;33m";
$yellow2 = "\033[1;33m";$blue = "\033[0;34m";
$blue2 = "\033[1;34m";$purple = "\033[0;35m";
$purple2 = "\033[1;35m";$lblue = "\033[0;36m";
$lblue2 = "\033[1;36m";$hijau = "\33[0;32m";
$hijau1 = "\33[32;1m";$hijau2 = "\e[1;32m";
$biru = "\33[0;36m";$biru1 = "\33[36;1m";
$biru2 = "\e[1;34m";$merah = "\33[31;1m";
$merah2 = "\e[1;31m";$putih2 = "\33[37;1m";
$putih1 = "\e[1;37m";$hitam = "\33[30;1m";
$kuning = "\33[33;1m";$kuning1 = "\33[1;33m";
$kuning2 = "\e[1;33m";$cyan = "\e[0;36m";
$cyan1 = "\e[1;36m";$ungu = "\e[0;35m";
$ungu2 = "\e[1;35m";$abu = "\e[0;33m";
$abu1 = "\e[0;37m";
$abu2 = "\e[1;30m";$hijau = "\33[0;32m";
$hijau1 = "\33[32;1m";$hijau2 = "\e[1;32m";
$biru = "\33[0;36m";$biru1 = "\33[36;1m";
$biru2 = "\e[1;34m";$merah = "\33[31;1m";
$merah2 = "\e[1;31m";$putih2 = "\33[37;1m";
$putih1 = "\e[1;37m";$hitam = "\33[30;1m";
$kuning = "\33[33;1m";$kuning1 = "\33[1;33m";
$kuning2 = "\e[1;33m";$cyan = "\e[0;36m";
$cyan1 = "\e[1;36m";$ungu = "\e[0;35m";
$ungu2 = "\e[1;35m";$abu = "\e[0;33m";
$abu1 = "\e[0;37m";$abu2 = "\e[1;30m";

    $items = [$hitam,$abu2,$putih,$putih2,$red,$red2,$green,$green2,$yellow,$yellow2,$blue,$blue2,$purple,$purple2,$lblue,$lblue2,$hijau,$hijau1,$hijau2,$biru,$biru1,$biru2,$merah,$merah2,$hitam,$kuning,$kuning1,$kuning2,$cyan,$cyan1,$ungu,$ungu2,$abu,$abu1,$abu2];
$count = count($items);$index = rand(0, $count - $nu);
return $items[$index];
}



//function timer
function timer($timer){
    $timr = time() + $timer;
    $sc=0;
    while (true):
        echo "\r                                                                          \r";
$res = $timr - time();
if ($res < 1) {break;}
if ($sc>6) {$sc=0;}
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
endwhile;}

function captchatext($captcha){
    global $green;
    $timr = time() + 4;
    $sc=0;
    while (true):
        echo "\r                                                                          \r";
$res = $timr - time();
if($res < 1) {
            break;}
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
$vv=$d2."  <[ It Is Captcha ]=>".$green.$captcha." >";
        echo$vv.$d3.$str."\r";
sleep(1);
    endwhile;}

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
global $red,$yellow;
$vv=$red."Error >".$yellow.$error.">";      
echo  $vv.$d3.  $str;

sleep(1);
endwhile;
}


    
    
    
    
    
    
//function solve img captcha
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












//function channel
function channel(){
 $green = "\033[0;32m";$white="\033[0;37m";$red = "\033[0;31m";$res = "\033[7m";
   
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
            $green2 = "\033[1;32m";$red = "\033[0;31m";$green = "\033[0;32m";
$white="\033[0;37m";
            
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



//function use about scrpit
function random_text($length = 10) { // length
        $characters = '0123456789ABCDEFGHIJKLMNabcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
function get_text($string, $start, $end, $no){ // source, first tag, end no tag
        $str = explode($start, $string);
        $str = explode($end, $str["$no"]);
        return $str[0];}
        
function web_name(){
    $url="https://randomuser.me/api/?format=json";
    $data=json_decode(file_get_contents($url),1);
    return $data;
  }
function random_ua(){
         $url="https://raw.githubusercontent.com/kakatoji/ngecurl/main/user-agents.txt";
         $url=file_get_contents($url);
         preg_match_all("/(\s.*)/i",$url,$ua);
         $arr=array_filter($ua[1],'strlen');
         return trim($arr[array_rand($arr)]);}
 
function slow_text($str){
    $arr = str_split($str);
    foreach ($arr as $az) {
        echo $az;
        usleep(10000);}}
function ip(){
$ipInfo = file_get_contents("http://ip-api.com/json/");
return $ipInfo=json_decode($ipInfo);}
function get_data($data){return http_build_query($data);}
function tr(){echo "\r                                                  \r";}
