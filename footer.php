<div>
<a class="normal" href="privacyandcokkies.html">Privacy and Cookies Policy</a>
</div>
<div>
<?php
//print_r($_SERVER[HTTP_USER_AGENT]);
$browserinfo = get_browser(NULL, true);
//print_r($browserinfo);
$browsername = $browserinfo[browser];
$browsernversion = $browserinfo[version];
$os = $browserinfo[platform_description];

echo "<p>Your Os: ".$os." and your are using: ".$browsername." ".$browsernversion."</p>";

if ($browsername == Chrome){
	echo "your are using chrome";
	if ($browsernversion <= 15.0){
	echo "<p>Please update your browser</p>";
	}
}

if ($browsername == 'IE' || $broswername == MSIE){
	echo "your are using ie";
	if ($browsernversion <= 7){
		echo "<p>Please update your browser</p>";
	}
}

if ($browsername == Firefox){
	echo "you are using Firefox";
	if ($browsernversion <= 5){
		echo "<p>Please update your browser</p>";
		if ($os == 'Windows 98'){
		echo "You are running Firefox on 98.";
		}
	}
}

if ($browsername == Opera){
	echo "you are using Opera";
	if ($browsernversion <= 10){
		echo "<p>Please update your browser</p>";
	}
}

if ($browsername == Safari){
	//echo"You are using Safari";
	if ($browsernversion <= 5.2){
		echo "<p>Please update your browser</p>";
		if ($os == 'Windows Vista' || $os == 'Windows XP' || $os == 'Windows 7'){
		?>
		<a class="normal" href="http://www.apple.com/safari/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/safari.gif" alt="Safari"> </a>
		<p>Alterna Browsers</p>
		<p>
		<a class="normal" href="https://www.google.com/intl/en/chrome/browser/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/chrome.gif" alt="Chrome">
		</a>
		<a class="normal" href="http://windows.microsoft.com/en-GB/internet-explorer/products/ie/home" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/ie.gif" alt="Internet Explorer">
		</a>
		<a class="normal" href="http://www.mozilla.org/en-US/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/firefox.gif" alt="Firefox"></a>
		<a class="normal" href="http://www.opera.com/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/opera.gif" alt="Opera"></a>
		</p>
<?php
		}
		if ($os == 'Windows 98' || $os =='Windows 95'  || $os== 'Windows 2000'){
		echo "<p>Apple doesn't support Windows Me, Windows 2000, Windows 98, Windows 95</p>";
		?>
		<p>Alterna Browsers</p>
		<p>
		<a class="normal" href="" target="">Chrome
		</a>
		<a class="normal" href="" target="">Internet Exp;orer
		</a>
		<a class="normal" href="" target="">Firefox
		</a>
		<a class="normal" href="" target="">Opera
		</a>
		</p>
	<?php
		}
		if($os == 'Linux' ){
		echo "<p>How did you get Safari on Linux? Apple doesn't support. I thought the saying is \"Can I get Linux run on this?\" 
		not \"will Safari run on Linux? \" Seeing you are a smart arse I am not getting you the link for Safari for Linux.";
		echo "</p>";
		}
	}
}


?>
</div>