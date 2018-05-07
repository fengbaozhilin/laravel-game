@include('header')

<head>

    <meta charset="UTF-8">

    <title>CSS3实现自定义聊天窗口</title>

    <link rel="stylesheet" href="{{asset('css/chat.css')}}" media="screen" type="text/css" />

</head>

<body>

<div id="convo" data-from="Sonu Joshi">
    <ul class="chat-thread" id="msg">
        <img class="avatar-topnav" alt="" src="{{asset('images/3.png')}}"> <li>欢迎大家来到此聊天室,大家一起来聊骚吧</li>

    </ul>
    <div style="margin-left: 30%"><textarea id="data" style="width: 600px;margin-top: 35px"></textarea>
        <a style="margin-bottom: 40px;height: 46px;    font-size: 20px;"  id='send' class="btn btn-default login-btn no-pjax"><i class="fa fa-user"></i>发送</a>
    </div>

</div>








</body>
<script>

    name = '{{$user->nickname}}';

    var socket = new WebSocket('ws://127.0.0.1:5656');
    socket.onopen = function(event) {
//        alert('连接成功');
    };

    socket.onmessage = function(event) {
        var content = event.data;

        var divA = document.getElementById("msg");
        divA.innerHTML=divA.innerHTML+content ;

    };
    var send = document.getElementById('send');
    send.addEventListener('click', function() {

        var content =' <img class="avatar-topnav" alt="" src="{{asset($user->avatar)}}">'+
            '<li>'+name+':  '+ document.getElementById("data").value +'</li>';

        socket.send(content);


    });
</script>
<script>
    function KeyDown()
    {
        if (event.keyCode == 13)
        {

        }
    }
</script>

