<?php
// Create an associative array
$students = array(
    "Rahim" => 85,
    "Karim" => 92,
    "Sumaiya" => 78,
    "Nusrat" => 95,
    "Hasan" => 88
);

// Find maximum score and student name
$maxScore = max($students);
$topStudent = array_search($maxScore, $students);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Student Result Sheet</title>

</head>

<body>

    <h2>Student Result Sheet</h2>

    <table>
        <tr>
            <th>Student Name</th>
            <th>Score</th>
        </tr>

        <?php foreach ($students as $name => $score) { ?>
            <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $score; ?></td>
            </tr>
        <?php } ?>

    </table>

    <h3>Highest Score: <?php echo $maxScore; ?></h3>
    <h3>Top Student: <?php echo $topStudent; ?></h3>

</body>

</html>