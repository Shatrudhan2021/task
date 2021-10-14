<?php 
/* 
How to create $_COOKIE?
setcookie(name,value,expire,path,domain,security);
*/
setcookie('site','learning point',time()+60*60);
setcookie('callcoekie','Shatrudhan kumar',time()+60*60);

echo 'Your cookie is set';
?>