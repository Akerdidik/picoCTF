<?php
$wordlist = fopen('roker.txt','r');

while(($log = fgets($wordlist))!== false){
	$hash = md5(trim($log));
	if(substr($hash, -3) === '001'){
		echo $log;
		break;
	}
}
fclose($wordlist);
