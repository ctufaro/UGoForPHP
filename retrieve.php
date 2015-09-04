<?php
  $data = file_get_contents('php://input');
  $pieces = explode("UDID", $data);
  $pieces2 = explode("Fstring", $pieces[1])
  header("Location: http://ugoforphp.azurewebsites.net/udid?data=".urlencode($pieces2[0]), true, 301);
?>
