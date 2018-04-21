@include('header')

<style>
    ul, ol { padding: 0;}
    .banner { position: relative; overflow: auto; text-align: center;}
    .banner li { list-style: none; }
    .banner ul li { float: left; }
    #b04 { width: 840px;}
    #b04 .dots { position: absolute; left: 0; right: 0; bottom: 20px;}
    #b04 .dots li
    {
        display: inline-block;
        width: 10px;
        height: 10px;
        margin: 0 4px;
        text-indent: -999em;
        border: 2px solid #fff;
        border-radius: 6px;
        cursor: pointer;
        opacity: .4;
        -webkit-transition: background .5s, opacity .5s;
        -moz-transition: background .5s, opacity .5s;
        transition: background .5s, opacity .5s;
    }
    #b04 .dots li.active
    {
        background: #fff;
        opacity: 1;
    }
    #b04 .arrow { position: absolute; top: 200px;}
    #b04 #al { left: 15px;}
    #b04 #ar { right: 15px;}
</style>

<div class="container main-container ">
    <div class="col-md-9 topics-index main-col">

        <div class="box text-center site-intro rm-link-color" style="box-shadow: 0 1px 0 0 #ddd, 0 0 0 1px #ddd;">
            <div class="banner" id="b04" style="background-color: #eee">
                <ul>
                 @foreach($articles_indexs as $articles_index)
                    <li>
                        <a href="{{url('login')}}">
                            <img src="{{$articles_index->thumb?$articles_index->thumb:'https://ss0.bdstatic.com/94oJfD_bAAcT8t7mm9GUKT-xh_/timg?image&quality=100&size=b4000_4000&sec=1523972366&di=de038de21529f7222aa841128a42e1fe&src=http://dota2hq.eu/_ph/1/371177432.jpg'}}" alt="" width="640" height="480">
                        </a>
                    </li>
                     @endforeach
                </ul>
                <a href="javascript:void(0);" class="unslider-arrow04 prev">

                    <img class="arrow" id="al" src="{{asset('images/image/1.jpg')}}" alt="prev" width="20" height="35">

                </a>
                <a href="javascript:void(0);" class="unslider-arrow04 next"><img class="arrow" id="ar" src="{{asset('images/image/2.jpg')}}" alt="next" width="20" height="37"></a>
            </div>
        </div>


        <div class="panel panel-default">

            <div class="panel-heading">

                <ul class="list-inline topic-filter">
                    <li class="popover-with-html" data-content="综合"><a
                                href="{{url('/')}}" @if(isset($_GET['filter']))  @else class="active"   @endif>综合</a>
                    </li>
                    <li class="popover-with-html" data-content="点击量"><a
                                href="{{url('/?filter=hits')}}" @if(isset($_GET['filter']) && $_GET['filter']=='hits') class="active" @else @endif>点击量</a>
                    </li>
                    <li class="popover-with-html" data-content="待续"><a
                                href="">待续</a>
                    </li>


                </ul>

                <div class="clearfix"></div>
            </div>


            <div class="jscroll">
                <div class="panel-body remove-padding-horizontal">
                    <ul class="list-group row topic-list">

                        @foreach($articles as $article)

                            <li class="list-group-item ">

                                <a class="reply_count_area hidden-xs pull-right"
                                   href="{{url('/articleDetail/'.$article->id)}}">
                                    <div class="count_set">



                                <span class="count_of_replies" title="回复数">

                                {{count($article->comment)}}

                                 </span>

                                        <span class="count_seperator">/</span>

                                        <span class="count_of_visits" title="查看数">

                                  {{$article->hits}}

                                   </span>
                                        <span class="count_seperator">|</span>

                                        <span class="count_of_visits" title="查看数">

                                        {{$article->created_at->format('Y-m-d H:i')}}
                                 </span>


                                    </div>
                                </a>

                                <div class="avatar pull-left">

                                    <a href="{{'/user/'.$article->user_id}}" title="{{$article->user['nickname']}}">
                                        <img class="media-object img-thumbnail avatar avatar-middle"
                                             alt="" src="{{asset($article->user['avatar'])}}"/>
                                    </a>
                                </div>


                                <div class="infos">

                                    <div class="media-heading">

                                        <span class="hidden-xs label label-warning">{{$article->category['name']}}</span>

                                        <a href="{{url('/articleDetail/'.$article->id)}}"
                                           title="{{$article->name}}">


                                            {{$article->name}}


                                        </a>


                                    </div>

                                </div>

                            </li>

                        @endforeach


                    </ul>

                </div>

                <div class="panel-footer text-right remove-padding-horizontal pager-footer">
                    <!-- Pager -->

                        {{$articles->links()}}

                </div>
            </div>


        </div>

        <!-- Nodes Listing -->

    </div>

    <div class="col-md-3 side-bar">

@include('right_top')



        <div class="panel panel-default corner-radius">
            <div class="panel-heading text-center">
                <h3 class="panel-title">推荐职位</h3>
            </div>

            <div class="panel-body text-center promote_jobs-box">
                <ul class="list">
                    <li>
                        <a href="https://laravel-china.org/topics/9068/winmark-php-engineer-recruitment"
                           title="威锋网招聘 PHP 工程师">
                            [深圳][6-14K] 威锋网招聘 PHP 工程师
                        </a>
                    </li>
                </ul>
            </div>
        </div>




        <div class="panel panel-default corner-radius panel-hot-topics">
            <div class="panel-heading text-center">
                <h3 class="panel-title">七天内最热</h3>
            </div>
            <div class="panel-body">
                <ul class="list">
                    <li>
                        <a href="https://laravel-china.org/topics/9183/after-two-times-study-the-campus-second-hand-book-trading-platform-based-on-the-tutorials"
                           title="【大刀阔斧的改造】在学习了两遍之后，基于教程开发的校园二手书交易平台：）">

                            🏆

                            【大刀阔斧的改造】在学习了两遍之后，基于教程开发的校园二手书交易平台：）
                        </a>
                    </li>

                </ul>
            </div>
        </div>





        <div id="sticker">

            <div class="panel panel-default corner-radius sidebar-resources">
                <div class="panel-heading text-center">
                    <h3 class="panel-title">推荐资源</h3>
                </div>
                <div class="panel-body">
                    <ul class="list list-group ">


                        <li class="list-group-item ">
                            <a href="https://laravel-china.org/categories/1" class="no-pjax" target=&quot;_blank&quot;
                               title="Laravel / PHP 工作">
                                <img class="media-object inline-block "
                                     src="https://lccdn.phphub.org/uploads/banners/vCE4hPLqVg9bBYnPYkZJ.png">
                                Laravel / PHP 工作
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="panel panel-default corner-radius" style="color:#a5a5a5">
                <div class="panel-body text-center">
                    <a href="mailto:summer@yousails.com" style="color:#a5a5a5">
          <span style="margin-top: 7px;display: inline-block;">
              <i class="fa fa-heart" aria-hidden="true" style="color: rgba(232, 146, 136, 0.89);"></i> 建议反馈？请私信 Summer
          </span>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <div class="clearfix"></div>


</div>
<script>
    $(document).ready(function(e) {
        var unslider04 = $('#b04').unslider({
                dots: true
            }),
            data04 = unslider04.data('unslider');

        $('.unslider-arrow04').click(function() {
            var fn = this.className.split(' ')[1];
            data04[fn]();
        });
    });
</script>


@include('footer')