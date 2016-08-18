

#php-image-folder-to-xml
###This uses PHP to create XML code of images in any folder.

Because Google Picasa is no longer available to share image folders (and get ablum IDs) and Google Plus makes you use tokens and API, I went back to hosting images on my own server. I did not want to use Flikr or anything else yet. It was a lot of work to "manually" create photo galleries and I needed a new option so I went back to hosting the images in a folder on my server and I created this PHP to pull image and image info automatically using RSS/XML feeds.

This is nothing amazing, but so far it seems to work well. Anyways, I created this for an image gallery (currently I am using PlusGallery) to pull all the images (and info) for any folder. This is still a work in progress, but this part is working fine. I can see it may have many other uses.

FYI, one problem I had to solve was I am using PHP 5.2.1 (on an older server) and it will not work with SimpleXML (PHP) Functions so I used found a way to use DomDocument functions (PHP) instead. Most people would have done this with SimpleXML. I just did not have it available. 

Also, FYI, I set this up to work on the same server as the PHP code so I used PHP to get the location the domain automatically. You dont need to put it (in case you do a lot of sites).

This is easy to use, just update or send these two values ($folder_url and $folder_path). This is what tells the code what folder to look in. I played around with putting this as the index.php file in the folder instead updating the code, but that means more explaining. In this case, I felt using URLs is better becasue I can get the location in a data varible via JQuery (which will reference this file). That is the plan at least.

###Anyways, here is varibles to update (if doing manually).

- $folder_url = "/images/folder-name/";
- $folder_path = "../images/folder-name/";

###You can also set them with using parameters from the URL (BETTER).

- image-xml.php?folder_url=/images/folder-name/&folder_path=../images/folder-name/
- $folder_url = $_GET['$folder_url'];
- $folder_path = $_GET['$folder_path'];

Anyways, I am still rewriting code for plusgallery to use my RSS feed. I noticed they had already started the code but never completed it. I needed a way to get my images on my server. They just put the JS/Jquery code and nothing else.

Nathan Sharfi
