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

        <div class="col-md-9  left-col ">

            <div class="panel panel-default padding-md">

                <div class="panel-body ">

                    <h2><i class="fa fa-cog" aria-hidden="true"></i> 编辑个人资料</h2>
                    <hr>


                    <form class="form-horizontal" method="POST" action="{{url('/editInfo')}}" accept-charset="UTF-8">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <input type="hidden" name="user_id" value="{{$user->id}}">


                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">邮 箱</label>
                            <div class="col-sm-6">
                                <input class="form-control" name="email" disabled="disabled" type="text" value="{{$user->username}}">
                            </div>
                            <div class="col-sm-4 help-block">
                                如：name@website.com
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">昵称</label>
                            <div class="col-sm-6">
                                <input class="form-control" name="nickname" type="text" value="{{$user->nickname}}">
                            </div>
                            <div class="col-sm-4 help-block">
                                如：李小明
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


</div>
@include('footer')