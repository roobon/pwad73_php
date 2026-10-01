<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Login Form</h3>
    <?php 
        if(isset($_POST['submit'])){
                extract($_POST);
                $password = md5($password);
                include_once('dbconfig.php');
                //echo "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
                $result = $conn->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
                if($result->num_rows>0){
                    header("Location: dashboard.php");
                } else {
                    echo "<h1>Login Failed</h1>";
                }
        }
    ?>
    <form action="" method="post">
        <input type="email" name="email" placeholder="Enter email"><br>
        <input type="password" name="password" placeholder="Enter password"><br>
        <input type="submit" name="submit" value="LOGIN">
    </form>
</body>
</html>