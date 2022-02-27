<?php

// Store box in database 

  require "dbconfig.php";

  $receiverName = mysqli_real_escape_string($conn, $_POST['receiverName']);
  $weight = mysqli_real_escape_string($conn, $_POST['weight']);
  $colour = mysqli_real_escape_string($conn, $_POST['colour']);
  $country = mysqli_real_escape_string($conn, $_POST['country']);

  if(mysqli_query($conn, "INSERT INTO boxes(receiverName, weight, colour, country) VALUES('" . $receiverName . "', '" . $weight . "', '" . $colour . "', '" . $country . "')")) {
    echo 'Box successfully inserted in database';
  } else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
  }

  mysqli_close($conn);

?>
