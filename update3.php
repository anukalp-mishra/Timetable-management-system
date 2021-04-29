<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="css/update.css">
</head>
<body>
    <?php 
        $con=mysqli_connect("localhost","root","","timetable");

        $ids= $_GET['sl_no'];
        $showquery= "select * from table4 where sl_no={$ids}";
        $showdata= mysqli_query($con,$showquery);
        $arraydata= mysqli_fetch_array($showdata);

        if(isset($_POST['submit']))
        {
            $id= $_GET['sl_no'];

            $p1=$_POST['p1'];
            $p2=$_POST['p2'];
            $p3=$_POST['p3'];
            $p4=$_POST['p4'];
            $p5=$_POST['p5'];
            $p6=$_POST['p6'];

            $update= " update table4 set sl_no=$id, p1='$p1', p2='$p2', p3='$p3', p4='$p4', p5='$p5', p6='$p6' where sl_no=$id ";

            $result=mysqli_query($con,$update);

            if($result)
            {
                ?>
                <script>
                    alert("Data updated successfully");
                </script>
                <?php
            }
            else
            {
                ?>
                <script>
                    alert("Data not updated");
                </script>
                <?php
            }    
            }
        ?>

    <div class="main-div">
        <h1>Update Timetable</h1>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th bgcolor="yellow"><strong>Day</strong></th>
                            <th bgcolor="yellow"><strong>1st Period</strong></th>
                            <th bgcolor="yellow"><strong>2nd Period</strong></th>
                            <th bgcolor="yellow"><strong>3rd Period</strong></th>
                            <th bgcolor="yellow"><strong>4th Period</strong></th>
                            <th bgcolor="yellow"><strong>5th Period</strong></th>
                            <th bgcolor="yellow"><strong>6th Period</strong></th><br><br>
                            <th bgcolor="yellow"><strong>Update</strong></th>
                        </tr>
                <form action="" method="post" enctype="multipart/form-data">    
                    <th>
                        <input type="text"  placeholder="Day" name="day" value="<?php echo $arraydata['day']; ?>" readonly/>
                    </th>
                    <th>
                        <input type="text"  placeholder="1st Period" name="p1" value="<?php echo $arraydata['p1']; ?>" required/>
                    </th>
                    <th>
                        <input type="text"  placeholder="2nd Period" name="p2" value="<?php echo $arraydata['p2']; ?>" required/>
                    </th>
                    <th>
                        <input type="text"  placeholder="3rd Period" name="p3" value="<?php echo $arraydata['p3']; ?>" required/>
                    </th>
                    <th>
                        <input type="text"  placeholder="4th Period" name="p4" value="<?php echo $arraydata['p4']; ?>" required/>
                    </th>
                    <th>
                        <input type="text"  placeholder="5th Period" name="p5" value="<?php echo $arraydata['p5']; ?>" required/>
                    </th>
                    <th>
                        <input type="text"  placeholder="6th Period" name="p6" value="<?php echo $arraydata['p6']; ?>" required/>
                    </th><br>
                    <td>
                    <input type="submit" name="submit" value="Update">
                </td>
                </form>
            </thead>
        </table>
        </div> 
        </div>
        </div> 
</body>
</html>