<?php
include('connect.php');


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT emp_name, job  FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "name: " . $row["emp_name"]. " - job: " . $row["job"].  "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>