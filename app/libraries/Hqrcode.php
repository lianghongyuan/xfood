<?php
class Hqrcode{
	

	 function __construct()
 {
     include "phpqrcode/phpqrcode.php"; 
 }	
 function get()
 {
	echo "a"; 
 }
function set_QRcode($value,$codeurl)
{
$errorCorrectionLevel = "L";
$matrixPointSize = "4";
QRcode::png($value,$codeurl, $errorCorrectionLevel, $matrixPointSize);
}
}

?>
