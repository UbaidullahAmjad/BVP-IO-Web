<?php
$mysqli = new mysqli("localhost","u158205072_bvp","Bvp12345","u158205072_bvp");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

if(isset($_POST['name']) && isset($_POST['country']) && isset($_POST['amount']) && isset($_POST['date']) && isset($_POST['link'])){

    $charity_name = $_POST['name'];
    $charity_country = $_POST['country'];
    $date = $_POST['date'];
    $link = $_POST['link'];
    $amount = $_POST['amount'];


    $sql = "INSERT INTO donations (`charity_name`, charity_country, `date`, links, amount)
VALUES ('$charity_name', '$charity_country', '$date', '$link', '$amount')";

if ($mysqli->query($sql) === TRUE) {
    header('Location: /admin/index.php');
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
}else{
    header('Location: /admin/add-donation.html');
}


?>