<?php 
require('connection.php');


$query = "Select * from profiletable";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile Form</title>
    <link rel="stylesheet" href="./profilecss.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Profile</h3>
                        
                        <div class="maindiv">
                            <div class="form-items1">
                                <p>UserName</p>
                                <p>Email Id</p>
                                <p>DOB </p>
                                <p>Contact</p>
                                <p>Course</p>
                                <p>College</p>
                                
                            </div>
                            
                            <div class="form-items1">
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                               
                            </div>
                            <div class="form-items1">
                                <p><?php echo $row['fullname']; ?></p>
                                <p><?php echo $row['email']; ?></p>
                                <p><?php echo $row['DOB']; ?></p>
                                <p><?php echo $row['phonenumber']; ?></p>
                                <p><?php echo $row['course']; ?></p>
                                <p><?php echo $row['college']; ?></p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<td class="form-items1"> UserName : </td>
                                    <td class ="form-items1" >
                                        <?php
                                        while($row = mysqli_fetch_assoc($result)){
                                            echo $row['fullname'];
                                        } 
                                        ?>
                                    </td>