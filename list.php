<?php
require_once 'config.php';
$sql = "SELECT * FROM customers ORDER BY id DESC";
$res = mysqli_query($conn,$sql);
$list = [];
while($row = mysqli_fetch_assoc($res)){
    $list[] = $row;
}
echo json_encode($list,JSON_UNESCAPED_UNICODE);
?>