<?php include_once("dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #eef4ff, #f8fbff);
            color: #1f2937;
        }

        .container {
            max-width: 1100px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08);
            padding: 30px;
        }

        h3 {
            margin: 0 0 20px;
            font-size: 32px;
            color: #1d4ed8;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            background: #2563eb;
            color: #fff;
            padding: 10px 18px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s ease;
        }

        .btn:hover {
            background: #1d4ed8;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            border-radius: 12px;
            overflow: hidden;
        }

        th, td {
            border: 1px solid #dbeafe;
            padding: 14px 12px;
            text-align: left;
        }

        th {
            background: #eff6ff;
            color: #1e3a8a;
        }

        tr:nth-child(even) {
            background: #f8fafc;
        }

        .action a {
            color: #2563eb;
            text-decoration: none;
            font-weight: 600;
        }

        .action a:hover {
            text-decoration: underline;
        }

        .danger {
            color: #dc2626 !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="top-bar">
            <h3>Student List</h3>
            <a class="btn" href="student_new.php">New Entry</a>
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
                    <a href="#">Edit</a> |
                    <a onclick="return confirm('Are you sure to delete')" class="danger" href="student_delete.php?id=<?php echo  $row['id'] ?>" >Delete</a>
                </td>
              </tr>
          <?php 
            }    
        ?>
        </table>
    </div>
</body>
</html>