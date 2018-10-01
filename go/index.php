<?php

$url = array(
	
	'parimatch' => 'http://www.paripartners4.com/wl/clk/?btag=a_8219b_753&aid=registraciya',
	'google' => 'https://sites.google.com/view/zerkalo1/???????',
	
);

if(isset($_GET['c']))
{
	header('Location: '.$url[$_GET['c']]);
}
