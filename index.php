<?php include ("pages/header.inc.php"); ?>

	<div id="content">		
	  <?php
	  $pagesDirectory = "pages";
	  	if (!empty($_GET['pageName'])) {
	  	 	$pageName = $_GET['pageName'];
	  	 	$pages = scandir($pagesDirectory,0);
	  	 	unset($pages[0],$pages[1]);
	  	 	
  	 	if (in_array($pageName . ".php", $pages)) {
  	 		include ($pagesDirectory. '/' . $pageName . ".php"); 
  	 	} else {
  	 		include ("pages/cool404.php");
  	 	}
	  	 	
	  	 } else {
			include($pagesDirectory."/home.php"); 		 	
	  	 }
	   ?>
	</div>
	<?php include ("pages/footer.inc.php"); ?>
	
