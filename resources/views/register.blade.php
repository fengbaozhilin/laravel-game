<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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

            <form method="POST" action="https://laravel-china.org/auth/register" accept-charset="UTF-8">
                <input type="hidden" name="_token" value="XhrEwsj8lv5zepEm6nYRetXdghdMC3e1SVetLRuH">

                <input type="hidden" name="remember" value="yes">

                <div class="alert alert-warning">

                    📱 非中国大陆号码需使用国际前缀，格式必须是以 + 开头并且没有空格，如：+886972812345

                </div>

                <div class="form-group ">
                    <label class="control-label" for="phone">手 机</label>
                    <input class="form-control" name="phone" type="text" value="" placeholder="请填写手机号码" required>

                </div>

                <div class="form-group ">
                    <label for="captcha" class="control-label">图片验证码</label>

                    <div class="captcha-input">
                        <input id="captcha" class="form-control" name="captcha" placeholder="请填写验证码" required>

                        <img class="thumbnail captcha" src="https://laravel-china.org/captcha/flat?Nluwveni" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码">

                    </div>
                </div>

                <div class="form-group ">
                    <label class="control-label" for="code">短信验证码</label>
                    <div class="phone-input">
                        <input class="form-control" name="code" type="text" value="" placeholder="请填写手机验证码" required>
                        <button id="code" class="btn btn-info" type="button">获取验证码</button>
                    </div>

                </div>

                <button type="submit" class="btn btn-lg btn-success btn-block">
                    <i class="fa fa-btn fa-sign-in"></i> 注册
                </button>
            </form>

        </div>
    </div>
</div>


</body>
</html>