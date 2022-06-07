<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="install LAMP in ubuntu 20.04 with phpmyadmin">
</head>
<body>

<div class="main">
<h4>For YouTube link click on image</h4>        
<div class="separator"><a target="_blank" href="https://youtu.be/hrxgo8Wn3Z0"><img alt="" border="0" width="400" src="images/thumbnail.png"/></a></div>
<div class="intro">
<b>Introduction</b>
<p>This is complete installation of LAMP included phpmyadmin to easily controller user in MySQL</p>
<p>LAMP means</p>
<p>L = Linux OS</p>
<p>A = Apache Server for local enviroment</p>
<p>M = MySQL to store user or other data related to domain</p>
<p>P = PHP to run php as backend programming language</p>
</div>
<div class="install_apche">
<h3>Step 1 — Installing Apache</h3>
<ul>
<li>First, make sure cache is updated</li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo apt update && sudo apt upgrade </span></li>
<li>Use your root password to grant permission for sudo.</li>
<li>Install apache with:</li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo apt install apache2 </span></li>
<li>Check all apche2 application listed with:</li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo ufw app list </span></li>
<li>Output: (check below three application in list)
<ul>
    <li>Apache</li>
    <li>Apache Full</li>
    <li>Apache Secure</li>
</ul>
</li>
<li>If you want check which port is apache2 using run below command</li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo ufw app info "Apache Full" </span></li>
<li class="list_type">
<pre>
        
Output:
Profile: Apache Full
Title: Web Server (HTTP,HTTPS)
Description: Apache v2 is the next generation of the omnipresent Apache web
server.
Ports:
80,443/tcp
</pre>
</li>
<li>To check apache2 is correctly install use your public IP or type localhost in browser. Get IP by typing: </li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>ifconfig </span></li>
<li>
    IP address look like: 192.168.200.210 etc first 6 digits are always same or just type <b>localhost</b> in browser
</li>

<div class="separator"><a href="https://youtu.be/hrxgo8Wn3Z0"><img alt="" border="0" width="400" src="images/apache2_page.png"/></a></div>


</ul>

<h3>Step 2 — Installing MySQL</h3>
<ul>
<li>MySQL is a database management system. Basically, it will organize and provide access to databases where your site can store information.</li>
<li>Use command to install MySQL:</li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo apt install mysql-server </span></li>
<li>After installing MySQL. Run a simple security script to lock down access to your database system. </li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo mysql_secure_installation </span></li>
<li class="list_type">
<p>Output: (with Questions Answser)</p>
<pre>
Securing the MySQL server deployment.

Connecting to MySQL using a blank password.

VALIDATE PASSWORD COMPONENT can be used to test passwords
and improve security. It checks the strength of password
and allows the users to set only those passwords which are
secure enough. Would you like to setup VALIDATE PASSWORD component?

Press y|Y for Yes, any other key for No: Y

There are three levels of password validation policy:

LOW    Length >= 8
MEDIUM Length >= 8, numeric, mixed case, and special characters
STRONG Length >= 8, numeric, mixed case, special characters and dictionary file

Please enter 0 = LOW, 1 = MEDIUM and 2 = STRONG: 1
Please set the password for root here.

New password: 

Re-enter new password: 

Estimated strength of the password: 50 
Do you wish to continue with the password provided?(Press y|Y for Yes, any other key for No) : Y
By default, a MySQL installation has an anonymous user,
allowing anyone to log into MySQL without having to have
a user account created for them. This is intended only for
testing, and to make the installation go a bit smoother.
You should remove them before moving into a production
environment.

Remove anonymous users? (Press y|Y for Yes, any other key for No) : Y
Success.


Normally, root should only be allowed to connect from
'localhost'. This ensures that someone cannot guess at
the root password from the network.

Disallow root login remotely? (Press y|Y for Yes, any other key for No) : Y
Success.

By default, MySQL comes with a database named 'test' that
anyone can access. This is also intended only for testing,
and should be removed before moving into a production
environment.


Remove test database and access to it? (Press y|Y for Yes, any other key for No) : Y
- Dropping test database...
Success.

- Removing privileges on test database...
Success.

Reloading the privilege tables will ensure that all changes
made so far will take effect immediately.

Reload privilege tables now? (Press y|Y for Yes, any other key for No) : Y
Success.

All done!
</pre>
</li>
<li>To check MySQL Server is install or not type:</li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo mysql </span></li>
<li>Use your root password to grant permission for sudo.</li>
</ul>
<h3>Step 3 — Installing PHP</h3>
<ul>
<li>You’ll need php-mysql, a PHP module that allows PHP to communicate with MySQL-based databases. You’ll also need libapache2-mod-php to enable Apache to handle PHP files.</li>
<li>To install php lastest version run:</li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo apt install php libapache2-mod-php php-mysql </span></li>
<li>Changing Apache’s Directory Index optional step</li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo nano /etc/apache2/mods-enabled/dir.conf </span></li>

<li class="list_type">Change file </li>
<li class="list_type">
<pre>
< IfModule mod_dir.c>
DirectoryIndex index.html index.cgi index.pl index.php index.xhtml index.htm
< IfModule>
</pre>
</li>
<li class="list_type">To</li>
<li class="list_type">
<pre>
< IfModule mod_dir.c>
DirectoryIndex index.php index.html index.cgi index.pl index.xhtml index.htm
< IfModule>
</pre>
</li>
<li>When you are finished, save and close the file by pressing CTRL+X. Confirm the save by typing Y and then hit ENTER to verify the file save location.</li>
<li>If you want php-cli , you could type:</li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo apt install php-cli </span></li>
<li>Now most important part is provide access to user who using var/www/html to read, write access using:</li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo chown -R vicky /var/www/html/ </span></li>
<li>Now delete default index.html file and create new file index.php in /var/www/html/ and type phpinfo();</li>
<li>Type on browser localhost or IP it will display php version and all active mode everything related to php</li>

</ul>
<h3>Step 4 — Installing phpmyadmin to handle databases easily</h3>
<ul>
<li>Run command:</li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo apt install phpmyadmin php-mbstring php-zip php-gd php-json php-curl </span></li>
<li>if error occurs during configuration phpmyadmin abort current error and type commands</li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo mysql </span></li>
<li>If ask password type your root password to access mysql</li>
<li>in mysql run following</li>
<li class="list_type"><span class="cli"><span class="d_sign">mysql></span>UNINSTALL COMPONENT "file://component_validate_password"; </span></li>
<li class="list_type"><span class="cli"><span class="d_sign">mysql></span>exit; </span></li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo apt install phpmyadmin </span></li>
<li>Config phpmyadmin then install component </li>
<div class="separator" ><a href="https://youtu.be/hrxgo8Wn3Z0" ><img alt="" border="0" width="400" src="images/1.png"/></a></div>
<div class="separator"><a href="https://youtu.be/hrxgo8Wn3Z0" ><img alt="" border="0" width="400" src="images/2.png"/></a></div>
<div class="separator"><a href="https://youtu.be/hrxgo8Wn3Z0" ><img alt="" border="0" width="400" src="images/3.png"/></a></div>
<div class="separator"><a href="https://youtu.be/hrxgo8Wn3Z0"><img alt="" border="0" width="400" src="images/4.png"/></a></div>
<div class="separator" ><a href="https://youtu.be/hrxgo8Wn3Z0"><img alt="" border="0" width="400" src="images/5.png"/></a></div>
<div class="separator" ><a href="https://youtu.be/hrxgo8Wn3Z0"><img alt="" border="0" width="400" src="images/6.png"/></a></div>
</li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo mysql </span></li>
<li>in mysql run following</li>
<li class="list_type"><span class="cli"><span class="d_sign">mysql></span>INSTALL COMPONENT "file://component_validate_password"; </span></li>
<li class="list_type"><span class="cli"><span class="d_sign">mysql></span>exit; </span></li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo phpenmod mbstring </span></li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo systemctl restart apache2 </span></li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo systemctl restart mysql </span></li>
<li>Type in browser localhost/phpmyadmin</li>
<li>if phpmyadmin not run use following command:</li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo ln -s /etc/phpmyadmin/apache.conf /etc/apache2/conf-available/phpmyadmin.conf </span></li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo a2enconf phpmyadmin </span></li>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo service apache2 reload </span></li>
<li>Type in browser localhost/phpmyadmin</li>
<li>Now it ask for user and password</li>
</ul>
<h3>Step 5 — Creating user</h3>
<ul>
<li class="list_type"><span class="cli"><span class="d_sign">$</span>sudo mysql </span></li>
<li>Use your root password to grant permission for sudo.</li>
<li class="list_type"><span class="cli"><span class="d_sign">mysql></span>CREATE USER 'user_name'@'localhost' IDENTIFIED WITH caching_sha2_password BY 'password'; </span></li>
<li>if some error display please check password policy is low, medium or strong using</li>
<li class="list_type"><span class="cli"><span class="d_sign">mysql></span>SHOW VARIABLES LIKE 'validate_password%'; </span></li>
<li>if you want to chnage this policy use:</li>
<li class="list_type"><span class="cli"><span class="d_sign">mysql></span>SET GLOBAL validate_password.policy=LOW; </span></li>
<li>alert user after creating user</li>
<li class="list_type"><span class="cli"><span class="d_sign">mysql></span>ALTER USER 'username'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password'; </span></li>
<li>Grant permission to user</li>
<li class="list_type"><span class="cli"><span class="d_sign">mysql></span>GRANT ALL PRIVILEGES ON *.* TO 'username'@'localhost' WITH GRANT OPTION; </span></li>

<li>Check created user is in database using</li>
<li class="list_type"><span class="cli"><span class="d_sign">mysql></span>SELECT user,authentication_string,plugin,host FROM mysql.user; </span></li>
<li>Now, open localhost/phpmyadmin on browser type username and password that you created earlier.</li>
<li class="list_type">
<div class="separator"><a href="https://youtu.be/hrxgo8Wn3Z0"><img alt="" border="0" width="400" src="images/last.png"/></a></div>
</li>
</ul>



</div>

</div>


</body>
</html>
