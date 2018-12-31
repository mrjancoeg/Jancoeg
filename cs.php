<?php
$abang="\033[1;31m";

//flag
print"$abang
========================================================\n
$abang  AWAS! IKI BOT ORA SEMBARANG BOT !!!!$pink
$abang ==> AWAS! COEG! KENEK BANNED!<==$pink
$abang   <SING GAE TOOLS RIKY INDRAW / INDRA443>\n$ijo
========================================================\n$biru";
function id($token,$jumlah,$wait)
{
$x = 0;
while($x < $jumlah) { $rand = rand(1,99999);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.indkota.com//Content/Billing/billing?member_token='.$token.'&billing_id=$rand");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
$result = curl_exec($ch); curl_close ($ch);
echo $result."\n"; sleep($wait); $x++;
flush(); } } echo "Token ?\nInput : ";
$token = trim(fgets(STDIN));
echo "Jumlah ?\nInput : ";
$jumlah = trim(fgets(STDIN));
echo "Jeda ?(ex:0)\nInput : ";
$wait = trim(fgets(STDIN));
$submit = id($token,$jumlah,$wait);
?>
