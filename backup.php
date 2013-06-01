<?php
$sapi_name = php_sapi_name();

//echo $sapi_name."\n";
if ($_SERVER["GATEWAY_INTERFACE"] = "CGI/1.1"){

}
$attachment = '';

$flle_backup = '/home/ycyrf718/backup/files_'.date('d-m-Y:H:i:s').'.tar.gz';
$cmd =' cd /home/ycyrf718/ && tar -czf '.$flle_backup.' /public_html /includes';

echo 'Now executing:'. $cmd .' So please wait.'."\n";

$output = array();
$output[1] = exec($cmd, $output);

echo '<pre>';
print_r($output);
echo '</pre>';

$cmd = 'tar dzf '.$flle_backup;

echo $cmd;

$output[2] = exec($cmd, $output);

echo '<pre>';
print_r($output);
echo '</pre>';

$file = escapeshellarg($flle_backup);
$mime = shell_exec('file -b --mime-type '.$file);

$filename = str_replace('/home/ycyrf718/backup/', '',$flle_backup);
//print_r($filename);

//echo str_replace('/home/ycyrf718/backup/', '',$flle_backup)."\n";

 $semi_rand = md5(time()); 
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
$to ='ycyrffgroupie@gmail.com';
$subject= "Backup";
$html = '<body style="background:#800080;" link="ffd700" alink="ffd700" >
<p><font color="ffd700">Backup complete.</font></p> 
<p><font color="ffd700">One nutty fan</font></p>
</body>';

$content = chunk_split(base64_encode(file_get_contents($flle_backup)));

$attachment .= '--'.$mime_boundary."\n";
$attachment .= 'Content-Type: '.$mime. 'name="'.$filename. '"'."\n";
$attachment .= 'Content-Transfer-Encoding: base64'."\n";
$attachment .= 'Content-Disposition: attachment; filename="'.$filename.'"'."\r\n\r\n";
$attachment .= $content;

echo $attachment;

$headers ='MIME-Version: 1.0'."\r\n";
		$headers .= 'Content-Type: multipart/mixed; boundary='.$mime_boundary. "\r\n";
		$headers .='From: ycyrffgroupie@gmail.com'. "\r\n";	
//foreach ()

$body = "This is a multi-part message in MIME format.\n\n" .
"--{$mime_boundary}\n" .
                                "Content-Type:text/html; charset=\"utf-8\"\n" .
                                "Content-Transfer-Encoding: 7bit\n\n" .
				$html."\n".
				$attachment; 

mail($to, $subject,$body, $headers);

?>