<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>qq空间</title>
    <link type="text/css"  rel="stylesheet" href="start.css">
    <link type="text/css" rel="stylesheet" href="content.css">
    <script type="text/javascript" src="zhuye1.js"></script>
    <script type="text/javascript" src="jquery-1.11.3.js"></script>
</head>
<body>
<?php
echo "<form id=\"from1\" method=\"post\">";
echo "<div class=\"start\">
        <a href=\"zhuye1.html\"> <img class=\"logo\"  src=\"./image/logo1.png\" ></a>
      <ul class=\"start1\">
            <li style=\"background-color: #e09600;\" onmouseover=\"noshowzhuye1();noshowzhuye2();noshowzhuye3();noshowzhuye4()\">

               <img src=\"image/logo2.png\"><a href=\"#\" style=\"text-decoration: none;\">个人中心</a>
            </li>
            <li id=\"li1\" onmouseover=\"showzhuye1();noshowzhuye2();noshowzhuye3();noshowzhuye4();\" >
                <img id=\"li1-1-1\" src=\"image/logo4.png\"><a href=\"\" style=\"text-decoration: none;\"  id=\"li1-1\">我的主页</a>
            </li>

            <li id=\"li2\" onmouseover=\" showzhuye2();noshowzhuye1();noshowzhuye3();noshowzhuye1()\">
                <img id=\"li2-1-1\" src=\"image/logo5.png\"><a href=\"\" style=\"text-decoration: none;\"  id=\"li2-1\">好友</a> </li>
            <li id=\"li3\" onmouseover=\"showzhuye3();noshowzhuye2();noshowzhuye4();noshowzhuye1()\" >
                <img id=\"li3-1-1\" src=\"image/logo6.png\"><a href=\"\" style=\"text-decoration: none;\"  id=\"li3-1\"> 游戏</a></li>
            <li id=\"li4\" onmouseover=\"showzhuye4();noshowzhuye3();noshowzhuye1();noshowzhuye2()\">
                <img id=\"li4-1-1\" src=\"image/logo3.png\"> <a href=\"\" style=\"text-decoration: none;\"  id=\"li4-1\">装扮</a></li>
          <li>
              <div id=\"music-panel\" class=\"music-panel\" onmouseover=\"music();noshowzhuye4()\" onmouseout=\"musicout()\">
              <b  id=\"music-play\" class=\"music-play\"></b>
              <b id=\"music-dynamic\" class=\"music-dynamic\"></b>
              <b id=\"music-tisi\" class=\"music-tisi\">点击设置背景音乐</b>
          </div></li>
          <li>
              <div class=\"search-box\" >
              <input class=\"search-input\" type=\"text\" placeholder=\"用户/游戏/动态\">
              <a href=\"javascript:;\" class=\"search-button\" style=\"display: block;margin-top: 5px;\"><img style=\" height: 21px;\" src=\"image/search.png\"></a></div>
          </li>
          <li>
              <div class=\"user-info\">
              <div class=\"shezhi\" ><img style=\"height: 31px; \" src=\"image/shezhi.png\"></div>
              <a  class=\"user-info3\" href=\"http://pay.qq.com/ipay/index.shtml?c=xxjzgw,xxjzghh&amp;ch=self&amp;aid=zone.tbarshuang\"><img src=\"image/zhuanshi.png\"></a>
          </div></li>

        </ul>
        <a class=\"ts\" href=\"http://user.qzone.qq.com/troubleshooter\"></a>

       <div onmouseover=\"showzhuye1()\" onmouseout=\"noshowzhuye1()\" id=\"showzhuye1\" class=\"showzhuye1\" style=\"display: none;\">
           <div class=\"zhuye1-1\">
               <a><img class=\"zhuye1-1-1\" src=\"image/zhuye1.png\"></a><br>
               <a class=\"line-text\"><b>主页</b></a>
           </div>
           <div  class=\"line1\"></div>
           <script>
               for ( var i=0;i<9;i++){

                   $(\".line1\").after(\"<div class='zhuye1-1'> <a><img class='zhuye1-1-1' src='image/zhuye2.jpg'></a><br> <a class='line-text'>主页</a> </div>\")
               }
           </script>

       </div>
        <div onmouseover=\"showzhuye2()\" onmouseout=\"noshowzhuye2()\" id=\"showzhuye2\" class=\"showzhuye2\" style=\"display: none;\">
            <div class=\"zhuye1-1\">
                <a><img class=\"zhuye1-1-1\" src=\"image/zhuye1.png\"></a><br>
                <a class=\"line-text\" style=\"margin-left: -10px;\"><b>寻找好友</b></a><br>
                <a ><img style=\"margin-top: 20px;\" class=\"zhuye1-1-1\" src=\"image/zhuye1.png\"></a><br>
                <a class=\"line-text\" style=\"margin-left: -10px;\"><b>亲密度</b></a>
            </div>
            <div  class=\"line2\" ></div>
            <script>
                for ( var i=0;i<8;i++){

                    $(\".line2\").after(\"<div class='zhuye1-1'> <a><img class='zhuye1-1-1' src='image/zhuye2.jpg'></a><br> <a class='line-text'>好友</a> </div>\")
                }
            </script>
        </div>
        <div onmouseover=\"showzhuye3()\" onmouseout=\"noshowzhuye3()\" id=\"showzhuye3\" class=\"showzhuye3\" style=\"display: none;\">
            <div class=\"zhuye1-1\">
                <a><img class=\"zhuye1-1-1\" src=\"image/zhuye1.png\"></a><br>
                <a class=\"line-text\" style=\"margin-left: -10px;\"><b>游戏商城</b></a><br>
                <a ><img style=\"margin-top: 20px;\" class=\"zhuye1-1-1\" src=\"image/zhuye1.png\"></a><br>
                <a class=\"line-text\" style=\"margin-left: -10px;\"><b>找游戏</b></a>
            </div>
            <div  class=\"line3\" ></div>
            <script>
                for ( var i=0;i<8;i++){

                    $(\".line3\").after(\"<div class='zhuye1-1'> <a><img class='zhuye1-1-1' src='image/zhuye2.jpg'></a><br> <a class='line-text'>游戏</a> </div>\")
                }
            </script>
        </div>
        <div onmouseover=\"showzhuye4()\" onmouseout=\"noshowzhuye4()\" id=\"showzhuye4\" class=\"showzhuye4\" style=\"display: none;\">
            <div class=\"zhuye1-1\">
                <a><img class=\"zhuye1-1-1\" src=\"image/zhuye1.png\"></a><br>
                <a class=\"line-text\" style=\"margin-left: -10px;\"><b>一键装扮</b></a><br>
                <a ><img style=\"margin-top: 20px;\" class=\"zhuye1-1-1\" src=\"image/zhuye1.png\"></a><br>
                <a class=\"line-text\" style=\"margin-left: -10px;\"><b>装扮商城</b></a>
            </div>
            <div  class=\"line4\" ></div>
            <script>
                for ( var i=0;i<4;i++){

                    $(\".line4\").after(\"<div class='zhuye1-1'> <a><img class='zhuye1-1-1' style='width: 100px;height: 100px;' src='image/zhuye2.jpg'></a></div>\")
                }
            </script>
        </div>
        </div>";
echo "    <div id='content' class=\"content\" onmouseover=\"noshowzhuye1();noshowzhuye4();noshowzhuye2();noshowzhuye3();\">";
include "head-content.php";
include "huitop.php";
include "page-content.php";
echo "</div>";
echo "</form>";
?>
</body>
</html>
