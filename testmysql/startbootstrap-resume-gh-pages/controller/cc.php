




<?php
        echo "<script type='text/javascript'>test();</script>";
?>

<script type="text/javascript">
    function test()
        {
         var t1=3;
         t1 = t1+2;
         alert(t1);
         //return t1;
        }
</script>
<?php
session_start();
echo "購買數量".$_POST[cc];
echo "<hr>";
echo "商品編號".$_GET["value"];
echo "<hr>";

// echo $_SESSION["c1"];
echo $_SESSION['name'];


$_SESSION["cc"]=$_POST[cc];

$_SESSION["value"]=$_GET["value"];

$_SESSION["shopname"]=$_SESSION["name"];

$_SESSION["sum"]=$_POST["sum"]*$_POST[cc];

echo $_SESSION["sum"];




function sss($s1){
for($x=1;$x<28;$x++){
    if($s1==$x){
     
        if($_SESSION["c"."$x"]==NULL){
        $_SESSION["c"."$x"]=$_POST[cc];
        $_SESSION["v"."$x"]=$_GET["value"];
        $_SESSION["s"."$x"]=$_SESSION["name"];
        $_SESSION["sum"."$x"]=$_SESSION["sum"];
        $_SESSION["o1"]+=1;
        }else{
        $_SESSION["c"."$x"]+=$_POST[cc];
        $_SESSION["sum"."$x"]+=$_SESSION["sum"];
            
        }
    }
}
}

sss($_GET["value"]);

echo "<hr> 你想選哪一個^ ^  上 and 下";

//  if($_GET["value"]== 1){
//      $_SESSION["c1"]=$_POST[cc];
//      $_SESSION["v1"]=$_GET["value"];
//      $_SESSION["s1"]=$_SESSION["name"];
//     }
// if($_GET["value"]== 2){$_SESSION["c2"]=$_POST[cc];$_SESSION["v2"]=$_GET["value"];$_SESSION["s2"]=$_SESSION["name"];}
// if($_GET["value"]== 3){$_SESSION["c3"]=$_POST[cc];$_SESSION["v3"]=$_GET["value"];$_SESSION["s3"]=$_SESSION["name"];}
// if($_GET["value"]== 4){$_SESSION["c4"]=$_POST[cc];$_SESSION["v4"]=$_GET["value"];$_SESSION["s4"]=$_SESSION["name"];}
// if($_GET["value"]== 5){$_SESSION["c5"]=$_POST[cc];$_SESSION["v5"]=$_GET["value"];$_SESSION["s5"]=$_SESSION["name"];}
// if($_GET["value"]== 6){$_SESSION["c6"]=$_POST[cc];$_SESSION["v6"]=$_GET["value"];$_SESSION["s6"]=$_SESSION["name"];}
// if($_GET["value"]== 7){$_SESSION["c7"]=$_POST[cc];$_SESSION["v7"]=$_GET["value"];$_SESSION["s7"]=$_SESSION["name"];}
// if($_GET["value"]== 8){$_SESSION["c8"]=$_POST[cc];$_SESSION["v8"]=$_GET["value"];$_SESSION["s8"]=$_SESSION["name"];}
// if($_GET["value"]== 9){$_SESSION["c9"]=$_POST[cc];$_SESSION["v9"]=$_GET["value"];$_SESSION["s9"]=$_SESSION["name"];}
// if($_GET["value"]==10){$_SESSION["c10"]=$_POST[cc];$_SESSION["v10"]=$_GET["value"];$_SESSION["s10"]=$_SESSION["name"];}
// if($_GET["value"]==11){$_SESSION["c11"]=$_POST[cc];$_SESSION["v11"]=$_GET["value"];$_SESSION["s11"]=$_SESSION["name"];}
// if($_GET["value"]==12){$_SESSION["c12"]=$_POST[cc];$_SESSION["v12"]=$_GET["value"];$_SESSION["s12"]=$_SESSION["name"];}
// if($_GET["value"]==13){$_SESSION["c13"]=$_POST[cc];$_SESSION["v13"]=$_GET["value"];$_SESSION["s13"]=$_SESSION["name"];}
// if($_GET["value"]==14){$_SESSION["c14"]=$_POST[cc];$_SESSION["v14"]=$_GET["value"];$_SESSION["s14"]=$_SESSION["name"];}
// if($_GET["value"]==15){$_SESSION["c15"]=$_POST[cc];$_SESSION["v15"]=$_GET["value"];$_SESSION["s15"]=$_SESSION["name"];}
// if($_GET["value"]==16){$_SESSION["c16"]=$_POST[cc];$_SESSION["v16"]=$_GET["value"];$_SESSION["s16"]=$_SESSION["name"];}
// if($_GET["value"]==17){$_SESSION["c17"]=$_POST[cc];$_SESSION["v17"]=$_GET["value"];$_SESSION["s17"]=$_SESSION["name"];}
// if($_GET["value"]==18){$_SESSION["c18"]=$_POST[cc];$_SESSION["v18"]=$_GET["value"];$_SESSION["s18"]=$_SESSION["name"];}
// if($_GET["value"]==19){$_SESSION["c19"]=$_POST[cc];$_SESSION["v19"]=$_GET["value"];$_SESSION["s19"]=$_SESSION["name"];}
// if($_GET["value"]==20){$_SESSION["c20"]=$_POST[cc];$_SESSION["v20"]=$_GET["value"];$_SESSION["s20"]=$_SESSION["name"];}
// if($_GET["value"]==21){$_SESSION["c21"]=$_POST[cc];$_SESSION["v21"]=$_GET["value"];$_SESSION["s21"]=$_SESSION["name"];}
// if($_GET["value"]==22){$_SESSION["c22"]=$_POST[cc];$_SESSION["v22"]=$_GET["value"];$_SESSION["s22"]=$_SESSION["name"];}
// if($_GET["value"]==23){$_SESSION["c23"]=$_POST[cc];$_SESSION["v23"]=$_GET["value"];$_SESSION["s23"]=$_SESSION["name"];}
// if($_GET["value"]==24){$_SESSION["c24"]=$_POST[cc];$_SESSION["v24"]=$_GET["value"];$_SESSION["s24"]=$_SESSION["name"];}
// if($_GET["value"]==25){$_SESSION["c25"]=$_POST[cc];$_SESSION["v25"]=$_GET["value"];$_SESSION["s25"]=$_SESSION["name"];}
// if($_GET["value"]==26){$_SESSION["c26"]=$_POST[cc];$_SESSION["v26"]=$_GET["value"];$_SESSION["s26"]=$_SESSION["name"];}
// if($_GET["value"]==27){$_SESSION["c27"]=$_POST[cc];$_SESSION["v27"]=$_GET["value"];$_SESSION["s27"]=$_SESSION["name"];}


// echo "<hr>";

// echo $_SESSION["cc"];
// echo "<hr>";
// echo $_SESSION["value"];
// echo "<hr>";
// echo $_SESSION["shopname"];

header("Location: ../car.php?value=".$_GET["value"]);

?>