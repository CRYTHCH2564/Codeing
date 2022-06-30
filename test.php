<?php

//function
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

function slow($str, $t){$arr = str_split($str);
foreach ($arr as $az){echo $az;usleep($t);}}

function channel(){
date_default_timezone_set("Asia/Jakarta");
$date = date("d-F-Y");
$time = date("H:i");
$day = date("l");
echo slow(" \033[1;97mDay :=> $day    Date :=> $date    time :=> $time \n", 2500);
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
     );for ($b = 0; $b <= (count($arr) - 1); $b++) {
           $text = str_split($arr[$b]);
for ($x = 0; 
$x <= (count($text) - 1);
 $x++) {$yy = rand(1, 5);
echo color($yy).$text[$x];
usleep($hh);}
echo"\n";}
$timr = time() + 7;$sc=0;
while (true):
echo "\r                                                                          \r";
$rees = $timr - time();
if ($rees < 1) {break;}
if ($sc>7) {$sc=0;}
$sc=$sc+1;$str = str_repeat($white."•",$sc) . "                     \r";
$vv="$red $res Loading";echo$vv.$str;sleep(1);
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
echo color($yy).$text[$x];usleep($hh);}
echo"\n";}
            
$ip= file_get_contents("http://ip-api.com/json/");
$ip = json_decode($ip);
$timezone = $ip->timezone ?? null;
if($timezone==""){exit;}
$country= $ip->country ?? null;
if($country==""){exit;}
$countrycode = $ip->countryCode ?? null;
if($countrycode==""){exit;}
$ipphone= $ip->query ?? null;if($ipphone==""){exit;}
$status=$ip->status ?? null;
if($status=="success"){       
echo slow($white."••••••••••••••••••••••••••••••••••••••••••••••••••",2500)."\n";
$timr = time() + 10;$sc=0;
while (true):
echo "\r                                                                          \r";
$rees = $timr - time();
if ($rees < 1) {break;}
if ($sc>10) {$sc=0;}
$sc=$sc+1;$str = str_repeat($white."•",$sc) . "                     \r";
$vv="$red $res Check Status ";echo$vv.$str;
sleep(1);
endwhile;
echo slow($white."Status".$red.":".$green.$status,2500)."\n";
echo slow($white." Time Zone".$red.":".$green.$timezone,2500)."\n";         
echo slow($white." County".$red.":".$green.$country."/".$countrycode,2500)."\n";
echo slow($white." IP".$red.":".$green.$ipphone,2500)."\n";
echo slow($white."••••••••••••••••••••••••••••••••••••••••••••••••••",2500)."\n";
}else{
echo$red."Error";system ("clear");exit;}}












channel();                                                                                                                            
