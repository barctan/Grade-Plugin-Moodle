<?php
  $con = mysqli_connect("localhost", "root","Just4m3","moodle_ext");

  if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: ". mysqli_connect_error();
  }
 ?>
