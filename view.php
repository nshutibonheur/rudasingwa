<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
</head>
<body>
    <center>
        <h1>view all</h1>
        <table border="1" cellpadding="10px" style="border-collapse:collapse;">
            <tr>
            <th>id</th>
            <th>Name</th>
            <th>Password</th>
            <th>Location</th>
            <th>Actions</th>
            </tr>
            <?php
            $conn=mysqli_connect("localhost","root","","idatech");

            $sql="SELECT * FROM user";
            $a=mysqli_query($conn,$sql);
            while($tax=$a->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $tax['id']; ?></td>
                    <td><?php echo $tax['name']; ?></td>
                    <td><?php echo $tax['password']; ?></td>
                    <td><?php echo $tax['location']; ?></td>
                    <td><a href="update.php">edite</a>||<a href="delete.php">Delete</a></td>
            </tr>
            <?php } ?>            
            
        
        </table>
    </center>
</body>
</html>