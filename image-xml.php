<?php

// Created by Nathan Sharfi
// <!doctype xml>

// create document (XML)
$XML = new DomDocument("1.0", "UTF-8");

// global Varibiles (Update Folder Name (or pass in URL)
// $folder_url = $_GET['$folder_url'];
// $folder_url = $_GET['$folder_path'];
$folder_url = "http://website.com/images/folder-name/";
$folder_path = "../images/folder-name/";

// create a XML Node and store it in a variable
$rss = $XML -> createElement("rss"); 
$rss -> setAttribute("version", "2.0");

$channel = $XML -> createElement("channel"); 
		
// RSS Info
$rss -> appendChild ( $XML -> createElement( "title", "Folder: " . $folder_url ) );
$rss -> appendChild ( $XML -> createElement( "description", "List of images in folder." ) );

// Get Images
$count = 0;
$image_list = array_slice(scandir($folder_path), 2);

foreach ( $image_list as $file => $location ) {
		
	// Create Image Details		
	list($width, $height, $type, $attr) = getimagesize( $folder_path . $location );
	$types = array(
		1 => "GIF",
		2 => "JPEG",
		3 => "PNG",
		4 => "SWF",
		5 => "PSD",
		6 => "BMP",
		7 => "TIFF",
		8 => "TIFF"
	);
	
	if ( $location != "." AND $location != ".." AND $type > 0 AND $type < 8 ) {
		
		// Item Info (Image)
		$item = $XML -> createElement("item"); 
		$item -> appendChild ( $XML -> createElement( "title", $location ) );
		$item -> appendChild ( $XML -> createElement( "description", '<img src="' . $folder_url . $location . '" title="' . $location . '" style="max-width: 300px;">' ) );
		
		// Image Info (Image Details)
		$image = $XML -> createElement("image"); 		 
		$image -> appendChild ( $XML -> createElement( "url", $folder_url . $location ) );
		$image -> appendChild ( $XML -> createElement( "link", $folder_url . $location ) );

		$image -> appendChild ( $XML -> createElement( "width", $width ) );
		$image -> appendChild ( $XML -> createElement( "height", $height ) );
		$image -> appendChild ( $XML -> createElement( "type", $types[$type] ) );
		$image -> appendChild ( $XML -> createElement( "attr", $attr ) );
		
		$file_size = round( number_format( filesize( $folder_path . $location ) / 1024, 2) );
		$image -> appendChild ( $XML -> createElement( "size", $file_size ) );
		$image -> appendChild ( $XML -> createElement( "units", "kB" ) );
	
		$count++;
		$image -> appendChild ( $XML -> createElement( "count", $count ) );

		$item -> appendChild ( $image );
		$channel -> appendChild ( $item );

	}
	
}

$rss -> appendChild ( $channel );
$XML -> appendChild( $rss );
		 
// Adds spaces, new lines and makes the XML more readable format. 
$XML -> formatOutput = true; 

// $stringXML contains the entire String
$stringXML = $XML -> saveXML(); 

// Header("Content-Type: text/xml");
echo $XML  ->  saveXML();

?>
