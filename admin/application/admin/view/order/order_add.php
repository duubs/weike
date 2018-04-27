{include file="common/header"}


        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                Micro 课程新增
            </div>
            <ol class="am-breadcrumb">
                <li><a href="{:url('Admin/index')}" class="am-icon-home">首页</a></li>
                <li><a href="/admin/course/course">课程信息</a></li>
                <li class="am-active">新增课程</li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 课程
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                        </div>
                    </div>

                </div>
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">
                        <div class="am-u-sm-12 am-u-md-9">
                            <form class="am-form am-form-horizontal" action="/admin/package/packageAddDo" method="post" enctype="multipart/form-data" >
                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">学段 / Stage</label>
                                    <div class="am-u-sm-9">
                                        <select id="stage" name="stage_id">
                                            <option value=""> -- 请选择 --</option>
                                            <?php foreach($stage as $v) {?>
                                            <option value="<?=$v['stage_cate_id']?>" ><?=$v['stage_name']?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>

                                <div class="am-form-group"  >
                                    <label for="user-email" class="am-u-sm-3 am-form-label">年级 / Stage_child    </label>
                                    <div class="am-u-sm-9" >
                                        <select name="stage_child_id" id="box">
                                            <option value=""> --  请先选择学段 -- </option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="am-form-group"  >
                                    <label for="user-email" class="am-u-sm-3 am-form-label">时长 / LongTime    </label>
                                    <div class="am-u-sm-9" >
                                        <select name="longtime" id="longtime">
                                            <option value=""> -- 请选择  -- </option>
                                            <option value="0">半年</option>
                                            <option value="1">全年</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">套餐费用 / Money</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" class="money" id="user-weibo" placeholder="输入当前会员费用 / Twitter" name="package_money">
                                    </div>
                                </div>
                             
                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">套餐封面 / Images</label>
                                    <div class="am-u-sm-9">
                                        <input type="file" name="package_img">
                                    </div>
                                </div>
                          
                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <input type="submit" value="保存"  class="am-btn am-btn-primary" id="submit">
                                        <!-- <a href="{:url('Course /courseAddDo')}" class="am-btn am-btn-primary">保存修改</a> -->
                                    </div>
                                </div> 

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="admin/js/jquery.min.js"></script>
    <script src="admin/js/amazeui.min.js"></script>
    <script src="admin/js/app.js"></script>
</body>

</html>
<script src="admin/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
    $(function(){
         //  年级 替换
        $("#stage").change(function(){
            var stage_cate_id = $('#stage').val()
            $.get("/admin/course/courseAjax",{stage_cate_id:stage_cate_id},function(data){
                var html = ""
                html+='<select name="stage_child_id" id="box">\
                        <option value=""> --  请先选择学段 -- </option>'
                for(var k in data){
                    html+='<option value="'+data[k].stage_cate_id+'" >'+data[k].stage_name+'</option>\
                        </select>';
                }
                $('#box').html(html);
            })
        })

        $('#submit').click(function(){ 
            var stage_id = $('#stage').val()
            var stage_child_id = $('#box').val()
            var money = $('.money').val()
            var longtime = $('#longtime').val()
            if (stage_id == '') {
                alert('学段没选') 
                return false
            }
            if (stage_child_id == '') {
                alert('年级没选')
                return false
            }
            if (longtime == '') {
                alert('请选择时长')
                return false
            }
            if (money == '') {
                alert('请填写套餐费用')
                return false
            }
            if(jQuery("input[type='file']").val()==""){
                alert('未选择套餐封面')
                return false
            }
        })
    })
    
</script>
