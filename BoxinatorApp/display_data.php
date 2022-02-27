<?php

// Fetch and display boxes from database 'boxinator'

	include 'dbconfig.php';

	$sql = "SELECT * FROM boxes";
	$result = $conn->query($sql);

  $totalWeight = 0;
  $shipping = 0;
  $totalShipping = 0;


	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
      $totalWeight += $row['weight'];
      $totalShipping += $shipping;

  		echo "<tr>";
        echo "<td></td>";
  			echo"<td>" . $row['receiverName'] . "</td>";
        echo"<td>" . $row['weight'] . " kg </td>";
        echo"<td style='background-color: ". $row['colour'] ."'></td>";

/* Shipping rates, total weight and total shipping cost for all boxes in database */

        if($row['country'] === "sweden"){
           $shipping = $row['weight'] * 1.3;
          echo"<td>" . $shipping . " SEK</td>";
        }
        elseif($row['country'] === "china"){
          $shipping = $row['weight'] * 4;
          echo"<td>" . $shipping . " SEK</td>";
        }
        elseif($row['country'] === "brazil"){
          $shipping = $row['weight'] * 8.6;
          echo"<td>" . $shipping . " SEK</td>";
        }
        elseif($row['country'] === "australia"){
          $shipping = $row['weight'] * 7.2;
          echo"<td>" . $shipping . " SEK</td>";
        }
      echo"</tr>";
    }

      echo"<tr>";
        echo "<th class='total'>Total: </th>";
        echo "<td></td>";
        echo "<th class='total'>" . $totalWeight . " kg </th>";
        echo "<td></td>";
        echo "<th class='total'>" . $totalShipping . " SEK </th>";
      echo"</tr>";
	} else {
		echo "0 results";
	}
	mysqli_close($db);
?>
