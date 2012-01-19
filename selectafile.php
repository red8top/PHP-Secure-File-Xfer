<html>
<head>
<title>Secure File Transfer Site</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>
<?php
$whole_path = getcwd();
$dir = substr(strrchr($whole_path, "\\"), 1);
	echo "<H1 style=\"text-align:center\">Welcome to ".$dir." Secure Transfer Site</H1>";
?>
<br>
<br>
<H1>Choose Your File to Upload</H1>
(Note: Upload file size is limited to 6 Million bytes)
<form name="form1" enctype="multipart/form-data" method="post" action="uploadafile.php">
<p>
    <input name="uploadFile" type="file" />
</p>

  <p>
    <input type="submit" value="Click to Upload Your Chosen File" />
  </p>
</form>
<?php

// echo getcwd()."<br>";
//$whole_path = getcwd();
//$dir = substr(strrchr($whole_path, "\\"), 1);
echo "<H1 style=\"text-align:center\">Click a File Below to Download</H1>";
echo "<H2 style=\"text-align:center\">Or select files to delete</H2>";
$file_handle = opendir(getcwd());

// dispose of the first two files . and ..
readdir($file_handle)."<br>";
readdir($file_handle)."<br>";
  echo "<table border=\"1\">";
  echo "<tr>";
  echo "<th>File Name</th>";
  echo "<th>File Size (bytes)</th>";
  echo "<th>File Date and Time</th>";
  echo "<th>Delete</th>";
  echo "</tr>";

While ($file_name = readdir($file_handle))
{

  $pos1 = stripos($file_name, ".php");
  if ($pos1 === false)
  {
  	  $filedelete = "$file_name";
//     echo "<A HREF=\"/".$dir."/".$file_name."\">".$file_name." -  ".filesize($file_name)." bytes  ". date("M d Y H:i:s.", filectime($file_name))."</A><br>";
  echo "<tr>";
  echo "<td><A HREF=\"/".$dir."/".$file_name."\">".$file_name."</A></td>";
  echo "<td style=\"text-align:right\">".filesize($file_name)."</td>";
  echo "<td>".date("M d Y H:i:s.", filemtime($file_name))."</td>";
  echo "<td><form action=\"deleteafile.php\" method=\"POST\"><input type=\"checkbox\" name=\"delet[]\" value=\"$filedelete\"></td>";
  echo "</tr>";
  }
}


  echo "</table>";
  echo "<input type=\"submit\" name='delbut' value=\"Click to Delete Selected Files\">";
  echo "<input name=\"hidSubmit\" type=\"hidden\" value=\"true\"></form>";
  	  
closedir($file_handle);


?>




</form>
</body>
</html>
