<?php 
session_start();
require_once('../dbConnect.php');
header("Content-Type:text/html; charset=utf-8");
echo $_GET["value"];
echo '<hr>';
$sql ="select * from carshopp where id= {$_GET["value"]}";

// 我的ID 1到27
$random=[rand(3,1),rand(6,4),rand(9,7),rand(12,10),rand(16,13),rand(20,17),rand(24,21),rand(27,25)];

for($x=0;$x<8;$x++){
    $sql1 ="select * from carshopp where id= {$random[$x]}";
    $y=$x+1;
    $result1 = mysqli_query($link,$sql1);
    $row1=mysqli_fetch_assoc($result1);


    $_SESSION["id"."$y"]=$row1["id"];
    $_SESSION["price"."$y"]=$row1["price"];
    $_SESSION["name"."$y"]=$row1["name"];
}


$result = mysqli_query($link,$sql);


$row=mysqli_fetch_assoc($result);

    $_SESSION["price"]=$row["price"];
    $_SESSION["content"]=$row["content"];
    $_SESSION["name"]=$row["name"];
     header("Location: ../car.php?value={$_GET["value"]}");
        exit();
?>
