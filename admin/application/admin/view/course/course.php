
{include file="common/header"}

        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                微课网用户信息表
            </div>
            <ol class="am-breadcrumb">
                <li><a href="{:url('Admin/index')}" class="am-icon-home">首页</a></li>
                <li class="am-active">题库信息表</li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <!-- <i class="am-icon-search"></i> -->
                                <!-- <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div> -->
                        </div>
                    </div>

                </div>
                <div class="tpl-block">
                    <div class="am-g">
                        <div class="am-u-sm-6 am-u-md-6">
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <a href="{:url('Course/courseAdd')}" class="am-btn am-btn-default am-btn-success" >
                                        <span class="am-icon-plus"></span> 新增
                                    </a>
                                    <button class="am-btn am-btn-default am-btn-danger" id="del">
                                    <span class="am-icon-pencil-square-o"></span> 删除</button>&nbsp;
                                    <input type="button" class="all"  value="check all" >
                                    <input type="button" class="no" value="check no"> 
                                 <!--    
                                      <a href="{:url('Course/coursePreserve')}" class="am-btn am-btn-default am-btn-secondary" >
                                        <span class="am-icon-save"></span> 保存
                                    </a>
                                    <a href="{:url('Course/coruseExam')}" class="am-btn am-btn-default am-btn-warning" >
                                        <span class="am-icon-archive"></span> 审核 -->
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div >
                            <div >
                            	<span style="font-size:18px;">学段</span>
                                <select id="stage" name="stage_id" style="width:60px;height:25px;">
                                    <option>- 请选择-</option>
                                    <?php foreach($stage as $v) {?>
                                    <option value="<?=$v['stage_id']?>" ><?=$v['stage_name']?></option>
                                    <?php }?>
                                </select>
                                <input type="hidden" name="stage_name" value="<?=$v['stage_name']?>">
                                <input type="hidden" name="stage_name" value="<?=$v['stage_name']?>">
                                <input type="hidden" name="stage_name" value="<?=$v['stage_name']?>">
                                <span style="font-size:18px;">年级</span>
                                <select name="stage_child_id" id="box" style="width:60px;height:25px;">
                                    <option value="">- 请选学段 -</option>
                                </select>
                                <span style="font-size:18px;">科目</span>
                                <select name="subject_id" id="subject" style="width:60px;height:25px;">
                                    <option value="">- 请选年级 -</option>
                                </select>
                                <span style="font-size:18px;">教师</span>
                                 <select name="teacher_id" id="teacher" style="width:60px;height:25px;">
                                    <option value="">- 请先选择科目 -</option>
                                </select>
					            <span style="font-size:18px;">类型</span>
                                <select style="width:60px;height:25px;" name="course_type" id="type">
                                    <option value="1">专题</option>
                                    <option value="0">同步课</option>
                                </select>
                                <button class="am-btn am-btn-default am-btn-warning" id="search">GO</button>
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-input-group am-input-group-sm">
                                <input type="text" class="am-form-field">
                                <span class="am-input-group-btn"></span>
                            </div>
                        </div>
                    </div>
                    <div class="am-g">
                        <div class="am-u-sm-12">
                            <form class="am-form">
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-check" >
                                                <input type="button" class="fan" value="❤">
                                            </th>
                                            <th class="table-id">编号</th>
                                            <th class="table-title">课程名称</th>
                                            <th class="table-author am-hide-sm-only">学段</th>
                                            <th class="table-author am-hide-sm-only">年级</th>
                                            <th class="table-author am-hide-sm-only">科目</th>
                                            <th class="table-author am-hide-sm-only">类型</th>
                                            <th class="table-author am-hide-sm-only">课节数</th>
                                            <th class="table-author am-hide-sm-only">费用</th>
                                            <th class="table-author am-hide-sm-only">学习人数</th>
                                            <th class="table-author am-hide-sm-only">教师姓名</th>
                                            <th class="table-author am-hide-sm-only">Audition</th>
                                            <th class="table-author am-hide-sm-only">封面</th>
                                            <th class="table-date am-hide-sm-only">视频</th>
                                            <th class="table-date am-hide-sm-only">简介</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody id="body">
                                        <?php foreach($data as $k => $v) {?>
                                        <tr >
                                            <td>
                                                <input type="checkbox" name="box[]" value="<?=$v['course_id']?>">
                                            </td>
                                            <td><?=$v['course_id']?></td>
                                            <td><a href="#"><?=$v['course_name']?></a></td>
                                            <td class="am-hide-sm-only"><?=$v['stage_name']?></td>
                                            <td class="am-hide-sm-only"><?=$v['stage_child_name']?></td>
                                            <td class="am-hide-sm-only"><?=$v['subject_name']?></td>
                                            <td class="am-hide-sm-only">
                                                {if condition="$v['course_type'] eq 0"}
                                                    同步课
                                                {else/}
                                                    专题课
                                                {/if}
                                            </td>

                                            <td class="am-hide-sm-only"><?=$v['course_num']?></td>
                                            <td class="am-hide-sm-only"><?=$v['course_money']?></td>
                                            <td class="am-hide-sm-only"><?=$v['course_number']?></td>
                                            <td class="am-hide-sm-only"><?=$v['teacher_name']?></td>
                                            <td class="am-hide-sm-only">
                                                <?php if ($v['is_audition'] == 1) echo "可试听"; else echo "不可试听";?>
                                            </td>
                                            <td class="am-hide-sm-only"><img src="<?=$v['course_img']?>" class="img_me"></td>
                                            <td class="am-hide-sm-only"><video width="320" height="240" controls="controls" src="<?=$v['course_video']?>">  
                                        </video></td>
                                            <td class="am-hide-sm-only"><?=$v['stage_desc']?></td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <a href="{:url('Course/courseUpd')}?course_id=<?=$v['course_id']?>" class="am-btn am-btn-default am-btn-xs am-text-secondary" >
                                                            <span class="am-icon-pencil-square-o"></span> 编辑
                                                        </a>
                                                         <a href="{:url('Course/courseDel')}?course_id=<?=$v['course_id']?>" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" >
                                                            <span class="am-icon-trash-o"></span> 删除
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                       
                                    </tbody>
                                </table>
                                <hr>
                            </form>
                        </div>
                    </div>
                     <div class="am-cf">
                        <div class="pagelist">
                            {$data ->render()}
                        </div>
                    </div>  
                    <!-- <input type="button" class="fan" value="反选">   -->
                </div>
            <div class="tpl-alert"></div>
        </div>
    </div>
</div>
<!-- 
  <div class="am-btn-toolbar">
    <div class="am-btn-group am-btn-group-xs">
        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
    </div>
</div> -->
    <script src="admin/js/jquery.min.js"></script>
    <script src="admin/js/amazeui.min.js"></script>
    <script src="admin/js/app.js"></script>
</body>

</html>
<script src="admin/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
     $(function(){

        // 反选  
       $('.fan').click(function(){  
            var box=document.getElementsByName('box[]');  
            for(var i=0;i<=box.length;i++){  
                if( box[i].checked==true){  
                    box[i].checked=false;  
                }else{  
                    box[i].checked=true;  
                }  
            }  
        })
       // 全选
       $('.all').click(function(){  
            var box=document.getElementsByName('box[]');  
            for(var i=0;i<=box.length;i++){  
                box[i].checked=true;  
            }  
        })
       // 全不选
       $('.no').click(function(){  
            var box=document.getElementsByName('box[]');  
            for(var i=0;i<=box.length;i++){  
                box[i].checked=false;  
            }  
        })
       // 批删
        $('#del').click(function(){
            if (confirm("确认删除所选信息?")) {
                var box=document.getElementsByName('box[]');  
                var course_id = '';
                for(var i=0; i<box.length; i++){
                    if(box[i].checked) course_id += box[i].value+','; //如果选中，将value添加到变量s中
                } 
                $.get("/admin/course/courseDel",{course_id:course_id},function(data){
                    if (data != false) {
                        window.location.href='/admin/course/course.html'
                        // var html = "";
                        // console.log(data)
                        // for(k in data){
                        // html+='<tr>\
                        //         <td>\
                        //             <input type="checkbox" name="box[]" value="'+data[k].course_id+'">\
                        //         </td>\
                        //         <td>'+data[k].course_id+'</td>\
                        //         <td><a href="#">'+data[k].course_name+'</a></td>\
                        //         <td class="am-hide-sm-only">'+data[k].stage_child_name+'</td>\
                        //         <td class="am-hide-sm-only">'+data[k].subject_name+'</td>\
                        //         <td class="am-hide-sm-only">\
                        //             {if condition="'+data[k].course_name+' eq 0"}\
                        //                 同步课\
                        //             {else/}\
                        //                 专题课\
                        //             {/if}\
                        //         </td>\
                        //         <td class="am-hide-sm-only">'+data[k].course_num+'</td>\
                        //         <td class="am-hide-sm-only">'+data[k].course_money+'</td>\
                        //         <td class="am-hide-sm-only">'+data[k].course_number+'</td>\
                        //         <td class="am-hide-sm-only">'+data[k].teacher_name+'</td>\
                        //         <td class="am-hide-sm-only"><img src="'+data[k].course_img+'" class="img_me"></td>\
                        //         <td class="am-hide-sm-only">'+data[k].course_video+'</td>\
                        //         <td class="am-hide-sm-only">'+data[k].stage_desc+'</td>\
                        //         <td>\
                        //             <div class="am-btn-toolbar">\
                        //                 <div class="am-btn-group am-btn-group-xs">\
                        //                     <a href="{:url('Course/courseUpd')}" class="am-btn am-btn-default am-btn-xs am-text-secondary" >\
                        //                         <span class="am-icon-pencil-square-o"></span> 编辑\
                        //                     </a>\
                        //                      <a href="{:url('Course/courseDel')}?course_id=<?=$v['course_id']?>" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" >\
                        //                         <span class="am-icon-trash-o"></span> 删除\
                        //                     </a>\
                        //                 </div>\
                        //             </div>\
                        //         </td>\
                        //     </tr>\
                        //     <div class="am-cf">\
                        //         <div class="pagelist">\
                        //             {$data ->render()}\
                        //         </div>\
                        //     </div>'   
                        }
                        // $('#body').html(html);
                })
            } else {
                window.location.href='/admin/course/course.html'
            }
        })

         //  年级 替换
        $("#stage").change(function(){
            var stage_id = $('#stage').val()
            // alert(stage_id)
            $.get("/admin/course/courseAjax",{stage_id:stage_id},function(data){
                var html = ""
                html+='<select name="stage_child_id" id="box" >\
                        <option value=""> --  请先选择学段 -- </option>'
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
                        <option value=""> --  请先选择年级 -- </option>'
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
                    <option value=""> --  请先选择科目 -- </option>'
                for(k in data){
                    html+='<option value="'+data[k].teacher_id+'" >'+data[k].teacher_name+'</option>\
                        </select>';
                }
                $('#teacher').html(html);
            })
        })

        //  
        $('#search').click(function(){
            var stage_id = $('#stage').val()         //学段
            var stage_child_id = $('#box').val()  //年级
            var subject_id = $('#subject').val()     // 科目
            var course_type = $('#type').val()           //类型
            var teacher_id = $('#teacher').val()     //教师
            if (stage_id == "" ||stage_child_id =="" || subject_id =="" ||   course_type =="" || teacher_id =="" ) {
                alert('请选择详细搜索条件')
            }
            $.get("/admin/course/courseSearch",{stage_id:stage_id,stage_child_id:stage_child_id,subject_id:subject_id,course_type:course_type,teacher_id:teacher_id},function(data){
                var data = data.data
                // console.log(data)
                var html = ""
                for (k in data) {
                    html +=  '<tr>'
                    html +=  '<td>'
                    html +=  '<input type="checkbox" name="box[]" value="'+data[k].course_id+'?>">'
                    html +=  '</td>'
                    html +=  '<td>'+data[k].course_id+'</td>'
                    html +=  '<td><a href="#">'+data[k].course_name+'</a></td>'
                    html +=  '<td class="am-hide-sm-only">'+data[k].stage_name+'</td>'
                    html +=  '<td class="am-hide-sm-only">'+data[k].stage_child_name+'</td>'
                    html +=  '<td class="am-hide-sm-only">'+data[k].subject_name+'?></td>'
                    html +=  '<td class="am-hide-sm-only">'
                    html +=  '{if condition="'+data[k].course_type+' eq 0"}'
                    html +=  '同步课'
                    html +=  '{else/}'
                    html +=  '专题课'
                    html +=  '{/if}'
                    html +=  '</td>'
                    html +=  '<td class="am-hide-sm-only">'+data[k].course_num+'</td>'
                    html +=  '<td class="am-hide-sm-only">'+data[k].course_money+'</td>'
                    html +=  '<td class="am-hide-sm-only">'+data[k].course_number+'</td>'
                    html +=  '<td class="am-hide-sm-only">'+data[k].teacher_name+'</td>'
                    html +=  '<td class="am-hide-sm-only">'
                    html +=  '{if condition="'+data[k].is_audition+' eq 0"}'
                    html +=  '不能试听'
                    html +=  '{else/}'
                    html +=  '可以试听'
                    html +=  '{/if}'
                    html +=  '</td>'
                    html +=  '<td class="am-hide-sm-only"><img src="'+data[k].course_img+'" class="img_me"></td>'
                    html +=  '<td class="am-hide-sm-only"><video width="320" height="240" controls="controls" src="'+data[k].course_video+'"></video></td>'
                    html +=  '<td class="am-hide-sm-only">'+data[k].stage_desc+'</td>'
                    html +=  '<td>'
                    html +=  '<div class="am-btn-toolbar">'
                    html +=  '<div class="am-btn-group am-btn-group-xs">'
                    html +=  '<a href="{:url('Course/courseUpd')}?course_id='+data[k].course_id+'" class="am-btn am-btn-default am-btn-xs am-text-secondary" >'
                    html +=  '<span class="am-icon-pencil-square-o"></span> 编辑'
                    html +=  '</a>'
                    html +=  '<a href="{:url('Course/courseDel')}?course_id='+data[k].course_id+'" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" >'
                    html +=  '<span class="am-icon-trash-o"></span> 删除'
                    html +=  '</a>'
                    html +=  '</div>'
                    html +=  '</div>'
                    html +=  '</td>'
                    html +=  '</tr>'
                }
                // html +=  '<tr>'
                // html +=  '<td colspan="16">'
                // html +=  '<div class="am-cf">'
                // html +=  '<div class="pagelist">'
                // html +=  '{$data ->render()}'
                // html +=  '</div>'
                // html +=  '</div>' 
                // html +=  '</td>'
                // html +=  '</tr>'
                $('#body').html(html)
            })
        })

     })
</script>