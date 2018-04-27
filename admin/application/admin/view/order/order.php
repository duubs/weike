
{include file="common/header"}

        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                微课网订单信息表
            </div>
            <ol class="am-breadcrumb">
                <li><a href="{:url('Admin/index')}" class="am-icon-home">首页</a></li>
                <li class="am-active">订单信息表</li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                    </div>
                    <div class="tpl-portlet-title">
                        </div>

                </div>
                <div class="tpl-block">
                    <div class="am-g">
                        <div class="am-u-sm-6 am-u-md-6">
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <!-- <a href="{:url('Order/orderAdd')}" class="am-btn am-btn-default am-btn-success" >
                                        <span class="am-icon-plus"></span> 新增
                                    </a> -->
                                  <!--   <button class="am-btn am-btn-default am-btn-danger" id="del">
                                    <span class="am-icon-pencil-square-o"></span> 删除</button>&nbsp; -->
                                    <input type="button" class="all"  value="check all"  >
                                    <input type="button" class="no" value="check no"> 
                                    </a> 
                                </div>
                            </div>
                        </div>
                        <div >
                            
                        </div>
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-input-group am-input-group-sm">
                                <input type="text" class="am-form-field" name="search">
                                <span class="am-input-group-btn">
                                    <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="button" id="btn"></button>
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
                                            <th class="table-id">订单编号</th>
                                            <th class="table-title">订单唯一编号</th>
                                            <th class="table-author am-hide-sm-only">订单名称</th>
                                            <th class="table-author am-hide-sm-only">订单总额</th>
                                            <th class="table-author am-hide-sm-only">优惠金额</th>
                                            <th class="table-author am-hide-sm-only">订单金额</th>
                                            <th class="table-author am-hide-sm-only">支付方式</th>
                                            <th class="table-author am-hide-sm-only">下单时间</th>
                                            <th class="table-author am-hide-sm-only">用户名称</th>
                                            <th class="table-author am-hide-sm-only">订单状态</th>
                                            <th class="table-author am-hide-sm-only">是否作废</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody id="body">
                                        <?php foreach ($data as $k => $v) {?>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="box[]" value="<?=$v['order_id']?>">
                                            </td>
                                            <td class="table-id"><?=$v['order_id']?></td>
                                            <td class="table-title"><?=$v['only_id']?></td>
                                            <td class="am-hide-sm-only"><?=$v['order_name']?></td>
                                            <td class="am-hide-sm-only"><?=$v['order_original_quota']?></td>
                                            <td class="am-hide-sm-only"><?=$v['order_discount']?></td>
                                            <td class="am-hide-sm-only"><b><?=$v['order_quota']?></b></td>
                                            <td class="am-hide-sm-only"><?=$v['order_mode']?></td>
                                            <td class="am-hide-sm-only"><?=date('Y-m-d H:i:s',$v['order_time'])?></td>
                                            <td class="am-hide-sm-only"><?=$v['user_name']?></td>
                                            <td class="am-hide-sm-only">
                                                <?php if ($v['state']==1) echo "支付成功"; else echo "未支付";?>
                                                    
                                            </td>
                                            <td class="am-hide-sm-only">
                                                <?php if ($v['is_void']==1) echo "<b>"."已作废"."</b>"; else echo "正常";?>
                                                
                                            </td>
                                            <td class="am-hide-sm-only">
                                                <?php if ($v['is_void'] == 1 ) { ?>
                                                不可操作
                                                <?php } else if ($v['is_void'] == 0  &&  $v['state']==1  ) {?>
                                                 <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                      <!--   <a href="{:url('Order/orderUpd')}?order_id=<?=$v['order_id']?>" class="am-btn am-btn-default am-btn-xs am-text-secondary" >
                                                            <span class="am-icon-pencil-square-o"></span> 改价
                                                        </a> -->
                                                         <a href="{:url('Order/orderDel')}?order_id=<?=$v['order_id']?>" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" >
                                                            <span class="am-icon-trash-o"></span> 作废
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php } else { ?>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <a href="{:url('Order/orderUpd')}?order_id=<?=$v['order_id']?>" class="am-btn am-btn-default am-btn-xs am-text-secondary" >
                                                            <span class="am-icon-pencil-square-o"></span> 改价
                                                        </a>
                                                         <a href="{:url('Order/orderDel')}?order_id=<?=$v['order_id']?>" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" >
                                                            <span class="am-icon-trash-o"></span> 作废
                                                        </a>
                                                    </div>
                                                </div>

                                                <?php }?>

                                            </td>
                                        </tr>
                                        <?php } ?>
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