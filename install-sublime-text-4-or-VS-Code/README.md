<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="install sublime text 4 or VS Code">
</head>
<body>

<div class="main">
<h4>For YouTube link click on image</h4>        
<div class="separator"><a target="_blank" href="https://youtu.be/z8UOBNPwPsg"><img alt="" border="0" width="400" src="images/thumbnail.png"/></a></div>
<div class="intro">
<b>Introduction</b>
<p>Selecting an editor for coding is also important. Best editors always help to write better, clean, and understandable code.</p>
<p>In this blog, we install the two best editors <b>Sublime text 4</b> and <b>VS Code</b> for PHP.</p>
<p>First Install sublime and its useful plugin for PHP, CSS, and JS.</p>
<p>Sublime Text 4 is a lightweight editor for Backend and UI development. Included more than 20+ programming language support by sublime text 4 and 1000+ more plugins to make it an even more great editor for the developer.</p>
</div>
<div class="install_editor">
<h3>Step 1 — Install using commands</h3>
<ul>
<li>Check update for  ubuntu:</li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo apt update && sudo apt upgrade </span></li>
<li>Use your root password to grant permission for sudo.</li>
<li>Install the GPG key:</li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>wget -qO - https://download.sublimetext.com/sublimehq-pub.gpg | sudo apt-key add - </span></li>
<li>Ensure apt is set up to work with https sources:</li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo apt-get install apt-transport-https </span></li>

<li>Select package stable or development package in this we select stable: </li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>echo "deb https://download.sublimetext.com/ apt/dev/" | sudo tee /etc/apt/sources.list.d/sublime-text.list </span></li>

<li>Install Sublime Text: </li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo apt update </span></li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo apt install sublime-text </span></li>
</ul>

<h3>Or install using Ubuntu software</h3>
<ul>
<li>Search for sublime text click on install</li>
</ul>
<h3>Or download the .deb file and install it in Ubuntu</h3>

<h3>Step 2 - The most important part is to install the plugin for PHP, CSS, and JS</h3>
<ul>
<li>In sublime text first install the package controller for sublime text: </li>
<li class="list_type"><span class="cli"><span class="d_sign"></span>click -> tools -> command palette -> search package -> click install package control </span></li>

<li>Install LSP and LSP - intelephense: </li>
<li class="list_type"><span class="cli"><span class="d_sign"></span>click -> tools -> command palette -> search package -> click package control: Install Package -> Search LSP (click) </span></li>
<li class="list_type"><span class="cli"><span class="d_sign"></span>click -> tools -> command palette -> search package -> click package control: Install Package -> Search LSP - intelephense(click) </span></li>
<li>Also pop-up for nodejs package install nodejs package</li>
<li>Install SublimeLinter</li>
<li class="list_type"><span class="cli"><span class="d_sign"></span>click -> tools -> command palette -> search package -> click package control: Install Package -> Search SublimeLinter </span></li>
<li>also in similar format install SublimeLinter sub-package </li>
<li class="list_type"><span class="cli"><span class="d_sign"></span>SublimeLinter-php </span></li>
<li class="list_type"><span class="cli"><span class="d_sign"></span>SublimeLinter-csslint </span></li>
<li class="list_type"><span class="cli"><span class="d_sign"></span>SublimeLinter-jshint </span></li>

<h3>Now, Install VS Code</h3>
<li>VS Code is also a good editor you can say most popular editor for almost every programming language. The only draw needs a good config pc. </li>
<li>Go to the official website download the .deb file install using the installer.</li>
<li>For vs code already it is perfect for CSS and js you need to install only one plugin in vs code for PHP which helps a lot.</li>
<li>Click on extension or press ctrl+shift+x to search for PHP-intelephense to install this package.</li>
</ul>

<p>if you ask me my personal choice is a sublime text it is lightweight, fast, and old style, a good editor.</p>
<p>Both editors are best to use but for vs code pc config needs to be a little high on another hand sublime text is lightweight and can run on old PC also.</p>
</div>

</div>
</body>
</html>