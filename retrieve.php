<?php
  $data = file_get_contents('php://input');
  header("Location: http://ugoforphp.azurewebsites.net/udid?data=".rawurlencode($data), true, 301);
?>

  
