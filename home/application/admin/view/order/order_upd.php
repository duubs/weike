{include file="common/header"}


        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                Micro 课程
            </div>
            <ol class="am-breadcrumb">
                <li><a href="{:url('Admin/index')}" class="am-icon-home">首页</a></li>
                <li><a href="/admin/course/course">课程信息</a></li>
                <li class="am-active">课程修改</li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 课程
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                       <!--  <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="text" class="form-control form-control-solid" placeholder="搜索..."> 
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">
                        <div class="am-u-sm-12 am-u-md-9">
                            <form class="am-form am-form-horizontal" action="/admin/order/orderUpdDo" method="post" enctype="multipart/form-data" >
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">订单ID / ID</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-name" placeholder="<?=$order['order_id']?>" readonly>
                                    </div>
                                </div>
                                <input type="hidden" name="order_id" value="<?=$order['order_id']?>">

                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">订单名称 / Name</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-name" placeholder="<?=$order['order_name']?>" readonly>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">订单唯一编号 / Only</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-text" placeholder="<?=$order['only_id']?>" readonly>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-text" class="am-u-sm-3 am-form-label">订单总额 / Original Quota</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-text" placeholder="<?=$order['order_original_quota']?>" readonly>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-text" class="am-u-sm-3 am-form-label">订单实际金额 / Quota</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-text" placeholder="<?=$order['order_quota']?>" readonly>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-text" class="am-u-sm-3 am-form-label">订单优惠金额 / Discount</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-text" name="order_discount" placeholder="<?=$order['order_discount']?>   正数为优惠  负数为加运费" >
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-text" class="am-u-sm-3 am-form-label">优惠备注 / Desc</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-text" name="change_desc" placeholder="<?=$order['change_desc']?>" >
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-text" class="am-u-sm-3 am-form-label">订单支付方式 / Mode</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-text" placeholder="<?=$order['order_mode']?>" readonly>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-text" class="am-u-sm-3 am-form-label">订单生成时间 / Time</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-text"  placeholder="<?php echo date('Y-m-d H:i:s',$order['order_time'])?>" readonly>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-text" class="am-u-sm-3 am-form-label">用户id / UserId</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-text" placeholder="<?=$order['user_id']?>" readonly>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-3 am-form-label">订单状态 / State</label>
                                    <div class="am-u-sm-9">
                                       <input type="text" id="user-text" placeholder="<?php if ($order['state'] == 0) echo '未支付'; else echo '已支付';?>" readonly>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-text" class="am-u-sm-3 am-form-label">是否作废 / Stage</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-text" placeholder="<?php if ($order['is_void'] == 0) echo '未作废'; else echo '已作废';?>" readonly>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <input type="submit" value="确定改价"  class="am-btn am-btn-primary">
                                        <!-- <a href="{:url('order /orderAddDo')}" class="am-btn am-btn-primary">保存修改</a> -->
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
            var stage_id = $('#stage').val()
            // alert(stage_id)
            $.get("/admin/course/courseAjax",{stage_id:stage_id},function(data){
                var html = ""
                html+='<select name="stage_child_id" id="box">\
                        <option> --  请先选择学段 -- </option>'
                for(k in data){
                    html+='<option value="'+data[k].stage_child_id+'" >'+data[k].stage_child_name+'</option>\
                        </select>';
                }
                $('#box').html(html);
            })
        })
        //  科目 替换
        $('#box').change(function(){
            var stage_child_id = $('#box').val();
            $.get("/admin/course/courseAjaxTo",{stage_child_id:stage_child_id},function(data){
                var html = ""
                html+='<select name="stage_child_id" id="subject">\
                        <option> --  请先选择年级 -- </option>'
                for(k in data){
                    html+='<option value="'+data[k].subject_id+'" >'+data[k].subject_name+'</option>\
                        </select>';
                }
                $('#subject').html(html);
            })
        })
        //  教师 替换
        $('#subject').change(function(){
            var subject_id = $('#subject').val();
            // console.log(subject_id)
            $.get("/admin/course/courseAjaxThree",{subject_id:subject_id},function(data){
                var html = ""
                html+='<select name="teacher_id" id="teacher">\
                    <option> --  请先选择科目 -- </option>'
                for(k in data){
                    html+='<option value="'+data[k].teacher_id+'" >'+data[k].teacher_name+'</option>\
                        </select>';
                }
                $('#teacher').html(html);
            })
        })
    })
    
</script>

        <!-- $(function(){
            $('#info').change(function(){
               var info = $("#info").val();
               $.get("/admin/user/member",{info:info},function(data){
                    var html = "";
                    for (k in data) {
                        html+='<tr>\
                                    <td><input type="checkbox"></td>\
                                    <td>'+data[k].user_id+'</td>\
                                    <td><a href="#">'+data[k].user_name+' </a></td>\
                                    <td>'+data[k].parent_name+'</td>\
                                    <td class="am-hide-sm-only">'+data[k].sex+'</td>\
                                    <td class="am-hide-sm-only">'+data[k].parent_tel+'</td>\
                                    <td class="am-hide-sm-only"><?=date('Y-m-d H:i:s') ?></td>\
                                    <td>\
                                        <div class="am-btn-toolbar">\
                                            <div class="am-btn-group am-btn-group-xs">\
                                                <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 冻结<button>\
                                            </div>\
                                        </div>\
                                    </td>\
                                </tr>\
                            ';
                    }

                    $('#body').html(html);
               })  
            })
        }) -->