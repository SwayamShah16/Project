<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Id:
        <input type="text" name="id" id="">
        <br>
        Name:
        <input type="text" name="name" id="">
        <br>
        Email:
        <input type="email" name="email" id="">
        <br>
        Age:
        <input type="number" name="age" id="">
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
        $name = $_POST["name"];
        $email = $_POST["email"];
        $age = $_POST["age"];
        $address = $_POST["address"];

        $sql = $conn -> prepare("insert into emp values (?,?,?,?,?)");
        $sql->bind_param("issis",$id,$name,$email,$age,$address);
        if($sql->execute()){
            echo "Inserted";
        }
    }
?>