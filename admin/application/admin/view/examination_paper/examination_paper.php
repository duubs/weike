
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
                                <i class="am-icon-search" id="search"></i>
                                <input type="text" class="form-control form-control-solid" placeholder="搜索..." id="key"> </div>
                        </div>
                    </div>


                </div>
                <div class="tpl-block">
                    <div class="am-g">
                        <div class="am-u-sm-6 am-u-md-6">
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    
                                  <!--  <a href="{:url('ExaminationPaper/examinationAdd')}" class="am-btn am-btn-default am-btn-success" > -->
                                        <span  class="am-icon-plus" ></span> 新增
                                    <!-- </a>        -->
                                </div>
                            </div>
                        </div>
                        <div >   
                        </div>
                        <div >
                            <div >
                                <span style="font-size:18px;">学段</span>
                                    <select name="stage_name" style="width:60px;height:25px;" id="stage_name">
                                        <option value="">请选学段</option>
                                     <?php foreach ($stage as $key => $value): ?>
                                      <option value="{$value['stage_cate_id']}">{$value['stage_name']}</option>
                                     <?php endforeach ?>
                                    </select>
                                <span style="font-size:18px;">科目</span>
                                <select name="subject_id" id="subject" style="width:60px;height:25px;">
                                     <option value="">请选年级</option>
                                    <?php foreach ($subject as $key => $value): ?>
                                       <option value="{$value['subject_id']}">{$value['subject_name']}</option> 
                                    <?php endforeach ?>
                                   
                                </select>
                                 <span style="font-size:18px;">年份</span>
                                <select name="subject_id" id="month" style="width:60px;height:25px;">
                                    <option value="">请选年份</option>
                                    <?php foreach ($month as $key => $value): ?>
                                        <option value="{$value['month_id']}">{$value['month_name']}</option>
                                    <?php endforeach ?>
                                </select>
                                 <span style="font-size:18px;">地区</span>
                                <select name="subject_id" id="area" style="width:60px;height:25px;">
                                    <option value="">请选地区</option>
                                    <?php foreach ($area as $key => $value): ?>
                                        <option value="{$value['area_id']}">{$value['area_name']}</option>
                                    <?php endforeach ?>
                                </select>

                                <button class="am-btn am-btn-default am-btn-warning" id="go">GO</button>
                            </div>
                        </div>
                    </div>
                     
                    <div class="am-g">
                        <div class="am-u-sm-12">
                            <form class="am-form">
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-check"><input type="checkbox" class="tpl-table-fz-check" id="ace"  ></th>
                                            <th class="table-id">编号</th>
                                            <th class="table-title">试卷名称</th>
                                            <th class="table-author am-hide-sm-only">创建时间</th>
                                            <th class="table-author am-hide-sm-only">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody id="body">
                                        <?php foreach($data as $k => $v) {?>
                                        <tr id="{$v['paper_id']}">
                                            <td><input type="checkbox" name="box" ></td>
                                            <td><?=$v['paper_id']?></td>
                                            <td><a href="#"><?=$v['paper_name']?></a></td>
                                            <td class="am-hide-sm-only"><?=date('Y-m-d H:i:s')?></td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                      
                                                      

                                                            <input type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" id="delete" name="<?=$v['paper_id']?>" value="删除">

                                                         <a href="{:url('ExaminationPaper/examinationDesc')}?paper_id={$v['paper_id']}" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" >
                                                        <span></span> 预览试卷
                                                        </a> 

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } ?>                                        
                                    </tbody>
                                </table>
                                <div class="am-cf">
                                    <div class="am-fr">
                                        <ul class="am-pagination tpl-pagination">
                                          
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                            </form>
                        </div>
                    </div>
                </div>
            <div class="tpl-alert"></div>
        </div>
    </div>
</div>
    <script src="admin/js/jquery.min.js"></script>
    <script type="text/javascript">
      $(function(){
        $('#stage_name').change(function(){
            var stage_id = $(this).val();
            $.get('/admin/examinationpaper/examinationDown',{stage_id:stage_id},function(data){
              
                var html=""
                for(k in data){
                    html+='<tr>\
                                <td><input type="checkbox" name="box" ></td>\
                                <td>'+data[k].paper_id+'</td>\
                                <td><a href="#">'+data[k].paper_name+'</a></td>\
                                <td class="am-hide-sm-only">'+getLocalTime(data[k].time)+'</td>\
                                 <td>\
                                    <div class="am-btn-toolbar">\
                                        <div class="am-btn-group am-btn-group-xs">\
                                                <input type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" id="delete" name="<?=$v['paper_id']?>" value="删除">\
                                                <a href="{:url('ExaminationPaper/examinationDesc')}?paper_id={$v['paper_id']}" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" >\
                                                        <span></span> 预览试卷\
                                                        </a> \
                                        </div>\
                                    </div>\
                                </td>\
                            </tr>';
                        }
                        $('#body').html(html);
                 })

                 

            })

            $('#subject').change(function(){
                var subject_id = $(this).val();
                $.get('/admin/examinationpaper/examinationSubject',{subject_id:subject_id},function(data){
                    var html =""
                    for(k in data){
                        html+='<tr>\
                                <td><input type="checkbox" name="box" ></td>\
                                <td>'+data[k].paper_id+'</td>\
                                <td><a href="#">'+data[k].paper_name+'</a></td>\
                                <td class="am-hide-sm-only">'+getLocalTime(data[k].time)+'</td>\
                                 <td>\
                                    <div class="am-btn-toolbar">\
                                        <div class="am-btn-group am-btn-group-xs">\
                                                <input type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" id="delete" name="<?=$v['paper_id']?>" value="删除">\
                                                <a href="{:url('ExaminationPaper/examinationDesc')}?paper_id={$v['paper_id']}" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" >\
                                                        <span></span> 预览试卷\
                                                        </a> \
                                        </div>\
                                    </div>\
                                </td>\
                            </tr>';
                    }
                    $('#body').html(html);
                })
            })


            $('#month').change(function(){
                var month_id = $(this).val();
                $.get('/admin/examinationpaper/examinationMonth',{month_id:month_id},function(data){
                    var html =""
                    for(k in data){
                        html+='<tr>\
                                <td><input type="checkbox" name="box" ></td>\
                                <td>'+data[k].paper_id+'</td>\
                                <td><a href="#">'+data[k].paper_name+'</a></td>\
                                <td class="am-hide-sm-only">'+getLocalTime(data[k].time)+'</td>\
                                 <td>\
                                    <div class="am-btn-toolbar">\
                                        <div class="am-btn-group am-btn-group-xs">\
                                                <input type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" id="delete" name="<?=$v['paper_id']?>" value="删除">\
                                                <a href="{:url('ExaminationPaper/examinationDesc')}?paper_id={$v['paper_id']}" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" >\
                                                        <span></span> 预览试卷\
                                                        </a> \
                                        </div>\
                                    </div>\
                                </td>\
                            </tr>';
                    }
                    $('#body').html(html);
                })
            })

             $('#area').change(function(){
                var area_id = $(this).val();
                $.get('/admin/examinationpaper/examinationArea',{area_id:area_id},function(data){
                    var html =""
                    for(k in data){
                        html+='<tr>\
                                <td><input type="checkbox" name="box" ></td>\
                                <td>'+data[k].paper_id+'</td>\
                                <td><a href="#">'+data[k].paper_name+'</a></td>\
                                <td class="am-hide-sm-only">'+getLocalTime(data[k].time)+'</td>\
                                 <td>\
                                    <div class="am-btn-toolbar">\
                                        <div class="am-btn-group am-btn-group-xs">\
                                                <input type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" id="delete" name="<?=$v['paper_id']?>" value="删除">\
                                                <a href="{:url('ExaminationPaper/examinationDesc')}?paper_id={$v['paper_id']}" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" >\
                                                        <span></span> 预览试卷\
                                                        </a> \
                                        </div>\
                                    </div>\
                                </td>\
                            </tr>';
                    }
                    $('#body').html(html);
                })
            })

             $('#go').click(function(){
               var stage_name = $('#stage_name').val();
               var subject = $('#subject').val();
               var month = $('#month').val();
               var area = $('#area').val();
              $.get("/admin/examinationpaper/examinationGo",{stage_name:stage_name,subject:subject,month:month,area:area},function(data) {
                var html=''
                for(k in data){
                    html+='<tr>\
                                <td><input type="checkbox" name="box" ></td>\
                                <td>'+data[k].paper_id+'</td>\
                                <td><a href="#">'+data[k].paper_name+'</a></td>\
                                <td class="am-hide-sm-only">'+getLocalTime(data[k].time)+'</td>\
                                 <td>\
                                    <div class="am-btn-toolbar">\
                                        <div class="am-btn-group am-btn-group-xs">\
                                                <input type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" id="delete" name="<?=$v['paper_id']?>" value="删除">\
                                                <a href="{:url('ExaminationPaper/examinationDesc')}?paper_id={$v['paper_id']}" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" >\
                                                        <span></span> 预览试卷\
                                                        </a> \
                                        </div>\
                                    </div>\
                                </td>\
                            </tr>';
                }
                 $('#body').html(html);
              })
                 

             })
            
        })
      
      $(function(){
        $('#delete').click(function(){
          var paper_id = $(this).attr('name');
          $.get("/admin/examinationpaper/examinationDelete",{paper_id:paper_id},function(data) {
              if (data == 1) {
                $('#'+paper_id).remove();
              }else{
                alert('删除失败');
              }
            
          })
        })
      })


      //时间戳转日期格式
    function getLocalTime(nS) { 
        return new Date(parseInt(nS) * 1000).toLocaleString().replace(/年|月/g, "-").replace(/日/g, "");
    } 

      $(function(){
        $('#search').click(function(){
            var key = $('#key').val();

            $.get('admin/examinationpaper/examinationSearch',{key:key},function(data){

                var html="";
                for(k in data){
                    html+='<tr>\
                                <td><input type="checkbox" name="box" ></td>\
                                <td>'+data[k].paper_id+'</td>\
                                <td><a href="#">'+data[k].paper_name+'</a></td>\
                                <td class="am-hide-sm-only">'+data[k].subject_name+'</td >\
                                <td class="am-hide-sm-only">'+getLocalTime(data[k].time)+'</td>\
                                 <td>\
                                    <div class="am-btn-toolbar">\
                                        <div class="am-btn-group am-btn-group-xs">\
                                                <input type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" id="delete" name="<?=$v['paper_id']?>" value="删除">\
                                                <a href="{:url('ExaminationPaper/examinationDesc')}?paper_id={$v['paper_id']}" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" >\
                                                        <span></span> 预览试卷\
                                                        </a> \
                                        </div>\
                                    </div>\
                                </td>\
                            </tr>';

                }
                $('#body').html(html);

            })
        })
      })
    </script>
    <script src="admin/js/amazeui.min.js"></script>
    <script src="admin/js/app.js"></script>
</body>

</html>
