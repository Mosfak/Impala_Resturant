<?php 
  
  $tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("y"));
  echo "Tomorrow is ".date("y/m/d",$tomorrow);
  
  

 ?>