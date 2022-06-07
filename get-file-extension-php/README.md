<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="Get a File Extension in PHP">

</head>
<body>

<div class="main">

<a href="https://youtu.be/HDNrNf1p1ho">
<img src="images/extension.png">
</a>

<div class="intro">
<b>Introduction</b>
<p>Hello Friends, welcome to today's video about how to get a file extension in PHP.</p>
<p>we are using pathinfo() function and SplFileInfo construct with getExtension() function</p>
</div>

<div class="install_code">
<h4>Step 1: Use of pathinfo() function</h4>
<ul>
<li>First, let's talk about the pathinfo() function. The built-in function pathinfo() has two parameters.</li>
<li>the first filename which is required and another parameter is optional. which could be</li>
<br />
<pre class="prettyprint">
<code class="language-php">
PATHINFO_FILENAME, 
PATHINFO_DIRNAME, 
PATHINFO_BASENAME, and 
PATHINFO_EXTENSION
</code>
</pre>
<li>As shown first pass the filename and then the element from the file we need.</li>
<br />
<pre class="prettyprint">
<code class="language-php">
echo pathinfo("image.png", PATHINFO_EXTENSION);

//output
png
</code>
</pre>
<li>To get file name use $_FILES['input_name']['name']</li>    
          
</ul>

<h4>Step 2: SplFileInfo() constructor</h4>
<ul>
<li>Now, we are using the second method SplFileInfo() constructor like</li>
<li>declare any variable name, use new keywords to create an object and Call SplFileInfo() constructor and also pass filename in constructor.</li>
<pre class="prettyprint">
<code class="language-php">
$ext = new SplFileInfo("image.ppt");
</code>
</pre>
<li>after this call function using object variable</li>
<br />
<pre class="prettyprint">
<code class="language-php">
$file_ext = $ext -> getExtension();

//output
ppt
</code>
</pre>

</ul>
</div>

<h4>That's it guys thank you for reading the blog. Please do like, comment, and share videos to motivate us to create new awesome blog.</h4> 
<h4>Thank you and bye-bye TC</h4>
</div>    
</body>
</html>