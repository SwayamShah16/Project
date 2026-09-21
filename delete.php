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
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php 
    include 'dbconnect.php';
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $id = $_POST["id"];
        $sql = $conn -> prepare("delete from emp where id = ?");
        $sql->bind_param("i",$id);
        if($sql->execute()){
            echo "Deleted";
        }
    }
?>