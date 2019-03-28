<?php

	$minuman = [
		['teh' => ['made' => 'pagaralam', 'harga' => '10.000', 'isi' => '100ml']], 
		['kopi' => ['made' => 'kepahiang', 'harga' => '15.000', 'isi'=> '100ml']], 
		['susu' => ['made' => 'flores', 'harga' => '10.000', 'isi' => '250ml']], 
		['sirup' => ['made' => 'karawang', 'harga' => '20.000','isi' => '400ml']], 
		['bandrek' => ['made' => 'bandung','harga' => '15.000', 'isi'=> '400ml']], 
		
	];

	for ($i=0;$i<1;$i++)
	{
		echo '<pre>'; print_r($minuman);
	};
?>