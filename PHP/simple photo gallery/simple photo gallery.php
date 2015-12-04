<?php
//http://www.smipple.net/snippet/MikkelRask/%22Easy%20As%20Fuck%20Gallery%22

$imageDir = "photos"; //path to image folder
$folder = opendir($imageDir); //open the folder

$images = array(); //the array to put the $folder files into

while (false !== ($file = readdir($folder))) //read through the $folder
{
	if ($file != "." && $file != "..") //strip out . and .. (current and parent directory)
	{
		$images[$file] = $file;	//add the files to the $images array
	}
}

foreach ($images as $file) //loop through the $images array
{
	//echo out an img tag with a class of gal and a link to the full size image
	echo '<a href="'.$imageDir.'/'.$file.'"><img src="'.$imageDir.'/'.$file.'" class="gal"></a>';
}
?>