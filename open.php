<?php
$ch = curl_init();
$user="lakshman.k@mca.christuniversity.in:123456";
$receipientno= "9845785144"; 
$senderID="TEST SMS"; 
$msgtxt=" Your password for Secret Santa login is . Your future logins must be made using this pswd only. Copy of this msg has been mailed to ur id . Secret Santa.";
curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
$buffer = curl_exec($ch);
echo $buffer;
curl_close($ch);	
?>