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
                <li class="am-active">用户信息管理表</li>
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
                        <div class="am-u-sm-12 am-u-md-6">
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span> 保存</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                </div>
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-form-group">
                                  <select data-am-selected="{btnSize: 'sm'}" id="info">
                                     <option value="option1" >用户信息</option>
                                     <option value="option2" >会员信息</option>
                                  </select>
                        </div>
                        </div>
                        <!-- <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-input-group am-input-group-sm">
                                <input type="text" class="am-form-field">
                                <span class="am-input-group-btn">
                                <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="button"></button>
                              </span>
                            </div>
                        </div> -->
                    </div>
                    <div class="am-g">
                        <div class="am-u-sm-12">
                            <form class="am-form">
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th>
                                            <th class="table-id">ID</th>
                                            <th class="table-title">用户名称</th>
                                            <th class="table-author am-hide-sm-only">家长名称</th>
                                            <th class="table-author am-hide-sm-only">性别</th>
                                            <th class="table-author am-hide-sm-only">家长电话</th>
                                            <th class="table-date am-hide-sm-only">修改日期</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                        <tbody id="body">
                                    <?php foreach ($data as $key => $value): ?>
                                        
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td><?=$value['user_id'] ?></td>
                                            <td><a href="#"><?=$value['user_name'] ?> </a></td>
                                            <td><?=$value['parent_name'] ?></td>
                                            <td class="am-hide-sm-only">
                                                {if condition="$value['sex'] eq 1"}
                                                    男
                                                {else/}
                                                    女
                                                {/if}
                                            </td>
                                            <td class="am-hide-sm-only"><?=$value['parent_tel'] ?></td>
                                            <td class="am-hide-sm-only"><?=$value['reg_time'] ?></td>
                                            <td>
                                                <div class="am-btn-toolbar" id="button">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <a href="javascript:void(0)" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o" userid="{$value['user_id']}" isfrozen="{$value['is_frozen']}">
                                                        {if condition="$value['is_frozen'] eq 1"}
                                                            已冻结
                                                        {else/}
                                                            解冻
                                                        {/if}
                                                    </span></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                    </tbody>
                                </table>
                                <div class="am-cf">
                                
                                    <div class="am-fr" id="page">
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
            $('#body').on('click','.am-icon-pencil-square-o',function(){
                var userid = $(this).attr('userid');
                var isfrozen = $(this).attr('isfrozen');
                $.get("/admin/user/freeze", {userid:userid,isfrozen:isfrozen},function(data){
                    
                });
                if (isfrozen == 1) {
                    $(this).text('解冻');
                    $(this).attr('isfrozen',0) 
                }else{
                    $(this).text('已冻结');
                    $(this).attr('isfrozen',1)
                }
            });
            
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
                            <td class="am-hide-sm-only">';
                            if (data[k].sex == 1) {
                                html += '男';
                            }else{
                                html+= '女';
                            }
                        html += '</td><td class="am-hide-sm-only">'+data[k].parent_tel+'</td>\
                            <td class="am-hide-sm-only">'+data[k].reg_time+'</td>\
                            <td>\
                                <div class="am-btn-toolbar">\
                                    <div class="am-btn-group am-btn-group-xs">\
                                        <a href="javascript:void(0)" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o" userid="'+data[k].user_id+'" isfrozen="'+data[k].is_frozen+'">';
                            if (data[k].is_frozen == 1) {
                                html += '已冻结';
                            }else{
                                html+= '解冻';
                            }
                        html += ' </span></a>\
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
            $('#search').click(function(){
               var  key = $('#key').val();
              $.get('/admin/user/search',{key:key},function(data){
                 var html=""
                 for(k in data){
                    html+='<tr>\
                            <td><input type="checkbox"></td>\
                            <td>'+data[k].user_id+'</td>\
                            <td><a href="#">'+data[k].user_name+' </a></td>\
                            <td>'+data[k].parent_name+'</td>\
                            <td class="am-hide-sm-only">';
                            if (data[k].sex == 1) {
                                html += '男';
                            }else{
                                html+= '女';
                            }
                         html += '</td><td class="am-hide-sm-only">'+data[k].parent_tel+'</td>\
                            <td class="am-hide-sm-only">'+data[k].reg_time+'</td>\
                            <td>\
                                <div class="am-btn-toolbar">\
                                    <div class="am-btn-group am-btn-group-xs">\
                                        <a href="javascript:void(0)" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o " userid="'+data[k].user_id+'" isfrozen="'+data[k].is_frozen+'">';
                            if (data[k].is_frozen == 1) {
                                html += '已冻结';
                            }else{
                                html+= '解冻';
                            }
                        html += ' </span></a>\
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