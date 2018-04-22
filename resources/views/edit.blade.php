@include('header')
<div class="container main-container ">



    <div class="users-show">

        <div class="col-md-3 main-col">
            <div class="box">
                <div class="padding-md ">
                    <div class="list-group text-center">
                        <a href="https://laravel-china.org/users/21030/edit" class="list-group-item active">
                            <i class="text-md fa fa-list-alt" aria-hidden="true"></i>
                            &nbsp;个人信息
                        </a>
                        <a href="https://laravel-china.org/users/21030/edit_avatar" class="list-group-item ">
                            <i class="text-md fa fa-picture-o" aria-hidden="true"></i>
                            &nbsp;修改头像
                        </a>

                        <a href="https://laravel-china.org/users/21030/edit_password" class="list-group-item ">
                            <i class="text-md fa fa-lock" aria-hidden="true"></i>
                            &nbsp;修改密码
                        </a>
                    </div>
                </div>

            </div>
        </div>

        {{--<div class="col-md-9  left-col ">--}}

            {{--<div class="panel panel-default padding-md">--}}

                {{--<div class="panel-body ">--}}

                    {{--<h2><i class="fa fa-cog" aria-hidden="true"></i> 编辑个人资料</h2>--}}
                    {{--<hr>--}}


                    {{--<form class="form-horizontal" method="POST" action="{{url('/editInfo')}}" accept-charset="UTF-8">--}}
                        {{--<input type="hidden" name="_token" value="{{csrf_token()}}">--}}

                        {{--<input type="hidden" name="user_id" value="{{$user->id}}">--}}


                        {{--<div class="form-group">--}}
                            {{--<label for="" class="col-sm-2 control-label">邮 箱</label>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<input class="form-control" name="email" disabled="disabled" type="text" value="{{$user->username}}">--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-4 help-block">--}}
                                {{--如：name@website.com--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<label for="" class="col-sm-2 control-label">昵称</label>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<input class="form-control" name="nickname" type="text" value="{{$user->nickname}}">--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-4 help-block">--}}
                                {{--如：李小明--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-sm-offset-2 col-sm-6">--}}
                                {{--<input class="btn btn-primary" id="user-edit-submit" type="submit" value="应用修改">--}}
                            {{--</div>--}}
                        {{--</div>--}}



                    {{--</form>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}

        <div class="main-col col-md-9 left-col">

            <div class="panel panel-default padding-md">

                <div class="panel-body padding-bg">

                    <h2><i class="fa fa-picture-o" aria-hidden="true"></i> 请选择图片</h2>
                    <hr>


                    <form method="POST" action="{{'/upload_avatar'}}" enctype="multipart/form-data" accept-charset="UTF-8">

                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="user_id" value="{{$user->id}}">

                        <div id="image-preview-div">
                            <label for="exampleInputFile">请选择图片：</label>
                            <br>
                            <img id="preview-img" class="avatar-preview-img" src="{{asset($user->avatar)}}" width="200px" height="200px">
                        </div>
                        <div class="form-group">
                            <input type="file" name="avatar" id="file" required="">
                        </div>
                        <br>

                        <button class="btn btn-lg btn-primary" id="upload-button" type="submit">上传头像</button>

                        <div class="alert alert-info" id="loading" style="display: none;" role="alert">
                            图片上传中...
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                </div>
                            </div>
                        </div>
                        <div id="message"></div>
                    </form>

                </div>
            </div>
        </div>

        <div class="panel panel-default padding-md">

            <div class="panel-body ">

                <h2><i class="fa fa-lock" aria-hidden="true"></i> 修改密码</h2>
                <hr>


                <form class="form-horizontal" method="POST" action="{{url('edit_password')}}" accept-charset="UTF-8">
                    <input name="user_id" type="hidden"  value="{{$user->id}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-group">
                        <label class="col-md-2 control-label">邮 箱：</label>
                        <div class="col-md-6">
                            <input name="" class="form-control" type="text" value="782389483@qq.com" disabled="">
                            <input name="email" type="hidden" value="782389483@qq.com">
                        </div>
                        <div class="col-sm-4 help-block">
                            设置密码后将可以使用此邮箱登录。
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">新 密 码：</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password" required="">
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-6">
                            <input class="btn btn-primary" id="user-edit-submit" type="submit" value="应用修改">
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>


</div>
@include('footer')