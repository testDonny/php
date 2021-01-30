<?php 
session_start();
error_reporting (0); 
?>
<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery mycart Plugin Example</title>
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <style>
  body { 
   /* font-family: Georgia, serif;;  */
  }
  .badge-notify{
    background:red;
    position:relative;
    top: -20px;
    right: 10px;
  }
  #order{
  text-align:center;
  color:red;
  font-size:30px;
  }
  img{
      width:100px;
      height:100px;
  }
  #img{
    width:300px;
    height:300px;
  }
  h1{
      font-family:fantasy;
      background-color:#D7C4BB;
  }
  #ttt{
    display:none;
    position: absolute;
    left:75%;
    top:13%;
  }
  #ttt2{
    position: absolute;
    left:78%;
    top:16%;
  }
  #u{
    color:red;
  }
  </style>
<script>
      window.onload = function () {

      var x = document.getElementById("aaaa");
      var y = document.getElementById("ttt");

      function myclick(parameter1,parameter2) {
      parameter1.onmouseover = function () {
        parameter2.style.display="block";	
      }
        parameter1.onmouseout = function () {
          parameter2.style.display="none";
      }
      }    
      myclick(x,y);
      }
</script>

</head>

<body class="container">

  <div class="page-header">
  
    <h1>歡迎來到購物車&nbsp;&nbsp;&nbsp;Welcome toshopping cart 
      <div style="float: right; cursor: pointer;">
      <a  id="aaaa"  href="ccar.php" >
        <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span  class="badge badge-notify my-cart-badge">商品品項:<?=$_SESSION["o1"]?>
        </span></a>
        <br>
<br><br>                                    
</br></span>
<br>
  </div>
      
    </h1>
  </div>
  <div id="ttt">
        <?php for($x=1;$x<28;$x++){
           if($_SESSION["v"."$x"]==null){
             continue;
           }else{
             ?>
          商品編號:&nbsp;&nbsp;
        <?=$_SESSION["v"."$x"] ?> &nbsp;&nbsp;
        商品數量:&nbsp;&nbsp;<?=$_SESSION["c"."$x"]?>
        商品價格:
        <?=$_SESSION["sum"."$x"]?><br>
        商品名稱:
        <?=$_SESSION["s"."$x"]?><br><hr>  
        <?php 
      } }
      ?>
      </div>
  <div id="carbon-block" align="center" style="margin:30px auto;"></div>
<div align="center" style="margin:30px auto;"><script type="text/javascript">
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>

<script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

  <div class="row">
  <div class="col-md-12 text-center">
      <?php for($y=1;$y<28;$y++){
      if($_GET["value"]==$y){
          ?>
          <img src="img1/a<?=$y?>.png" id="img"> 
       <?php }
        }?>
        <br>
        <strong>商品名稱:<?=$_SESSION["name"]?></strong>
       <strong>價格(CASH): <?=$_SESSION['price'] ?>元</strong>
       <br>
       <strong><?=$_SESSION["content"]?></strong>
        <br>
        <form method="post" action="controller/cc.php?value=<?=$_GET["value"]?>">
          <br>
       你要購買 <button type="button" class="btn btn-petal" onclick="decQuantity(0)">&lt;</button>
    <input style="width: 50px;" id="cc" name="cc" class="num" type="number" value="1"
        oninput="if(value>20)value=20;if(value<1)value=1;">
    <button type="button" class="btn btn-petal" onclick="incQuantity(0)">&gt;</button>個公仔
        <input type="submit"  onclick="myFunction()" name="c" value="加入購物車" class="btn btn-info"></input>
        <input type="hidden" name="sum" value=<?=$_SESSION['price']?>>
        <strong><a href="index.php">不買了我要離開 </a></strong>
        </form>
        <strong class="ld ld-bounce" id="u">你可能會想購買的商品</strong>
      </div>
    
      <?php  for($x=1;$x<9;$x++){?>
        <div class="col-md-3 text-center">
        <a href="controller/get.php?value=<?=$_SESSION["id".$x]?>" >
      <img src="img1/a<?=$_SESSION["id".$x]?>.png" >
    </a>
      <br>    
      <strong>名稱:<?=$_SESSION["name".$x]?></strong>
     <strong>價錢:<?=$_SESSION["price".$x]?></strong>
      <br>

    </div>

      <?php } ?>
<script>
  function myFunction(){
    alert("商買加入購物車成功");
  }
</script>



  </div>
  
  <script>
function decQuantity(index) {
    let obj = document.getElementsByClassName('num')[index];
    let num = obj.value;
    if (num > 1 && num < 21) {
        obj.value = parseInt(obj.value) - 1;
    } else {
        obj.value = 1;
    }
}
function incQuantity(index) {
    let obj = document.getElementsByClassName('num')[index];
    let num = obj.value;
    if (num < 20 && num > 0) {
        obj.value = parseInt(obj.value) + 1;
    } else {
        obj.value = 20;
    }
}
</script>


<script>


try {
  fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
    return true;
  }).catch(function(e) {
    var carbonScript = document.createElement("script");
    carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
    carbonScript.id = "_carbonads_js";
    document.getElementById("carbon-block").appendChild(carbonScript);
  });
} catch (error) {
  console.log(error);
}
</script>

  <script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">

  </script>

</body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</html>