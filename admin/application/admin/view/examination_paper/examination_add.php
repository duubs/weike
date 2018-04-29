{include file="common/header"}
<style>
        /*分页样式*/  
    .pagination{text-align:center;margin-top:20px;margin-bottom: 20px;}  
    .pagination li{margin:0px 10px; border:1px solid #e6e6e6;padding: 3px 8px;display: inline-block;}  
    .pagination .active{background-color: #dd1a20;color: #fff;}  
    .pagination .disabled{color:#aaa;}  
</style>


        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                Micro 试卷新增
            </div>
            <ol class="am-breadcrumb">
                <li><a href="{:url('Admin/index')}" class="am-icon-home">首页</a></li>
                <li><a href="/admin/course/course">试卷信息</a></li>
                <li class="am-active">试卷课程</li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 试卷
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
                            <form class="am-form am-form-horizontal" action="/admin/examinationpaper/examinationDo" method="post" enctype="multipart/form-data" >
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">试卷名称</label>
                                    <div class="am-u-sm-9">
                                        <input type="text"  name="paper_name" placeholder="试卷名称">
                                    </div>
                                </div>

                                 <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">试卷学段</label>

                                    <div class="am-u-sm-9">
                                        
                                         <select name="stage_cate_id" id="stage">
                                          <option value="请选择">请选择</option>
                                        <?php foreach ($stage as $key => $value): ?>

                                            <option value="{$value['stage_cate_id']}" >{$value['stage_name']}</option>
                                       
                                       <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>

                               <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">试卷科目</label>

                                    <div class="am-u-sm-9">
                                        
                                         <select name="subject_id" id="subject">
                                          <option value="请选择">请选择</option>
                                        <?php foreach ($data as $key => $value): ?>
                                       
                                            <option value="{$value['subject_id']}" >{$value['subject_name']}</option>
                                       
                                       <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>

                                 <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">试卷年份</label>

                                    <div class="am-u-sm-9">
                                        
                                         <select name="month_id" id="month">
                                          <option value="请选择">请选择</option>
                                        <?php foreach ($month as $key => $value): ?>
                                       
                                            <option value="{$value['month_id']}" >{$value['month_name']}</option>
                                       
                                       <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>

                                 <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">试卷地区</label>

                                    <div class="am-u-sm-9">
                                        
                                         <select name="area_id" id="area">
                                          <option value="请选择">请选择</option>
                                        <?php foreach ($area as $key => $value): ?>
                                       
                                            <option value="{$value['area_id']}" >{$value['area_name']}</option>
                                       
                                       <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>

                                  <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">试卷题型</label>

                                    <div class="am-u-sm-9">
                                        
                                         <select name="test_ids" id="type">
                                          <option value="请选择">请选择</option>
                                        <?php foreach ($question as $key => $value): ?>

                                            <option value="{$value['question_id']}" >{$value['question_name']}</option>
                                       
                                       <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>

                                


                               <!--  <input type="hidden" id="single_ids" name="single_ids" value="">
                                <input type="hidden" id="many_ids" name="many_ids" value="">
                                <input type="hidden" id="fill_ids" name="fill_ids" value="">
                                <input type="hidden" id="solution_ids" name="solution_ids" value="">
                                <input type="hidden" id="tixing" value=""> -->
                                 <div class="am-form-group" >
                                    <label for="user-name" class="am-u-sm-3 am-form-label">试卷题</label>

                                    <div class="am-u-sm-9" id="question">   
                                        
                                    </div>

                                </div>
                                </div>

                                </div>
					            <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <input type="submit" value="保存添加"  class="am-btn am-btn-primary" >
                                       
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
    <script type="text/javascript">


        // $(function(){
        //     $('#subject').change(function(){
        //         var subject_name = $(this).val();
        //         $.get('/admin/examinationpaper/examinationDemo',{subject_name:subject_name},function(data){
        //             var html = '';
        //            $.each(data,function(i,n){
        //                 html += n.test_name;
        //            });
        //            $('#question').html(html);
        //         })
        //     })

        // })


        // $('#type').change(function(){
        //     var question_id = $(this).val();
        //    $.get('/admin/examinationpaper/examinationDamo',{question_id:question_id},function(data){
        //         var html = '';
        //         $.each(data.data,function(i,n){

        //             html += n.test_name+'<input type="button" onclick="dian('+n.test_id+')" style="margin-left: 550px" value="组卷">';
        //         });

        //         html += '<ul class="pagination"><li><span onclick="yii('+(data.dangye-1)+')">&laquo;</span></li>';
        //         for (var i = 0; i < data.zongye; i++) {
        //             html += '<li><span onclick="yii('+(i+1)+')">'+(i+1)+'</span><s /li>';
        //         }
                
        //         html += '<li><span onclick="yii('+(data.dangye+1)+')">&raquo;</span></li></ul>';

        //         $('#question').html(html);
        //         $('#tixing').val(question_id);
        //    })
        // })
        // function yii(pagin){
        //      var question_id = $('#type').val();
        //     $.get('/admin/examinationpaper/examinationDamo',{question_id:question_id,pagin:pagin},function(data){
        //         var html = '';
        //         $.each(data.data,function(i,n){

        //             html += n.test_name+'<input type="button" onclick="dian('+n.test_id+')" style="margin-left: 550px" value="组卷">';
        //         });
        //         var dangye1 = data.dangye-1;
        //         var dangye2 = data.dangye+1;
        //         if (data.dangye-1 < 1) { dangye1 = 1;}
        //         if (data.dangye+1 > data.zongye) { dangye2 = data.zongye;}
        //         // 下一页有错 需要 调试

        //         html += '<ul class="pagination"><li><span onclick="yii('+(data.dangye-1)+')">&laquo;</span></li>';
        //         for (var i = 0; i < data.zongye; i++) {
        //             html += '<li><span onclick="yii('+(i+1)+')">'+(i+1)+'</span></li>';
        //         }
                
        //         html += '<li><span onclick="yii('+(data.dangye+1)+')">&raquo;</span></li></ul>';

        //         $('#question').html(html);
        //         $('#tixing').val(question_id);
        //     })
        // }

        // function dian(test_id){
        //     var tixing = $('#tixing').val();
        //     var ids = ['','#single_ids','#many_ids','#fill_ids','#solution_ids'];
        //         if ($(ids[tixing]).val() == '') {
        //             $(ids[tixing]).val($(ids[tixing]).val()+test_id);
        //             return;
        //         }
        //         $(ids[tixing]).val($(ids[tixing]).val()+','+test_id);
        // }
    </script>

    <script src="admin/js/amazeui.min.js"></script>
    <script src="admin/js/app.js"></script>
</body>


</html>


       