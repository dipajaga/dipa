<?php
 $url = 'http://www.gettyimages.pt/gi-resources/images/Homepage/Hero/PT/PT_hero_42_153645159.jpg';
 $directory = 'C:/WAMP_server/wamp/www/workspace1/Similar_webget/download/';
 $filename = basename($url);
 file_put_contents($directory.$filename, file_get_contents($url));
 
 ?>
