<?php  include('variables.php'); ?>
<html>
<head>
<title>Aikunai</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
body{
background-color: #212121;
color: white;
}
.main{
margin-left: 2cm;
margin-right: 2cm;
margin-top: 1cm;
background-color: #121212;
top: 1cm;
width: 900px;
    margin: auto;
    border: 1px solid #000;
}
.content{
padding: 0.2cm;
}
#s2controllers{
  display: none;
  }

</style>
</head>
<body>
<br/>
<div class="main">
<div class="content">

  <div class="row">
    <div class="col">
      <h1>Aikunai</h1><p>Renaming tool for anime</p>
    </div>
    <div class="col">
	<form action="action.php">
      <p class="text-center" style="margin-top: 0.8cm;"><input class="btn btn-success" type="submit"></p>
    </div>
  </div>

<div class="form-row">
    <div class="col">
	<p>Anime</p>
	<select class="form-control" name="dir">
<?php

$dir = scandir($file_dir);
foreach($dir as $file) {

if ($file != "." && $file != ".." ){

echo "<option value='".$file."'>" . $file . "</option>";
}

}

?>
	</select>
    </div>
    <div class="col">
	<p>Season</p>
      <input id="season" type="text" value="" class="form-control" name="season" placeholder="exp.02 Leave it empty if it is first season " autocomplete="off" >
    </div>
    <div class="col">
	<p>Video container</p>
	<select name="container"class="form-control">
		<option value="mkv">MKV</option>
		<option value="avi">AVI</option>
		<option value="mp4">MP4</option>
	</select>
   </div>
</div>
<br/><div id="s2controllers">
<p style="text-center">Folder of first season. If you want create new folder leave it empty</center>
<select name="movefolder" class="form-control">
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
</div>

</form>
<br/>
<p class="text-center">Copyright &copy 2018 Kurosudo <br/><a target="_blank" href="https://raw.githubusercontent.com/Kurosudo/Aikunai/master/LICENSE">LICENSE</a>|<a href="https://github.com/Kurosudo/Aikunai">GitHub Repo</a></p>
</div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$("#season").keyup(function(){
        $("#s2controllers").show();
});
</script>
