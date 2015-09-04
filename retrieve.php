<?php
  $data = file_get_contents('php://input');
  $pieces = explode("UDID", $data);
  $pieces2 = explode("%3C%2Fstring", $pieces[0]);
  header("Location: http://ugoforapi.azurewebsites.net/home/udid?data=".rawurlencode($pieces2[0]), true, 301);
?>
