<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Entry</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #eef6ff, #f6f9ff);
            color: #1f2937;
        }

        .card {
            max-width: 520px;
            margin: 80px auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 12px 28px rgba(37, 99, 235, 0.12);
            padding: 30px;
        }

        h3 {
            margin-top: 0;
            margin-bottom: 20px;
            color: #1d4ed8;
            font-size: 28px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #cbd5e1;
            border-radius: 10px;
            font-size: 15px;
            outline: none;
        }

        input[type="text"]:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.12);
        }

        input[type="submit"] {
            background: #2563eb;
            color: white;
            border: none;
            padding: 12px 18px;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background: #1d4ed8;
        }

        .link {
            display: inline-block;
            margin-top: 20px;
            color: #2563eb;
            text-decoration: none;
            font-weight: 600;
        }

        .link:hover {
            text-decoration: underline;
        }

        .message {
            margin-bottom: 14px;
            color: #16a34a;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="card">
        <h3>Student Entry Form</h3>
        <?php 
            if($_SERVER['REQUEST_METHOD']=='POST'){
               // Data received from entry form
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                include_once("dbconfig.php"); // Database Connection

            //    echo "INSERT INTO allstudents 
            //     (id, name, email, phone) VALUES 
            //     (NULL, '$name', '$email', '$phone')";
            //     echo "<br>";

               $conn->query("INSERT INTO allstudents 
                (id, name, email, phone) VALUES 
                (NULL, '$name', '$email', '$phone')");

                 if($conn->affected_rows){
                    echo "<div class='message'>Success</div>";
                 } 
            
            }
        ?>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Enter name"><br>
            <input type="text" name="email" placeholder="Enter email"><br>
            <input type="text" name="phone" placeholder="Enter phone"><br>
            <input type="submit" name="submit" value="SAVE">
        </form>
        <br>
        <a class="link" href="index.php">Back to Student List</a><br><br>
    </div>
</body>
</html>