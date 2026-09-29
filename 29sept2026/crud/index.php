<?php include_once("dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="top-bar">
            <h3>Student List</h3>
            <a class="btn" href="student_new.php">
                <svg aria-hidden="true" viewBox="0 0 24 24" focusable="false">
                    <path d="M12 5v14M5 12h14"/>
                </svg>
                <span>New Entry</span>
            </a>
        </div>

        <?php 
           $rawData =  $conn->query("SELECT * FROM allstudents"); ?>

        <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>    
        <?php
           while($row = $rawData->fetch_assoc()){ ?>
              <tr>
                <td><?php echo  $row['id'] ?> </td>
                <td><?php echo  $row['name'] ?></td>
                <td><?php echo  $row['email'] ?></td>
                <td><?php echo  $row['phone'] ?></td>
                <td class="action">
                    <a class="edit" aria-label="Edit student" title="Edit student" href="student_edit.php?id=<?php echo  $row['id'] ?>">
                        <svg aria-hidden="true" viewBox="0 0 24 24" focusable="false">
                            <path d="M12 20h9"/>
                            <path d="M16.5 3.5a2.1 2.1 0 1 1 3 3L7 19l-4 1 1-4 12.5-12.5z"/>
                        </svg>
                    </a>
                    <a onclick="return confirm('Are you sure to delete')" class="danger" aria-label="Delete student" title="Delete student" href="student_delete.php?id=<?php echo  $row['id'] ?>">
                        <svg aria-hidden="true" viewBox="0 0 24 24" focusable="false">
                            <path d="M3 6h18"/>
                            <path d="M8 6V4h8v2"/>
                            <path d="M19 6l-1 14H6L5 6"/>
                            <path d="M10 11v6M14 11v6"/>
                        </svg>
                    </a>
                </td>
              </tr>
          <?php 
            }    
        ?>
        </table>
    </div>
</body>
</html>