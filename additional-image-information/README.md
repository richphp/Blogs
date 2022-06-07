<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="Get Additional Information of an Image in PHP">
</head>
<body>

<div class="main">

<div class="separator"><a target="_blank" href="https://youtu.be/LG5JFVZCYUw"><img alt="" border="0" width="400" src="images/get_image_information.png"/></a></div>

<div class="intro">
<b>Introduction</b>
<p>Hello developer, Welcome to today's blog.</p>
<p>Today we are going to learn about how to get image additional information such as image mime-type, size, width, height, image create date, last modified date, orientation, etc.</p>
</div>

<div class="install_code">
<h4>Step 1: Create simple form with input type file</h4>
<ul>
<li>Create a simple form with an input type file and controller file to check uploaded image information on that page.</li>
<li>In form attribute do not forgot to add</li>
<br />
<pre class="prettyprint">
enctype="multipart/form-data"
</pre>
<li>It's an encoding type that allows files to be sent through a POST.</li>
<li>Now in the controller print the file basic information using the $_FILES global variable.</li>
<li>In the form upload any image or file to check the information of that file. $_FILES is a two-dimensional associative global array of items that are being uploaded via the HTTP POST method and holds the image name, size, type, tmp_name, and error. </li>
<br />
<pre class="prettyprint">
< form method="POST" enctype="multipart/form-data" action="controller.php">
< input type="file" name="image" required>
< input type="submit" name="btn">
< form>
</pre>    
<li>You can validate this data using the if-else condition in the backend for more security.</li>
<li>To get image additional information we are going to use four different function </li>
<pre class="prettyprint">
imagesx() for width
imagesy() for height
getimagesize() for both height and width
exif_read_data() for additional information
</pre>                 
</ul>

<h4>Step 2: Edit php.ini file</h4>
<ul>
<li>Before using these functions make sure the corresponding DLL to be enabled for using these functions are php_mbstring.dll and php_exif.dll for that edit php.ini file which is in /opt/lampp/etc/php.ini</li>
<li>Edit that file using sudo editor_name php.ini</li>
<br />
<pre class="prettyprint">
sudo gedit php.ini
</pre>
<li>if you install the LAMP stack then the php.ini files are in /etc/PHP/version number/apache2/php.ini</li>
<pre class="prettyprint">
extension=php_mbstring.dll
extension=php_exif.dll
</pre>
<li>Restart server</li>

</ul>

<h4>Step 3: Use of imagesx() and imagesy() function</h4>
<ul>
<li>Use imagesx() and imagesy() function first we need to create resource type of data using function imagecreatefrompng() for png file and imagecreatefromjpeg() for jpg file.</li>
<br />
<pre class="prettyprint">
$image = imagecreatefrompng($_FILES['image']['tmp_name']);
print_r(imagesx($image)); //500
print_r(imagesy($image)); //500
</pre>  
<li>Return that variable to function it will return width or height.</li>
</ul>

<h4>Step 4: getimagesize() function use</h4>
<ul>
<li>But what if we want both width and height at the same time for that use getimagesize() function it will return both width and height at the same time.</li>
<li>In getimagesize() function need an image only it does not need to create resource type of data. you can directly pass an image to this function.</li>
<pre class="prettyprint">
print_r(getimagesize($_FILES['image']['tmp_name']));

//OUTPUT
Array ( [0] => 1080 [1] => 1080 [2] => 3 [3] => width="1080" height="1080" [bits] => 8 [mime] => image/png ) 
</pre>

</ul>

<h4>Step 5: Use of exif_read_data() function</h4>
<ul>
<li>Since getimagesize() function will return limited set of properties, exif_read_data() is used to get more information associated with image.</li>
<li>also in the exif_read_data() function, we can directly pass an image to get data it will return an array.</li>
<li>As you see more information about the image is shown using the exif_read_data() function</li>
<pre class="prettyprint">
$image_data = exif_read_data($_FILES['image']['tmp_name']);

print('<pre>' . print_r($image_data, true) . '</pre>');

//OUTPUT
Array
(
[FileName] => phpwB0z1j
[FileDateTime] => 1652801283
[FileSize] => 8787
[FileType] => 2
[MimeType] => image/jpeg
[SectionsFound] => 
[COMPUTED] => Array
(
[html] => width="275" height="183"
[Height] => 183
[Width] => 275
[IsColor] => 1
)

)
</pre>
</ul>
</div>

<h4>Thank you, guys.</h4> 
<h4>Please do like, comment and share</h4>
<h5>In the next video, we will check how to validate an image using the above function and store that image in the folder and database and fetch an image from the database.</h5>  
</div>    
</body>
</html>