<html>
<head>
<title>Secure File Transfer Site - Upload Results</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php

$file_name = basename($_FILES['uploadFile']['name']);

//$directory = getdir();
//echo $directory;

if (move_uploaded_file($_FILES['uploadFile']['tmp_name'], "temp"))
{
  echo "The file ". basename( $_FILES['uploadFile']['name']). " has been uploaded";
  copy("temp", $file_name);  // this is done to set the permissions
  unlink("temp");
}
else {
  echo "Sorry, there was a problem uploading your file.";
}

?>
<form name="form1" enctype="multipart/form-data" method="post" action="selectafile.php">

  <p>
    <input type="submit" value="OK" />
  </p>
</form>
</body>
</html>
