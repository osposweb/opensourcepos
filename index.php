<?php 
header('Location: public/index.php', true, 301);
die();
/*
exit() is to prevent the page from showing up the remaining content (think restricted pages). 
it has nothing to do with the HTTP Location header and you don't need to exit. 
for someone who doesn't know how to do a simple redirect, one might as well play safe rather 
than not implement a simple yet crucial step just so he is able 
to take advantage of advanced process control.
http://thedailywtf.com/articles/WellIntentioned-Destruction
*/
?>
