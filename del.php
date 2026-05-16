<?php
require_once 'config.php';
$id = $_POST['id'];
$sql = "DELETE FROM customers WHERE id=$id";
echo mysqli_query($conn,$sql) ? 'ok' : 'fail';
?>