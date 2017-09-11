/**
 * Created by Administrator on 2017/3/26.
 */
function music() {
   document.getElementById("music-panel").style.backgroundColor="white";
    document.getElementById("music-play").style.backgroundImage="url('./image/music2 (1).png')";
    document.getElementById("music-dynamic").style.backgroundImage="url('./image/music2 (2).png')";
    document.getElementById("music-tisi").style.display="block";
}
function musicout() {
    document.getElementById("music-panel").style.backgroundColor="#cc8f14";
    document.getElementById("music-play").style.backgroundImage="url('./image/music (2).png')";
    document.getElementById("music-dynamic").style.backgroundImage="url('./image/music (1).png')";
    document.getElementById("music-tisi").style.display="none";
}
function showzhuye1() {
    document.getElementById("showzhuye1").style.display="block";
    document.getElementById("li1").style.backgroundColor="white";
    document.getElementById("li1-1").style.color="black";
    document.getElementById("li1-1-1").src="./image/logo7.png";
}
function noshowzhuye1() {
    document.getElementById("showzhuye1").style.display="none";
    document.getElementById("li1").style.backgroundColor="#cc8f14";
    document.getElementById("li1-1").style.color="white";
    document.getElementById("li1-1-1").src="./image/logo4.png";
}
function showzhuye2() {
    document.getElementById("showzhuye2").style.display="block";
    document.getElementById("li2").style.backgroundColor="white";
    document.getElementById("li2-1").style.color="black";
    document.getElementById("li2-1-1").src="./image/logo8.png";

}
function noshowzhuye2() {
    document.getElementById("showzhuye2").style.display="none";
    document.getElementById("li2").style.backgroundColor="#cc8f14";
    document.getElementById("li2-1").style.color="white";
    document.getElementById("li2-1-1").src="./image/logo5.png";
}
function showzhuye3() {
    document.getElementById("showzhuye3").style.display="block";
    document.getElementById("li3").style.backgroundColor="white";
    document.getElementById("li3-1").style.color="black";
    document.getElementById("li3-1-1").src="./image/logo10.png";

}
function noshowzhuye3() {
    document.getElementById("showzhuye3").style.display="none";
    document.getElementById("li3").style.backgroundColor="#cc8f14";
    document.getElementById("li3-1").style.color="white";
    document.getElementById("li3-1-1").src="./image/logo6.png";
}
function showzhuye4() {
    document.getElementById("showzhuye4").style.display="block";
    document.getElementById("li4").style.backgroundColor="white";
    document.getElementById("li4-1").style.color="black";
    document.getElementById("li4-1-1").src="./image/logo9.png";

}
function noshowzhuye4() {
    document.getElementById("showzhuye4").style.display="none";
    document.getElementById("li4").style.backgroundColor="#cc8f14";
    document.getElementById("li4-1").style.color="white";
    document.getElementById("li4-1-1").src="./image/logo3.png";
}
function showedit() {
 document.getElementById("yincang").style.display="block";
}
function noshowedit() {
    document.getElementById("yincang").style.display="none";
}
function noshowitem() {
    document.getElementById("show-item").style.display="none";
}
function showtextimg() {
    document.getElementById("text-poster-img").style.display="block";
}
function showtextlianjie() {
    document.getElementById("text-poster-lianjie").style.display="block";
}
function showtextqutu() {
    document.getElementById("text-poster-qutu").style.display="block";
}
function noshowtextimg() {
    document.getElementById("text-poster-img").style.display="none";
}
function noshowtextlianjie() {
    document.getElementById("text-poster-lianjie").style.display="none";
}
function noshowtextqutu() {
    document.getElementById("text-poster-qutu").style.display="none";
}
function showfabiao() {
    if(document.getElementById("fabiao").style.display!="block")
    {
        document.getElementById("fabiao").style.display="block";
    }
    else
    {
        document.getElementById("fabiao").style.display="none";
    }
}

function showfabiaobig(id) {
    if(document.getElementById('fabiao-input'+id.replace(/[^0-9]/ig,"")).style.height!=="50px")
    {
        document.getElementById('fabiao-input'+id.replace(/[^0-9]/ig,"")).style.height="50px";
        showfabiaotype('fabiao'+id.replace(/[^0-9]/ig,""));
    }
    else {
        document.getElementById('fabiao-input'+id.replace(/[^0-9]/ig,"")).style.height="20px";
        showfabiaotype('fabiao'+id.replace(/[^0-9]/ig,""));
    }
}
function showfabiaotype(id) {
    if(document.getElementById(id).style.display!=="block")
    {
        document.getElementById(id).style.display="block";
    }
    else {
        document.getElementById(id).style.display="none";
    }
}
function showfabiaobig1() {
    if(document.getElementById("fabiao-input").style.height!=="50px")
    {
        document.getElementById("fabiao-input").style.height="50px";
        document.getElementById("fabiaos").style.display="block";
    }
    else {
        document.getElementById("fabiao-input").style.height="20px";
        document.getElementById("fabiaos").style.display="none";
    }
}
function startTime() {
    var times = ["日", "一", "二", "三", "四", "五", "六"];
    var time = new Date();
    var year = time.getFullYear();
    var month = time.getMonth() + 1;
    var day = time.getUTCDate();
    var days = time.getDay();
    var h = time.getHours();
    var m = time.getMinutes();
    var s = time.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    month = checkTime(month);
    day = checkTime(day);
    document.getElementById("hours-day").innerHTML = "周" + times[days] + "<br>" + month + "." + day;
    document.getElementById("hours-year").innerHTML=year+"年"+month+"月"+"<br>"+h + "." +m + "." +s;
    t = setTimeout(function () {
        startTime()
    }, 1000);
    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }
}
function showerweima() {
    document.getElementById("qq-tp-1-1").style.display="block";
}
function hideerweima() {
    document.getElementById("qq-tp-1-1").style.display="none";
}
function dengluPassWords(){

    var username =document.getElementById("username");
    var pwd = document.getElementById("pwd");
     if(username.value==""&&pwd.value !=="")
    {
        document.getElementById("hidetishi").innerHTML="请输入账号";
    }
    else if(username.value!==""&&pwd.value =="")
    {
        document.getElementById("hidetishi").innerHTML="请输入密码";
    }
     else if(username.value==""&&pwd.value =="")
     {
         document.getElementById("hidetishi").innerHTML="";
     }
    // {
    //     if(username.value!=="admin")
    //     {
    //         document.getElementById("hidetishi").innerHTML="账号错误！！！";
    //     }else{
    //         if(pwd.value !==)
    //         {
    //             document.getElementById("hidetishi").innerHTML="密码错误！！！";
    //         }else{
    //             window.open('zhuye1.html','_self');
    //         }
    //     }
    // }
}
function showlogin() {
    document.getElementById("logon").style.display="block";
    document.getElementById("erweima").style.display="none";
}
function LoadXmlDoc() {
    // var xmlhttp;
    // if(window.XMLHttpRequest){
    //     xmlhttp = new XMLHttpRequest();
    // }
    // else{
    //     xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    // }
    // xmlhttp.onreadystatechange =function () {
    //       if(xmlhttp.readyState==4 && xmlhttp.status==200)
    //       {
    //           document.getElementById("page-content").innerHTML=xmlhttp.responseText;
    //       }
    // }
    // xmlhttp.open("post","/fangqq/contentzhuye.php",true);
    // xmlhttp.send();
    $(document).ready(function(){
        $("#page-content").load("/fangqq/contentzhuye.php");
        });
}



