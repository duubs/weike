
{include file="common/header"}

        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                微课网用户信息表
            </div>
            <ol class="am-breadcrumb">
                <li><a href="{:url('Admin/index')}" class="am-icon-home">首页</a></li>
                <li class="am-active">会员套餐信息表</li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                     <div class="tpl-portlet-input tpl-fz-ml">
                    </div>
                </div>
                <div class="tpl-block">
                    <div class="am-g">
                        <div class="am-u-sm-6 am-u-md-6">
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <a href="{:url('Package/packageAdd')}" class="am-btn am-btn-default am-btn-success" >
                                        <span class="am-icon-plus"></span> 新增
                                    </a>
                                    <button class="am-btn am-btn-default am-btn-danger" id="del">
                                    <span class="am-icon-pencil-square-o"></span> 删除</button>&nbsp;
                                    <input type="button" class="all"  value="check all" >
                                    <input type="button" class="no" value="check no"> 
                                </div>
                            </div>
                        </div>
                        <div >
                            
                        </div>
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-input-group am-input-group-sm">
                                <input type="text" class="am-form-field" id="key">
                                <span class="am-input-group-btn">
                                    <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="button" id="search"></button>
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
                                            <th class="table-author am-hide-sm-only">套餐编号</th>
                                            <th class="table-author am-hide-sm-only">套餐名称</th>
                                            <th class="table-author am-hide-sm-only">套餐金额</th>
                                            <th class="table-author am-hide-sm-only">套餐时长</th>
                                            <th class="table-author am-hide-sm-only">封面</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody id="body">
                                    <?php foreach($data as $v) {?>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="box[]" value="<?=$v['package_id']?>">
                                            </td>
                                            <td><?=$v['package_id']?></td>
                                            <td><?=$v['package_name']?></td>
                                            <td><?=$v['package_money']?></td>
                                            <td><?php if ($v['longtime'] == '15552000') echo "半年"; else echo "一年";?></td>
                                            <td><img src="<?=$v['package_img']?>" style="width: 40px; height: 40px;" ></td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <a href="{:url('Package/packageUpd')}?package_id=<?=$v['package_id']?>" class="am-btn am-btn-default am-btn-xs am-text-secondary" >
                                                            <span class="am-icon-pencil-square-o"></span> 编辑
                                                        </a>
                                                         <a href="{:url('Package/packageDel')}?package_id=<?=$v['package_id']?>" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" >
                                                            <span class="am-icon-trash-o"></span> 删除
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                                <hr>
                            </form>
                            <div class="am-cf" id="page">
                                <div class="pagelist">
                                    {$data ->render()}
                                </div>
                            </div>  
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
                var package_id = '';
                for(var i=0; i<box.length; i++){
                    if(box[i].checked) package_id += box[i].value+','; //如果选中，将value添加到变量s中
                } 
                $.get("/admin/package/packageDel",{package_id:package_id},function(data){
                    if (data != false) {
                        window.location.href='/admin/package/package.html'
                    }
                })
            } else {
                window.location.href='/admin/package/package.html'
            }
        })

        // 搜索
        $('#search').click(function(){
            var key = $('#key').val()
            $('#page').show('hidden')
            $.get("/admin/package/packageSearch",{key:key},function(data){
                var html = ""
                for(var k in data){
                    html+= '<tr>'
                    html+= '<td>'
                    html+= '<input type="checkbox" name="box[]" value="'+data[k].package_id+'">'
                    html+= '</td>'
                    html+= '<td>'+data[k].package_id+'</td>'
                    html+= '<td>'+data[k].package_name+'</td>'
                    html+= '<td>'+data[k].package_money+'</td>'
                    html+= '<td>'
                    html+= '{if condition="'+data[k].longtime+' eq 15552000"}'
                    html+= '同步课'
                    html+= '{else/}'
                    html+= '专题课'
                    html+= '{/if}'
                    html+= '</td>'
                    html+= '<td><img src="'+data[k].package_img+'" style="width: 40px; height: 40px;" ></td>'
                    html+= '<td>'
                    html+= '<div class="am-btn-toolbar">'
                    html+= '<div class="am-btn-group am-btn-group-xs">'
                    html+= '<a href="{:url('Package/packageUpd')}?package_id='+data[k].package_id+'" class="am-btn am-btn-default am-btn-xs am-text-secondary" >'
                    html+= '<span class="am-icon-pencil-square-o"></span> 编辑'
                    html+= '</a>'
                    html+= '<a href="{:url('Package/packageDel')}?package_id='+data[k].package_id+'" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" >'
                    html+= '<span class="am-icon-trash-o"></span> 删除'
                    html+= '</a>'
                    html+= '</div>'
                    html+= '</div>'
                    html+= '</td>'
                    html+= '</tr>'
                }
                $('#body').html(html);
            })
        })

       

     })
</script>