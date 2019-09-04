<?php
  $file = "uploads/".$_POST["file"];

  if (!unlink($file)) {
  }

  header('Location: index.php');
  exit()
?>
