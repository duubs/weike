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
                       
                    </div>

                </div>
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">
                        <div class="am-u-sm-12 am-u-md-9">
                            <form class="am-form am-form-horizontal" action="/admin/package/packageUpdDo" method="post" enctype="multipart/form-data" >
                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">套餐名称 / Stage</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="" placeholder="<?=$data['package_name']?>" readonly>
                                    </div>
                                </div>
                                <input type="hidden" name="package_id" value="<?=$data['package_id']?>">

                                <div class="am-form-group"  >
                                    <label for="user-email" class="am-u-sm-3 am-form-label">时长 / LongTime    </label>
                                    <div class="am-u-sm-9" >
                                        <input type="text" name="" placeholder="<?php if ($data['longtime'] == '15552000') echo "半年"; else echo "全年";?>" readonly>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">套餐费用 / Money</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" class="money" id="user-weibo" placeholder="<?=$data['package_money']?>" name="package_money">
                                    </div>
                                </div>
                             
                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">套餐封面 / Images</label>
                                    <div class="am-u-sm-9">
                                        <input type="file" name="package_img">
                                        <img src="<?=$data['package_img']?>" style="width: 80px;height: 80px;">
                                    </div>
                                </div>
                          
                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <input type="submit" value="修改"  class="am-btn am-btn-primary" id="submit">
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

        // $('#submit').click(function(){ 
        //     var money = $('.money').val()
        //     if (money == '') {
        //         alert('套餐金额没有被修改')
        //         return false
        //     }
        //     // if(jQuery("input[type='file']").val()==""){
        //     //     alert('未选择套餐封面')
        //     //     return false
        //     // }
        // })
    })
    
</script>
