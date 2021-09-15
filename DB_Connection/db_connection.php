<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'sign_in';
    $conn = mysqli_connect($host, $user, $password, $db);

    if(mysqli_connect_errno()){
        echo 'Connection Failed <br>'.mysqli_connect_errno();
    }else{
        // echo 'Connection Established<br>';
    }

    $sql = "SELECT * FROM form";
    $result = $conn->query($sql);

    $conn->close();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
<h1 style="text-align:center;">Ouput</h1>
<table class="table table-dark table-striped">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Date</th>
        <th>Gender</th>
        <th>User Name</th>
        <th>Password</th>
    </tr>
    <tbody>
        <?php while($row = $result->fetch_assoc()){  ?>
            <tr>
                <td><?php echo $row["First_Name"] ?></td>
                <td><?php echo  $row["Last_Name"] ?></td>
                <td><?php echo $row["Email"] ?></td>
                <td><?php echo $row["Phone_Number"] ?></td>
                <td><?php echo $row["Date"] ?></td>
                <td><?php echo $row["Gender"] ?></td>
                <td><?php echo $row["Username"] ?></td>
                <td><?php echo $row["Password"] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script> 
</body>
</html>