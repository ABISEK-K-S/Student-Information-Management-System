<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    
  </head>
  <body style="background-color: black;color: white">

    <center>
<br><br><br>
      <h1>Student Mark List</h1>
      <h2>(Mechanical)</h2>
    <br>



         
<?php
$servername="localhost";
$username="root";
$password="";
$db="timetable";
$conn = new mysqli($servername, $username, $password, $db);
//going to display in time table
$retrive="select * from mech";
$result = $conn->query($retrive);




if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $mark1=$row["m1"];
      $mark2=$row["m2"];
      $mark3=$row["m3"];
      $rollno=$row["roll_no"];
      
?>     










    <table class="table table-dark" style="width: 50%;background-color: #1471e5">
  <thead>
    <tr style="color: #c10115;background-color: white">

      <p style="color: yellow">Roll number --></p>
      <?php
      echo  $rollno;
      ?>
      <th scope="col"></th>
      <th scope="col">Subject </th>
      <th scope="col">Subject  Code</th>
      <th scope="col">Mark</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <th scope="row">1</th>
      <td>Fluid Dynamics</td>
      <td>MEC16008</td>
               
<td>
      <?php
      echo  $mark1;
      ?>
        
</td>
    </tr>


    <tr>
      <th scope="row">2</th>
      <td>Auto CAD</td>
      <td>GE16501</td>
               
<td>
      <?php
      echo  $mark2;
      ?>
        
</td>
    </tr>
    

    <tr>
      <th scope="row">3</th>
      <td>Thermo Dynamics</td>
      <td>MEC14750</td>
               
<td>
      <?php
      echo  $mark3;
      ?>
        
</td>
    </tr>


    <?php
}
}?>
  </tbody>
</table>


<br>
<a href="index.html"><button type="button" class="btn btn-success">Back</button></a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>