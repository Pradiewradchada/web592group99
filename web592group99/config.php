<?php
   use google\appengine\api\users\UserService;
   
   $appid = "web592group99.appspot.com";
   $page = "home";
   if(isset($_GET['p'])){
	  $page=$_GET['p'];
   }
   
   $user = UserService::getCurrentUser();


?>