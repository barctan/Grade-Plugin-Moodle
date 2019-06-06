<!DOCTYPE html>
<?php
  include 'config.php';

  $SQL = "SELECT * FROM results_entries ORDER BY `id` ASC";
  $students=array();
  if($result= mysqli_query($con, $SQL)){

    while($row=mysqli_fetch_row($result)){
      $students= array(
        'id' => $row[0],
        'student' => $row[1],
        'semester'=> $row[2],
        'assignment'=> $row[3],
        'points'=> $row[4],
        'percentage'=> $row[5],
        'mark'=> $row[6],
        'present'=> $row[7]
      );
      $json_data = json_encode($students);
      #echo $json_data . ",";
    }
  }
  #$json_data = json_encode($students);
  #echo $json_data;

 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://d3js.org/d3.v5.min.js"></script>
    <title></title>
  </head>
  <body>
    <p>Hello World! Inital commit!</p>
    <script src="js\func.js"></script>
  </body>
</html>
