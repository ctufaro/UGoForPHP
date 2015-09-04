<?php
  $data = file_get_contents('php://input');
  header("Location: https://ugoforphp.azurewebsites.net?data=".rawurlencode($data));
?>
