<?php defined('BASEPATH') OR exit('No direct script access allowed');

//TODO : translate help file

// inline help html. Only 'help_body' is used.
$lang['help_body'] = "
<h4>Overview</h4><hr>
<p>The files module is an excellent way for the site admin to manage the files in use on the site. 
All images or files that are inserted into pages, galleries, or blog posts are stored here. 
For page content images you may upload them directly from the WYSIWYG editor or you can upload them here and just insert them via WYSIWYG.</p>

<h6>Managing Folders</h6>
<p>After you create the top level folder or folders you may create as many subfolders as you need such as blog/images/screenshots/image.jpg and pages/audio/sample.mp3.
The folder names are for your use only, the name is not displayed in the download link on the front end.
To edit a folder select Manage Folders in the left column, then click Edit on the folder you wish to change.</p>

<h6>Managing Files</h6>
<p>To manage files select the folder name in the left column. If the file is in a subfolder just choose the parent. 
Once you are in the parent folder you can choose the subfolder and filter by file type with the dropdowns at the top of the screen.
Now that you are in the proper folder you may upload by clicking the Upload button beside the Filter dropdown. 
Note there are two ways to view your files: List and Grid. List shows file details while grid will show a thumbnail of the image.</p>

<h6>Uploading Files</h6>
<p>After clicking the Upload button in the desired folder an upload window will appear. 
You may add files by either dropping them in the Upload Files box or by clicking in the box and choosing the files from your standard file dialog.
The selected files will display in a list at the bottom of the screen. 
You may then either delete unnecessary files from the list or if satisfied click Upload to start the upload process.
If the upload is not successful check your file size. Many hosts do not allow file uploads over 2MB. 
Many modern cameras produce images in exess of 5MB. 
To remedy this limitation you may either ask your host to change the upload limit or you may wish to resize your images before uploading. 
Resizing has the added advantage of faster upload times.</p>";