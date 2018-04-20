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
                            <form class="am-form am-form-horizontal" action="/admin/course/courseAddDo" method="post" enctype="multipart/form-data" >
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">课程名称 / Name</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-name" name="course_name" placeholder="课程名称 / Name">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">学段 / Stage</label>
                                    <div class="am-u-sm-9">
                                        <!-- <input type="email" id="user-email" placeholder="输入你的电子邮件 / Email"> -->
                                        <select id="stage" name="stage_id">
                                            <option> -- 请选择 --</option>
                                            <?php foreach($stage as $v) {?>
                                            <option value="<?=$v['stage_id']?>" ><?=$v['stage_name']?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="stage_name" value="<?=$v['stage_name']?>">
                                <input type="hidden" name="stage_name" value="<?=$v['stage_name']?>">
                                <input type="hidden" name="stage_name" value="<?=$v['stage_name']?>">
                                <div class="am-form-group"  >
                                    <label for="user-email" class="am-u-sm-3 am-form-label">年级 / Stage_child    </label>
                                    <div class="am-u-sm-9" >
                                        <!-- <input type="email" id="user-email" placeholder="输入你的电子邮件 / Email"> -->
                                        <select name="stage_child_id" id="box">
                                            <option> --  请先选择学段 -- </option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-phone" class="am-u-sm-3 am-form-label">科目 / Telephone</label>
                                    <div class="am-u-sm-9">
                                        <select name="subject_id" id="subject">
                                            <option> --  请先选择年级 -- </option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="am-form-group"> 
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">教师名称 / Teacher</label>
                                    <div class="am-u-sm-9">
                                         <select name="teacher_id" id="teacher">
                                            <option> --  请先选择科目 -- </option>
                                            <!-- <?php foreach($teacher as $v) {?>
                                            <option value="<?=$v['teacher_id']?>"><?=$v['teacher_name']?></option>
                                            <?php }?> -->
                                        </select>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-3 am-form-label">课程类型 / Type</label>
                                    <div class="am-u-sm-9">
                                        <select name="course_type">
                                            <option>  --  请选择  --  </option>
                                            <option value="1">专题</option>
                                            <option value="0">同步课</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">课程数 / Number</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-weibo"  name="course_num" placeholder="输入课程总数 / Twitter">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">课程费用 / Money</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-weibo" placeholder="输入课程需要的费用 / Twitter" name="course_money">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">学习人数 / PeopleNum</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-weibo" placeholder="已经预定的人数 / Twitter" name="course_number">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">是否可以试听 / Audition</label>
                                    <div class="am-u-sm-9">
                                        <select name="is_audition">
                                            <option>  --  请选择  --  </option>
                                            <option value="1">是</option>
                                            <option value="0">否</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">课程图片 / Images</label>
                                    <div class="am-u-sm-9">
                                        <input type="file" name="course_img">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">课程视频上传 / Video</label>
                                    <div class="am-u-sm-9">
                                        <input type="file" name="course_video">
                                    </div>
                                </div>

                                
                                <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-3 am-form-label">课程简介 / desc</label>
                                    <div class="am-u-sm-9">
                                        <textarea class="" rows="5" id="user-intro" placeholder="输入课程简介" name="stage_desc"></textarea>
                                        <small>250字以内写出你的课程详情...</small>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <input type="submit" value="保存修改"  class="am-btn am-btn-primary">
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