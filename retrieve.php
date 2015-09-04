<?php
  $data = file_get_contents('php://input');
  $pieces = explode("UDID", $data);
  $pieces2 = explode("%3C%2Fstring", $pieces);
  header("Location: http://ugoforapi.azurewebsites.net/home/udid?data=".urlencode($pieces2[0]), true, 301);
?>
