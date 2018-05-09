
<div class="col-md-3 side-bar">


<div class="panel panel-default corner-radius text-center ">
    <div class="panel-body">
        <a style="margin: 8px;" class="btn btn-default" href="{{url('/create_article')}}">
            <i class="fa fa-comment text-md"></i> 创作文章
        </a>
        <a style="margin: 8px;" class="btn btn-default" href="@if(session('user_id') !== null){{url('/user/'.session('user_id'))}} @else {{url('/login')}}  @endif">
            <i class="fa fa-paint-brush text-md"></i> 个人中心
        </a>

        <a style="margin: 8px;" class="btn btn-default" href="{{url('chat')}}">
            <i class="fa fa-link text-md"></i> 聊天互动
        </a>
        <a style="margin: 8px;" class="btn btn-default"
           href="">
            <i class="fa fa-question-circle text-md"></i> 提个问题
        </a>
    </div>
</div>



<div class="panel panel-default corner-radius">
    <div class="panel-heading text-center">
        <h3 class="panel-title">热门文章</h3>
    </div>

    <div class="panel-body text-center promote_jobs-box">
        <ul class="list">
            @if(isset($rand_articles))
                @foreach($rand_articles as $rand_article)
            <li style="">
                <a href="{{url('articleDetail/'.$rand_article->id)}}"
                   title="">
                    {{$rand_article->name}}
                </a>
            </li>
                @endforeach
                @endif
        </ul>
    </div>



</div>



</div>
<div class="clearfix"></div>


