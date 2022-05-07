<?php
$word=$_GET["pname"];
  header("Content-type: application/vnd.ms-word");
  header("Content-Disposition: attachment;Filename=$word");    
  echo "<html>";
  echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
  echo "<body>";
  echo "<b>My first document</b>";
  echo "</body>";
  echo "</html>";
?>