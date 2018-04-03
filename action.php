<?php
include("variables.php");
$odir = $_GET['dir'];
$dir = "".$file_dir."/".$odir."";
$season = $_GET['season'];
$container = $_GET['container'];
$movefolder = $_GET['movefolder'];
if ($dir == ""){
header("Location: index.php");
die();
}
if($season == ""){
$season = "01";
}
exec("cd /share/tv/Anime");
$search = "".$dir."/*.{mkv,mp4,avi,mov}";

$sdir = scandir($dir);
foreach($sdir as $file) {

if (strpos($file, '.mkv') !== false) {
	$epnum = exec("echo '".$file."' | sed -e 's/\[[^][]*\]//g' | grep -o '[0-9]\+'");
	echo $epnum;
	
	if (strpos($epnum, '480') !== false || strpos($epnum, '720') !== false || strpos($epnum, '1080') !== false) {
    	echo 'founded bug, fixing';

		$epnum = exec("echo '".$file."' | sed -e 's/\[[^][]*\]//g' | grep -o '[0-9]\+' | head -n -1");	
	}

	echo $epnum;
	$finalname = "S".$season."E".$epnum.".".$container."";
	echo $finalname;
	echo "<br>";
	echo "".$dir."/".$file."";
	exec("mv '".$dir."/".$file."' '".$dir."/".$finalname."'");
	if ($season == "01") {
		$directoryfix = exec("echo '".$odir."' | sed -e 's/\[[^][]*\]//g' | sed 's/^.//' ");
		
		exec("mv '".$dir."' '".$file_dir."/".$directoryfix."'");
	}
	if ($movefolder != "nothing") {
	exec("mv '".$dir."'/* '".$movefolder."'/ ");
	exec("rm -rf '".$dir."'");
	}
}

}

header("Location: index.php");
?>
