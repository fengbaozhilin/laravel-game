@include('header')

<div class="container main-container ">

    <div class="col-md-10 col-md-offset-1 panel">
        <div class="panel-body articles-create ">

            <h1 class="header text-center" style="line-height: 60px;font-size: 30px;color: #6d6b6b;"><i
                        class="fa fa-commenting-o"></i> 新建话题</h1>
            <hr>


                <div class="row">
                    <div class="col-sm-2 form-group">
                        <select class="selectpicker form-control" name="category_id" id="category-select"
                                required="require">
                            <option value="" disabled="" selected="">请选择分类</option>
                            @foreach($categorys as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-sm-10 form-group" style="padding-left:0">
                        <input class="form-control" id="topic-title" placeholder="请填写标题" name="title" type="text"
                               value="" required="require">
                    </div>
                </div>


                <div id="reply_notice" class="">
                    <ul class="helpblock list rm-link-color add-link-underline">
                        <li>请注意单词拼写，以及中英文排版</li>
                        <li>支持 Markdown 格式, <strong>**粗体**</strong>、~~删除线~~、<code>`单行代码`</code>, 更多语法请见这里 <a
                                    href="https://github.com/riku/Markdown-Syntax-CN/blob/master/syntax.md">Markdown
                                语法</a></li>
                        <li>支持表情，使用方法请见 <a href="" target="_blank">Emoji 自动补全来咯</a>，可用的
                            Emoji 请见 <img title=":metal:" alt=":metal:" class="emoji"
                                          src="https://lccdn.phphub.org/assets/images/emoji/metal.png"
                                          align="absmiddle"> <img title=":point_right:" alt=":point_right:"
                                                                  class="emoji"
                                                                  src="https://lccdn.phphub.org/assets/images/emoji/point_right.png"
                                                                  align="absmiddle"> <img title=":star:" alt=":star:"
                                                                                          class="emoji"
                                                                                          src="https://lccdn.phphub.org/assets/images/emoji/star.png"
                                                                                          align="absmiddle"> <img
                                    title=":sparkles:" alt=":sparkles:" class="emoji"
                                    src="https://lccdn.phphub.org/assets/images/emoji/sparkles.png" align="absmiddle">
                        </li>
                        <li>上传图片, 支持拖拽和剪切板黏贴上传, 格式限制 - jpg, png, gif</li>
                    </ul>
                </div>


                <div class="form-group">
                    <div id="editor">
                    </div>
                </div>


            <div onclick="upload_article()">
                <button class="btn btn-primary submit-btn" id="" type="submit"> <i class="fa fa-paper-plane"></i> 发布文章</button>
            </div>


        </div>
    </div>


</div>
<script type="text/javascript">
    var E = window.wangEditor
    var editor = new E('#editor');
    // 或者 var editor = new E( document.getElementById('editor') )

    //debug模式开启
    editor.customConfig.debug = true

    editor.customConfig.uploadImgShowBase64 = true   // 使用 base64 保存图片

    // 将图片大小限制为 5M
    editor.customConfig.uploadImgMaxSize = 5 * 1024 * 1024

    // 限制一次最多上传 5 张图片
    editor.customConfig.uploadImgMaxLength = 5

    editor.customConfig.uploadImgParamsWithUrl = true

    editor.customConfig.uploadFileName = 'myfiles[]'

    // 自定义字体
    editor.customConfig.fontNames = [
        '宋体',
        '微软雅黑',
        'Arial',
        'Tahoma',
        'Verdana',
        '华文行楷',
        '黑体',
        '幼圆',
    ]


    // 自定义菜单配置
    editor.customConfig.menus = [
        'head',  // 标题
        'bold',  // 粗体
        'fontSize',  // 字号
        'fontName',  // 字体
        'italic',  // 斜体
        'underline',  // 下划线
        'strikeThrough',  // 删除线
        'foreColor',  // 文字颜色
        'backColor',  // 背景颜色
        'link',  // 插入链接
        'list',  // 列表
        'justify',  // 对齐方式
        'quote',  // 引用
        'emoticon',  // 表情
        'image',  // 插入图片
        'table',  // 表格
        'code',  // 插入代码
        'undo',  // 撤销
        'redo'  // 重复
//        'video',  // 插入视频
    ]

    editor.customConfig.onchange = function (html) {
        // html 即变化之后的内容
        //console.log(html)
        //获取字数 -- 不知道为什么 前后空格不能清除
        var edi_art_text = editor.txt.text();
        edi_art_text = edi_art_text.replace(/\s/g, '');
        edi_art_text = $.trim(edi_art_text);
        var edi_count = edi_art_text.length;
        $('#edi_count').text(edi_count);

    }

    editor.create()

</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    function upload_article() {


        var cate_id = $('#category-select').val();
        var title = $('#topic-title').val();
        var content = editor.txt.html();
        if (cate_id == null) {

            $.showmessage({message: '请填写分类', type: 'error'})
            return false;
        } else if (title == null) {

            $.showmessage({message: '请填写标题', type: 'error'})
            return false;
        }
        else if (content == null) {
            $.showmessage({message: '请填写内容', type: 'error'})
            return false;
        } else {

            $.post("/upload_article",{
                cate_id: cate_id, title: title, content: content
            },function (res) {
                if (res.code == 200) {
                    alert(res.title);
                } else {
                    window.location.reload();
                }
            },'json')



//            $.ajax({
//                type: 'post',
//                url: '/upload_article',
//                dataType: 'json',
//                data: {
//                    cate_id: cate_id, title: title, content: content,
//                },
//                success: function (res) {
//                    if (res.code == 200) {
//                        alert(res.title);
//                    } else {
//                        window.location.reload();
//                    }
//                }
//            });

        }


    }
</script>
@include('footer')