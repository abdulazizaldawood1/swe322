<?php include("header.php") ?>
<?php include("db_config.php") ?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style= "height:20px;" >
  <div class="container-fluid">
    <ul class="navbar-nav" style = "margin-left:860px;margin-top:-100px;">
      <li class="nav-item" >
        <a class="nav-link" href="enroll.php" style = "color:cyan;font-Style:italic;font-size:50px">Apply</a>
    </ul>
  </div>
</nav>
<div style="height:800px;background-image: url(assets/fit.jpg);">
<?php

    $sql = "SELECT trainer_name, class_date, number_of_trainees, max_num_of_trainees FROM classes";
    $result = mysqli_query($conn, $sql);
    
    $employee_array = array();

    if (mysqli_num_rows($result) > 0) {
    
    $table = '
    <table class="table table-dark table-striped" style= "margin-left:400px;width:1000px">
                     <tr style="text-align: center;">
                          <th style="color:rgb(60, 179, 113)"> Title </th>
                          <th style="color:rgb(60, 179, 113)"> TrainDate </th>
                          <th style="color:rgb(60, 179, 113)"> Number </th>
                          <th style="color:rgb(60, 179, 113)"> MaxNumber </th>
 
                     </tr>
   ';
    while($row = mysqli_fetch_assoc($result)) {
        $table .= '
        <tr style="text-align: center;">
                             <td>'.$row["trainer_name"].'</td>
                             <td>'.$row["class_date"].'</td>
                             <td>'.$row["number_of_trainees"].'</td>
                             <td>'.$row["max_num_of_trainees"].'</td>
                        </tr>
       ';
        
    }
    $table .= '</table>';
    echo $table;
    } else {
    echo "0 results";
    }
    mysqli_close($conn);
   
 
?></div>
<?php include("footer.php")?>