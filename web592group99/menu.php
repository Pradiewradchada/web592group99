<?php
  use google\appengine\api\users\UserService;
  include_once("config.php");
  
  $menu = [
     ["home","Home"],
	 ["products","Products"],
	 ["about","About"]
  ];
  foreach($menu as $m){
	  $class='';
	  if($m[0]==$page) $class=" class='active' ";
	  if($m[0]=='products'){
		  include_once("menu_products.php");
	  }else{
	      echo "<li $class><a href='main.php?p=$m[0]'>$m[1]</a></li>";
	  }
  }
  if (isset($user)) {
	   $u = UserService::createLogoutUrl("main.php?p=$page");
	   include_once("menu_user.php");
  } else {
       $u = UserService::createLoginUrl("main.php?p=$page");
       echo "<li><a href='$u'>Login</a>";  
  }
?>

 