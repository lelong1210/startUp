<?php
    require_once "./mvc/bridge.php";
    new app();
?>
<!-- RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !\.(css|js|png|jpg)$
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f

RewriteRule ^(.+)$ index.php?url=$1
 -->