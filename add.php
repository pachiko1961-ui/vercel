<?php
require_once 'config.php';
$name = $_POST['name'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$address = $_POST['address'];

$sql = "INSERT INTO customers(name,phone,company,address) VALUES('$name','$phone','$company','$address')";
if(mysqli_query($conn,$sql)){
    echo 'ok';
}else{
    echo 'fail';
}
?>