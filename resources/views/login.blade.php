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
        <h3 class="panel-title">请登录</h3>
    </div>
    <div class="panel-body">

        <form method="POST"  action="{{url('login_check')}}" accept-charset="UTF-8"  >

            <input type="hidden" name="remember" value="yes">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <div class="form-group ">
                <label class="control-label" for="username">邮 箱</label>
                <input class="form-control" name="username" type="text" value="" placeholder="请填写邮箱">
            </div>

            <div class="form-group ">
                <label class="control-label" for="password">密 码</label>
                <input class="form-control" name="password" type="password" value="" placeholder="请填写密码">

            </div>
            <fieldset class="form-group text-right">
                <a class="no-pjax" href="https://laravel-china.org/auth/forget" style="color: #717573;font-size: 13px;">忘记密码？</a>
            </fieldset>

            <button type="submit"  class="btn btn-lg btn-success btn-block">
                <i class="fa fa-btn fa-sign-in"></i> 登录
            </button>

            <hr>

            <fieldset class="form-group">
                <div class="alert alert-info">
                    你也可以使用第三方登录
                </div>

                <a class="btn btn-lg btn-default btn-block" id="login-required-submit" href="https://laravel-china.org/auth/oauth?driver=github"><i class="fa fa-github-alt"></i> GitHub 登录</a>
                <a class="btn btn-lg btn-default btn-block" href="https://laravel-china.org/auth/oauth?driver=wechat"><i class="fa fa-weixin" ></i> 使用微信登录</a>
            </fieldset>
        </form>


    </div>
</div>
</div>

</body>
<script>
    function  check() {
        if($('.username').val() == ''){
           alert('1');

        }else if($('.password').val() == ''){
            alert('2');

        }
        else{
            alert('3');

        }

    }
</script>
</html>
