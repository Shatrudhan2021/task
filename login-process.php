<?php  
echo "<pre>";
//print_r($_GET); // Accept only get method
//print_r($_POST); // Accept only post method
print_r($_REQUEST); // Accept both post and get method
echo "</pre>";
// print the password.
echo $_REQUEST['password'];
?>