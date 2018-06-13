<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Dynamic Content </title>
</head>

<body>
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="index.php?pageName=contact">contact</a></li>
			<li><a href="index.php?pageName=about">About</a></li>
		</ul>
	</nav>

	<div id="content">	
		
	  <?php
	  $pagesDirectory = "pages";
	  	if (!empty($_GET['pageName'])) {

	  	 	$pageName = $_GET['pageName'];
	  	 	// $pagesDirectory = "pages";
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
	   <!-- <h1>this is <?php  echo $pageName; ?></h1> -->
	</div>
	

</body>

</html>
