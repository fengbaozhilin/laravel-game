@include('header')
<div class="container main-container ">


    <div class="users-show  row">

        <div class="col-md-3">
            <div class="box">

                <div class="padding-sm user-basic-info">
                    <div style="">

                        <div class="media">
                            <div class="media-left">
                                <div class="image">
                                    <a href=""
                                       class="popover-with-html" data-content="修改头像" data-original-title="" title="">
                                        <img class="media-object avatar-112 avatar img-thumbnail"
                                             src="{{asset($user->avatar)}}">
                                    </a>
                                </div>

                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    {{$user->nickname}}
                                </h3>
                                <div class="item">


                                </div>
                                <div class="item">
                                    第 {{$user->id}} 位会员
                                </div>
                                <div class="item number">
                                    注册于 : <span class="timeago">{{$user->created_at->format('Y/m/d')}}</span>
                                </div>



                            </div>
                        </div>

                    </div>

                    <hr>

                    <div class="box text-center">

                        <div class="padding-sm user-basic-nav">
                            <ul class="list-group">

                                <a href="{{url('/user/'.$id)}}" @if(!isset($filter)) class="active"  @endif>
                                    <li class="list-group-item"><i class="text-md fa fa-headphones "></i> Ta 发布的文章</li>
                                </a>


                                <a href="{{url('/user/'.$id.'?filter=friends')}}" @if(isset($filter) && $filter=='friends')  class="active" @endif>
                                    <li class="list-group-item"><i class="text-md fa fa-eye"></i> Ta 关注的用户</li>
                                </a>




                            </ul>
                        </div>

                    </div>

                    <hr>
@if($state == 1)
                    <a class="btn btn-primary btn-block" href="{{url('user/'.$id.'/edit')}}"
                       id="user-edit-button">
                        <i class="fa fa-edit"></i> 编辑个人资料
                    </a>
    @else
                        <a class="btn btn-primary btn-block" href="{{url('/friend/'.$id)}}"
                           id="user-edit-button">
                            <i class="fa fa-edit"></i> 关注用户
                        </a>
    @endif

                </div>

            </div>


        </div>

        <div class="main-col col-md-9 left-col">


            <div class="panel panel-default">
                @if(isset($filter) &&$filter == 'friends')
                <div class="panel-heading text-center">
                    <i class="text-md fa fa-leaf"></i> 关注过的用户
                </div>
                <div class="panel-body">
                <ul class="list-group">
@foreach($friends as $friend)
                    <li class="list-group-item">

                        <a href="{{url('/user/'.$friend->user['id'])}}" title="snower">

                            <!-- <img class="avatar-topnav" alt="snower" src=""> -->
                            <img class="media-object img-thumbnail avatar avatar-small inline-block " src="{{$friend->user['avatar']}}">

                            {{$friend->user['nickname']}}
                        </a>


                    </li>
    @endforeach

                </ul>
                </div>
                    @else
                    <div class="panel-heading text-center">
                        <i class="text-md fa fa-leaf"></i> 发表过的文章
                    </div>
                    <div class="panel-body">
                        @if(isset($articles) &&count($articles) > 0)
                            <ul class="list-group">

                                @foreach($articles as $article)
                                    <li class="list-group-item">

                                        <a href="{{url('/articleDetail/'.$article->id)}}"
                                           title="{{$article->name}}" class="rm-link-color">
                                            {{$article->name}}
                                        </a>
                                        <span class="meta pull-right">
            <span> ⋅ </span>{{count($article['comment'])}} 回复
            <span> ⋅ </span>{{$article->hits}} 查看
            <span> ⋅ </span><span class="timeago">{{$article->created_at->format('Y-m-d H:i')}}</span>
          </span>
                                    </li>
                                @endforeach

                            </ul>
                        @else
                            <div class="panel-body">
                                <div class="empty-block">没有任何数据~~</div>
                            </div>
                        @endif
                    </div>
                    @endif
            </div>


        </div>


    </div>


</div>

@include('footer')