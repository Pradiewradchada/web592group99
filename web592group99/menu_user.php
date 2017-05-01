<?php
  use google\appengine\api\users\UserService;
  include_once("config.php");
?>
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $user->getNickname() ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="main.php?p=edituser">My Account</a></li>
<?php			
    if(UserService::isCurrentUserAdmin()){
		 include("menu_admin.php");
    }
?>			
   <li><a href="<?= $u ?>">Logout</a></li>
   </ul>
</li>	  
