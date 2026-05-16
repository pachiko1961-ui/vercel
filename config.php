<?php
// 資料庫設定
$db_host = 'localhost';      // 主機
$db_user = 'root';           // 帳號
$db_pwd  = '';               // 密碼(預設空)
$db_name = 'customer_db';    // 資料庫名稱

// 連線
$conn = mysqli_connect($db_host, $db_user, $db_pwd, $db_name);
mysqli_set_charset($conn, 'utf8mb4');

if(!$conn){
    die("資料庫連線失敗：".mysqli_connect_error());
}
?>