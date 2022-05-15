<?php
  $conn= mysqli_connect('localhost','root', '', 'fruits');

  if(mysqli_connect_errno()){
    echo('Faild to connect:  '. mysqli_connect_error());
    exit();
  }
  else{
    echo('Connected successfully');
  }