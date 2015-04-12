<?php
  error_reporting(7);
  header("Cache-Control: no-store, no-cache, must-revalidate");
  header("Pragma: no-cache");  
  
  
$filename = "admin/database/events".$_GET["id"].".txt";
$fd = fopen ($filename, "r");
$contents = @fread ($fd, filesize ($filename));
fclose ($fd);

$dates = explode("\n*-*\n", $contents);
$string = "";
for ($i=0;$i<count($dates)-1;$i++)
      $string .= $dates[$i];
      
if ($string!="")
    $string = substr($string,0,strlen($string)-1);
echo $contents;
?>