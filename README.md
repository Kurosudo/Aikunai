# Aikunai

Aikunai is simple PHP/Linux aplication for managing and renaming anime from anime translate groups to proper format for Kodi.
In this moment, only UNIX(OSX) and UNIX-Like(GNU/Linux, *BSD and others) are supported. I can't guarantee proper work on another systems.
Bash for Windows is not tested but i think it will works because it is Ubuntu. 

Installation
-----

Aikunai is simple to install, it doesn't need much dependencies. You only need HTTP server and PHP support. I personally reccommend apache2 but nginx is fine too.
Aikunai at this moment can communicate and edit only with file with same permission HTTP server. If you have special politic with your file i reccommend use apache2 module mpm-itk or change user in /etc/apache2/envvars

Apache/PHP installation(Debian/Ubuntu)

```
apt-get install apache2 php
```

And finally just clone repo into /var/www/html

```
git clone https://github.com/Kurosudo/Aikunai.git
```


Now you must setup your working directory where are your anime files. Open file variables.php and use syntax like this. 
THIS STEP IS VERY IMPORTANT!!!

```
$file_dir = "/folder/example/library";
```


Usage
-----

Usage is very simple. After proper installation just open your browser and type http://[YOURIP]/ and you will see this

<img src="https://i.imgur.com/JbbrcLi.png" width="100">

And follow instruction

Disclaimer!
This thing can harm you system and remove your data use it at your own risk. 
I do not take any responsibility
