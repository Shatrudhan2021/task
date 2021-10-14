<?php 
// define("variable_name","value of variable","optional");
/*
Rules to create constant:
1. No nedd to start with $ sign
2. Variable only start with letter or underscore(_)
3. Variable should not match with pre-defined constant
4. Can't ue any reserve word.

* Property of constant:
1. By default it is case sensitive, but we can make it case-insensitive.
2. Constant are automatically GLOBAL
3. We can't change constant variable value.
*/

// define("site","Learning Point");
// echo site;
echo '<br>';
define("site","Learning Point",true);
echo site;
?>