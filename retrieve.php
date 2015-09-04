<?php
  $data = file_get_contents('php://input');
  $pieces = explode("UDID", $data);
  header("Location: http://ugoforphp.azurewebsites.net/udid?data=".urlencode($pieces[1]), true, 301);
?>
