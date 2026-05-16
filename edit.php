<?php
require_once 'config.php';
$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$address = $_POST['address'];

$sql = "UPDATE customers SET name='$name',phone='$phone',company='$company',address='$address' WHERE id=$id";
echo mysqli_query($conn,$sql) ? 'ok' : 'fail';
?>