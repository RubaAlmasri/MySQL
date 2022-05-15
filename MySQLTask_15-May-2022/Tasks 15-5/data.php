<?php
include 'connect.php';

$query="UPDATE fruits SET Color='Red' WHERE Fruit_ID=3";
if (mysqli_query($conn,$query)) {
    echo "<br>Record updated successfully";
  } else {
    echo ("<br>Error updating record: " . $query.mysqli_error($conn));
  }


  $query2="DELETE FROM fruits WHERE Fruit_ID=5";
if (mysqli_query($conn,$query2)) {
    echo "<br>Record deleted successfully";
  } else {
    echo ("<br><br> Error deleting record: " .$query2.mysqli_error($conn));
  }

  $query3 = "SELECT * FROM fruits";
  echo('<table border="1">
    <tr>
      <th>Fruit_ID</th>
      <th>Fruit_Name</th>
      <th>Fruit_Price</th>
      <th>Fruit_Color</th>
      <th>Fruit_Calories</th>
      <th>Fruit_Mass</th>
    </tr>');
    $result = mysqli_query($conn,$query3);
  if ($result) {
        // output data of each row
    while($row = mysqli_fetch_array($result)) {
      echo "<tr><td>".$row["Fruit_ID"]."</td><td>".$row["Fruit_Name"]."</td><td>".$row["Price"]."</td><td>".$row["Color"]."</td><td>".$row["Calories"]."</td><td>".$row["Mass"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }




  
