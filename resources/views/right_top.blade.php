
<div class="panel panel-default corner-radius text-center ">
    <div class="panel-body">
        <a style="margin: 8px;" class="btn btn-default" href="{{url('/create_article')}}">
            <i class="fa fa-comment text-md"></i> 创作文章
        </a>
        <a style="margin: 8px;" class="btn btn-default" href="@if($user_info !== null){{url('/user/'.$user_info->id)}} @else {{url('/login')}}  @endif">
            <i class="fa fa-paint-brush text-md"></i> 个人中心
        </a>

        <a style="margin: 8px;" class="btn btn-default" href="https://laravel-china.org/links/share">
            <i class="fa fa-link text-md"></i> 我的文章
        </a>
        <a style="margin: 8px;" class="btn btn-default"
           href="https://laravel-china.org/topics/create?category_id=4">
            <i class="fa fa-question-circle text-md"></i> 提个问题
        </a>
    </div>
</div>

