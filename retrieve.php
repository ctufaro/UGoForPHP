<?php
  $data = rawurlencode(file_get_contents('php://input'));

  $pieces = explode("UDID", $data);
  $pieces2 = explode("Fstring", $pieces[1]);
  $pieces3 = explode("Cstring%253E", $pieces2[0]);
  $pieces4 = explode("%253C%252", $pieces3[1]);

  header("Location: http://ugoforapi.azurewebsites.net/home/udid?data=".$pieces4[0], true, 301);
?>
