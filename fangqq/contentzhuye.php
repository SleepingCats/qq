<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css"  rel="stylesheet" href="start.css">
    <link type="text/css" rel="stylesheet" href="content.css">
    <script type="text/javascript" src="zhuye1.js"></script>
    <script type="text/javascript" src="jquery-1.11.3.js"></script>
</head>
<body>
<?php
    echo " <div class=\"page-content\" id=\"contentzhuye\">
            <div class=\"leftzhuye\">
                <div class=\"leftzhue-1\">
                <div class=\"leftzhue-1-1\" ><a href=\"\">703<br><span>照片</span></a></div>
                <div class=\"leftzhue-1-1\"><a href=\"\">377<br><span>说说</span></a></div>
                <div class=\"leftzhue-1-1\" style=\"border: none;\"><a href=\"\">2<br><span>日志</span></a></div>
                </div>
                <div class=\"leftzhue-2\">
                    <div class=\"leftzhue-2-name\"><h3 ><a href=\"\">个人档</a></h3></div>
                    <div class=\"leftzhue-2-passage\"><h4>从你的全世界路过</h4></div>
                    <div class=\"leftzhue-2-passage\"> <h4><span>20岁</span>&nbsp;<span>摩羯座</span>&nbsp;<span>现居宜宾</span></h4></div>
                </div>
                <div class=\"leftzhue-2\">
                    <div class=\"leftzhue-2-name\"><h3 ><a href=\"\">最近访客</a></h3></div>
                    <div class=\"leftzhue-2-passage\"><h4><a href=\"\">帅气的男孩</a></h4>
                        <h4><a href=\"\">帅气的男孩</a></h4></div>
                  </div>
            </div>
            <div class=\"rightzhuye\">
                <div class=\"right-zhuye1\"></div>
                <script>
                    for(i=1;i<5;i++)
                    {
                        $(\".right-zhuye1\").after(\"<div class='friends-life'>\" +
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
        </div>";
    ?>
</body>
</html>