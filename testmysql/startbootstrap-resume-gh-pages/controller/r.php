<?php 
session_start();
error_reporting (0); 
require_once('../dbConnect.php');
header("Content-Type:text/html; charset=utf-8");

$sqls ="select * from ordertest where username= '{$_POST["username"]}'";
$result1 = mysqli_query($link,$sqls);
$row1 = mysqli_fetch_assoc($result1);
echo "username".$row1["username"];

if($row1["username"]==NULL){
        $sql ="insert into ordertest (username,password,phone,email,idcard)
        value('{$_POST["username"]}','{$_POST["password"]}','{$_POST["phone"]}','{$_POST["email"]}','{$_POST["id"]}');";
        $result = mysqli_query($link,$sql);
        $_SESSION["msqtest1"]="註冊成功請從新登入";
          header("Location: ../login.php");   
}else{
        // $_SESSION["msqtest"]="註冊失敗該帳號已存在";
        $_SESSION["msqtest1"]="Registration failed. The account already exists";
        header("Location: ../login.php"); 
}
exit();
    

?>