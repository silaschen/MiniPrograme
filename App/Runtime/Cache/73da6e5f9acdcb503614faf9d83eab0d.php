<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo ($title); ?></title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="Public/com/AdminLTE/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="Public/com/AdminLTE/css/AdminLTE.css">
<link rel="stylesheet" href="Public/com/AdminLTE/css/skins/skin-red.css">
<!-- jQuery 2.1.4 -->
<script src="//cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="Public/com/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<script src="Public/com/common.js"></script>
<style type="text/css">
/*loading*/
#mask{position: fixed;z-index: 999999;top: 0;bottom: 0;left: 0;right: 0;display: none;}
#mask .loading{padding: 10px 15px;background: #333;opacity: 0.75;text-align: center;color: #FFF;line-height: 23px;position: fixed;left:0;right: 0;bottom: 0;top: 0;width: 120px;height: 65px;z-index: 999999;margin: auto;border-radius: 4px;}
</style>
<!--[if lt IE 9]>
<script src="//cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
  <!-- Main Header -->
<header class="main-header">

  <!-- Logo -->
  <a href="#" target='_blank' class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><i class='fa fa-television'></i></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><i class='fa fa-television'></i> <?php echo APP_NAME;?></span>
  </a>

  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account Menu -->
        <li class="dropdown user user-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- The user image in the navbar-->
            <img src="Public/res/admin.png" class="user-image" alt="User Image">
            <!-- hidden-xs hides the username on small devices so only the image appears. -->
            <span class="hidden-xs"><?php echo $_SESSION['sys_user'];?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- The user image in the menu -->
            <li class="user-header">
              <img src="Public/res/admin.png" class="img-circle" alt="User Image">
              <p>
                <?php echo $_SESSION['sys_user'];?>
                <small>上次登录：<?php echo cookie('lastlogin');?></small>
              </p>
            </li>
      
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="<?php echo U('Sys/profile');?>" class="btn btn-default btn-flat">修改密码</a>
              </div>
              <div class="pull-right">
                <a href="<?php echo U('Sys/logout');?>" onclick="return confirm('确定退出登录？');" class="btn btn-default btn-flat">退出系统</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu">
      <li><a href="<?php echo U('Sys/index');?>"><i class="fa fa-bar-chart"></i> <span>管理概况</span></a></li>
      <li class="treeview">
      <a href="#"><i class="fa fa-clone"></i> <span>教师管理</span><i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
          <li><a href="<?php echo U('Sys/login');?>">教师列表</a></li>
          <li><a href="<?php echo U('TeacherSys/create');?>">添加教师</a></li>
        </ul>
      </li>
      <!--<li class="treeview">-->
        <!--<a href="#"><i class="fa fa-cog"></i> <span>系统设置</span> <i class="fa fa-angle-left pull-right"></i></a>-->
        <!--<ul class="treeview-menu">-->
          <!--<li><a href="<?php echo U('Mate/text');?>">微信素材</a></li>-->
          <!--<li><a href="<?php echo U('Cmd/text');?>">回复规则</a></li>-->
          <!--<li><a href="<?php echo U('ModMenu/edit');?>">微信菜单</a></li>-->
          <!--<li><a href="<?php echo U('Sys/site');?>">站点设置</a></li>-->
          <!--<li><a href="<?php echo U('Sys/advs');?>">轮播广告</a></li>-->
          <!--<li><a href="<?php echo U('Sys/vendor');?>">微信配置</a></li>-->
          <!--<li><a href="<?php echo U('Sys/group');?>">权限控制</a></li>-->
          <!--<li><a href="<?php echo U('Sys/admin');?>">系统管理员</a></li>-->
        <!--</ul>-->
      <!--</li>-->
    </ul><!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
<?php if($eq >= '0' OR $eq != ''): ?><script type="text/javascript">
if(!isNaN('<?php echo ($eq); ?>')){
  $(".sidebar-menu > li").eq(<?php echo ($eq); ?>).addClass('active');
}else{
  $(".sidebar-menu > li").each(function(){
    var txt = $.trim($(this).children('a').text());
    if(txt == '<?php echo ($eq); ?>'){
      $(this).addClass('active');
      return;
    }
  });
}
</script><?php endif; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
    
<link rel="stylesheet" href="Public/com/jQuery-File-Upload-9.9.3/css/jquery.fileupload.css">
<div class="box box-solid">
  <div class="box-header with-border">
    <h3 class="box-title">轮播图管理</h3>
  </div><!-- /.box-header -->
  <div class="box-body">
    <table class='table table-bordered'>
      <thead><th>ID</th><th>图片</th><th>链接</th><th>排序</th><th>添加时间</th><th>管理</th></thead>
      <tbody>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($vo["id"]); ?></td><td><img src='<?php echo ($vo["pic"]); ?>' width='120'></td><td><?php echo ($vo["url"]); ?></td><td><?php echo ($vo["px"]); ?></td><td><?php echo (date('Y-m-d H:i:s',$vo["addtime"])); ?></td>
          <td>
            <div class="btn-group">
              <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                管理
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="javascript:ModifyInfo(<?php echo ($vo["id"]); ?>,'<?php echo ($vo["pic"]); ?>','<?php echo ($vo["url"]); ?>',<?php echo ($vo["px"]); ?>);">修改</a></li>
                <li><a href="javascript:SetStat(<?php echo ($vo["id"]); ?>,-1);">删除</a></li>
              </ul>
            </div>
          </td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      </tbody>
    </table>
  </div><!-- /.box-body -->
  <div class="box-footer">
    <ul class="pagination pagination-sm no-margin pull-left"><?php echo ($page); ?></ul>
    <a href="javascript:ModifyInfo('','','',0);"  class="btn btn-success pull-right">添加轮播图</a>
  </div>
</div>
<!-- 添加修改轮播图 -->
<div class="modal" id='AddAdv'>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <b class="modal-title">编辑轮播图</b>
      </div>
      <div class="modal-body">
        <form id='AdvInfo'>
        <div class='form-group'>
              <button type='button' class='btn btn-success btn-sm fileinput-button'><i class="glyphicon glyphicon-picture"></i> <small>推荐尺寸 520*290 点击上传</small><input  id="uploadcover" type="file" name="files" accept="image/*" ></button>
            <div id="progress" class="progress">
                <div class="progress-bar progress-bar-success"></div>
            </div>
            <div id="files" class="files"></div>
            <div class='showcover'></div>
            <input type='hidden' name='id'>
            <input type='hidden' name='pic'>
            <input type='hidden' name='type' value='1'>
        </div>
        <div class="form-group">
          <label>链接地址</label>
          <input type="url" name='url' class="form-control" placeholder="如：http://www.qq.com">
        </div>
        <div class="form-group">
          <label>排序</label>
          <input type="number" name='px' class="form-control" placeholder="数值越大越靠前">
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">取消</button>
        <button type="button" onclick="SavePic();" class="btn btn-success SavePic">确定</button>
      </div>
    </div>
  </div>
</div>
<script src="Public/com/jQuery-File-Upload-9.9.3/js/vendor/jquery.ui.widget.js"></script>
<script src="Public/com/jQuery-File-Upload-9.9.3/js/load-image.all.min.js"></script>
<script src="Public/com/jQuery-File-Upload-9.9.3/js/canvas-to-blob.min.js"></script>
<script src="Public/com/jQuery-File-Upload-9.9.3/js/jquery.iframe-transport.js"></script>
<script src="Public/com/jQuery-File-Upload-9.9.3/js/jquery.fileupload.js"></script>
<script src="Public/com/jQuery-File-Upload-9.9.3/js/jquery.fileupload-process.js"></script>
<script src="Public/com/jQuery-File-Upload-9.9.3/js/jquery.fileupload-image.js"></script>
<script type="text/javascript">
$(function(){
    $('#uploadcover').fileupload({
        url: "<?php echo U('Common/loadimg');?>",
        dataType: 'JSON',
        acceptFileTypes: 'jpg,png,gif,jpeg,bmp',
        maxFileSize: 8000000, // 800kb
        done: function (e, data) {
          if(data.result.ret == 1){
              IptVal('pic',data.result.file);
              $(".showcover").html("<img width='120' src='"+data.result.file+"'>");
            }else{
              alert(data.result.msg);
            }
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');

});

// 打开编辑模态框
function ModifyInfo(id,pic,url,px){
  IptVal('id',id);
  IptVal('pic',pic);
  if(pic != '' && pic != undefined){
    $(".showcover").html("<img width='120' src='"+pic+"'>");
  }else{
    $(".showcover").html("");
  }
  IptVal('url',url);
  IptVal('px',px);
  $("#AddAdv").modal('show');
}

// 保存轮播图
function SavePic(){
  var pic = IptVal('pic');
  if(pic == ''){
    alert('请上传轮播图片!');
  }else{
    $(".SavePic").attr('disabled',true);
    $.post("<?php echo U('Sys/AddAdvs');?>",$("#AdvInfo").serialize(),function(data){
      alert(data.msg);
      if(data.ret == 1){
        location.reload();
      }else{
        $(".SavePic").attr('disabled',false);
      }
    },'JSON');
  }
}

// 删除
function SetStat(id,t){
  if(t == -1){
    var r = confirm('确定删除?');
  }else{
    var r = true;
  }
  if(r == true){
    loading2('处理中');
    $.post(location.href,{"id":id,"t":t},function(data){
      alert(data.msg);
      if(data.ret == 1){
        location.reload();
      }else{
        loading2('',0);
      }
    },'JSON');
  }
}
</script>

    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->
</div><!-- ./wrapper -->
<!-- AdminLTE App -->
<script src="Public/com/AdminLTE/js/app.min.js"></script>
<div id="mask"><div class='loading'></div></div>
</body>
</html>