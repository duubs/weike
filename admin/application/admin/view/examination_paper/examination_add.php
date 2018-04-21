{include file="common/header"}



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
                                    <label for="user-name" class="am-u-sm-3 am-form-label">试题名称</label>
                                    <div class="am-u-sm-9">
                                        <input type="text"  name="test_name" placeholder="试题名称">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-3 am-form-label">题型</label>
                                    <div class="am-u-sm-9">
                                         <select name="test_question_id" style=" width: 100px; height: 40px" id="question">
                                            <option value="请选择">请选择</option>
                                            <?php foreach ($question as $key => $value): ?>
                                                <option value="{$value['question_id']}" >{$value['question_name']}</option>
                                            <?php endforeach ?>
                                         </select>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">试题答案  </label>
                                    <div class="am-u-sm-9" id="answer">
                                      
                                    </div>
                                </div>
                                
                                <div class="am-form-group"  >
                                    <label for="user-email" class="am-u-sm-3 am-form-label">试题解析</label>
                                    <div class="am-u-sm-9" id="analysis">
                                      <textarea name="test_analysis" id="" cols="30" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="am-form-group"> 
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">试题章节</label>
                                    <div class="am-u-sm-9">
                                       <select name="test_chatper_id" id="" style=" width: 100px; height: 40px">
                                            <option value="请选择">请选择</option>
                                            <?php foreach ($chapter as $key => $value): ?>
                                                <option value="{$value['chapter_id']}">{$value['chapter_name']}</option>
                                            <?php endforeach ?>
                                         </select>
                                    </div>
                                </div>

                                

                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">题注</label>
                                    <div class="am-u-sm-9">
                                       <select name="test_caption_id" id="" style=" width: 100px; height: 40px">
                                            <option value="请选择">请选择</option>
                                            <?php foreach ($caption as $key => $value): ?>
                                                <option value="{$value['caption_id']}">{$value['caption_name']}</option>
                                            <?php endforeach ?>
                                         </select>
                                     
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">课本</label>
                                    <div class="am-u-sm-9">
                                       <select name="test_book_id" id="" style=" width: 100px; height: 40px">
                                            <option value="请选择">请选择</option>
                                            <?php foreach ($textbook as $key => $value): ?>
                                                <option value="{$value['textbook_id']}">{$value['textbook_name']}</option>
                                            <?php endforeach ?>
                                         </select>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">版本</label>
                                    <div class="am-u-sm-9">
                                    	 <select name="test_edition_id" id="" style=" width: 100px; height: 40px">
                                            <option value="请选择">请选 择</option>
                                            <?php foreach ($edition as $key => $value): ?>
                                                <option value="{$value['edition_id']}">{$value['edition_name']}</option>
                                            <?php endforeach ?>
                                         </select>
                                     
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">科目</label>
                                    <div class="am-u-sm-9">
                               			 <select name="test_project_id" id="" style=" width: 100px; height: 40px">
                                            <option value="请选择">请选择</option>
                                            <?php foreach ($subject as $key => $value): ?>
                                                <option value="{$value['subject_id']}">{$value['subject_name']}</option>
                                            <?php endforeach ?>
                                         </select>
                                       
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">学段</label>
                                    <div class="am-u-sm-9">
                                        <select name="test_section_id" id="" style=" width: 100px; height: 40px">
                                            <option value="请选择">请选择</option>
                                            <?php foreach ($stage as $key => $value): ?>
                                                <option value="{$value['stage_cate_id']}">{$value['stage_name']}</option>
                                            <?php endforeach ?>
                                         </select>
                                    </div>
                                </div>
					            <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <input type="submit" value="保存添加"  class="am-btn am-btn-primary">
                                       
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
        $(function(){
           $('#question').change(function(){
              var name = $(this).val(); 
              if (name=='1') {

                $('#answer').html('<input type="radio" name="test_answer" value="A">A  <input type="radio" name="test_answer" value="B">B  <input type="radio" name="test_answer" value="C">C  <input type="radio" name="test_answer" value="D">D')

            }else if(name=='2'){
                 $('#answer').html('<input type="checkbox" name="test_answer" value="A">A  <input type="checkbox" name="test_answer" value="B">B  <input type="checkbox" name="test_answer" value="C">C  <input type="checkbox" name="test_answer" value="C">D  ')

            }else if(name=='3'){

                 $('#answer').html('<textarea name="test_answer" id="" cols="30" rows="3"></textarea>')

            }else if(name=='4'){

                $('#answer').html('<textarea name="test_answer" id="" cols="30" rows="3"></textarea>');

            }else{

            }
              
              
           })
        })

    </script>

    <script src="admin/js/amazeui.min.js"></script>
    <script src="admin/js/app.js"></script>
</body>

</html>


       