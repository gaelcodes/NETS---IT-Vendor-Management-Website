<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <h1 class="admin-heading">Admin Dashboard</h1>

    <div class="table">
        <table class="admin-table" border="4px">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Company</th>
                    <th>Business Email</th>
                    <th>Job Title</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Country</th>
                    <th>Address</th>
                    <th>Interest</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include("connect.php");
                    $sql = "SELECT * FROM vendor";
                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_array($result);
                    while($row = mysqli_fetch_array($result)) {
                        ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['company'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['lname'];?></td>
                    <td><?php echo $row['pnumber'];?></td>
                    <td><?php echo $row['country'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['interest'];?></td>
                </tr>
                <?php }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>