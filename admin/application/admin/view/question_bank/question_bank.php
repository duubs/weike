

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

                                    
                                   <a href="{:url('QuestionBank/questionAdd')}" class="am-btn am-btn-default am-btn-success" >
                                        <span class="am-icon-plus"></span> 新增
                                    </a>       
                                </div>
                            </div>
                        </div>
                        <div >   
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
                                            <th class="table-title">试题名称</th>
                                            
                                            <th class="table-author am-hide-sm-only">正答率</th>
                                            <th class="table-author am-hide-sm-only">创建时间</th>
                                            <th class="table-author am-hide-sm-only">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody id="body">
                                       <?php foreach($data as $k => $v) {?>
                                        <tr id="{$v['test_id']}">
                                            <td><input type="checkbox" name="box" ></td>
                                            <td><?=$v['test_id']?></td>
                                            <td><a href="#"><?=$v['test_name']?></a></td>
                                         
                                            <td class="am-hide-sm-only"><?=$v['test_true_code']?></td>
                                            <td class="am-hide-sm-only"><?=date('Y-m-d H:i:s')?></td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                      
                                                       <a href="{:url('QuestionBank/questionUpdata')}?test_id={$v['test_id']}" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" >
                                                        <span></span> 编辑
                                                        </a> 

                                                            <input type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" id="delete" name="<?=$v['test_id']?>" value="删除">

                                                             <a href="{:url('QuestionBank/questionDes')}?test_id={$v['test_id']}" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" >
                                                        <span></span> 详情
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
                                            {$data->render()}
    

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
        $('#delete').click(function(){
          var test_id = $(this).attr('name');
          $.get("/admin/questionbank/questionDelete",{test_id:test_id},function(data) {
              if (data == 1) {
                $('#'+test_id).remove();
              }else{
                alert('删除失败');
              }
            
          })
        })
      })


      $(function(){
        $('#search').click(function(){
            var key = $('#key').val();
            $.get('admin/questionbank/questionSearch',{key:key},function(data){
                var html="";
                for(k in data){
                    html+=' <tr>\
                                <td><input type="checkbox" name="box" ></td>\
                                <td>'+data[k].test_id+'</td>\
                                <td><a href="#">'+data[k].test_name+'</a></td>\
                                <td class="am-hide-sm-only">'+data[k].test_analysis+'</td>\
                                <td class="am-hide-sm-only">'+data[k].test_true_code+'</td>\
                                <td class="am-hide-sm-only">'+data[k].test_create_time+'</td>\
                                 <td>\
                                    <div class="am-btn-toolbar">\
                                        <div class="am-btn-group am-btn-group-xs">\
                                           <a href="{:url('QuestionBank/questionUpdata')}?test_id={$v['test_id']}" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" >\
                                            <span></span> 编辑\
                                            </a> \
                                                <input type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" id="delete" name="<?=$v['test_id']?>" value="删除">\
                                                 <a href="{:url('QuestionBank/questionDes')}?test_id={$v['test_id']}" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" >\
                                                        <span></span> 详情\
                                                        </a>\
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

