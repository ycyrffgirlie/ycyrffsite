<?php

error_reporting(E_ALL);

function imageResize($src, $height,$width, $alt){
	$output = '<img src="'.$src.'"';
	$path = '/home/ycyrf718/includes';
	
	list($currentwidth, $currentheight,$type, $attr) = getimagesize($path.$src);
	$mime = shell_exec('file -b --mime-type '.$path.$src);
	
	$mime = trim($mime);
	
	//echo $mime;
	
	$ratioh = $height / $currentheight;
	$ratiow = $width / $currentwidth;
	$ratio = min($ratioh, $ratiow);
	//echo $ratio;
	$newheight = intval($ratio * $currentheight);
	$newwidth = intval($ratio * $currentwidth);
	
	$newimage = imagecreatetruecolor($newwidth, $newheight);
	
	switch ($mime){
		case 'image/jpeg':
		
		$source = imagecreatefromjpeg($path.$src);		
		imagecopyresized($newimage, $source,0,0,0,0,$newwidth, $newheight, $currentwidth, $currentheight);
		
		header('Content-Type:image/jpeg');
		imagejpeg($newimage, NULL, 100);
		
		//echo headers_list();
		break;
		default:
			echo '<p>'.$mime.' - '.strlen($mime).'</p>';
		break;
	}
	
	imagedestroy($newimage);
	
	//wxit();
	
	$output .= ' width="'.$newwidth.'px" height="'.$newheight.'px" alt="'.$alt.'" />';
	
	//return $output;
}

/*function sharpenImage(){
	
	$path = '/homr/ycyrf718'
}*/


?>