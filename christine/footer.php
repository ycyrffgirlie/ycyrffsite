<div id="menu">
<a class="normal" href="/privacyandcookies.html">Privacy and Cookies Policy</a>
</div>
<div id="content">
<?php

//set variables
//print_r($_SERVER[HTTP_USER_AGENT]);
$browserinfo = get_browser(NULL, true);
//print_r($browserinfo);
$browsername = $browserinfo[browser];
$browsernversion = $browserinfo[version];

if ($browserinfo[platform_description] == 'unknown'){
$os = $browserinfo[platform];
}
else{
$os = $browserinfo[platform_description];
}

$domainmanes = array('christine.ycyrffgroupie.co.uk',
		'dev.ycyrffgroupie.co.uk',
		'llwybrllaethog.ycyrffgroupie.co.uk',
		'admin.ycyrffgroupie.co.uk'
		);

if (in_array($_SERVER{HTTP_HOST},$domainmanes)){
echo "<p>Welcome ".$_SERVER[PHP_AUTH_USER].", this is not live. 
<br>
Script Name ".$_SERVER[SCRIPT_FILENAME]."
<br>
Your Os: ".$os." and you are using: ".$browsername." ".$browsernversion.". 
<br>
Your ISP is: ".$_SERVER{REMOTE_ADDR}.". 
<br>
You have come from: ".$_SERVER[HTTP_REFERER].".
<br>
This 
footer is for your information.</p>";
}
else{
	if ($_SERVER[REMOTE_ADDR] = '188.223.77.182'){
	echo "<p>Welcome ".$_SERVER[REMOTE_ADDR].", please remember that this is live. So please don't fuck it up. 
	<BR>Script Name ".$_SERVER[SCRIPT_FILENAME]."
<br>
Your Os: ".$os." and you are using: ".$browsername." ".$browsernversion.". 
<br>
Your ISP is: ".$_SERVER{REMOTE_ADDR}.". 
<br>
You have come from: ".$_SERVER[HTTP_REFERER].".
<br>
This 
footer is for your information.</p>";	
	}
}
if ($browsername == Chrome){
	//echo "your are using chrome";
	if ($browsernversion <= 15.0){
		echo "<p>This site doesn't support your version of Chrome. Please update your browser</p>
		<p>Nid we safle hwn yn cefnogi eich fersiwn o Chrome. Diweddarwch eich porwr.</p>";
		if ($os == 'Windows Vista' || $os == 'Windows XP' || $os == 'Windows 7'){
	?>
		<a class="normal" href="http://www.google.com/chrome/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/chrome.gif" alt="Chrome">
		</a>
		<p>Alternative Browsers / Porwyr arall</p>
		<p>
		<a class="normal" href="http://windows.microsoft.com/en-GB/internet-explorer/products/ie/home" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/ie.gif" alt="Internet Explorer">
		</a>
		<a class="normal" href="http://www.mozilla.org/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/firefox.gif" alt="Firefox">
		</a>
		<a class="normal" href="http://www.opera.com/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/opera.gif" alt="Opera">
		</a>
		<a class="normal" href="http://www.apple.com/safari/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/safari.gif" alt="Safari"> </a>
		</p>
<?php	
	}
		if ($os == 'Windows 98' || $os =='Windows 95'  || $os== 'Windows 2000' || $os =='Windows ME'){
		echo "<p>Chrome doesn't support Windows Me, Windows 2000, Windows 98, Windows 95.If you need to use a version of Windows that pre-dates Windows Xp then chosse from the alternative browsers.</p>";
		?>
		<p>Alternative Browsers / Porwyr arall</p>
		<p>
		<a class="normal" href="" target="">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/ie.gif" alt="Internet Explorer">
		</a>
		<a class="normal" href="" target="">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/firefox.gif" alt="Firefox">
		</a>
		<a class="normal" href="" target="">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/opera.gif" alt="Opera">
		</a>
		</p>
<?php
		}
		if($os == 'Linux' ){
		?>
		<p>Please check your distros lastest repository branch first.</p>
		<a class="normal" href="http://www.google.com/chrome/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/chrome.gif" alt="Chrome">
		</a>
		<p>Alternative Browsers / Porwyr arall</p>
		<p>
		If you must destroy a beautiful OS with I.E then -<a class="normal" href="" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/ie.gif" alt="Internet Explorer">
		</a>
		<a class="normal" href="http://www.mozilla.org/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/firefox.gif" alt="Firefox">
		</a>
		<a class="normal" href="http://www.opera.com/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/opera.gif" alt="Opera">
		</a>
		<a class="normal" href="http://www.apple.com/safari/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/safari.gif" alt="Safari"> </a>
		</p>
<?php
		
		}
		if($os == 'Mac'){
		?>
		<a class="normal" href="http://www.google.com/chrome/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/chrome.gif" alt="Chrome">
		</a>
		<p>Alternative Browsers / Porwyr arall</p>
		<p>
		<a class="normal" href="http://windows.microsoft.com/en-GB/internet-explorer/products/ie/home" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/ie.gif" alt="Internet Explorer">
		</a>
		<a class="normal" href="http://www.mozilla.org/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/firefox.gif" alt="Firefox">
		</a>
		<a class="normal" href="http://www.opera.com/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/opera.gif" alt="Opera">
		</a>
		<a class="normal" href="http://www.apple.com/safari/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/safari.gif" alt="Safari"> </a>
		</p>
<?php
		}
	}
		
}

if ($browsername == 'IE' || $broswername == MSIE){
	//echo "your are using ie";
	if ($browsernversion <= 7){
		echo "<p>This site doen't support your version of Internet Explorer. Please update your browser</p>";
		if ($os == 'Windows Vista' || $os == 'Windows XP' || $os == 'Windows 7'){
	?>
		<a class="normal" href="http://windows.microsoft.com/en-GB/internet-explorer/products/ie/home" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/ie.gif" alt="Internet Explorer">
		</a>
		<p>Alternative Browsers / Porwyr arall</p>
		<p>
		<a class="normal" href="http://www.google.com/chrome/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/chrome.gif" alt="Chrome">
		</a>
		<a class="normal" href="http://www.mozilla.org/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/firefox.gif" alt="Firefox">
		</a>
		<a class="normal" href="http://www.opera.com/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/opera.gif" alt="Opera">
		</a>
		<a class="normal" href="http://www.apple.com/safari/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/safari.gif" alt="Safari"> </a>
		</p>
		
		<p>Please note: If you are using IE under Wine on a Linux - the script will detect Windows instead of Linux.</p>
<?php	
		}
		if ($os == 'Windows 98' || $os =='Windows 95'  || $os== 'Windows 2000' || $os =='Windows ME'){
	?>
		<a class="normal" href="" target="">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/ie.gif" alt="Internet Explorer">
		</a>
		<p>Alternative Browsers / Porwyr arall</p>
		<p>		
		<a class="normal" href="" target="">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/firefox.gif" alt="Firefox">
		</a>
		<a class="normal" href="" target="">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/opera.gif" alt="Opera">
		</a>
		</p>
<?php	
		}
		if($os == 'Linux' ){
		echo "<p>Microsoft has stop supporting IE on Linux. Please use alternative browsers.</p>";
		
	?>
		<p>Please check your distros lastest repository branch first.</p>
		<p>Alternative Browsers / Porwyr arall</p>
		<p>
		<a class="normal" href="http://www.google.com/chrome/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/chrome.gif" alt="Chrome">
		</a>
		<a class="normal" href="http://www.mozilla.org/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/firefox.gif" alt="Firefox">
		</a>
		<a class="normal" href="http://www.opera.com/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/opera.gif" alt="Opera">
		</a>
		<a class="normal" href="http://www.apple.com/safari/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/safari.gif" alt="Safari"> </a>
		</p>
<?php	
		}
		if($os == 'Mac' ){
		echo "<p>Microsoft has stop supporting IE on Mac. Please use alternative browsers.</p>";
	?>
		<p>Alternative Browsers / Porwyr arall</p>
		<p>
		<a class="normal" href="http://www.google.com/chrome/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/chrome.gif" alt="Chrome">
		</a>
		<a class="normal" href="http://www.mozilla.org/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/firefox.gif" alt="Firefox">
		</a>
		<a class="normal" href="http://www.opera.com/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/opera.gif" alt="Opera">
		</a>
		<a class="normal" href="http://www.apple.com/safari/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/safari.gif" alt="Safari"> </a>
		</p>

<?php	
		}
	}
		
}

if ($browsername == Firefox){
	echo "you are using Firefox";
	if ($browsernversion <= 5){
		echo "<p>This site doen't support your version of Firefox. Please update your browser</p>";
		if ($os == 'Windows Vista' || $os == 'Windows XP' || $os == 'Windows 7'){
	?>
		<a class="normal" href="http://www.mozilla.org/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/firefox.gif" alt="Firefox">
		</a>
		<p>Alternative Browsers / Porwyr arall</p>
		<p>
		<a class="normal" href="http://windows.microsoft.com/en-GB/internet-explorer/products/ie/home" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/ie.gif" alt="Internet Explorer">
		</a>
		<a class="normal" href="http://www.google.com/chrome/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/chrome.gif" alt="Chrome">
		</a>
		<a class="normal" href="http://www.opera.com/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/opera.gif" alt="Opera">
		</a>
		<a class="normal" href="http://www.apple.com/safari/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/safari.gif" alt="Safari"> </a>
		</p>

<?php	
		}		
		if ($os == 'Windows 98' || $os =='Windows 95'  || $os== 'Windows 2000' || $os =='Windows ME'){
		echo "You are running Firefox on 98.";
	?>
		<a class="normal" href="" target="">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/firefox.gif" alt="Firefox">
		</a>
		
		<p>Alternative Browsers / Porwyr arall</p>
		<p>		
		<a class="normal" href="" target="">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/ie.gif" alt="Internet Explorer">
		</a>
		<a class="normal" href="" target="">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/opera.gif" alt="Opera">
		</a>
		</p>
<?php		
		}
		if($os == 'Linux' ){
	?>
		<p>Please check your distros lastest repository branch first.</p>
		<a class="normal" href="http://www.mozilla.org/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/firefox.gif" alt="Firefox">
		</a>
		<p>Alternative Browsers  / Porwyr arall</p>
		<p>
		If you must destroy a beautiful OS with I.E then - <a class="normal" href="" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/ie.gif" alt="Internet Explorer">
		</a>
		<a class="normal" href="http://www.google.com/chrome/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/chrome.gif" alt="Chrome">
		</a>
		<a class="normal" href="http://www.opera.com/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/opera.gif" alt="Opera">
		</a>
		<a class="normal" href="http://www.apple.com/safari/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/safari.gif" alt="Safari"> </a>
		</p>
<?php	
		}
		if($os == 'Mac' ){
	?>
		<a class="normal" href="http://www.mozilla.org/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/firefox.gif" alt="Firefox">
		</a>
		<p>Alternative Browsers / Porwyr arall</p>
		<p>
		<a class="normal" href="http://windows.microsoft.com/en-GB/internet-explorer/products/ie/home" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/ie.gif" alt="Internet Explorer">
		</a>
		<a class="normal" href="http://www.google.com/chrome/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/chrome.gif" alt="Chrome">
		</a>
		<a class="normal" href="http://www.opera.com/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/opera.gif" alt="Opera">
		</a>
		<a class="normal" href="http://www.apple.com/safari/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/safari.gif" alt="Safari"> </a>
		</p>

<?php	
		}
	}
}

if ($browsername == Opera){
	echo "you are using Opera";
	if ($browsernversion <= 10){
		echo "<p>This site doen't support your version of Opera. Please update your browser</p>";
		if ($os == 'Windows Vista' || $os == 'Windows XP' || $os == 'Windows 7'){
	?>
		
		<p>Alternative Browsers / Porwyr arall</p>
		<p>
		<a class="normal" href="http://windows.microsoft.com/en-GB/internet-explorer/products/ie/home" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/ie.gif" alt="Internet Explorer">
		</a>
		<a class="normal" href="http://www.google.com/chrome/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/chrome.gif" alt="Chrome">
		</a>
		<a class="normal" href="http://www.mozilla.org/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/firefox.gif" alt="Firefox">
		</a>
		<a class="normal" href="http://www.apple.com/safari/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/safari.gif" alt="Safari"> </a>
		</p>
<?php	
		}
		if ($os == 'Windows 98' || $os =='Windows 95'  || $os== 'Windows 2000' || $os =='Windows ME'){
	?>
		<a class="normal" href="" target="">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/opera.gif" alt="Opera">
		</a>
		<p>Alternative Browsers / Porwyr arall</p>
		<p>		
		<a class="normal" href="" target="">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/firefox.gif" alt="Firefox">
		</a>
		<a class="normal" href="" target="">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/ie.gif" alt="Internet Explorer">
		</a>
		
		</p>
<?php		
		}
		if($os == 'Linux' ){
	?>
		<p>Please check your distros lastest repository branch first.</p>
		<a class="normal" href="http://www.opera.com/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/opera.gif" alt="Opera">
		</a>
		<p>Alternative Browsers / Porwyr arall</p>
		<p>
		If you must destroy a beautiful OS with I.E then - <a class="normal" href="http://windows.microsoft.com/en-GB/internet-explorer/products/ie/home" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/ie.gif" alt="Internet Explorer">
		</a> 
		<a class="normal" href="http://www.google.com/chrome/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/chrome.gif" alt="Chrome">
		</a>
		<a class="normal" href="http://www.mozilla.org/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/firefox.gif" alt="Firefox">
		</a>
		<a class="normal" href="http://www.apple.com/safari/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/safari.gif" alt="Safari"> </a>
		</p>
<?php	
		}
		if($os == 'Mac' ){
	?>
		<a class="normal" href="http://www.opera.com/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/opera.gif" alt="Opera">
		</a>
		<p>Alternative Browsers / Porwyr arall</p>
		<p>
		<a class="normal" href="http://www.google.com/chrome/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/chrome.gif" alt="Chrome">
		</a>
		<a class="normal" href="http://www.mozilla.org/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/firefox.gif" alt="Firefox">
		</a>
		<a class="normal" href="http://www.apple.com/safari/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/safari.gif" alt="Safari"> </a>
		</p>
<?php	
		}
	}

}

if ($browsername == Safari){
	if ($browsernversion <= 5.2){
		echo "<p>This site doen't support your version of Safari. Please update your browser</p>";
		if ($os == 'Windows Vista' || $os == 'Windows XP' || $os == 'Windows 7'){
		?>
		<a class="normal" href="http://www.apple.com/safari/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/safari.gif" alt="Safari"> </a>
		<p>Alternative Browsers / Porwyr arall</p>
		<p>
		<a class="normal" href="http://www.google.com/chrome/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/chrome.gif" alt="Chrome">
		</a>
		<a class="normal" href="http://windows.microsoft.com/en-GB/internet-explorer/products/ie/home" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/ie.gif" alt="Internet Explorer">
		</a>
		<a class="normal" href="http://www.mozilla.org/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/firefox.gif" alt="Firefox">
		</a>
		<a class="normal" href="http://www.opera.com/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/opera.gif" alt="Opera">
		</a>
		</p>
<?php
		}
		if ($os == 'Windows 98' || $os =='Windows 95'  || $os== 'Windows 2000' || $os =='Windows ME'){
		echo "<p>Apple doesn't support Windows Me, Windows 2000, Windows 98, Windows 95. If you need to use a version of Windows that pre-dates Windows Xp then chosse from the alternative browsers. </p>";
		?>
		<p></p>
		<p>Alternative Browsers / Porwyr arall</p>
		<p>
		<a class="normal" href="" target="">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/chrome.gif" alt="Chrome">
		</a>
		<a class="normal" href="" target="">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/ie.gif" alt="Internet Explorer">
		</a>
		<a class="normal" href="" target="">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/firefox.gif" alt="Firefox">
		</a>
		<a class="normal" href="" target="">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/opera.gif" alt="Opera">
		</a>
		</p>
<?php
		}
		if($os == 'Linux' ){
		echo "<p>How did you get Safari on Linux? Apple doesn't support. I thought the saying is \"Can I get Linux run on this?\" 
		not \"will Safari run on Linux? \" Seeing you are a smart arse I am not getting you the link for Safari for Linux.";
		echo "</p>";
		?>
		<p>Please check your distros lastest repository branch first.</p>
		<p>Alternative Browsers / Porwyr arall</p>
		<p>
		<a class="normal" href="http://www.google.com/chrome/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/chrome.gif" alt="Chrome">
		</a> 
		<p>If you must destroy a beautiful OS with I.E then</p>
		<a class="normal" href="" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/ie.gif" alt="Internet Explorer">
		</a>
		<a class="normal" href="http://www.mozilla.org/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/firefox.gif" alt="Firefox"></a>
		<a class="normal" href="http://www.opera.com/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/opera.gif" alt="Opera"></a>
		</p>
<?php
		}
		if($os == 'Mac'){
		?>
		<a class="normal" href="http://www.apple.com/safari/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/safari.gif" alt="Safari"> </a>
		<p>Alternative Browsers / Porwyr arall</p>
		<p>
		<a class="normal" href="http://www.google.com/chrome/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/chrome.gif" alt="Chrome">
		</a>
		<a class="normal" href="http://www.mozilla.org/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/firefox.gif" alt="Firefox">
		</a>
		<a class="normal" href="http://www.opera.com/" target="_blank">
		<img src="http://www.ycyrffgroupie.co.uk/Images/site/opera.gif" alt="Opera">
		</a>
		</p>
<?php
		}
	}
}


?>
<a href="http://internetdefenseleague.org"><img src="http://internetdefenseleague.org/images/badges/final/footer_badge.png" alt="Member of The Internet Defense League" /></a>
</div>