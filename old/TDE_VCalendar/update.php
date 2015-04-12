<?php
  error_reporting(7);session_start(); 
  header("Cache-Control: no-store, no-cache, must-revalidate");
  header("Pragma: no-cache");  
   
  if ($_SESSION["username"]!="" && $_SESSION["password"]!="")
  {
      $dates = explode("\n*-*\n", $_POST["xmldates"]);
      
      $string = "";
      for ($i=0;$i<(count($dates)-1);$i++)
      {   //$_POST["id"].",".
         $string .= $dates[$i]."\n*-*\n";
      }
      
      $string = str_replace("\'","'",$string);
      $string = str_replace('\"','"',$string);
      $fd = fopen ("admin/database/events".$_GET["id"].".txt", "w");
      $contents = fwrite ($fd, $string);
      fclose ($fd);
  }
?>
