//function model script



function random_color($text){

if($text==0){

$var=["\e[0;31m","\e[0;32m","\e[0;33m","\e[0;34m","\e[0;35m","\e[0;36m","\e[0;37m","\e[0;91m","\e[0;92m","\e[0;99m","\e[0;94m","\e[0;95m","\e[0;96m","\e[0;97m"];

$var1=count($var) - 1;

$var2=rand(0,$var1);

$var=$var[$var2];

}

if($text==1){

$var=["\e[1;31m","\e[1;32m","\e[1;33m","\e[1;34m","\e[1;35m","\e[1;36m","\e[1;37m","\e[1;91m","\e[1;92m","\e[1;99m","\e[1;94m","\e[1;95m","\e[1;96m","\e[1;97m"];

$var1=count($var) - 1;

$var2=rand(0,$var1);

$var=$var[$var2];

}

if($text==2){

$var=["\e[2;32m","\e[2;32m","\e[2;33m","\e[2;34m","\e[2;35m","\e[2;36m","\e[2;37m","\e[2;92m","\e[2;92m","\e[2;99m","\e[2;94m","\e[2;95m","\e[2;96m","\e[2;97m"];

$var1=count($var) - 1;

$var2=rand(0,$var1);

$var=$var[$var2];

}

if($text==3){

$var=["\e[3;33m","\e[3;33m","\e[3;33m","\e[3;34m","\e[3;35m","\e[3;36m","\e[3;37m","\e[3;93m","\e[3;93m","\e[3;99m","\e[3;94m","\e[3;95m","\e[3;96m","\e[3;97m"];

$var1=count($var) - 1;

$var2=rand(0,$var1);

$var=$var[$var2];

}

if($text==4){

$var=["\e[4;44m","\e[4;44m","\e[4;44m","\e[4;44m","\e[4;45m","\e[4;46m","\e[4;47m","\e[4;94m","\e[4;94m","\e[4;99m","\e[4;94m","\e[4;95m","\e[4;96m","\e[4;97m"];

$var1=count($var) - 1;

$var2=rand(0,$var1);

$var=$var[$var2];

}

return $var;

}



function color(){

$var=[random_color(0),random_color(1),random_color(2)];

$var1=count($var) - 1;

$var2=rand(0,$var1);

return $var=$var[$var2];

}



function slow($str, $t){$arr = str_split($str);

foreach ($arr as $az){echo $az;usleep($t);}}

function channel (){

date_default_timezone_set("Asia/Jakarta");

$date = date("d-F-Y");

$time = date("H:i");

$day = date("l");

echo slow("     \033[3;97mDay :=> $day    Date :=> $date    time :=> $time \n", 2500);

$green = "\033[0;32m";$white="\033[0;37m";$red = "\033[0;31m";$res = "\033[7m";

$hh=3000;

$arr = array(file_get_contents("https://raw.githubusercontent.com/CRYTHCH2564/Codeing/main/logo_channel.txt"));

  for ($b = 0; $b <= (count($arr) - 1); $b++) {

        $text = str_split($arr[$b]);

for ($x = 0; 

$x <= (count($text) - 1);

$x++) {$yy = rand(1, 5);

echo color().$text[$x];

usleep($hh);}

echo"\n";}

$timr = time() + 6;$sc=0;

while (true):

echo "\r                                                                          \r";

$rees = $timr - time();

if ($rees < 1) {break;}

if ($sc>3) {$sc=0;}

$sc=$sc+1;$str = str_repeat($white."•",$sc) . "                     \r";

$vv="$red $res Loading";echo$vv.$str;sleep(1);

endwhile;

$arr = array(file_get_contents("https://raw.githubusercontent.com/CRYTHCH2564/Codeing/main/logo_dashboard.txt"));

for ($b = 0; $b <= (count($arr) - 1); $b++) {

$text = str_split($arr[$b]);

for ($x = 0; $x <= (count($text) - 1); $x++) {

$yy = rand(1, 5);

echo color().$text[$x];usleep($hh);}

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

echo slow($white."••••••••••••••••••••••••••••••••••••••••••••••••••••••",5500)."\n";

$timr = time() + 6;$sc=0;

while (true):

echo "\r                                                                          \r";

$rees = $timr - time();

if ($rees <0) {break;}

if ($sc>3) {$sc=0;}

$sc=$sc+1;$str = str_repeat($white."•",$sc) . "                     \r";

$vv="$red $res Check Status ";echo$vv.$str;

sleep(1);

endwhile;

$ipshow=

"$white Status $red :=> $green $status $white  Time Zone $red :=> $green $timezone      

$white County $red :=> $green $country  / $countrycode $white  IP $red :=> $green $ipphone \n";

echo slow($ipshow,5500);

echo slow($white."••••••••••••••••••••••••••••••••••••••••••••••••••••••",5500)."\n";

}else{

echo$red."Error";system ("clear");exit;}}



//function data



function l(){

   $len = 54;

   $var = '•';

   echo slow(str_repeat("\033[3;37m". $var, $len),10000) . "\n";}

   function save($data, $data_post)

{

    if (!file_get_contents($data)) {

        file_put_contents($data, "[]");

    }

    $json = json_decode(file_get_contents($data), 1);

    $arr = array_merge($json, $data_post);

    file_put_contents($data, json_encode($arr, JSON_PRETTY_PRINT));

}

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



function get($url){return curl($url,'',ua())[1];}

function post($url,$data){return curl($url,$data,ua())[1];}



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

function captchashow($captcha){

    $timr = time() + 8;

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

            $str = str_repeat(color()."•",$sc) . "                     \r";

        $sc=$sc+1;

        $a=date('i:s', $res);

echo"\r \e[1;33m [\e[1;37m<\e[3;32m Captcha is \e[1;37m>\e[1;33m ] \e[3;34m $captcha $str \r";

sleep(1);

    endwhile;

}



//function script



function ua(){



return $ua;

}





function ban($a,$b){

channel();

$namescrpit=$a;

$sc=1;

$urlscrpit=$b;

$a="\033[3;37mName_Scrpit \033[0;33m:=>\033[0;35m $namescrpit \033[3;34m V\033[3;33m$sc

\033[3;37mUrl_Website \033[0;33m:=>\033[0;35m $urlscrpit \033[3;31m Server :\033[3;32m [Online]";

slow($a,40000);

echo"\n";

echo slow("\033[3;37m••••••••••••••••••••••••••••••••••••••••••••••••••••••",5500)."\n";

}



//data script

input:

if(!file_exists("data.json")){

while("true"){

system("clear");

$api["Cookie"]=readline("\033[3;95mInput Your Cookie : \033[3;93m");

if($api["Cookie"]!=""){



break;

}

}

save("data.json",$api);

}
