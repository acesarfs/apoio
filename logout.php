<?php
if(isset($_SESSION)){
  $_SESSION = array();
  session_destroy();
}
header('location:index.php');
?>
