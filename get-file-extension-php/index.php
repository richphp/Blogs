<?php
	
	// Get a File Extension in PHP
	// Use pathinfo() Function to Get File Extension in PHP
    // Use SplFileInfo() Construct and getExtension() Function to Get File Extension in PHP

//$_FILES['input_name']['name'];
echo pathinfo("image.ppt", PATHINFO_EXTENSION) . "<br />";

$ext = new SplFileInfo("image.png");

$file_ext = $ext -> getExtension();

echo $file_ext;

?>