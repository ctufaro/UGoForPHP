<?php
  $data = file_get_contents('php://input');
  $pieces = explode("UDID", $data);
  $pieces2 = explode("Fstring", $pieces[1]);
  
  $shit = $pieces2[0];
  
  $pieces3 = explode("3Cstring%3E", $pieces2[0]);
  header("Location: http://ugoforapi.azurewebsites.net/home/udid?data=".rawurlencode($shit), true, 301);
?>
