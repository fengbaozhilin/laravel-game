<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>沙发</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://dn-phphub.qbox.me//assets/css/1e2676fd224cc66e5027-styles.css">
</head>
<body>

<div class="col-md-4 col-md-offset-4 floating-box">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">请注册</h3>
        </div>
        <div class="panel-body">


            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <input type="hidden" name="remember" value="yes">

            <div class="alert alert-warning">

                📱 使用邮箱注册

            </div>

            <div class="form-group ">
                <label class="control-label" for="username">邮箱</label>
                <span id="errorMsgUsername" style="margin-left: 10px;color: #ff0008"></span>
                <input class="form-control" name="username" id="username" type="text" value="" placeholder="请填写邮箱"
                       required>

            </div>


            <div class="form-group ">
                <label class="control-label" for="code">邮箱验证码</label>
                <span id="errorMsgCode" style="margin-left: 10px;color: #ff0008"></span>
                <div class="phone-input">
                    <input class="form-control" name="code" type="text" value="" placeholder="请填写邮箱验证码" required
                           style="width: 80%;display:inline;float: left">
                    {{--<button id="code" class="btn btn-info" type="button" style="width: 20% ;display:inline;float: right">获取验证码</button>--}}
                    <input type="button" id="code" value="免费获取验证码" class="btn btn-info" type="button"
                           style="width: 20% ;display:inline;float: right" onclick="settime(this)"/>
                </div>

            </div>


            <div class="form-group ">
                <label class="control-label" for="password">密码</label>
                <span id="errorMsgPassword" style="margin-left: 10px;color: #ff0008"></span>
                {{--<span id="errorMsg" style="margin-left: 10px;color: #ff0008"></span>--}}
                <input class="form-control" name="password" id="password" type="password" value=""
                       placeholder="请输入不小于5位数的密码" required>

            </div>

            {{--<div class="form-group ">--}}
            {{--<label for="captcha" class="control-label">图片验证码</label>--}}

            {{--<div class="captcha-input">--}}
            {{--<input id="captcha" class="form-control" name="captcha" placeholder="请填写验证码" required><br>--}}
            {{--<img class="thumbnail captcha" src="{{url('captcha_code')}}" onclick="this.src='captcha_code?'+Math.random();" title="点击图片重新获取验证码">--}}
            {{--<p  style="color: #5bc0de;font-size: 1.2em">点击图片刷新验证码</p>--}}

            {{--</div>--}}
            {{--</div>--}}


            <button type="submit" class="btn btn-lg btn-success btn-block" style="margin-top: 15px;display:inline"
                    onclick="checkForm()">
                <i class="fa fa-btn fa-sign-in"></i> 注册
            </button>


        </div>
    </div>
</div>
<script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
<script>
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    //发送邮件
    $("#code").click(function () {
        var username = $('[name=username]').val();
        var reg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
        if (!reg.test(username)) {
            errorMsgUsername.innerHTML = "请输入正确的邮箱！";

        } else {
            $.ajax({
                type: 'post',
                url: '{{url('mail/send')}}',
                dataType: 'json',
                data: {
                    username: username
                },
                success: function (res) {
                    if (res.code == 200) {
                    }else if(res.code == 120){
                        alert('请一分钟后再试');
                    }
                    else {
                        alert('发送失败请重试');
                        window.history.go(-1);
                    }
                }
            });
        }
    });
    //60s倒计时
    var countdown = 60;
    $("#code").attr("disabled", false);

    function settime(val) {

        var username = $('[name=username]').val();
        if (countdown == 0) {
            val.removeAttribute("disabled");
            val.value = "免费获取验证码";
            countdown = 60;
        } else {
            val.setAttribute("disabled", true);
            val.value = "重新发送(" + countdown + ")";
            countdown--;
            setTimeout(function () {
                settime(val)
            }, 1000)
        }
    }


    function checkForm() {
        var username = $('[name=username]').val();
        var password = $('[name=password]').val();
        var code = $('[name=code]').val();
        var errorMsgUsername = document.getElementById("errorMsgUsername");
        var errorMsgPassword = document.getElementById("errorMsgPassword");
        var errorMsgCode = document.getElementById("errorMsgCode");
        var reg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;

        if (!reg.test(username)) {
            errorMsgUsername.innerHTML = "请输入正确的邮箱！";
            return false;
        } else if (password.length < 5) {
            errorMsgPassword.innerHTML = "请输入不小于5位数的密码!";
            return false;
        }
        else {

            $.ajax({
                type: 'post',
                url: '{{url('username_check')}}',
                dataType: 'json',
                async: false,
                data: {
                    username: username,
                    password: password,
                    code: code
                },
                success: function (res) {
                    if (res.code == 100) {
                        //显示span
                        errorMsgUsername.innerHTML = "该邮箱已被注册！";
                        errorMsgUsername.style.visibility = "visible";
                        return false;
                    } else if (res.code == 120) {
                        errorMsgCode.innerHTML = "验证码错误！";
                        errorMsgCode.style.visibility = "visible";
                        return false;
                    }
                    else if (res.code == 150) {
                        alert('错误，请刷新重试');window.history.go(-1);
                        return false;
                    }
                    else {
                        //隐藏span
                        errorMsgUsername.style.visibility = "hidden";
                        errorMsgCode.style.visibility = "hidden";
                        alert('666');

                    }
                }

            });
        }

    }
</script>
</body>
</html>