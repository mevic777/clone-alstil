<?php

$connection = new mysqli('localhost', 'root', '', 'project');

$sql = "SELECT * FROM cars where car_parent_id is not null";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<a href="/car?car="' . $row["car_name"] . '>' . $row["car_name"] . '</a>' . '<br>';
    }
} else {
    echo "0 results";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>

</html>