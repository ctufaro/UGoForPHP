<?php
  $data = file_get_contents('php://input');
  header("Location: https://ugoforphp.azurewebsites.net/udid/?data=".rawurlencode($data));
?>
