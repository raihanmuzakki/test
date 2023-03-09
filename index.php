<!-- <ul>
    <li value="x">Baru</li>
</ul> -->
<form name="form" method="GET">
    <label for="">nama</label>
    <input type="text" id="user" name="user">
</form>

<?php
require_once('connect.php');

//test apakah data masuk
echo $_GET['user'];

$user = $_REQUEST['user'];

$sql = "INSERT INTO komentar (username, pesanan)
VALUES ($user, 'Kue Ultah 79 biji')";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>