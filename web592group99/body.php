 <?php
    include_once("config.php");
 ?>
 <div class="starter-template">
 <?php
    $pfile = "body_$page.php";
	if(file_exists($pfile)){
		include($pfile);
	}else{
		echo "File not found: $pfile ";
		
	}
 ?>
 </div>