<?php  include_once("dbconfig.php"); // Database Connection ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Entry</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="card">
        <h3>Student Update Form</h3>
        <?php 
            // Display Student Record
            $id = $_GET['id']; 
                     
            // Update Student Record
            if($_SERVER['REQUEST_METHOD']=='POST'){
               // Data received from entry form
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
               
                // Update Query
               $conn->query("UPDATE allstudents SET 
               name= '$name', email = '$email', phone = '$phone' 
               WHERE id= '$id'" );


                 if($conn->affected_rows){
                    echo "<div class='message'>Update Success</div>";
                 } 
            
            } // condition end
                        //   Query for select one record
           $data = $conn->query("SELECT * FROM allstudents WHERE id = '$id'");
           $row = $data->fetch_object();
        ?>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Enter name" value="<?php echo $row->name; ?>"><br>
            <input type="text" name="email" placeholder="Enter email" value="<?php echo $row->email; ?>" ><br>
            <input type="text" name="phone" placeholder="Enter phone" value="<?php echo $row->phone; ?>"><br>
            <input type="submit" name="submit" value="UPDATE">
        </form>
        <br>
        <a class="link" href="index.php">Back to Student List</a><br><br>
    </div>
</body>
</html>