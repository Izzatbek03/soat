Skip to content
shoxxack
/
soat
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights
soat/Soat.php
@shoxxack
shoxxack Add files via upload
 1 contributor
96 lines (80 sloc)  4.12 KB
 
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#000000">
<link rel="apple-touch-icon-precomposed" href="/inc/style/img/app-icon.png">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="/inc/style/style.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Хостинг, Посуточный оплата,  Мобильный Хостинг,Мобильный Хостинг,, php 7, ffmpeg, GD,(pdo) MySQL(i), sqlite, Curl,IonCube, выбор версии php"/>
<meta name="description" content="Хостинг от  – качественный веб hosting сайтов c круглосуточной поддержкой. Надежный linux хостинг в Азие []"/> 
<meta name="author" content=""/>
<meta name="copyright" content="!"/>
<meta http-equiv="content-language" content="ru"/>
<title>Менеджер Файлов</title></head><body><header>
         <table>
            <tr>
               <td class="l_bar">
<a href="/"><img src="/inc/style/img/home.png" width="23"  alt="home"></a>
               </td>
               <td class="c_bar">
                  <h1 id="logo"><b>PlatinumHost.uz - Менеджер сайтов</b></h1>
               </td>
               <td class="r_bar">
<a href="https://PlatinumHost.uz/user/menu" title="Кабинет"><img width="25" src="/img/us2.png" alt="Кабинет"></a>
</td> </tr>
         </table>
      </header><div class="mOm"><div class="block first"><?php
// @L1GHDREAM1127
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

//kod @L1GHDREAM1127 tegiwli va @xakerliksirlar1 kanali orqali tarqaldi
$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$timerus=date("H:i",strtotime("+3 hour"));

$buoy = date('t', strtotime('5 hour'));

$timeusa = date("H:i",strtotime("-5 hour"));

$timeqirgiz = date("H:i",strtotime("+6 hour"));

$time=date("H:i",strtotime("2 hour"));

$kun=date("d.m.y",strtotime("2 hour"));

$haf = date('N',strtotime('2 hour'));
$haft="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";

$okun=date("n");
$oynoms = "1Yanvar1 2Fevral2 3Mart3 4Aprel4 5May5 6Iyun6 7Iyul7 8Avgust8 9Sentabr9 10Oktabr10 11Noyabr11 12Dekabr12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";

$yil = date("Y",strtotime("2 hour"));

$sana2 = date('z', strtotime('2 hour'));

$kunr = date('z',strtotime('2 hour')); 
$i = 206;
$s2 = $i-$kunr;



$input =["@Mr_Izzatbek"];
  $rand=array_rand($input);
  $text="$input[$rand]";
 $nik = ["$time | Izzatbek | $time"];
  $nikrand=array_rand($nik);
  $niktxt="$nik[$nikrand]";   // @L1GHDREAM1127
$MadelineProto->account->updateProfile(['first_name'=>"$time | $niktxt | $time",'about'=>"$text"]);
?>
© 2021 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
