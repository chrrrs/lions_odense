<?php
  if($_POST['username'] === 'admin' AND $_POST['password'] === '123') {
    header('Location: ./index.php');
  } else {
    header('Location: ../index.php');
  }
?>
