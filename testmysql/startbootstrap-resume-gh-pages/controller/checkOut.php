
<?php 
session_start(); 
error_reporting (0); 
require_once('../dbConnect.php');
header("Content-Type:text/html; charset=utf-8");
$sqls ="select * from ordertest where username= '{$_SESSION['UserName']}'";
$result1 = mysqli_query($link,$sqls);

$row1 = mysqli_fetch_assoc($result1);
$date1=date("Y-m-d");
echo $date1;
$_SESSION["summ"]=0; 

for($x=1;$x<28;$x++){
        if($_SESSION["v"."$x"]==null){   
          continue;
        }else{

  //  echo "商品編號".$_SESSION["v"."$x"]; 
  //  echo "<hr>";
  //  echo "商品數量".$_SESSION["c"."$x"];
  //  echo "<hr>";
  //  echo  "商品名稱".$_SESSION["s"."$x"];
  //  echo "<hr>";
  //  echo  "商品數量金額".$_SESSION["sum"."$x"];
  //  echo "<hr>";
    $_SESSION["summ"]+=$_SESSION["sum"."$x"];
  //  echo  "總共價錢".$_SESSION["summ"];
  //  echo "<hr>"; 
   $sql ="insert into ordersum (userid,productNumber,purchaseQuantity,productName	,commodityPrice,commoditySum,time)
   value('{$row1["id"]}','{$_SESSION["v"."$x"]}','{$_SESSION["c"."$x"]}','{$_SESSION["s"."$x"]}','{$_SESSION["sum"."$x"]}',
 '{$_SESSION["summ"]}','$date1')";
 $result = mysqli_query($link,$sql);
 } 

}

for($y=1;$y<28;$y++){
  // echo $_SESSION["v"."$x"];
  // echo $_SESSION["c"."$x"];
  // echo $_SESSION["s"."$x"];
  // echo $_SESSION["sum"."$x"];
      unset($_SESSION["v"."$y"]);
      unset($_SESSION["c"."$y"]);
      unset($_SESSION["s"."$y"]); ;
      unset($_SESSION["sum"."$y"]) ;
      $_SESSION["o1"]=0;

 
      
} 
 $_SESSION["result"]="購買成功可以查詢訂單";



 header("Location: ../index.php");


  ?>
