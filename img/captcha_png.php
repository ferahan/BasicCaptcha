<?php

    /*
     * Returns a PNG image with random string of defined characters.
	 */
	 
	// Function that creates a random string.
	function getText($length){
		// Characters included in the string.
		$pattern="abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ.:,;/()#@$%&!·%=?¿-";
		// Creates an empty variable for later use.
		$out="";
		// Create random string.
		for($i=0;$i<=$length;$i++){
			$out=$out . $pattern[rand(0,82)];
		}
		// Return function output.
		return $out;
	}
	
	// Sets content type as image/png.
	header('Content-Type: image/png');
	
	// Image width and height parameters.
	$width=140;
	$height=60;
	
	// Sets string length.
	$text=utf8_decode( getText(8) );
	
	// Creates blank image with the specified values.
	$image=imagecreate($width,$height);
	
	// Set background color.
	$bgndColor= imagecolorallocate($image, 255, 255, 255);
    
    // Set font color.
    $fntColor= imagecolorallocate($image, 0, 0, 0);
    
	// Prints string on indicated coordinates ( 5->Font 25->X axis 25->Y axis ).
	imagestring($image,5,25,23,$text,$fntColor);
	
	// Prints final image.
	imagepng($image);
	
	// Free memory.
	imagedestroy($image);
?>