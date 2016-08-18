

#php-image-folder-to-xml
###This uses PHP to create XML code of images in any folder.

Because Google Picasa is no longer available to share image folders (and get ablum IDs) and Google Plus makes you use tokens and API, I went back to hosting images on my own server. I did not want to use Flikr or anything else yet. It was a lot of work to "manually" create photo galleries and I needed a new option so I went back to hosting the images in a folder on my server and I created this PHP to pull image and image info automatically using RSS/XML feeds.

This is nothing amazing, but so far it seems to work well. Anyways, I created this for an image gallery (currently I am using PlusGallery) to pull all the images (and info) for any folder. This is still a work in progress, but this part is working fine. I can see it may have many other uses.

FYI, one problem I had to solve was I am using PHP 5.2.1 (on an older server) and it will not work with SimpleXML (PHP) Functions so I used found a way to use DomDocument functions (PHP) instead. Most people would have done this with SimpleXML. I just did not have it available. 

Also, FYI, I set this up to work on the same server as the PHP code so I used PHP to get the location the domain automatically. You dont need to put it (in case you do a lot of sites).

This is easy to use, just update or send these two values ($folder_url and $folder_path). This is what tells the code what folder to look in. I played around with putting this as the index.php file in the folder instead updating the code, but that means more things to remember (you would have to always put he file in the folder). Keep in mind, this is going to be used in an image gallery and I have a bunch of folders. Anyways, in my case, I felt using URLs is better becasue I can get the location in a data varible via JQuery (which will reference this file). That is the plan at least. 

###You can also set them with using parameters from the URL (BETTER).

- image-xml.php?folder_url=/images/gallery/folder-name/&folder_path=../images/gallery/folder-name/
- $folder_url = $_GET['folder_url'];
- $folder_path = $_GET['folder_path'];
- Remember $folder_url  is the absolute path to the image folder and $folder_path is relative FROM the PHP file TO the image folder.

###FYI - In my case, I put the PHP file in the "plusgallery" folder and I am just pass the locations of the image folders for each gallery.
    <div id="plusgallery" data-type="local" data-image-path="/images/gallery/folder-name/"></div>
    
Keep in mind, in this case, I (probably) don't need to pass the relative path to the PHP file since I already know where it is (it in the plugin folder). I still have to figure all this out.

###Anyways, here is varibles to update (Alternate, if doing manually and only need one feed).

- $folder_url = "/images/gallery/folder-name/";
- $folder_path = "../images/gallery/folder-name/";

Here is all the info that is passed with teh current code. It is easy to update if you want to play with more or need other info passed. There is a way to embed comments into photos. You can look into that later if you want. I did mess around with it little but did not post it.


    <?xml version="1.0" encoding="UTF-8"?>
    <rss version="2.0">
      <title>Folder: http://www.website.com/images/gallery/exteriors/</title>
      <description>List of images in folder.</description>
      <channel>
        <item>
          <title>image.jpg</title>
          <description>&lt;img src="http://www.website.com/images/gallery/exteriors/image.jpg" title="image.jpg" style="max-width: 300px;"&gt;</description>
          <image>
            <url>http://www.website.com/images/gallery/exteriors/image.jpg</url>
            <link>http://www.website.com/images/gallery/exteriors/image.jpg</link>
            <width>600</width>
            <height>450</height>
            <type>JPEG</type>
            <attr>width="600" height="450"</attr>
            <size>33</size>
            <units>kB</units>
            <count>1</count>
          </image>
        </item>
      </channel>
    </rss>

Anyways, I am still rewriting code for PlusGallery to use my RSS feed. I noticed they had already started the code but never completed it. I needed a way to get my images on my server. They just put the JS/Jquery code and nothing else.

You can learn more about PlusGallery here. I am not sharing any of their code on my GitHub since I did not write it.

www.plusgallery.net

Nathan Sharfi

--------------------

##Extra stuff that I was experimenting with.

###Here is a different version of Gallery code example.
    <div id="plusgallery" data-type="local" data-image-path="/includes/image-xml.php?folder_url=/images/gallery/folder-name/&folder_path=../images/gallery/folder-name/"></div>

###Alternate Version of the same example.
    <div id="plusgallery" data-type="local" data-image-path="/includes/image-xml.php" folder-url="/images/gallery/folder-name/" folder-path="../images/gallery/folder-name/"></div>

Notes:
- In both of these cases, I put this PHP file in the root called "/includes/".
- Remember $folder_url (folder-url) is the absolute path to the image folder and $folder_path (folder-path) is relative FROM the PHP file TO the image folder.

--------------------

#UPDATE

After fidding around with the plusgallery code, I decided to use what I did and create a php file that will create code for the page for each folder using an include or a class. I am still working on the code. 

The idea of creating a RSS feed of the folder and THEN trying to use that feed to work with the plus gallery was not a good use of my time. I had to find a sipiler solution. There are tons of great lightboxes out there and I was making this too coplicated. Especailly since I dont need all the featuers that plusgalley offers with other websites (like Flickr and Instagram). Keep in mind, the creator of plusgallery has not updated the software in a while and it is not working as well as it used to.

My main goal is to just be able to drag and drop folders and images into my gallery folder on my website and then have the website page self create the code the photo gallery. I dont like to spend a lot of time updating galleries for clients. I needed something similar. I also create a lot of website and other people work on them and I wanted some thing simple to pass on. 

I used to use the Google Picasa to host the images so clients could do this themself. However, now that the rules have changed, that will nto work anymore (easy). I also have used some Facebook plugins, however, the fact that the tokens expire so fast, is really frustrating. So this is the new solution.

Anyways, I will post the solution on another GitHub project when completed.


--------------------

#FYI

This is still useful for other projects. So it was not wasted and I knew that when I was creating it. It just is not the best solution for this case.

I still love XML RSS feeds. They are good for SEO and sharing info with other services. So this still has use for other projects.

