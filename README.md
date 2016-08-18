

# php-image-folder-to-xml
This uses PHP to create XML code of images in any folder.

Because Google Picasa is no longer available to share image folders (and get image IDs) and Google Plus makes you use tokens and API, I went back to hosting images on my own server. I did not want to use Flikr or anything else yet. It was a lot of work to "manually" create photo galleries and I needed a new option so I went back to hosting the images in a folder on my server and I created this images to pull info automatically using RSS/XML feeds.

This is nothing amazing, but so far it seems to work well. Anyways, I created this for an image gallery (currently I am using PlusGallery) to pull all the images (and info) for any folder. This is still a work in progress, but this part is working fine. I can see it may have many other uses.

FYI, one problem I had to overcome was that I am using PHP 5.2.1 (old server) and it will not work with SimpleXML Functions so I used the DomDocument. Also, FYI, I set this up to work on the same server as the PHP code so I used PHP to get the location the domain automatically. You dont need to put it (in case you do a lot of sites).

This is easy to use, just update these files.

$folder_url = "/images/folder-name/";
$folder_path = "../images/folder-name/";

You can also set them with using parameters from the URL

$folder_url = $_GET['$folder_url'];
$folder_path = $_GET['$folder_path'];

Anyways, I am still rewriting code for plusgallery to use my RSS feed. I noticed they had already started the code but never completed it. I needed a way to get my images on my server. They just put the JS/Jquery code and nothing else.


Nathan Sharfi
