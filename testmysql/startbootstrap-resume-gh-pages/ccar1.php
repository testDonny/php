
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</head>

<body>
<?php
session_start();
error_reporting (0); 
// session_start();
// echo $_POST["username"];
// echo '<hr>';
// echo $_POST["password"];
// echo '<hr>';       

?>
<div class="container">         
  <table class="table table-hover">
    <thead>
      <tr>
          <th>&nbsp;&nbsp;&nbsp;&nbsp;商品名稱</th>
          <th>商品編號</th>
          <th>購買數量</th>
          <th>商品金額</th>
          <th>&nbsp;&nbsp;&nbsp;&nbsp;購買日期</th>
      </tr>
    </thead>
    <tbody>

    <?php 
    
require_once('dbConnect.php');
header("Content-Type:text/html; charset=utf-8");
// echo $_POST["username"];
// echo '<hr>';
// echo $_POST["password"];
// echo '<hr>';       
// echo "ss";          
$sql ="select * from ordersum where userid= '{$_SESSION['id']}' ";


$result = mysqli_query($link,$sql);

// echo $row["userid"];
// echo "<hr>";
// echo "id".$row["id"];
// echo '<hr>';

?>
<?php 
 while ($row = mysqli_fetch_assoc($result)) :
?>
<tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;<?=$row["productName"]?></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;<?=$row["productNumber"]?></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;<?=$row["purchaseQuantity"]?></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;<?=$row["commodityPrice"]."元"?></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;<?=$row["time"]?></td>
    </tr>
  <tr>
  <?php $row1+=$row["commodityPrice"];
    ?>
    </tr>
    </tbody>
  <?php endwhile; ?>
  <td><td><td>&nbsp;&nbsp;總共<td>&nbsp;&nbsp;&nbsp;&nbsp;<?= $row1."元"?>&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-info" href="index.php">返回上一頁</a><td>
  
  </table>
</div>

    
<tr>


</body>
</html>

