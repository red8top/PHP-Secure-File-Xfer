<?php
session_start();
$delet = $_SESSION['delet'];
$deletelist = implode("<br>",$delet);	

	if($_POST['delconf'] && isset($_SESSION['delet'])){
		foreach($delet as $delfile){
			unlink($delfile);
	}
		echo "<H2>The following files have been deleted:</H2>";
		echo "<H4>$deletelist</H4>";
		echo "<br>";
		echo "<br>";
		echo "<form name=\"form1\" enctype=\"multipart/form-data\" method=\"post\" action=\"selectafile.php\"><input type=\"submit\" value=\"OK\">";
	}
	
	//&& isset($_SESSION['delet'])
?>