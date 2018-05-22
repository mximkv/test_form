<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</head>

<body>


<h1 style="text-align:center;">ок теперь кароч ваше имя</h1>
<p style="text-align:center;">не сцы:</p>


<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$name = ($_POST['name']);
$sql = "INSERT INTO table1 (name)  VALUES ('$name')";


if (mysqli_query($conn, $sql)) {
    echo "<h1 style=\"text-align:center;\"> вот имецо: $name <h1 /> <br />";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



$sql = "SELECT name FROM `table1`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo " - имо: " . $row["name"]. " " . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);







?>





</body>


</html>