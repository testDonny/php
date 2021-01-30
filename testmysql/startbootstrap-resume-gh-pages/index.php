<?php 
session_start();  
error_reporting (0); 
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Resume - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link id="order" rel="stylesheet" type="text/css" href="css/mycss.css">
  <link href="css/resume.min.css" rel="stylesheet">
  <link rel="stylesheet"href="/Public/css/bootstrap.min.css">
  <link rel="stylesheet"href="/Public/img/main.css">
  <script>
    window.onload = function () {
      var speed = 2; //速度=2
      function move() {
        //想迴圈好麻煩簡單又粗暴反正只有三個打三遍就好了
        for (var c = 0; c < document.getElementById("controller1").getElementsByTagName("p").length; c++) {
          if (document.getElementById("controller1").getElementsByTagName("p")[c].offsetLeft > 50) {
            document.getElementById("controller1").getElementsByTagName("p")[c].style.left = document.getElementById("controller1").getElementsByTagName("p")[c].offsetLeft + 0 + 'px';
          }
          else if (document.getElementById("controller1").getElementsByTagName("p")[c].offsetLeft >= -50) {
            document.getElementById("controller1").getElementsByTagName("p")[c].style.left = document.getElementById("controller1").getElementsByTagName("p")[c].offsetLeft + speed + "px";
          }
        }
        for (var d = 0; d < document.getElementById("controller2").getElementsByTagName("p").length; d++) {
          if (document.getElementById("controller2").getElementsByTagName("p")[d].offsetLeft > 50) {
            document.getElementById("controller2").getElementsByTagName("p")[d].style.left = document.getElementById("controller2").getElementsByTagName("p")[d].offsetLeft + 0 + 'px';
          }
          else if (document.getElementById("controller2").getElementsByTagName("p")[d].offsetLeft >= -50) {
            document.getElementById("controller2").getElementsByTagName("p")[d].style.left = document.getElementById("controller2").getElementsByTagName("p")[d].offsetLeft + speed + "px";
          }
        }
        for (var e = 0; e < document.getElementById("controller3").getElementsByTagName("p").length; e++) {
          if (document.getElementById("controller3").getElementsByTagName("p")[e].offsetLeft > 50) {
            document.getElementById("controller3").getElementsByTagName("p")[e].style.left = document.getElementById("controller3").getElementsByTagName("p")[e].offsetLeft + 0 + 'px';
          }
          else if (document.getElementById("controller3").getElementsByTagName("p")[e].offsetLeft >= -50) {
            document.getElementById("controller3").getElementsByTagName("p")[e].style.left = document.getElementById("controller3").getElementsByTagName("p")[e].offsetLeft + speed + "px";
          }
        }

      };

      var x = document.getElementById("controller1");
      var y = document.getElementById("controller2");
      var z = document.getElementById("controller3"); //程式碼太多想這個太麻煩不想用迴圈
      function mycss(parameter) {

        for (var v = 0; v < parameter.getElementsByTagName("p").length; v++) {
          parameter.getElementsByTagName("p")[v].style.display = "none";
          // parameter.getElementsByTagName("p")[v].style.left = (1 * v) + -50 + "%";
          //用script 改字的位置   一開始字體隱藏
        }
        parameter.getElementsByTagName("p");
      }
      //一過去字出現,移出去消失 字體隨機顏色
      function myclick(parameter1) {
        for (var x = 0; x < parameter1.getElementsByTagName("div").length; x++) {

          parameter1.getElementsByTagName("div")[x].index = x;
          parameter1.getElementsByTagName("div")[x].onmouseover = function () {
		      parameter1.getElementsByTagName("div")[this.index].style.transform="scale(1.3)";
		      parameter1.getElementsByTagName("div")[this.index].style.zIndex="1";
				
            parameter1.getElementsByTagName("p")[this.index].style.display = "block";
            switch (parseInt(Math.random() * 5.99999) + 1) {
              case 1:
                parameter1.getElementsByTagName("p")[this.index].style.color = "red";
                break;
              case 2:
                parameter1.getElementsByTagName("p")[this.index].style.color = "#8B0000";
                break;
              case 3:
                parameter1.getElementsByTagName("p")[this.index].style.color = "green";
                break;
              case 4:
                parameter1.getElementsByTagName("p")[this.index].style.color = "black";
                break;
              case 5:
                parameter1.getElementsByTagName("p")[this.index].style.color = "#483D8B";
                break;
              case 6:
                parameter1.getElementsByTagName("p")[this.index].style.color = "#FF1493";
                break;
            }
          }
        }
        for (var x = 0; x < parameter1.getElementsByTagName("div").length; x++) {
          parameter1.getElementsByTagName("div")[x].onmouseout = function () {
            // parameter1.getElementsByTagName("div")[this.index].style = "opacity: 1.0";
            parameter1.getElementsByTagName("div")[this.index].style.transform="scale(1)";
            parameter1.getElementsByTagName("p")[this.index].style.display = "none";
            parameter1.getElementsByTagName("div")[this.index].style.zIndex="auto";
            //移走時消失
          }
        }

      }
      mycss(x);
      myclick(x);
      mycss(y);
      myclick(y);
      mycss(z);
      myclick(z);
      setInterval(move, 30);
      //30毫秒刷一次圖+10px  30毫秒讓你覺得圖片真的有在移動
    }
  </script>


</head>                     


</div>
<body id="page-top">
<form action="ccar1.php" method="post"  ;>
<?php error_reporting(0);//不想看到錯誤訊息?>
<div  id="ordertest1"><?php if($_SESSION['UserName']==NULL){ ?>
  <span id="login2">歡迎您遊客:
<a  id="login1" href="login.php" >登入/註冊</a>
 <?php }else{?> 

  <a  id="login1" href="logout.php" >登出</a>
  <span id="login2">歡迎您使用者:<?=$_SESSION['UserName']?> <?php
 }?>
  
  <input class="btn btn-info" type="submit" value="購物車清單" id="car"></span> 
</form>

  <span><?=$_SESSION["result"]?></span>
  </div>
<div id="o1">
<form action="controller/loginc.php" method="post" id="form1" ;>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Clarence Taylor</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img1/logo.png" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">海賊王歷史</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#experience">尾田榮一郎介紹</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#education">周邊商品</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid p-0">
    <section class="resume-section p-3 p-lg-5  align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-3 border border-light rounded-pill "  id="s1">海賊王周邊商品買賣&nbsp;&nbsp;&nbsp;&nbsp;

          <span class="text-primary">相關介紹</span>
        </h1> <h1>海賊王周邊商品買賣&nbsp;&nbsp;&nbsp;&nbsp;</h1>

        <span class="text-primary">相關介紹</span>
        </h1>
        <div class="subheading mb-5">
          <h1></h1>海賊王相關資訊:
          <a href="https://onepiecetower.tokyo/?lang=zh-tw">https://onepiecetower.tokyo/?lang=zh-tw</a>
        </div>
        <p class="lead mb-5">《ONE PIECE》（海賊王、航海王）簡稱「OP」，是日本漫畫家尾田榮一郎作畫的少年漫畫作品。在《周刊少年Jump》1997年34號開始連載。
          描寫了擁有橡皮身體戴草帽的青年路飛，以成為「海賊王」為目標和同伴在大海展開冒險的故事

          漫畫單行本的翻譯版本在日本以外有30個以上的國家和地區出版發行。相關商品在2012年度的市場規模約達1000億日元。

          2000年3月，劇場版第1作《黃金島大冒險》上映。

          2000年7月，第1部家用遊戲《ONE PIECE ?めざせ海賊王!?》發售。

          2001年7月，第1部畫集《ONE PIECE 尾田栄一郎畫集 COLOR WALK》發售。

          2002年7月，単行本第24巻初版發行量漫畫最高紀錄初版252萬部（更新中）。

          2005年2月，単行本累計發行量史上最速1億冊突破（36巻）。

          2006年12月，《周刊少年jump》2007年4?5合併號，與鳥山明作《龍珠》的合作作品《CROSS EPOCH》刊載。

          2007年，連載十周年紀念活動。

          2009年12月，劇場版第10作《ONE PIECE FILM STRONG WORLD》公映。劇場版系列歷代最高（當時）的票房紀錄48億日元。

          2010年3月，単行本第57巻初版發行量日本出版史上最高紀錄初版300萬部（以後更新中）。

          2010年8月，《周刊少年jump》2010年39號刊載的第597話原作第1部結束，到目前為止的故事用《生存之海 超新星篇》作為副標題。4周的休刊期間後，44號（10月4日發售）新篇章《最後之海 新世界篇》開始。



          2010年11月，単行本累計發行量史上首次2億冊突破（60巻）[5]。

          2011年4月，《周刊少年Jump》2011年17號，與島袋光年作《美食的俘虜》的合作作品《開吃！惡魔果實！！》刊載。

          2012年3月，連載15周年記念，初次展覧會《尾田栄一郎監修 ONE PIECE展 ?原畫×映像×體感的海賊王》舉辦。

          2012年12月，劇場版第12作《ONE PIECE FILM Z》公映。劇場版系列歷代最高的票房紀錄68.5億日元。

          2013年11月，單行本發行量史上首次3億冊突破（72巻）。為歷史上銷售量最多的漫畫。



          <br> 原文網址：https://kknews.cc/comic/ogpl63m.html

          <br>原文網址：https://kknews.cc/comic/ogpl63m.html</p>

      </div>
    </section>

    <hr class="m-0">
    
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        
        <!-- <h2 class="mb-5">Experience</h2> -->

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">海賊王之父尾田年薪數字超驚人！</h3>
            <div class="subheading mb-3">竟遠超 Kobe Bryant</div>
            <p>
              明星藝人跟運動員的薪水一直是嚇死人的天價數字，甚至有些全球知名的名人他的年薪可能我們一輩子都賺不到這個數字，但今天日本節目透露其實還有一個職業的年薪也是我們這些市井小民一輩子也賺不到的數字，那就是漫畫家！但其實這是在特指目前日本最紅的漫畫家尾田榮一郎。
            </p>
            <img src="img1/q1.png">
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">March 2018 - Present</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Web Developer</h3>
            <div class="subheading mb-3">Intelitec Solutions</div>
            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the
              digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information
              highway will close the loop on focusing solely on the bottom line.</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">December 2017 - March 2019</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Junior Web Designer</h3>
            <div class="subheading mb-3">Shout! Media Productions</div>
            <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless
              key performance indicators offline to maximise the long tail. Keeping your eye on the ball while
              performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">July 2017 - December 2018</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
            <h3 class="mb-0">Web Design Intern</h3>
            <div class="subheading mb-3">Shout! Media Productions</div>
            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
              users after installed base benefits. Dramatically visualize customer directed convergence without
              revolutionary ROI.</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">September 2018 - June 2020</span>
          </div>
        </div>
      </div>
    </section>

    <hr class="m-0">
    <!-- data-interval="5000"  間隔5秒   data-ride="carousel" 讓他自己移動-->
    <div id="carouselExampleControls" class="carousel slide" >
      <div class="carousel-inner" id="education">
        <div class="carousel-item active">
          <section class="resume-section p-3 p-lg-5 d-flex align-items-center" >
            <div class="w-100">
              <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                  <h3 class="mb-0">商品列表&nbsp;&nbsp;&nbsp;&nbsp;Product list introduction</h3>
                  <div class="subheading mb-3">
                    <div id="controller1" class="row" id="number-area">
                      <div class="col-3 number-button">
                      <a href="controller/get.php?value=1"  >
                      <img class="img-thumbnail" src="img1/a1.png">
                      </a>
                        <p>商品名稱：海賊王 羅 武士 DXF THE GRANDLINE MEN 和之國 vol.3 

                          品牌：BANPRESTO<br> </p>
                      </div>
                      <div class="col-3 number-button">                      
                      <a href="controller/get.php?value=2" >
                      <img class="img-thumbnail" src="img1/a2.png">
                      </a>
                        <p>商品名稱：【寄賣專區】海賊王 香吉士 披風 G&B A款

                          版本：代理版</p>
                      </div>
                      <div class="col-3 number-button"> 
                      <a href="controller/get.php?value=3" >
                      <img class="img-thumbnail" src="img1/a3.png">
                      </a>
                        <p> 商品名稱：海賊王 劇場版 『ONE PIECE STAMPEDE』> DXF偉大的航道 vol.6 小丑 巴奇 
                          品牌：BANPRESTO </p>
                      </div>
                      <div class="col-3 number-button">
                      <a href="controller/get.php?value=4" >
                      <img class="img-thumbnail" src="img1/a4.png">
                      </a>
                        <p> 商品名稱：海賊王 劇場版 『ONE PIECE STAMPEDE』 DXF偉大的航道 Vol.5 死亡外科醫生 羅
                          品牌：BANPRESTO </p>
                      </div>
                      <div class="col-3 number-button">
                      <a href="controller/get.php?value=5" >
                      <img class="img-thumbnail" src="img1/a5.png">
                      </a>
                        <p> 商品名稱：海賊王-LEW 婚紗女帝HANCOCK A款白色    

                        品牌：BANPRESTO</p>
                      </div>
                      <div class="col-3 number-button">
                       <a href="controller/get.php?value=6" >
                      <img class="img-thumbnail" src="img1/a6.png">
                      </a>
                        <p> 商品名稱：海賊王 magazine FIGURE 第2彈 魯夫

                          品牌：BANPRESTO</p>
                      </div>

                      <div class="col-3 number-button">
                      <a href="controller/get.php?value=7" >
                      <img class="img-thumbnail" src="img1/a7.png">
                      </a>
                        <p>商品名稱：【07月預購】Figuarts ZERO 艾德華·紐蓋特 白鬍子海賊團船長

                          品牌：Bandai</p>
                      </div>

                      <div class="col-3 number-button"> 
                      <a href="controller/get.php?value=8" >
                      <img class="img-thumbnail" src="img1/a8.png">
                      </a>
                        <p>商品名稱：【新品預購】GK JacksDo 多佛朗明哥 七武海 德雷斯羅薩 操控德島的惡魔

                          品牌：GKJacksDo </p>
                      </div>
                      <div class="col-3 number-button"> 
                      <a href="controller/get.php?value=9" >
                      <img class="img-thumbnail" src="img1/a9.png">
                      </a>
                        <p>商品名稱：【06月預購】一番賞 海賊王 索隆  

                        品牌：BANDAI 

                        版本：海外限定版 </p>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
          </section>
        </div>
        <div class="carousel-item">
          <section class="resume-section p-3 p-lg-5 d-flex align-items-center" >
            <div class="w-100">
              <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                  <h3 class="mb-0">商品列表&nbsp;&nbsp;&nbsp;&nbsp;Product list introduction</h3>
                  <div class="subheading mb-3">
                    <div id="controller2" class="row" id="number-area">
                      <div class="col-3 number-button"> 
                      <a href="controller/get.php?value=10">
                      <img class="img-thumbnail" src="img1/a10.png">
                      </a>
                        <p>商品名稱：海賊王-20周年 Figuarts ZERO 香吉士 SANJI 

                        品牌：BANDAI Figuarts ZERO 

                        說明：代理版</p>
                      </div>
                      <div class="col-3 number-button">
                      <a href="controller/get.php?value=11" >
                      <img class="img-thumbnail" src="img1/a11.png">
                      </a>
                        <p> 商品名稱： 海賊王-Legend Studio 魯夫LUFFY 

                          品牌：Legend Studio

                          版本：代理版 

                          外盒尺寸：10*12*22.5公分</p>
                      </div>
                      <div class="col-3 number-button"> 
                      <a href="controller/get.php?value=12" >
                      <img class="img-thumbnail" src="img1/a12.png">
                      </a>
                        <p> 商品名稱：【新品預定】GK JacksDo 魯夫vs凱多 和之國 和服魯夫 百獸凱多 四皇

                          品牌：GKJacksDo 商品尺寸：長60 x 寬41 x 高65cm 約23kg </p>
                      </div>
                      <div class="col-3 number-button"> 
                      <a href="controller/get.php?value=13" >
                      <img class="img-thumbnail" src="img1/a13.png">
                      </a>
                        <p> 商品名稱：【06月預購】海賊王 尋寶之旅 VOL.4 薇薇 

                          品牌：BANPRESTO

                          版本：代理版</p>
                      </div>
                      <div class="col-3 number-button">                      
                      <a href="controller/get.php?value=14" >
                      <img class="img-thumbnail" src="img1/a14.png">
                      </a>
                        <p> 商品名稱：海賊王 騙人布 WCF 世界收藏 FIGURE vol.1 劇場版 STAMPEDE 世界蒐藏 03 代理版

                          品牌：BANPRESTO </p>
                      </div>
                      <div class="col-3 number-button"> 
                      <a href="controller/get.php?value=15" >
                      <img class="img-thumbnail" src="img1/a15.png">
                      </a>
                        <p> 商品名稱： 海賊王-G&G 夏洛特 布琳

                          品牌：BANPRESTO

                          版本：日版 B款異色 紅色圍裙

                          外盒尺寸：14*14*25cm</p>
                      </div>

                      <div class="col-3 number-button">
                      <a href="controller/get.php?value=16" >
                      <img class="img-thumbnail" src="img1/a16.png">
                      </a>
                        <p>商品名稱：【07月預購】海賊王 DXF～THE GRANDLINE MEN～和之國 vol.7 喬巴

                          品牌： BANPRESTO

                          版本：代理版</p>
                      </div>

                      <div class="col-3 number-button">
                      <a href="controller/get.php?value=17" >
                      <img class="img-thumbnail" src="img1/a17.png">
                      </a>
                        <p>商品名稱：【07月預購】海賊王 KING OF ARTIST 和之國 索隆

                          品牌： BANPRESTO

                          版本：代理版 </p>
                      </div>
                      <div class="col-3 number-button"> 
                      <a href="controller/get.php?value=18" >
                      <img class="img-thumbnail" src="img1/a18.png">
                      </a>
                        <p>商品名稱：【07月預購】海賊王 magazine 夢的一枚＃1 vol.4 卡普

                          品牌： BANPRESTO

                          版本：代理版 </p>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
          </section>
        </div>
        <div class="carousel-item">
          <section class="resume-section p-3 p-lg-5 d-flex align-items-center" >
            <div class="w-100">
              <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                  <h3 class="mb-0">商品列表&nbsp;&nbsp;&nbsp;&nbsp;Product list introduction</h3>
                  <div class="subheading mb-3">
                    <div id="controller3" class="row" id="number-area">
                      <div class="col-3 number-button">
                      <a href="controller/get.php?value=19" >
                      <img class="img-thumbnail" src="img1/a19.png">
                      </a>
                        <p>商品名稱：【07月預購】海賊王 DXF～THE GRANDLINE MEN～和之國 vol.7 布魯克

                          品牌： BANPRESTO

                          版本：代理版</p>
                      </div>
                      <div class="col-3 number-button"> 
                      <a href="controller/get.php?value=20" >
                      <img class="img-thumbnail" src="img1/a20.png">
                      </a>
                        <p> 商品名稱：【07月預購】海賊王 G&G 女帝 波雅漢考克 B款 代理版

                          品牌： BANPRESTO

                          版本：代理版</p>
                      </div>
                      <div class="col-3 number-button">
                       <a href="controller/get.php?value=21" >
                      <img class="img-thumbnail" src="img1/a21.png">
                      </a>
                        <p>商品名稱：【08月預購】VA HEROES 海賊王 薩波(再販)

                          品牌：MEGA HOUSE

                          版本：代理版</p>
                      </div>
                      <div class="col-3 number-button">
                      <a href="controller/get.php?value=22" >
                      <img class="img-thumbnail" src="img1/a22.png">
                      </a>
                        <p> 商品名稱：【08月預購】VA HEROES 海賊王 波特卡斯·D·艾斯(再販)

                          品牌：MEGA HOUSE

                          版本：代理版 </p>
                      </div>
                      <div class="col-3 number-button"> 
                      <a href="controller/get.php?value=23" >
                      <img class="img-thumbnail" src="img1/a23.png">
                      </a>
                        <p> 商品名稱：【07月預購】海賊王 SCultures BIG 造形王頂上決戦Ⅵ vol.3 海外限定版

                          品牌： BANPRESTO

                          版本：海外限定版</p>
                      </div>
                      <div class="col-3 number-button">
                      <a href="controller/get.php?value=24" >
                      <img class="img-thumbnail" src="img1/a24.png">
                      </a>
                        <p> 商品名稱：【06月預購(延期)】一番賞 海賊王 四檔大蛇人 魯夫 海外限定版

                          品牌：BANDAI

                          版本：海外限定版</p>
                      </div>

                      <div class="col-3 number-button">
                      <a href="controller/get.php?value=25" >
                      <img class="img-thumbnail" src="img1/a25.png">
                      </a>
                        <p>商品名稱：海賊王- 海賊船 飛天梅莉號 代理版 

                          品牌：BANDAI

                          說明：需自行組裝，此材積過大無法超商取貨

                          版本：代理版</p>
                      </div>

                      <div class="col-3 number-button"> 
                      <a href="controller/get.php?value=26" >
                      <img class="img-thumbnail" src="img1/a26.png">
                      </a>
                        <p>商品名稱：海賊王 匠之系譜 薩波 革命軍 ONE PIECE 一番賞海外限定

                          品牌： BANPRESTO

                          版本：海外限定版 </p>
                      </div>
                      <div class="col-3 number-button"> 
                      <a href="controller/get.php?value=27" >
                      <img class="img-thumbnail" src="img1/a27.png">
                      </a>
                        <p>商品名稱：【05月預購】海賊王 - 魯夫 劇場版 GREAT BANQUET 海外限定版 同一番賞A賞 路飛 LUFFY

                          品牌：BANDAI

                          版本：海外限定版 </p>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
          </section>
        </div>
      </div>
      <a id="left" class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>



    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <h2 class="mb-5">Skills</h2>

        <div class="subheading mb-3">Programming Languages &amp; Tools</div>
        <ul class="list-inline dev-icons">
          <li class="list-inline-item">
            <i class="fab fa-html5"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-css3-alt"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-js-square"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-angular"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-react"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-node-js"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-sass"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-less"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-wordpress"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-gulp"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-grunt"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-npm"></i>
          </li>
        </ul>

        <div class="subheading mb-3">Workflow</div>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-check"></i>
            Mobile-First, Responsive Design</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Cross Browser Testing &amp; Debugging</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Cross Functional Teams</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Agile Development &amp; Scrum</li>
        </ul>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
      <div class="w-100">
        <h2 class="mb-5">Interests</h2>
        <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier
          and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and
          kayaking.</p>
        <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows,
          I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements
          in the front-end web development world.</p>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
      <div class="w-100">
        <h2 class="mb-5">Awards &amp; Certifications</h2>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            Google Analytics Certified Developer</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            Mobile Web Specialist - Google Certification</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            1<sup>st</sup>
            Place - University of Colorado Boulder - Emerging Tech Competition 2015</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            1<sup>st</sup>
            Place - University of Colorado Boulder - Adobe Creative Jam 2017 (UI Design Category)</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            2<sup>nd</sup>
            Place - University of Colorado Boulder - Emerging Tech Competition 2018</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            1<sup>st</sup>
            Place - James Buchanan High School - Hackathon 2019</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            3<sup>rd</sup>
            Place - James Buchanan High School - Hackathon 2014</li>
        </ul>
      </div>
    </section>

  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/resume.min.js"></script>

</body>

</html>