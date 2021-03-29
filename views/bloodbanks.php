<?php
    include_once '../includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blood Banks</title>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>CITY</th>
        <th>TYPE</th>
        <th>NAME</th>
        <th>PHONE</th>
        <th>EMAIL</th>
    </tr>
<?php 

$sql = "SELECT * from bloodbanks";
$result = $conn-> query($sql);

if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>".$row["bbid"]."</td><td>".$row["city"]."</td><td>".$row["bb_type"]."</td><td>".$row["name"]."</td><td>".$row["phone"]."</td><td>".$row["email"]."</td><tr>";
    }
    echo "</table>";
}
else{
    echo "0 result";
}

$conn-> close();

?>
</table>
</body>
</html>