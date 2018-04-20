
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
                    <div class="tpl-portlet-title">
                           <!--  <div class="tpl-caption font-green ">
                                <span>指派任务</span>
                                <span class="caption-helper">16 件</span>
                            </div>
                            <div class="tpl-portlet-input">
                                <div class="portlet-input input-small input-inline">
                                    <div class="input-icon right">
                                        <i class="am-icon-search"></i>
                                        <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                                </div>
                            </div> -->
                        </div>

                </div>
                <div class="tpl-block">
                    <div class="am-g">
                        <div class="am-u-sm-6 am-u-md-6">
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <a href="{:url('Order/orderAdd')}" class="am-btn am-btn-default am-btn-success" >
                                        <span class="am-icon-plus"></span> 新增
                                    </a>
                                    <button class="am-btn am-btn-default am-btn-danger" id="del">
                                    <span class="am-icon-pencil-square-o"></span> 删除</button>&nbsp;
                                    <input type="button" class="all"  value="check all" >
                                    <input type="button" class="no" value="check no"> 
                                    
                                      <a href="{:url('Course/coursePreserve')}" class="am-btn am-btn-default am-btn-secondary" >
                                        <span class="am-icon-save"></span> 保存
                                    </a>
                                    <a href="{:url('Course/coruseExam')}" class="am-btn am-btn-default am-btn-warning" >
                                        <span class="am-icon-archive"></span> 审核
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div >
                            
                        </div>
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-input-group am-input-group-sm">
                                <input type="text" class="am-form-field">
                                <span class="am-input-group-btn">
                                    <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="button"></button>
                                </span>
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
                                       
                                       
                                    </tbody>
                                </table>
                                <hr>
                            </form>
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
                   
                })
            } else {
                window.location.href='/admin/course/course.html'
            }
        })

       

     })
</script>