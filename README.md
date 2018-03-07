
#SCREENSHOTS
![Alt text](https://bytebucket.org/shiken/crud/raw/201221a28eebd67dd58573d36e9f0e5698e7a438/screenshots%20crud/Capture.PNG?token=50834410f0f70f0e19fb1e8f0b9f89a1ea8db9df)

![Alt text](https://bytebucket.org/shiken/crud/raw/201221a28eebd67dd58573d36e9f0e5698e7a438/screenshots%20crud/4.PNG?token=e845295f2276a569be5e3f2f61ff76db9ec60163)

![Alt text](https://bytebucket.org/shiken/crud/raw/201221a28eebd67dd58573d36e9f0e5698e7a438/screenshots%20crud/3.PNG?token=8001f4ad91055188cc75f5914f1feda9022719cd)

![Alt text](https://bytebucket.org/shiken/crud/raw/201221a28eebd67dd58573d36e9f0e5698e7a438/screenshots%20crud/3.PNG?token=8001f4ad91055188cc75f5914f1feda9022719cd)

![Alt text](https://bytebucket.org/shiken/crud/raw/201221a28eebd67dd58573d36e9f0e5698e7a438/screenshots%20crud/2.PNG?token=9a712d771d911fbca4d8805411e4324a2d4b02e2)


#Instructions 

edit your hosts file in windows/systems32/drivers/etc/hosts and add 127.0.0.1 [your name url ex:babangtamvvan.flash.backend.id]

edit your vhosts C:\xampp\apache\conf\extra\httpd-vhosts.conf
 and edit like this
 
```
 <VirtualHost *:80>
   ServerName babangtamvvan.flash.backend.id
   DocumentRoot "E:/xampp/htdocs/erp/kim/web/"

   <Directory "E:/xampp/htdocs/erp/kim/web/">
    # use mod_rewrite for pretty URL support
    RewriteEngine on
    # If a directory or a file exists, use the request directly
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    # Otherwise forward the request to index.php
    RewriteRule . index.php

    # use index.php as index file
    DirectoryIndex index.php

    # ...other settings...
   </Directory>
</VirtualHost>
```
and restart your xampp, and viola !

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Build Status](https://travis-ci.org/yiisoft/yii2-app-advanced.svg?branch=master)](https://travis-ci.org/yiisoft/yii2-app-advanced)

//protal/yii-ArMaBookStore 

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
