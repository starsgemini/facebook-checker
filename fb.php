<?php
$email="email@email.com";
$pass="akucintaindonesia";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/login.php');
curl_setopt($ch, CURLOPT_POSTFIELDS,'charset_test=€,´,€,´,水,Д,Є&email='.urlencode($email).'&pass='.urlencode($pass).'&login=Login');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept-Charset: utf-8',
'Accept-Language: en-us,en;q=0.7,bn-bd;q=0.3',
'Accept: text/xml,application/xml,application/xhtml+xml,text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5')); 
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd () . '/cok.txt' );
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd () . '/cok.txt' );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.3) Gecko/20070309 Firefox/2.0.0.3");
curl_setopt($ch, CURLOPT_REFERER, "http://m.facebook.com");
curl_exec($ch) or die(curl_error($ch)); 
curl_setopt($ch, CURLOPT_URL,"https://m.facebook.com/profile.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$s = curl_exec ($ch);
 $html = str_get_html($s);
 $foo = $html->find('.bq');
 if($foo){
 echo "success";
 }else{
 echo "ERROR";
 }
 ?>
