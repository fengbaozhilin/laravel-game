

@include('header')

<div class="container main-container blog-container">



    <div class="blog-pages">
        <div class="col-md-9 left-col pull-right">

            <div class="panel article-body content-body">

                <div class="panel-body">

                    <h1 class="text-center">
                        {{$article->name}}
                    </h1>


                    <div class="article-meta text-center">
                        <i class="fa fa-clock-o"></i>  {{$article->created_at->format('Y-m-d')}}
                        ⋅
                        <i class="fa fa-eye"></i>  {{$article->hits}}
                        ⋅
                        <i class="fa fa-comments-o"></i>  {{$count_comment}}

                    </div>

                    <div class="entry-content">
                        <div class="content-body entry-content panel-body ">

                            <div class="markdown-body topic-content-big-font" id="emojify">

                      {!! $article->content !!}

                            </div>

                        </div>
                    </div>



                    <br>
                    <br>




                </div>

            </div>



            <!-- Reply List -->
            <div class="replies panel panel-default list-panel replies-index" id="replies">

                <div class="panel-heading">
                    <div class="total">回复数量: <b>{{$count_comment}}</b> </div>

                </div>
@if(isset($count_comment) && $count_comment>0)
                <div class="panel-body">


                <ul class="list-group row">



@foreach($article->comment as $value)
                    <li class="list-group-item media" style="margin-top: 0px;">

                        <div class="avatar avatar-container pull-left">
                            <a href="{{url('/user/'.$value->user->id)}}">
                                <img class="media-object img-thumbnail avatar avatar-middle" alt="" src=" {{$value->user->avatar}}" style="width:55px;height:55px;">
                            </a>
                        </div>

                        <div class="infos">

                            <div class="media-heading">
                                @if($article->user['id'] == $value->user->id)
                                <a href="{{url('/user/'.$value->user->id)}}" title="" class="remove-padding-left author rm-link-color" style="color: #ff484d">

                                    {{$value->user->nickname}}-------作者

                                </a>
                                @else
                                    <a href="{{url('/user/'.$value->user->id)}}" title="" class="remove-padding-left author rm-link-color" >

                                        {{$value->user->nickname}}

                                    </a>
                                @endif


                                <div class="meta">

                                    <abbr class="timeago" title="{{$value->created_at}}"> {{$value->created_at}}</abbr>

                                </div>

                            </div>

                            <div class="media-body markdown-reply content-body">
                                <p>{{$value->content}}</p>
                            </div>

                        </div>

                    </li>
    @endforeach

                </ul>
                </div>
    @else
                    <div class="panel-body">

                        <ul class="list-group row"></ul>
                        <div id="replies-empty-block" class="empty-block">暂无评论~~</div>

                        <!-- Pager -->
                        <div class="pull-right" style="padding-right:20px">

                        </div>
                    </div>
    @endif


            </div>

            <!-- Reply Box -->
            <div class="reply-box form box-block">


                <form method="POST" action="{{'/article_reply'}}" accept-charset="UTF-8" id="reply-form">
                    {{ csrf_field() }}
                    <input type="hidden" name="article_id" value="{{$article->id}}">


                    <div class="form-group">
                        <textarea class="form-control" rows="5" placeholder="请使用 Markdown 格式书写 ;-)，代码片段黏贴时请注意使用高亮语法。" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 164px;" id="reply_content" name="contents" cols="50"></textarea>
                    </div>

                    <div class="form-group reply-post-submit">
                        <input class="btn btn-primary " id="reply-create-submit" type="submit" value="回复">

                    </div>

                    <div class="box preview markdown-reply" id="preview-box" style="display:none;"></div>

                </form>
            </div>
        </div>



        <div class="col-md-3 main-col pull-left">

            <div id="sticker-sticky-wrapper" class="sticky-wrapper" style="height: 320px;"><div id="sticker" style="width: 278px;">

                    <div class="panel panel-default corner-radius">

                        <div class="panel-heading text-center">
                            <h3 class="panel-title">作者：{{$article->user['nickname']}}</h3>
                        </div>

                        <div class="panel-body text-center topic-author-box">
                            <a href="{{url('/user/'.$article->user_id)}}">
                                <img src="{{asset($article->user['avatar'])}}" style="width:80px; height:80px;margin:5px;" class="img-thumbnail avatar">
                            </a>


                            <div class="media-body padding-top-sm">

                                <ul class="list-inline">

                                    <br>


                                </ul>

                                <div class="clearfix"></div>
                            </div>

                            <span class="text-white">
                                                                <hr>

   <a class="btn btn-default btn-block" style="background-color: #ff5246" href="{{url('/user/'.$article->user['id'])}}">
                                    <i class="fa fa-paint-brush text-md"></i>Ta的文章
                                </a>

                                <a  href="{{url('friend/'.$article->user['id'])}}" class="btn btn-primary btn-block"  id="user-edit-button" style="cursor:pointer;">
                                   <i class="fa fa-plus"></i> 关注 Ta

</a>

                            </span>
                        </div>
                    </div>
                </div></div>





        </div>

    </div>


</div>

@include('footer')