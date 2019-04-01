<?php

	$data = [
		"nome"=>"Davison"
	];

	define('SECRET', pack('a16', 'senha'));

	$mcrypt = mcrypt_encrypt(
		MCRYPT_RIJNDAEL_128, 
		SECRET,
		json_encode($data),
		MCRYPT_MODE_ECB 
	);

	$final = base64_encode($mcrypt);

	$string  = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, SECRET, base64_decode($final), MCRYPT_RIJNDAEL_128);

	var_dump(json_decode($string, true));

?>