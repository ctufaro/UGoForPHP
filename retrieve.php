<?php
  $data = file_get_contents('php://input');
  header("Location: http://ugoforphp.azurewebsites.net?data=".rawurlencode($data));
?>