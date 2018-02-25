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

            <form method="POST" action="{{url('register_check')}}" accept-charset="UTF-8">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <input type="hidden" name="remember" value="yes">

                <div class="alert alert-warning">

                    📱 使用邮箱注册

                </div>

                <div class="form-group ">
                    <label class="control-label" for="username">邮箱</label>
                    <input class="form-control" name="username" id="username" type="text" value="" placeholder="请填写邮箱" required>

                </div>

                <div class="form-group ">
                    <label for="captcha" class="control-label">图片验证码</label>

                    <div class="captcha-input">
                        <input id="captcha" class="form-control" name="captcha" placeholder="请填写验证码" required><br>
                        <img class="thumbnail captcha" src="{{url('captcha_code')}}" onclick="this.src='captcha_code?'+Math.random();" title="点击图片重新获取验证码">
                        <p  style="color: #5bc0de;font-size: 1.2em">点击图片刷新验证码</p>

                    </div>
                </div>

                <div class="form-group ">
                    <label class="control-label" for="code">邮箱验证码</label>
                    <div class="phone-input">
                        <input class="form-control" name="code" type="text" value="" placeholder="请填写邮箱验证码" required style="width: 80%;display:inline;float: left" >
                        {{--<button id="code" class="btn btn-info" type="button" style="width: 20% ;display:inline;float: right">获取验证码</button>--}}
                        <input type="button" id="code" value="免费获取验证码"   class="btn btn-info" type="button" style="width: 20% ;display:inline;float: right" onclick="settime(this)"/>
                    </div>

                </div>
                <button type="submit" class="btn btn-lg btn-success btn-block" style="margin-top: 15px;display:inline">
                    <i class="fa fa-btn fa-sign-in"></i> 注册
                </button>
            </form>

        </div>
    </div>
</div><script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
<script>
$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
$("#code").click(function(){
    var username = $('[name=username]').val();
    $.ajax({
        type: 'post',
        url: '{{url('mail/send')}}',
        dataType: 'json',
        data: {
            username: username
        },
        success: function (res) {
            if (res.code == 200) {
                alert('success');
            } else {
                alert('error');
            }
        }
    });
});

var countdown = 60;
        $("#code").attr("disabled",false);
        function settime(val) {
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
</script>
</body>
</html>