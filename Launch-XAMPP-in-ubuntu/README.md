<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="Launch XAMPP in ubuntu 22.04">
</head>
<body>

<div class="main">
<h4>For YouTube link click on image</h4>        
<div class="separator"><a target="_blank" href="https://youtu.be/OkSM9E07O0Y"><img alt="" border="0" width="400" src="images/Launch_XAMPP.png"/></a></div>
<div class="intro">
<b>Introduction</b>
<p>Hello friends, welcome to the world of rich PHP.</p>
<p>Today we are going to learn about how to launch the XAMPP server in ubuntu using four different ways.</p>
</div>
<div class="install_editor">
<p>Let's check whether any local server is running on the system or not. by just typing in browser localhost.</p>
<h3>Step 1 — First methods to launch xampp control panel</h3>
<ul>
<li>Now, Open the terminal. In the terminal first, go to the root folder by typing</li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>cd /</span></li>
<li>then type the command to start the XAMPP server:</li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo opt/lampp/lampp start</span></li>

<!-- image -->
<div class="separator"><a href="images/1.png"><img alt="" border="0" width="320" src="images/1.png"/></a></div>    

<li>this will start a local server from the terminal.</li>
<li>Now check on the browser server is working or not. Type localhost it will display htdocs index.php file. Because I change the index.php file to ok.php that is why it shows all folders and files from the htdocs folder. </li>

<!-- image -->
<div class="separator"><a href="images/2.png"><img alt="" border="0" width="320" src="images/2.png"/></a></div>  

<li>Now to stop the local server type command</li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo opt/lampp/lampp stop</span></li>

<!-- image -->
<div class="separator"><a href="images/3.png"><img alt="" border="0" width="320" src="images/3.png"/></a></div>

<li>it will stop the server</li>
<li>Check on a browser by reloading the current URL, whether the server stops working or not.</li>
</ul>

<h3>Step 2 — Second methods to launch xampp control panel</h3>
<ul>
<li>Now another method is also needed terminal to start server type.</li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo opt/lampp/xampp start</span></li>

<!-- image -->
<div class="separator"><a href="images/4.png"><img alt="" border="0" width="320" src="images/4.png"/></a></div>

<li>it is the same command but instead of last lampp we use the xampp keyword</li>
<li>and to stop the server use the same command</li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo opt/lampp/xampp stop</span></li>

<!-- image -->
<div class="separator"><a href="images/5.png"><img alt="" border="0" width="320" src="images/5.png"/></a></div>

<li>it will stop the server</li>
</ul>

<h3>Step 3 — Third methods to launch xampp control panel</h3>
<ul>
<li>In the third method, using the terminal we need to open the xampp control panel. Go to folder /opt/lampp to check where is .run file copy the file name with extension and in terminal type command to open the xampp control panel.</li>

<!-- image -->
<div class="separator"><a href="images/6.png"><img alt="" border="0" width="320" src="images/6.png"/></a></div>

<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo ./manager-Linux-x64.run press enter it will open the control panel.</span></li>

<!-- image -->
<div class="separator"><a href="images/7.png"><img alt="" border="0" width="320" src="images/7.png"/></a></div>
<!-- image -->
<div class="separator"><a href="images/8.png"><img alt="" border="0" width="320" src="images/8.png"/></a></div>

<li>Click on the manage server tab and start the server from the control panel.</li>
</ul>

<h3>Step 4 — Fourth methods to launch xampp control panel</h3>
<ul>
<li>Now for the last method, we will create a desktop shortcut for the xampp control panel. For that go to the folder </li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>cd /usr/share/applications and press enter</span></li>
<!-- image -->
<div class="separator"><a href="images/9.png"><img alt="" border="0" width="320" src="images/9.png"/></a></div>

<li>After this in the applications folder create xampp.desktop file.</li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo gedit xampp.desktop</span></li>
<li>copy-paste the code below code.</li>
<li>
<pre>
[Desktop Entry]
Encoding=UTF-8
Name=XAMPP Control Panel
Comment=Start and Stop XAMPP
Exec=sudo /opt/lampp/manager-linux-x64.run
Icon=/opt/lampp/htdocs/favicon.ico
Categories=Application
Type=Application
Terminal=true
</pre>
</li>

<li>Save and close the file after copy-pasted the code and check in the main menu xampp icon is displayed in that section click on the icon and type your password it will open the xampp control panel.</li>

<!-- image -->
<div class="separator"><a href="images/10.png"><img alt="" border="0" width="320" src="images/10.png"/></a></div>
<!-- image -->
<div class="separator"><a href="images/11.png"><img alt="" border="0" width="320" src="images/11.png"/></a></div>

</ul>

<p> Thank you guys see you next time</p>
<p>Like, share, and comment on the blog.</p>


</div>

</div>
</body>
</html>