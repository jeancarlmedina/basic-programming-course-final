<?php
// Nos ta bai konekta na e database
$dbConnection = mysqli_connect ("localhost","root","","easypetshop");

// Check si e database a wordu konekta
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  