<?php
$servername = "localhost";
$username = "a55d528a_m2newl";
$password = 'nRf?K#-vstN!';
$dbname = "a55d528a_m2newlive";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo '<pre/>';
$file = fopen("old-reward-points.csv","r");
while($row = fgetcsv($file)) {
//     $sql = "INSERT INTO amasty_rewards_expiration_date (customer_id,amount)
//     VALUES ($row[0],'$row[1]')";
//       if ($conn->query($sql) === TRUE) {
//        echo "yes <br>";
//    } else {
//        echo "no <br>";
//    }
  }

   
?>