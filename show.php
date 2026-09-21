<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'dbconnect.php';
        $result = $conn -> query("select * from emp");
    ?>
    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Age</td>
            <td>Address</td>
        </tr>
        <?php
            while($row = $result -> fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["age"]; ?></td>
            <td><?php echo $row["address"]; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>