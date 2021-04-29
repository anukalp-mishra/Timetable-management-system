<!DOCTYPE html>
<html lang="en">
<head>
   
    <title</title>
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
    <div class="main-div">
        <h1>Time Table</h1>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th bgcolor="blue"><strong>Day</strong></th>
                            <th bgcolor="blue"><strong>1st Period</strong></th>
                            <th bgcolor="blue"><strong>2nd Period</strong></th>
                            <th bgcolor="blue"><strong>3rd Period</strong></th>
                            <th bgcolor="blue"><strong>4th Period</strong></th>
                            <th bgcolor="blue"><strong>5th Period</strong></th>
                            <th bgcolor="blue"><strong>6th Period</strong></th>
                            <th bgcolor="blue"><strong>Action</strong></th>
                        </tr>    
                    </thead>
                    <tbody>
                    <?php
                        $querry="select * from table4 ";
                        $connection = mysqli_connect("localhost","root","","timetable");
                        $query= mysqli_query($connection,$querry);
                        $nums= mysqli_num_rows($query);
                        while($res=mysqli_fetch_array($query)){
                           ?> 
                            <tr>
                            <td><?php echo $res['day']; ?></td>
                            <td><?php echo $res['p1']; ?></td>
                            <td><?php echo $res['p2']; ?></td>
                            <td><?php echo $res['p3']; ?></td>
                            <td><?php echo $res['p4']; ?></td>
                            <td><?php echo $res['p5']; ?></td>
                            <td><?php echo $res['p6']; ?></td>
                            <td><a href="update3.php?sl_no=<?php echo $res['sl_no'];?>" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-edit" aria-hidden="true"></i> </a></td>
                        </tr>
                        <?php

                        }

                    ?>
                        
                    </tbody>    
                </table>
            </div>
        </div>
</div>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
    
</body>
</html>