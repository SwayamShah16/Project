<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Username :
        <input type="text" name="user">
        <br>
        Email :
        <input type="email" name="email" id="">
        <br>
        Password :
        <input type="password" name="pass" id="">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php 
if ($_SERVER["REQUEST_METHOD"] === "post" ) {
    $username = $_POST("user");
    $email = $_POST("email");
    $password = $_POST("pass");
    echo $username;
    echo $email;
    echo $password;
}
?>
