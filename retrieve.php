<?php
  $data = rawurlencode(file_get_contents('php://input'));

  $pieces = explode("UDID", $data);
  $pieces2 = explode("%3C%2Fstring", $pieces[1]);
  $pieces3 = explode("Cstring%3E", $pieces2[0]);

  header("Location: http://ugoforapi.azurewebsites.net/home/udid?data=".$pieces3[1], true, 301);
?>
