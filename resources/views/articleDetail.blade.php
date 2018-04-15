

@include('header')

<div class="container main-container blog-container">



    <div class="blog-pages">
        <div class="col-md-9 left-col pull-right">

            <div class="panel article-body content-body">

                <div class="panel-body">

                    <h1 class="text-center">
                        用户角色权限控制包 Laravel-permission 使用说明
                    </h1>


                    <div class="article-meta text-center">
                        <i class="fa fa-clock-o"></i> <abbr title="2天前" class="timeago">2天前</abbr>
                        ⋅
                        <i class="fa fa-eye"></i> 393
                        ⋅
                        <i class="fa fa-thumbs-o-up"></i> 23
                        ⋅
                        <i class="fa fa-comments-o"></i> 0

                    </div>

                    <div class="entry-content">
                        <div class="content-body entry-content panel-body ">

                            <div class="markdown-body topic-content-big-font" id="emojify">



                            </div>

                        </div>
                    </div>



                    <br>
                    <br>




                </div>

            </div>

            <div class="votes-container panel panel-default padding-md">

                <div class="panel-body vote-box text-center">

                    <div class="btn-group">

                        <a data-ajax="post" href="javascript:void(0);" data-url="https://laravel-china.org/topics/9842/upvote" title="" data-content="点赞相当于收藏，可以在个人页面的「赞过的话题」导航里查看" id="up-vote" class="vote btn btn-primary popover-with-html " data-original-title="Up Vote">
                            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                            收藏

                        </a>

                    </div>

                    <div class="voted-users">

                        <div class="user-lists">

                            <a href="https://laravel-china.org/users/3853" data-userid="3853">
                                <img class="img-thumbnail avatar avatar-middle" src="https://lccdn.phphub.org/uploads/avatars/3853_1457586148.jpeg?imageView2/1/w/100/h/100" style="width:48px;height:48px;">
                            </a>
                        </div>

                        <a class="voted-template" href="" data-userid="" style="display:none">
                            <img class="img-thumbnail avatar avatar-middle" src="" style="width:48px;height:48px;">
                        </a>
                    </div>

                </div>
            </div>

            <!-- Reply List -->
            <div class="replies panel panel-default list-panel replies-index" id="replies">

                <div class="panel-heading">
                    <div class="total">回复数量: <b>0</b> </div>

                    <div class="order-links">
                        <a class="btn btn-default btn-sm active popover-with-html" data-content="按照时间排序" href="https://laravel-china.org/articles/9842/user-role-permission-control-package-laravel-permission-usage-description?order_by=created_at&amp;#replies" role="button" data-original-title="" title="">时间</a>
                        <a class="btn btn-default btn-sm  popover-with-html" data-content="按照投票排序" href="https://laravel-china.org/articles/9842/user-role-permission-control-package-laravel-permission-usage-description?order_by=vote_count&amp;#replies" role="button" data-original-title="" title="">投票</a>
                    </div>
                </div>

                <div class="panel-body">

                    <ul class="list-group row"></ul>
                    <div id="replies-empty-block" class="empty-block">暂无评论~~</div>

                    <!-- Pager -->
                    <div class="pull-right" style="padding-right:20px">

                    </div>
                </div>
            </div>

            <!-- Reply Box -->
            <div class="reply-box form box-block">


                <form method="POST" action="https://laravel-china.org/replies" accept-charset="UTF-8" id="reply-form">
                    <input type="hidden" name="_token" value="q2M4MEt8H72YeTUXWmlgNg9NdFUUFHdBo8UHXd9e">
                    <input type="hidden" name="topic_id" value="9842">



                    <div class="form-group">
                        <textarea class="form-control" rows="5" placeholder="请使用 Markdown 格式书写 ;-)，代码片段黏贴时请注意使用高亮语法。" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 164px;" id="reply_content" name="body" cols="50"></textarea>
                    </div>

                    <div class="form-group reply-post-submit">
                        <input class="btn btn-primary " id="reply-create-submit" type="submit" value="回复">
                        <span class="help-inline" title="Or Command + Enter">Ctrl+Enter</span>
                    </div>

                    <div class="box preview markdown-reply" id="preview-box" style="display:none;"></div>

                </form>
            </div>
        </div>



        <div class="col-md-3 main-col pull-left">

            <div id="sticker-sticky-wrapper" class="sticky-wrapper" style="height: 320px;"><div id="sticker" style="width: 278px;">

                    <div class="panel panel-default corner-radius">

                        <div class="panel-heading text-center">
                            <h3 class="panel-title">作者：学冰</h3>
                        </div>

                        <div class="panel-body text-center topic-author-box">
                            <a href="https://laravel-china.org/users/19819">
                                <img src="https://lccdn.phphub.org/uploads/avatars/19819_1509967374.jpeg?imageView2/1/w/100/h/100" style="width:80px; height:80px;margin:5px;" class="img-thumbnail avatar">
                            </a>


                            <div class="media-body padding-top-sm">

                                <ul class="list-inline">

                                    <br>


                                </ul>

                                <div class="clearfix"></div>
                            </div>

                            <span class="text-white">
                                                                <hr>

   <a class="btn btn-default btn-block" style="background-color: #ff5246" href="https://laravel-china.org/messages/to/19819">
                                    <i class="fa fa-paint-brush text-md"></i>Ta的文章(0)
                                </a>

                                <a data-method="post" class="btn btn-primary btn-block" href="javascript:void(0);" data-url="https://laravel-china.org/users/follow/19819" id="user-edit-button" style="cursor:pointer;">
                                   <i class="fa fa-plus"></i> 关注 Ta

<form action="https://laravel-china.org/users/follow/19819" method="POST" style="display:none">
   <input type="hidden" name="_method" value="post">
   <input type="hidden" name="_token" value="q2M4MEt8H72YeTUXWmlgNg9NdFUUFHdBo8UHXd9e">
</form>
</a>

                                <a class="btn btn-default btn-block" href="https://laravel-china.org/messages/to/19819">
                                   <i class="fa fa-envelope-o"></i> 发私信
                                </a>
                            </span>
                        </div>
                    </div>
                </div></div>



            <div class="recommended-wrap">
                <div class="panel panel-default corner-radius recommended-articles">
                    <div class="panel-heading text-center">
                        <h3 class="panel-title">专栏推荐</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list">
                            <li>
                                <a href="https://laravel-china.org/articles/9842/user-role-permission-control-package-laravel-permission-usage-description" title="用户角色权限控制包 Laravel-permission 使用说明">


                                    用户角色权限控制包 Laravel-permission 使用说明
                                </a>
                            </li>
                            <li>
                                <a href="https://laravel-china.org/articles/9115/rabbitmq-introduction-hello-world" title="RabbitMQ 入门 - Hello World">


                                    RabbitMQ 入门 - Hello World
                                </a>
                            </li>
                            <li>
                                <a href="https://laravel-china.org/articles/9117/rabbitmq-entry-work-queue" title="RabbitMQ 入门 - 工作队列">


                                    RabbitMQ 入门 - 工作队列
                                </a>
                            </li>
                            <li>
                                <a href="https://laravel-china.org/articles/9217/rabbitmq-introduction-remote-call-rpc" title="RabbitMQ 入门 - 远程调用 (RPC)">


                                    RabbitMQ 入门 - 远程调用 (RPC)
                                </a>
                            </li>
                            <li>
                                <a href="https://laravel-china.org/articles/9177/rabbitmq-primer-routing" title="RabbitMQ 入门 - 路由">


                                    RabbitMQ 入门 - 路由
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>

    </div>


</div>

@include('footer')