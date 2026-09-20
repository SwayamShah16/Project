<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Id:
        <input type="text" name="id" id="">
        <br>
        Address:
        <input type="text" name="address" id="">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php 
    include 'dbconnect.php';
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $id = $_POST["id"];
        $address = $_POST["address"];

        $sql = $conn -> prepare("update emp set address=? where id=?");
        $sql->bind_param("si",$address,$id);
        if($sql->execute()){
            echo "Updated";
        }
    }
?>