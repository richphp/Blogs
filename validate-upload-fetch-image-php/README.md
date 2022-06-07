<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="validation, upload and fetch image">
<style type="text/css">

</style>
</head>
<body>

<div class="main">

<div class="separator"><a target="_blank" href="https://youtu.be/JIparcarVLk"><img alt="" border="0" width="400" src="images/1.png"/></a></div>

<div class="intro">
<b>Introduction</b>
<p>Hello friends, Welcome to today's blog about validation, uploading, and fetching images from the database.</p>
<p>Most of the time we are dealing with text data but when you are working on a large e-commerce site that time you need to upload images in coding almost for every important model.</p>
</div>

<div class="install_code">
<h4>Step 1: Create simple form with input type file</h4>
<ul>
<li>In this blog, we are using $_FILES variables and getimagesize() to handle file validation and store it in folders and databases.</li>
<li>This is the simple array that we get using these two functions. using getimagesize() we can validate what width and height we need. And all others we can get using $_FILES variables like mime-type, size, and tmp_name to store the file.</li>
<br />
<pre class="prettyprint">
$_FILES array()
array(1) {
["image"]=>
array(6) {
["name"]=>
string(5) "1.png"
["full_path"]=>
string(5) "1.png"
["type"]=>
string(9) "image/png"
["tmp_name"]=>
string(25) "/opt/lampp/temp/phpIXsfM9"
["error"]=>
int(0)
["size"]=>
int(781)
}
}

getimagesize() array();

array(6) {
[0]=>
int(200)
[1]=>
int(200)
[2]=>
int(3)
[3]=>
string(24) "width="200" height="200""
["bits"]=>
int(4)
["mime"]=>
string(9) "image/png"
}
</pre>
<li>In PHP 8.1, the $_FILES also contain a new key named full_path that contains the full path as submitted by the browser.</li>
<li>Create a simple form to upload one single image, In form tag,  won't forget to enctype to send a file through the HTTP POST method.</li>
<li>And In input you can use accept what type of file you need for the image you can use image mime type or you can directly use the file extension to simply allow the user to select a specific file that we need. </li>
<br />
<pre class="prettyprint">
< form method="POST" enctype="multipart/form-data" action="controller.php">
< input type="file" name="image" accept="image/png, image/jpg, image/jpeg" required>
< input type="submit" name="btn">
< form>
</pre>    
<li>Back to $_FILES and  getimagesize() function. In $_FILES we get a total of 6 image keys in PHP 8.1 name, full_path, type, tmp_name, error, size, and before PHP 8.1 there is no full_path key so this is new in PHP 8.1.
</li>
<li>
In the getimagesize() function we only use this function to get image width and height.</li>
      
</ul>

<h4>Step 2: Store image in folder</h4>
<ul>
<li>Now, the most important part is to store the image in the folder for that we use the PHP function move_uploaded_file().</li>
<li>This function needs two parameters first is the filename which is tmp_name and the destination where to store the file.</li>
<li>if you are using Linux to upload the file you need to provide permission to that folder to allow you to upload the file in it.</li>
<br />
<pre class="prettyprint">
sudo chmod -Rf 777 folder_path
</pre>
<li>In the case of real servers, most servers don't need permission for this. But if you are using AWS or cloud base server at that time you need to provide permission to the folder.</li>
<li>Upload an image to check whether the move_uploaded_file() function works correctly or not.</li>
<br />
<pre class="prettyprint">
move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $_FILES['image']['name']);
</pre>

</ul>

<h4>Step 3: Validation for the image</h4>
<ul>
<li>First, Check file isset and not empty use $_FILES to get the image name to check file are not empty and isset. </li>
<br />
<pre class="prettyprint">
if(!empty($_FILES['image']['name']) && isset($_FILES['image']['name'])){
//code
}else{
//code
}
</pre>  
<li>After that decide what type of image you need in this case I allow only the png and jpg files to upload.</li>
<li>For that use, if-else loop with or option and get file mime-type using $_FILES variable.</li>
<br />
<pre class="prettyprint">
if(
(
$_FILES['image']['type'] == 'image/png' ||
$_FILES['image']['type'] == 'image/jpg' ||
$_FILES['image']['type'] == 'image/jpeg' 
)
){
//code
}else{
//code
}
</pre>
<li>Now I need a square image for that use function getimagesize() to get the image width and height. Compare in the if-else loop.</li>
<br />
<pre  class="prettyprint">
$image = getimagesize($_FILES['image']['tmp_name']);
if($image[0] == $image[1] && $image[0] > 100 && $image[1] > 100 && $image[0] < 1000 && $image[1] < 1000){
// code
}else{
// code
}
</pre>
<li>
And the last thing we check is image size. Here im allowing only 2 MB size for that use key size to get a size in bytes.
</li>
<br />
<pre  class="prettyprint">
if($_FILES['image']['size'] < 2097152){
//code
}else{
//code
}
</pre>

<li>Complete controller code</li>

<pre  class="prettyprint">

require_once("db.php");
require_once("image.model.php");
$imageClass = new image();

if(!empty($_FILES['image']['name']) && isset($_FILES['image']['name'])){

if(
(
$_FILES['image']['type'] == 'image/png' ||
$_FILES['image']['type'] == 'image/jpg' ||
$_FILES['image']['type'] == 'image/jpeg' 
)
){
$image = getimagesize($_FILES['image']['tmp_name']);
if($image[0] == $image[1] && $image[0] > 100 && $image[1] > 100 && $image[0] < 1000 && $image[1] < 1000){

if($_FILES['image']['size'] < 2097152){

$param['image_name'] = filter_var($_FILES['image']['name'], FILTER_UNSAFE_RAW);

$uploadImage = json_decode($imageClass -> uploadImage($param), true);

if($uploadImage['status'] == 200){
    move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $_FILES['image']['name']);
    echo "Image upload successfully";
    exit;
}else{
    echo "please try again";
    exit;
}



}else{
echo "please select size less then 2MB.";
exit;
}

}else{
echo "please select image in between 100x100 to 1000x1000.";
exit;
}

}else{
echo "please select png or jpg files";
exit;
}

}else{
echo "file not selected";
exit;
}

</pre>
<li>
check all validation work correctly. Here im select the different files and large images to check whether validation is working or not.
</li>
</ul>

<h4>Step 4: Store the image name in the database</h4>
<ul>
<li>First, create file db.php  and need to create a connection with the database for that im using PDO you can use any other framework or basic PHP.</li>
<li>Also, im using a simple OOP type coding style class and function not just function this is a good way to practice and also more secure and code reusability is greater.</li>
<pre class="prettyprint">
class Database{
private $host = "localhost";
private $dbname = "images";
private $username = "root";
private $password = "";
public $con;

public function connection(){

$this -> con = null;

try{
$this -> con = new PDO("mysql:host=" . $this -> host . ";dbname=" . $this -> dbname, $this -> username, $this -> password);

}catch(PDOException $e){
echo "connection failed" . $e -> getMessage();
}

return $this -> con;

}
}

</pre>

</ul>

<h4>Step 5: Create model for queries</h4>
<ul>
<li>Now to store data in the database, create one file image.model.php to write database queries in it.</li>
<li>in that file create a class image. create a function to insert data into the database. get a database connection. prepare query bind value to parameters and execute the query.</li>
<li>Now in the controller include db.php and image.model.php file and create a class image object to access function from that class. to that class pass values that we need to store in the database. Here we are using json_encode() and json_decode() function.</li>
<pre class="prettyprint">
public function uploadImage($param){
static $uploadImage;
$db = new Database();
$con = $db -> connection();

$sql = "INSERT INTO `data` (`image_name`) VALUES (:image_name)";

$stmt = $con -> prepare($sql);

$stmt -> bindParam(':image_name', $param['image_name'], PDO::PARAM_STR);

try{
$stmt -> execute();

$uploadImage = array('status' => 200, 'error_msg' => null);
}catch(PDOException $e){
$uploadImage = array('status' => 500, 'error_msg' => $e -> getMessage());
}

return json_encode($uploadImage);
}
</pre>
<li>Check write function working correctly or not by inserting an image using the form.</li>
<li>After inserting an image fetch all those images for that create one class to fetch all images name from the database. Now for that use fetchAll() function in PDO. </li>
<pre class="prettyprint">
public function fetchImages(){
static $fetchImages;
$db = new Database();
$con = $db -> connection();
$flag = 'Y';

$sql = "SELECT `image_name` FROM `data` WHERE `flag` = :flag";

$stmt = $con -> prepare($sql);

$stmt -> bindParam(':flag', $flag, PDO::PARAM_STR);

try{
$stmt -> execute();

$data = $stmt -> fetchAll(PDO::FETCH_ASSOC);

$fetchImages = array('status' => 200, 'data' => $data, 'error_msg' => null);
}catch(PDOException $e){
$fetchImages = array('status' => 500, 'data' => null, 'error_msg' => $e -> getMessage());
}

return json_encode($fetchImages);
}
</pre>
</ul>

<ul>
<li>
Now similarly add two files in index.php file db.php and image.model.php
</li>
<li>
create an object of the class to access the function. use foreach loop to loop through database data and display image using img tag in img tag in src correctly mention folder name and file name from the database as shown.
</li>
<pre class="prettyprint">
require_once("db.php");
require_once("image.model.php");
$imageClass = new image();

$fetchImages = json_decode($imageClass -> fetchImages(), true);

foreach($fetchImages['data'] AS $values){

echo " img src='images/" . $values['image_name'] . "' width='200'>" . 'br ';
}
</pre>  
</ul>
</div>

<h4>Thank you, guys.</h4> 
<h4>Please do like comments and share the blog.</h4>
<h4>Working hard to get you the best thing in coding so please keep supporting us.</h4>  
</div>    
</body>
</html>