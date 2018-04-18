<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>沙发</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://dn-phphub.qbox.me//assets/css/1e2676fd224cc66e5027-styles.css">
    <link rel="stylesheet" href="{{asset('css/message.css')}}">
    <script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js/message.js')}}"></script>
    <script src="{{asset('js/unslider.min.js')}}"></script>
</head>
<style>
   a.active{
        border-bottom: 2px solid #dc817e;
    }

</style>
<body>
<div role="navigation" class="navbar navbar-default topnav">
    <div class="container">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="/" class="navbar-brand">
                <img src="https://lccdn.phphub.org/uploads/sites/hG5JuDSqZ7Y26Kuh0Qat8EYv6XNT0fGc.png" alt="Laravel China" style=""/>
            </a>
        </div>

        <div id="top-navbar-collapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="" ><a @if($cate_id == null) class="active" @else @endif href="{{url('/')}}" >首页</a></li>
                @foreach($category as $value)
                    <li class="" ><a @if($cate_id == $value->id) class="active" @else @endif href="{{url('/'.$value->id)}}" >{{$value->name}}</a></li>
                @endforeach




            </ul>

            <div class="navbar-right">

                <form method="GET" action="https://laravel-china.org/search" accept-charset="UTF-8" class="navbar-form navbar-left hidden-sm hidden-md">
                    <div class="form-group">
                        <input class="form-control search-input mac-style" placeholder="搜索" name="q" type="text" value="">

                    </div>
                </form>

                @if(session('login_info') == 'success')
                    <ul class="nav navbar-nav github-login" style="margin-top: 12px">
                        <a href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dLabel">
                            <img class="avatar-topnav" alt="hzjdhr" src="https://lccdn.phphub.org/uploads/avatars/21030_1515634349.jpg?imageView2/1/w/100/h/100">
                            {{session('username')}}
                            <span class="caret"></span>
                        </a>
                    </ul>
                    @else
                <ul class="nav navbar-nav github-login" >
                    <a href="{{url('login')}}" class="btn btn-default login-btn no-pjax">
                        <i class="fa fa-user"></i>
                        登 录
                    </a>
                    <a href="{{url('register')}}" class="btn btn-default login-btn no-pjax">
                        <i class="fa fa-user-plus"></i>
                        注 册
                    </a>
                </ul>
@endif

            </div>
        </div>

    </div>
</div>
@if(session('msg_status') == 100)
<script>
    $.showmessage("操作成功");
</script>
   {{\Illuminate\Support\Facades\Session::forget('msg_status')}}
    @elseif(session('msg_status') == 200)
        <script>
            $.showmessage({'message':'操作失败','type':'error'});
        </script>
   {{\Illuminate\Support\Facades\Session::forget('msg_status')}}
        @endif