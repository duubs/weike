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
                            <form class="am-form am-form-horizontal" action="/admin/examinationpaper/examinationUpdatado" method="post" enctype="multipart/form-data" >
                                <div class="am-form-group">
                                    <input type="hidden" name="paper_id" value="{$data['paper_id']}">

                                    <label for="user-name" class="am-u-sm-3 am-form-label">试卷名称</label>
                                    <div class="am-u-sm-9">
                                        <input type="text"  name="paper_name" value="{$data['paper_name']}" placeholder="试题名称">
                                    </div>
                                </div>
                               
                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">试卷科目</label>
                                     <div class="am-u-sm-9">
                                        <input type="text"  name="subject_name" value="{$data['subject_name']}" placeholder="试试卷科目">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <input type="submit" value="保存修改"  class="am-btn am-btn-primary">
                                       
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


       