<?php 
session_start();
require_once('../dbConnect.php');
header("Content-Type:text/html; charset=utf-8");
// echo $_POST["username"];
// echo '<hr>';
// echo $_POST["password"];
// echo '<hr>';                 
$sql ="select * from ordertest where username= '{$_POST["username"]}' and password= '{$_POST["password"]}' ";
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_assoc($result);
echo "<hr>";
echo "id".$row["id"];
echo '<hr>';

echo $row;
echo '<hr>';
var_dump ($row);

if($row!=NULL){
    $_SESSION['UserName']=$_POST["username"];
    $_SESSION['id']=$row["id"];
    if(isset($_SESSION['UserName'])){
        echo "<hr>";
        echo "SESSION:".$_SESSION['UserName'];
        header("Location: ../index.php");
        exit();
    }
}else{
    $_SESSION["msqtest1"]="帳號或密碼錯誤";
     header("Location: ../login.php");
     exit();
}

?>


