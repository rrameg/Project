# Project
DPR 212 Final Project

This project came about by wanting to add a more updated look, and more functionality to a church website that was last updated over 5 years ago. The site was originally built on WordPress but other than the content we really couldn't change anything.
<br><br>
Another dilemma was it was hard to edit the live site while it was live. One wrong character or bracket and the whole site goes down. So early on in the process I figured I need to be able to edit a local copy of the site. I had installed WordPress on my computer many times before using WampServer, but I was looking for way to gain more control over the site.
<br><br>
I'm pretty savvy with Dreamweaver, so I figured I should be able to edit the site in real time using Dreamweaver instead of using the web-based version of WordPress. The great thing about Dreamweaver is as I made changes and saw that they worked and didn't mess anything up, I could just push those files right to the online server.
<br><br>
So here is how I got everything going:
<br>
<ul>
	<li>Download WampServer (http://www.wampserver.com/en/)</li>
	<ul>
		<li>Double click on the downloaded file and just follow the instructions. Everything is automatic. The WampServer package is delivered whith the latest releases of Apache, MySQL and PHP.</li>
		<li>Once WampServer is installed, you can manually add aditionals Apache, Php or MySql (only VC9, VC10 and VC11 compiled) versions. Explanations will be provided on the forum.</li>
		<li>Each release of Apache, MySQL and PHP has its own settings and its own files (datas for MySQL).</li>
	</ul>
</ul>
<ul>
	<li>Using wampserver</li>
	<ul>
		<li>The “www” directory will be automatically created (usually c:\wamp\www)</li>
		<li>Create a subdirectory in “www” and put your PHP files inside.</li>
		<li>Click on the “localhost” link in the WampSever menu or open your internet browser and go to the URL : http://localhost</li>
	</ul>
</ul>
<ul>	
	<li>Download WordPress (https://wordpress.org/download/)</li> 
	<li>Here's the quick version of the instructions for those who are already comfortable with performing such installations. More detailed instructions follow.</li>
	<li>If you are not comfortable with renaming files, step 3 is optional and you can skip it as the install program will create the wp-config.php file for you.</li>
	<ul>
		<li>Download and unzip the WordPress package if you haven't already.</li>
		<li>Create a database for WordPress on your web server, as well as a MySQL (or MariaDB) user who has all privileges for accessing and modifying it.</li>
		<li>(Optional) Find and rename wp-config-sample.php to wp-config.php, then edit the file (see Editing wp-config.php) and add your database information.</li>
		<li>Upload the WordPress files to the desired location on your web server:</li>
		<ul>
			<li>If you want to integrate WordPress into the root of your domain (e.g. http://example.com/), move or upload all contents of the unzipped WordPress directory (excluding the WordPress directory itself) into the root directory of your web server.</li>
			<li>If you want to have your WordPress installation in its own subdirectory on your website (e.g. http://example.com/blog/), create the blog directory on your server and upload the contents of the unzipped WordPress package to the directory via FTP.</li>
			<li>Note: If your FTP client has an option to convert file names to lower case, make sure it's disabled.</li>
		</ul>
		<li>Run the WordPress installation script by accessing the URL in a web browser. This should be the URL where you uploaded the WordPress files.</li>
		<ul>
			<li>If you installed WordPress in the root directory, you should visit: http://example.com/</li>
			<li>If you installed WordPress in its own subdirectory called blog, for example, you should visit: http://example.com/blog/</li>
		</ul>
	</ul>		
</ul>
<ul>
	<li>Now that the web based is setup, we need to add the site to Dreamweaver.</li>
	<ul>
		<li>Create a new site.</li>
		
			<ul>
			<li>The name of the site can be anything</li>
			<li>Make sure the local site folder is pointing to where you put WordPress in your wamp folder</li>
			<li>Under server creating a testing server</li>
			<li>On the basic screen make sure you connect using "Local/Network" and the Web URL is http://localhost/name of wordpress folder/</li>
			<li>Under advanced make sure the server model is "PHP MySQL</li>
			<li>Click Save, Save, and Done</li>
			</ul>		
		<li>The files should populate on the right</li>
		<li>Open your index.php file</li>
		<li>At the top select "Discover" so Dreamweaver can communicate with all the files in the installation.</li>
		<li>And now you can begin editing any file you choose.</li>
	</ul>
</ul>	
<ul>	
	<li>To use the template I used, just download all the files in GitHub to a zip. Extract the files into your Wamp folder WordPress folder and you are good to go.</li>
</ul>
