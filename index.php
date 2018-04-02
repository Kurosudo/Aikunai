<?php
include("variables.php");

if ($file_dir == "") {

	echo "Please setup your file_dir in variables.php";
	die();
} 
?>
<html>
	<head>
		<title>Aikunai - Anime KODI renaming tool</title>
		<meta charset="utf-8">
	</head>
<body>
<center><h1>Kurisu</h1><p>Renaming tool for KODI</p>
<p>Current working with directory: <b><?php echo $file_dir; ?></b> </p> 
<form action="action.php">
<select name="dir">
<?php

$dir = scandir($file_dir);
foreach($dir as $file) {

if ($file != "." && $file != ".." ){

echo "<option value='".$file."'>" . $file . "</option>";
}

}

?>
</select>
<br/><p>Write Season, if it is first season leave it empty. Please use syntax example 03</p>
<input type="text" name="season">
<br/><p>If you already have first or another seasons please select location of it to merge seasons. Again if it is first season leave it empty</p>
<br/><select name='movefolder'>
<option value='nothing' selected></option>
<?php

$dir = scandir($file_dir);
foreach($dir as $file) {

if ($file != "." && $file != ".." ){

echo "<option value='".$file_dir."/".$file."'>" . $file . "</option>";
}

}

?>
</select>
<br/><p>Video container of file (example mkv)</p>
<input type="text" name="container" required>
<br/><br/><input type="submit">
</form>
</center>


</body>
</html>
