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
<body onload="startTime()">
<?php
echo "     <div class=\"page-content\" id='page-content'>
               <div class=\"left-menu\">
                   <div class=\"left-menu1\">
                       <ul class=\"left-menu1-1\">
                           <li style=\"background-color:#f5efd5;\"><a style=\"color:black;\" href=\"javascript:;\"><img src=\"image/left-menu1-1.png\">好友动态</a></li>
                           <li><a href=\"javascript:;\"><img src=\"image/left-menu1-2.png\">特别关心</a></li>
                           <li><a href=\"javascript:;\"><img src=\"image/left-menu1-3.png\">与我相关</a></li>
                           <li><a href=\"javascript:;\"><img src=\"image/left-menu1-4.png\">那年今日</a></li>
                           <li><a href=\"javascript:;\"><img src=\"image/left-menu1-5.png\">游戏应用</a></li>
                           <li><a href=\"javascript:;\"><img src=\"image/left-menu1-6.png\">我的收藏</a></li>
                       </ul>
                   </div>
                   <div class=\"left-menu1\">
                       <ul class=\"left-menu1-1\">
                           <li><a style=\"color:black;\" href=\"javascript:;\"><img src=\"image/left-menu1-1.png\">cf带你搞事情</a></li>
                           <li><a href=\"javascript:;\"><img src=\"image/left-menu1-2.png\">游戏应用中心</a></li>
                           <li><a href=\"javascript:;\"><img src=\"image/left-menu1-3.png\">蛇蛇争霸</a></li>
                           <li><a href=\"javascript:;\"><img src=\"image/left-menu1-4.png\">猎鱼达人3d</a></li>
                           <li><a href=\"javascript:;\" style=\"color: #cc8f14\">我的全部游戏应用》》</a></li>
                           <li ><a href=\"javascript:;\">--------热门游戏--------</a></li>
                           <li><a href=\"javascript:;\"><img src=\"image/left-menu1-3.png\">蛇蛇争霸</a></li>
                           <li><a href=\"javascript:;\"><img src=\"image/left-menu1-4.png\">猎鱼达人3d</a></li>
                           <li><a href=\"javascript:;\"><img src=\"image/left-menu1-3.png\">蛇蛇争霸</a></li>
                           <li><a href=\"javascript:;\"><img src=\"image/left-menu1-4.png\">猎鱼达人3d</a></li>
                           <li><a href=\"javascript:;\"><img src=\"image/left-menu1-3.png\">蛇蛇争霸</a></li>
                           <li><a href=\"javascript:;\"><img src=\"image/left-menu1-4.png\">猎鱼达人3d</a></li>
                       </ul>
                   </div>
               </div>
               <div class=\"main-content\" onmouseout=\"noshowtextimg();noshowtextlianjie();noshowtextqutu()\">
                   <div class=\"main-content-input\" >
                       <textarea   class=\"text-input\" name=\"name2\" rows =\"3\" cols=\"60\" placeholder=\"说点儿什么吧\" onclick=\"showfabiao()\" onmouseover=\"noshowtextimg();noshowtextlianjie();noshowtextqutu()\"></textarea>
                       <div class=\"text-poster\">
                           <div onmouseover=\"showtextimg();noshowtextlianjie();noshowtextqutu()\"><a href=\"\"><img src=\"image/textimg1.png\"></a></div>
                           <div onmouseover=\"showtextlianjie();noshowtextimg();noshowtextqutu()\" style=\"margin-left: -5px\"><a href=\"\"><img src=\"image/textimg2.png\"></a></div>
                           <div onmouseover=\"showtextqutu();noshowtextimg();noshowtextlianjie()\" style=\"margin-left: -5px\"><a href=\"\"><img src=\"image/textimg3.png\"></a></div>
                       </div>
                       <div  class=\"text-submit\" id=\"fabiao\" style=\" display: none;\">
                           <input   class=\"fabiao\" type=\"submit\" value=\"发表\">
                       </div>
                   </div>
                   <div onmouseover=\"showtextimg()\" onmouseout=\"noshowtextimg();\" id=\"text-poster-img\" class=\"text-poster-img\" >
                       <div>
                       <a><img style=\"width: 50px;height: 40px\" src=\"image/zhuye1.png\"></a><br>
                       <a class=\"line-text\" style=\"margin-top: -3px;color: #403e39\"><b>本地</b></a>
                   </div>
                       <div>
                           <a><img style=\"width: 50px;height: 40px\" src=\"image/zhuye1.png\"></a><br>
                           <a class=\"line-text\" style=\"margin-top: -3px;color: #403e39\"><b>相册</b></a>
                       </div>
                       <div>
                           <a><img style=\"width: 50px;height: 40px\" src=\"image/zhuye1.png\"></a><br>
                           <a class=\"line-text\" style=\"margin-top: -3px;color: #403e39\"><b>截屏</b></a>
                       </div>
                       <div>
                           <a><img style=\"width: 50px;height: 40px\" src=\"image/zhuye1.png\"></a><br>
                           <a class=\"line-text\" style=\"margin-top: -3px;color: #403e39\"><b>拼图</b></a>
                       </div>
                   </div>
                   <div onmouseover=\"showtextlianjie()\" onmouseout=\"noshowtextlianjie()\" id=\"text-poster-lianjie\" class=\"text-poster-img\" style=\"width: 105px;\">
                       <div>
                           <a><img style=\"width: 50px;height: 40px\" src=\"image/zhuye1.png\"></a><br>
                           <a class=\"line-text\" style=\"margin-top: -3px;color: #403e39\"><b>音乐</b></a>
                       </div>
                       <div>
                           <a><img style=\"width: 50px;height: 40px\" src=\"image/zhuye1.png\"></a><br>
                           <a class=\"line-text\" style=\"margin-top: -3px;color: #403e39\"><b>视频</b></a>
                       </div>
                   </div>
                   <div onmouseover=\"showtextqutu()\" onmouseout=\"noshowtextqutu()\" id=\"text-poster-qutu\" class=\"text-poster-img\" >
                   <div>
                       <a><img style=\"width: 50px;height: 40px\" src=\"image/zhuye1.png\"></a><br>
                       <a class=\"line-text\" style=\"margin-top: -3px;color: #403e39\"><b>趣图</b></a>
                   </div>
                   <div>
                       <a><img style=\"width: 50px;height: 40px\" src=\"image/zhuye1.png\"></a><br>
                       <a class=\"line-text\" style=\"margin-top: -3px;color: #403e39\"><b>表情</b></a>
                   </div>
                   <div>
                       <a><img style=\"width: 50px;height: 40px\" src=\"image/zhuye1.png\"></a><br>
                       <a class=\"line-text\" style=\"margin-top: -3px;color: #403e39\"><b>气泡</b></a>
                   </div>
                   <div>
                       <a><img style=\"width: 50px;height: 40px\" src=\"image/zhuye1.png\"></a><br>
                       <a class=\"line-text\" style=\"margin-top: -3px;color: #403e39\"><b>闪图</b></a>
                   </div>
               </div>
                     <div class=\"main-content-update\" ></div>
                     <div class=\"feed-friends\">
                         <div class=\"feed-control\">
                             <div class=\"feed-control-1\"><a href=\"javascript:;\"><b>全部动态</b></a></div>
                             <a href=\"javascript:;\"><img style=\" float:right;margin-right: 5px; height: 30px;\" src=\"image/feedcontrol2.png\"></a>
                             <a href=\"javascript:;\"><img style=\"float: right;margin-right: 10px; height: 30px\" src=\"image/feedcontrol1.png\"></a>
                         </div>
                         <div class=\"friends-life\" >
                             <div class=\"friends-life-img\"></div>
                             <div class=\"friends-life-name\">哈哈</div>
                             <div class=\"friends-life-time\"  >19;80</div>
                             <div class=\"friends-life-liuyan\">我草</div>
                             <div class=\"friends-life-content\">asdada</div>
                             <div class=\"friends-life-detail\" >
                                 <a class=\"friends-life-detail-1\">浏览:123次</a>
                                 <a><img  src=\"image/friends%20(3).png\"></a>
                                 <a onclick=\"showfabiaobig1()\"><img  src=\"image/friends%20(2).png\"></a>
                                 <a><img style=\"margin-top: 2px;\" src=\"image/friends%20(1).png\"></a>
                             </div>
                             <div class=\"friends-life-like\"><a href=\"\">123</a> 共<a>12</a>人觉得很赞</div>
                             <div class=\"friends-life-content-list\">
                                 <div  style=\"display: inline-block;\">人才</div>
                                 <div style=\"display: inline-block; color: black\">：你这个傻逼</div>
                             </div>
                             <textarea  id=\"fabiao-input\" style=\"margin-left: 20px;background-color: white\"  class=\"text-input\" name=\"name2\" rows =\"1\" cols=\"77\" placeholder=\"评论\" onclick=\"showfabiaobig1()\" onmouseover=\"noshowtextimg();noshowtextlianjie();noshowtextqutu()\"></textarea>
                             <div  id=\"fabiaos\" style=\"background-color: #fffcf4; \" class=\"text-submit\">
                                 <input  class=\"fabiao\" type=\"submit\" value=\"发表\">
                             </div>
                         </div>
                         <script>
                             for(i=1;i<5;i++)
                             {
                                 $(\".feed-control\").after(\"<div class='friends-life'>\" +
                                         \"<div class='friends-life-img'></div>\" +
                                 \"<div class='friends-life-name'>哈哈</div>\" +
                                         \" <div class='friends-life-time' >19;80</div>\" +
                                         \" <div class='friends-life-liuyan'>我草</div>\" +
                                         \" <div class='friends-life-content'>asdada</div>\" +
                                         \" <div class='friends-life-detail' > \" +
                                         \"<a class='friends-life-detail-1'>浏览:123次</a> \" +
                                         \"<a><img  src='image/friends%20(3).png'></a> \" +
                                         \"<a id=\"+'friend=life-detail-img' + i + \" onclick='showfabiaobig(id)'><img  src='image/friends%20(2).png'></a> \" +
                                         \"<a><img style='margin-top: 2px;'' src='image/friends%20(1).png'></a> </div> \" +
                                         \"<div class='friends-life-like'><a href=''>123</a> 共<a>12</a>人觉得很赞</div> \" +
                                         \"<div class='friends-life-content-list'> \" +
                                         \"<div  style='display: inline-block;'>人才</div> \" +
                                         \"<div style='display: inline-block; color: black'>：你这个傻逼</div> \" +
                                          \"</div> \" +
                                         \"<textarea  id=\"+'fabiao-input' + i + \"  style='margin-left: 20px;background-color: white' class='text-input'  rows ='1' cols='77' placeholder='评论' onclick='showfabiaobig(id)'  onmouseover='noshowtextimg();noshowtextlianjie();noshowtextqutu() '></textarea> \" +
                                         \"<div id=\"+'fabiao' + i + \" style='background-color: #fffcf4; ' class='text-submit'> \" +
                                          \"<input  class='fabiao' type='submit' value='发表'> \" +
                                         \"</div>\" +
                                     \"</div>\")

                             }
                         </script>

                     </div>
               </div>
               <div class=\"right-menu\">
                   <div id=\"hours\" class=\"ck-time\">
                       <div id=\"hours-day\" class=\"ck-time-day\"></div>
                       <div id=\"hours-year\" class=\"ck-time-year\"></div>
                   </div>
                   <div class=\"gtdads\">
                       <a href=\"\"><img style=\"height: 94px;width: 194px;margin-top: 3px\" src=\"image/gtddads1.jpg\"></a>
                   </div>
                   <div class=\"container\">
                      <h6 style=\"margin-left: 5px;margin-top: 10px\">大家都在看</h6>
                       <div class=\"container-xingqu\">
                           <ul>
                               <li>
                                   <a  href=\"\"><img style=\"width: 70px; height: 50px\" src=\"image/zhuye2.jpg\"></a>
                                   <div class=\"container-xingqu-zi\"><a href=\"\">四月木槿，花开烂漫.</a></div>
                                   <a class=\"container-xingqu-zikan\" href=\"\">去看看</a>
                               </li>
                               <li>
                                   <a  href=\"\"><img style=\"width: 70px; height: 50px\" src=\"image/zhuye2.jpg\"></a>
                                   <div class=\"container-xingqu-zi\"><a href=\"\">四月木槿，花开烂漫.</a></div>
                                   <a class=\"container-xingqu-zikan\" href=\"\">去看看</a>
                               </li>
                               <li>
                                   <a  href=\"\"><img style=\"width: 70px; height: 50px\" src=\"image/zhuye2.jpg\"></a>
                                   <div class=\"container-xingqu-zi\"><a href=\"\">四月木槿，花开烂漫.</a></div>
                                   <a class=\"container-xingqu-zikan\" href=\"\">去看看</a>
                               </li>
                           </ul>
                       </div>
                   </div>
                   <div class=\"container\">
                       <h6 style=\"margin-left: 5px;margin-top: 10px\">礼物</h6>
                       <div class=\"container-xingqu\">
                           <ul>
                               <li>
                                   <a  href=\"\"><img style=\"width: 70px; height: 50px\" src=\"image/zhuye2.jpg\"></a>
                                   <div  class=\"container-xingqu-zi\"><a style=\"margin-top: -40px\" href=\"\">帅气的男孩</a>
                                       <span style=\" position:absolute;margin-top: -20px;color: silver\">近期看过我</span></div>
                                   <a class=\"container-xingqu-zikan\" href=\"\">感谢他</a>
                               </li>
                               <li>
                                   <a  href=\"\"><img style=\"width: 70px; height: 50px\" src=\"image/zhuye2.jpg\"></a>
                                   <div  class=\"container-xingqu-zi\"><a style=\"margin-top: -40px\" href=\"\">帅气的男孩</a>
                                       <span style=\" position:absolute;margin-top: -20px;color: silver\">近期看过我</span></div>
                                   <a class=\"container-xingqu-zikan\" href=\"\">感谢他</a>
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>";
?>
</body>
</html>
