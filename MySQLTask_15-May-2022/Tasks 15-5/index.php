<?php
include 'connect.php';

$fname=$_POST['name'];
$fprice=$_POST['price'];
$fcolor=$_POST['color'];
$fcal=$_POST['cal'];
$fmass=$_POST['mass'];

$query="INSERT INTO fruits(Fruit_Name, Price, Color, Calories, Mass)
VALUES ('$fname', '$fprice', '$fcolor', '$fcal', '$fmass') ";
if(mysqli_query($conn,$query)){
    echo ('<br>New record Added<br>');
}
else{
    echo('Erorr: '.$query.mysqli_error($conn).'<br>');
}

echo('<button class="btn btn-primary" id="btn" style="display: inline-block;"><a href="data.php" style="color: white; text-decoration:none; color:blue;">Show Data</a></button>
');

  

?>