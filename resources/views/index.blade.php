

@include('header')

<div class="container main-container ">
<div class="col-md-9 topics-index main-col">

    <div class="box text-center site-intro rm-link-color"  style="box-shadow: 0 1px 0 0 #ddd, 0 0 0 1px #ddd;">
        欢迎您，Laravel China  是高品质 Laravel / PHP 开发者社区
    </div>


    <div class="panel panel-default">

        <div class="panel-heading">

            <ul class="list-inline topic-filter">
                <li class="popover-with-html" data-content="最后回复排序"><a href="https://laravel-china.org/topics?filter=default" class="active">活跃</a></li>
                <li class="popover-with-html" data-content="只看加精的话题"><a href="https://laravel-china.org/topics?filter=excellent">精华</a></li>
                <li class="popover-with-html" data-content="点赞数排序"><a href="https://laravel-china.org/topics?filter=vote">投票</a></li>
                <li class="popover-with-html" data-content="发布时间排序"><a href="https://laravel-china.org/topics?filter=recent">最近</a></li>
                <li class="popover-with-html" data-content="无人问津的话题"><a href="https://laravel-china.org/topics?filter=noreply">零回复</a></li>
            </ul>

            <div class="clearfix"></div>
        </div>


        <div class="jscroll">
            <div class="panel-body remove-padding-horizontal">
                <ul class="list-group row topic-list">

                    <li class="list-group-item ">

                        <a class="reply_count_area hidden-xs pull-right" href="https://laravel-china.org/topics/7657/laravel-tutorial-series-third-the-first-edition-of-the-laravel-tutorial-advanced-architecture-api-server">
                            <div class="count_set">
                     <span class="count_of_votes" title="投票数">
                       211
                    </span>

                                <span class="count_seperator">/</span>

                                <span class="count_of_replies" title="回复数">
                       89
                     </span>

                                <span class="count_seperator">/</span>

                                <span class="count_of_visits" title="查看数">
                       21.4k
                     </span>
                                <span class="count_seperator">|</span>

                                <abbr title="2018-04-02 16:33:55" class="timeago">4小时前</abbr>
                            </div>
                        </a>

                        <div class="avatar pull-left">

                            <a href="https://laravel-china.org/users/1" title="Summer">
                                <img class="media-object img-thumbnail avatar avatar-middle" alt="Summer" src="https://lccdn.phphub.org/uploads/avatars/1_1479342408.png?imageView2/1/w/100/h/100"/>
                            </a>
                        </div>


                        <div class="infos">

                            <div class="media-heading">

                                <span class="hidden-xs label label-warning">置顶</span>

                                <a href="https://laravel-china.org/topics/7657/laravel-tutorial-series-third-the-first-edition-of-the-laravel-tutorial-advanced-architecture-api-server" title="Laravel 教程系列书第三本《Laravel 教程实战高级 - 构架 API 服务器》">





                                    Laravel 教程系列书第三本《Laravel 教程实战高级 - 构架 API 服务器》


                                </a>


                            </div>

                        </div>

                    </li>



                    <li class="list-group-item ">

                        <a class="reply_count_area hidden-xs pull-right" href="https://laravel-china.org/articles/9126/writing-more-descriptive-restful-api">
                            <div class="count_set">
                     <span class="count_of_votes" title="投票数">
                       37
                    </span>

                                <span class="count_seperator">/</span>

                                <span class="count_of_replies" title="回复数">
                       0
                     </span>

                                <span class="count_seperator">/</span>

                                <span class="count_of_visits" title="查看数">
                       948
                     </span>
                                <span class="count_seperator">|</span>

                                <abbr title="2018-04-02 14:08:16" class="timeago">7小时前</abbr>
                            </div>
                        </a>

                        <div class="avatar pull-left">

                            <a href="https://laravel-china.org/users/10960" title="Max">
                                <img class="media-object img-thumbnail avatar avatar-middle" alt="Max" src="https://lccdn.phphub.org/uploads/avatars/10960_1517067542.png?imageView2/1/w/100/h/100"/>
                            </a>
                        </div>


                        <div class="infos">

                            <div class="media-heading">

                                    <span class="hidden-xs label label-success">
                        专栏
                    </span>

                                <a href="https://laravel-china.org/articles/9126/writing-more-descriptive-restful-api" title="编写更具有描述性的 RESTful API">





                                    编写更具有描述性的 RESTful API


                                </a>


                            </div>

                        </div>

                    </li>
                </ul>

            </div>

            <div class="panel-footer text-right remove-padding-horizontal pager-footer">
                <!-- Pager -->
                <ul class="pagination">

                    <li class="disabled"><span>&laquo;</span></li>

                    <li class="active"><span>1</span></li>

                    <li><a href="https://laravel-china.org/topics?page=2" rel="next">&raquo;</a></li>
                </ul>

            </div>
        </div>


    </div>

    <!-- Nodes Listing -->

</div>

<div class="col-md-3 side-bar">



    <div class="panel panel-default corner-radius sidebar-resources">
        <div class="panel-heading text-center">
            <h3 class="panel-title">实战课程</h3>
        </div>
        <div class="panel-body">

            <div id="carousel-books" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators" style="border-radius: 12px;background-color: hsla(0,0%,100%,.3);margin-bottom: 0px;padding: 4px 8px;">
                    <li data-target="#carousel-books" data-slide-to="0" class="active " style="border: 1px solid #ff8580;background-color: #f4665f;"></li>

                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <a href="https://laravel-china.org/topics/3383/laravel-the-first-chinese-new-book-laravel-tutorial" target=&quot;_blank&quot;>
                            <img  src="https://lccdn.phphub.org/uploads/banners/YpxKKNlSPdmwotO3u8An.jpg" alt="《Laravel 入门教程 - 从零到部署上线》" title="《Laravel 入门教程 - 从零到部署上线》"/>
                        </a>
                    </div>
                    <div class="item ">
                        <a href="https://laravel-china.org/topics/6592" target=&quot;_blank&quot;>
                            <img  src="https://lccdn.phphub.org/uploads/banners/iNanVVOXdnYQ6jRfMdWE.png" alt="《Laravel 进阶课程 - 从零构建论坛系统》" title="《Laravel 进阶课程 - 从零构建论坛系统》"/>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>





    <div class="panel panel-default corner-radius">
        <div class="panel-heading text-center">
            <h3 class="panel-title">推荐职位</h3>
        </div>

        <div class="panel-body text-center promote_jobs-box">
            <ul class="list">
                <li>
                    <a href="https://laravel-china.org/topics/9068/winmark-php-engineer-recruitment" title="威锋网招聘 PHP 工程师">
                        [深圳][6-14K] 威锋网招聘 PHP 工程师
                    </a>
                </li>
            </ul>
        </div>
    </div>




    <div class="panel panel-default corner-radius panel-active-users">
        <div class="panel-heading text-center">
            <h3 class="panel-title">活跃用户</h3>
        </div>
        <div class="panel-body">
            <div class="users-label">

                <a class="users-label-item" href="https://laravel-china.org/users/21335" title="leochien - 我是Leo，鐘點大師CTO &amp; Co-founder，希望有一天能做出改變世界的產品">
                    <img class="avatar-small inline-block" src="https://lccdn.phphub.org/uploads/avatars/21335_1516596331.jpg?imageView2/1/w/100/h/100"> leochien
                </a>


            </div>

        </div>
    </div>

    <div class="panel panel-default corner-radius panel-hot-topics">
        <div class="panel-heading text-center">
            <h3 class="panel-title">七天内最热</h3>
        </div>
        <div class="panel-body">
            <ul class="list">
                <li>
                    <a href="https://laravel-china.org/topics/9183/after-two-times-study-the-campus-second-hand-book-trading-platform-based-on-the-tutorials" title="【大刀阔斧的改造】在学习了两遍之后，基于教程开发的校园二手书交易平台：）">

                        🏆

                        【大刀阔斧的改造】在学习了两遍之后，基于教程开发的校园二手书交易平台：）
                    </a>
                </li>

            </ul>
        </div>
    </div>


    <div class="panel panel-default corner-radius">
        <div class="panel-body text-center sidebar-sponsor-box">

            <a class="sidebar-sponsor-link" href="http://yousails.mikecrm.com/4Dh5uWU" target="_blank">
                <img src="https://lccdn.phphub.org/uploads/banners/doy57aKXkF6VH3cd3pFk.png" class="popover-with-html" data-content="优帆远扬技术外包" width="100%">
            </a>
            <hr>
        </div>
    </div>

    <div class="panel panel-default corner-radius">
        <div class="panel-heading text-center">
            <h3 class="panel-title">友情社区</h3>
        </div>
        <div class="panel-body text-center" style="padding-top: 5px;">
            <a href="https://ruby-china.org" target="_blank" rel="nofollow" title="Ruby China" style="padding: 3px;line-height: 40px;">
                <img src="https://lccdn.phphub.org/assets/images/friends/ruby-china.png" style="width:150px; margin: 3px 0;">
            </a>
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
                        <a href="https://laravel-china.org/categories/1" class="no-pjax" target=&quot;_blank&quot; title="Laravel / PHP 工作">
                            <img class="media-object inline-block " src="https://lccdn.phphub.org/uploads/banners/vCE4hPLqVg9bBYnPYkZJ.png">
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




@include('footer')