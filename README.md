# php-image-folder-to-xml
Uses PHP to Create XML Code of Images in Folder

FYI, I am using PHP 5.2.1 (old server) and it will not work with SimpleXML Functions so I used the DomDocument.

This is easy to use, just update these files.
$folder_url = "/images/folder-name/";  // Pa
$folder_path = "../images/folder-name/";

You can also set them with using parameters from the URL
$folder_url = $_GET['$folder_url'];
$folder_url = $_GET['$folder_path'];

I set this up to work on the same server so I am getting location the domain automatically.

I was using this for an image gallery to pull all the info for each folder. 
Google Picasa is no longer available and Google Plus make you use tokens and API. It is not fast. 
So I went back to hosting the images on my folder. I just wanted the images to pull automatically.

Nathan Sharfi
