

# php-image-folder-to-xml
This uses PHP to create XML code of images in any folder.

Because Google Picasa is no longer available and Google Plus make you use tokens and API, I created this for an image gallery to pull all the images and info for each folder. It was a lot of work to manually create photo gallerys and I needed a new option so I went back to hosting the images on a folder on my server and I just wanted the images to pull automatically.

FYI, I am using PHP 5.2.1 (old server) and it will not work with SimpleXML Functions so I used the DomDocument.
I set this up to work on the same server so I am getting location the domain automatically.


This is easy to use, just update these files.

$folder_url = "/images/folder-name/";

$folder_path = "../images/folder-name/";

You can also set them with using parameters from the URL

$folder_url = $_GET['$folder_url'];

$folder_url = $_GET['$folder_path'];


Anyways, I am still rewriting code for plusgallery to use my RSS feed. I noticed they had already started the code but never completed it. I needed a way to get my images on my server. They just put the JS/Jquery code and nothing else.


Nathan Sharfi
