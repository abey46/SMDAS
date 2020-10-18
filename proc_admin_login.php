<?php
session_start();
require "db_con.php";
$admin_id = $_POST["admin_id"];
$admin_pwd = $_POST["admin_pwd"];
$sql = "SELECT * FROM admin_tbl WHERE admin_id = '$admin_id' AND admin_pwd = '$admin_pwd'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['alogin'] = $_POST['admin_id'];
    echo "<script type='text/javascript'> document.location ='admin_dashboard.php'; </script>";
    } 
else {
    echo "<script>alert('Invalid Credential. Please try again');</script>";
    echo "<script type='text/javascript'> document.location ='admin_login.php'; </script>";
}

$conn->close();
?>
