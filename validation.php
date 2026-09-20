<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name:
        <input type="text" name="name" id="">
        <br>
        Email:
        <input type="text" name="email" id="">
        <br>
        Password:
        <input type="password" name="pass" id="">
        <br>
        Confirm Password:
        <input type="password" name="cpass" id="">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $cpass = $_POST["cpass"];


        if(empty($name)){
            echo '<script>alert("Name is not valid");</script>';
        }

        if($pass != $cpass){
            echo '<script>alert("Passwords dont match");</script>';
        }

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo '<script>alert("Email is not valid");</script>';
        }
    }
?>