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

                    📱 非中国大陆号码需使用国际前缀，格式必须是以 + 开头并且没有空格，如：+886972812345

                </div>

                <div class="form-group ">
                    <label class="control-label" for="username">邮箱</label>
                    <input class="form-control" name="username" id="email" type="text" value="" placeholder="请填写邮箱" required>

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
</div><script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
<script>
$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
$(document).ready(function () {

    $('#code').click(function () {
        var username = $('[name=username]').val();
        $.ajax({
            type: 'post',
            url: '{{url('mail/send')}}',
            dataType: 'json',
            data: {
                username:username
            },
            success: function (res) {
                if (res.code == 200) {
                 alert('success');
                } else{
                    alert('error');
                }
            }
        });

    })
});
</script>
{{--<script>--}}
    {{--function clearError() {--}}
        {{--$('[name=phone]').parent().removeClass('has-error')--}}
        {{--$('[name=phone]').parent().find('.help-block').remove()--}}
        {{--$('[name=captcha]').parent().removeClass('has-error')--}}
        {{--$('[name=captcha]').parent().find('.help-block').remove()--}}
    {{--}--}}

    {{--$('#code').click(function () {--}}
        {{--$.ajax({--}}
            {{--method: 'POST',--}}
            {{--url: '/auth/verify-code',--}}
            {{--data: {--}}
                {{--phone: $('[name=phone]').val(),--}}
                {{--captcha: $('[name=captcha]').val(),--}}
            {{--},--}}
        {{--}).done(function(data) {--}}
            {{--clearError()--}}
        {{--}).fail(function (data) {--}}
            {{--clearError()--}}

            {{--if (data.status == 422) {--}}
                {{--var errors = data.responseJSON.errors--}}

                {{--if (errors.phone) {--}}
                    {{--$('[name=phone]').parent().find('.help-block').remove()--}}
                    {{--$('[name=phone]').parent().addClass('has-error')--}}
                    {{--$('[name=phone]').parent().append('<span class="help-block">' + errors.phone + '</span>')--}}
                {{--}--}}

                {{--if (errors.captcha) {--}}
                    {{--$('[name=captcha]').parent().find('.help-block').remove()--}}
                    {{--$('[name=captcha]').parent().addClass('has-error')--}}
                    {{--$('[name=captcha]').parent().append('<span class="help-block">' + errors.captcha + '</span>')--}}
                {{--}--}}

                {{--$('#code').html('重新获取')--}}
                {{--$('#code').prop('disabled', false)--}}
                {{--clearInterval(interval)--}}
            {{--}--}}
        {{--}).always(function() {--}}
            {{--var seconds = 60--}}

            {{--var interval = setInterval(function () {--}}
                {{--if (seconds == 0) {--}}
                    {{--seconds = 60--}}
                    {{--$('#code').html('重新获取')--}}
                    {{--$('#code').prop('disabled', false)--}}
                    {{--clearInterval(interval)--}}
                {{--} else {--}}
                    {{--$('#code').html(seconds + ' 秒')--}}
                    {{--seconds ----}}
                {{--}--}}
            {{--}, 1000)--}}
            {{--$('#code').prop('disabled', true)--}}
        {{--});--}}
    {{--})--}}
{{--</script>--}}

</body>
</html>