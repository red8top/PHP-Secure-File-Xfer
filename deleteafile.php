<?php
session_start();
//Formatting delete selections into string
$delet = $_POST['delet'];

// note: "/".$dir."/".$file_name."
//$deletelist = implode(", ",$delet);
$_SESSION['delet'] = $delet;
	if(count($delet)==0){
		echo "<br>";
		echo "<br>";
		echo "<H1>No Files Selected</H1>";
		echo "<a href=\"selectafile.php\">Return to the Main Page</a>";		
	}
	//Processing Deletions
	if($_POST['delbut'] && count($delet)>=1) {
		$deletelist = implode("<br>",$delet);
	echo "<br>";
	echo "<br>";
	echo "<H1 style=\"text-align:center\">Are you sure you want to delete the following?</H1>";
	echo "<H3>$deletelist</H3>";
	echo "<form name = \"deleteconfirm\" method=\"POST\" action=\"confirmdelete.php\"><input type=\"submit\" name=\"delconf\" value=\"Confirm Delete\">";
	echo "<input name=\"hidSubmit\" type=\"hidden\" value=\"$delet\"> </form>";
	echo "<form name=\"form1\" enctype=\"multipart/form-data\" method=\"post\" action=\"selectafile.php\"><input type=\"submit\" value=\"Nevermind\">";
}

?>
