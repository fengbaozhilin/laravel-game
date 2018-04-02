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
    <script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
</head>
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
                <li class=" active"><a href="https://laravel-china.org/topics">综合</a></li>

                <li class=""><a href="https://laravel-china.org/categories/1">贴吧</a></li>

                <li class=""><a href="https://laravel-china.org/categories/10">新闻</a></li>

                <li class=""><a href="https://laravel-china.org/categories/4">留言</a></li>

                <li>
                    <a class="no-pjax" href="https://laravel-china.org/courses">教程</a>
                </li>


                <li class="nav-docs hidden-sm"><a href="https://laravel-china.org/docs">文档</a></li>

                <li class=""><a href="https://laravel-china.org/categories/12">翻译</a></li>





            </ul>

            <div class="navbar-right">

                <form method="GET" action="https://laravel-china.org/search" accept-charset="UTF-8" class="navbar-form navbar-left hidden-sm hidden-md">
                    <div class="form-group">
                        <input class="form-control search-input mac-style" placeholder="搜索" name="q" type="text" value="">

                    </div>
                </form>

                <ul class="nav navbar-nav github-login" >
                    <a href="https://laravel-china.org/auth/login" class="btn btn-default login-btn no-pjax">
                        <i class="fa fa-user"></i>
                        登 录
                    </a>
                    <a href="https://laravel-china.org/auth/register" class="btn btn-default login-btn no-pjax">
                        <i class="fa fa-user-plus"></i>
                        注 册
                    </a>
                </ul>
            </div>
        </div>

    </div>
</div>