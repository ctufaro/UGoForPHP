<?php
  $data = file_get_contents('php://input');
  $pieces = explode("UDID", $data);
  $pieces2 = explode("%3C%2Fstring", $pieces[1]);
  $pieces3 = explode("3Cstring%3E", $pieces2[0]);
  header("Location: http://ugoforapi.azurewebsites.net/home/udid?data=".rawurlencode($pieces2[1]), true, 301);
?>
