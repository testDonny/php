<?php
session_start();
$_SESSION["summ"]=0;    //不加從新整理會有神奇的結果
error_reporting (0); 
?>
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
<div class="container">         
  <table class="table table-hover">
    <thead>
      <tr>
          <th>商品編號</th>
          <th>購買數量</th>
          <th>商品名稱</th>
          <th>商品金額</th>
          <th>刪除商品</th>
      </tr>
    </thead>
    <tbody>
    <?php for($x=1;$x<28;$x++){
           if($_SESSION["v"."$x"]==null){   
             continue;
           }else{
    ?>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$_SESSION["v"."$x"] ?></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$_SESSION["c"."$x"]?></td>
        <td><?=$_SESSION["s"."$x"]?><br></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$_SESSION["sum"."$x"]?><br></td>
        <td> <a class="btn btn-info" href="controller/del.php?value1=<?=$_SESSION["v"."$x"]?>">刪除該品項</a></td>
      </tr>
      <?php $_SESSION["summ"]+=$_SESSION["sum"."$x"]?>
     <?php  } }?>
            <tr>
            
            <td> </td>
            <td >        
    <form methob="post" action ="controller/checkOut.php">
      <input  type="submit" value="結帳">
    </form></td>
          <td><a class="btn btn-info" href="index.php">放棄購買 </a></td>
            <td>總共 <?=$_SESSION["summ"]?></td>
            </tr>
    </tbody>

  </table>
</div>

    
</body>
</html>
<?php 
