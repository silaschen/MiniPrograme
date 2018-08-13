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
          <li><a href="<?php echo U('TeacherSys/index');?>">教师列表</a></li>
          <li><a href="<?php echo U('TeacherSys/create');?>">添加教师</a></li>
        </ul>
      </li>
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
    
  <!-- 搜索 -->
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title"><?php echo ($title); ?></h3>
      <a href="<?php echo U('Sys/addart');?>" class='btn btn-success btn-xs pull-right'>添加文章</a>
    </div>
    <div class="box-body">
      <form method="GET" action="<?php echo U('Sys/artlist');?>" id='form'>
        <div class="row">
          <div class="col-xs-4 col-md-3">
            <div class="input-group">
              <input name="word" type='text' class='form-control' value="<?php echo I('word');?>" placeholder='文章标题关键词搜索..'>
              <span class="input-group-addon" onclick="$('#form').submit();"><i class="fa fa-search"></i></span>
              <?php if($_GET['word'] != ''): ?><a title='清除条件' class="input-group-addon" href="<?php echo U('Sys/artlist');?>"><i class="fa fa-remove"></i></a><?php endif; ?>
            </div>
          </div>
        </div>
      </form>
    </div><!-- /.box-body -->
  </div>
  <!-- 列表 -->
  <div class="box box-solid">
    <div class="box-body">
      <table class="table table-bordered">
        <tbody>
        <tr>
          <th>ID</th>
          <th>标题</th>
          <th>所属分类</th>
          <th>封面</th>
          <th>阅读量</th>
          <th>添加时间</th>
          <th>状态</th>
          <th>操作</th>
        </tr>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["id"]); ?></td><td><a href="<?php echo U('Index/read',array('id'=>$vo['id']));?>" target="_blank" title='浏览'><?php echo ($vo["title"]); ?></a></td><td><?php echo (($vo["cate"])?($vo["cate"]):'-'); ?></td><td><?php if($vo["cover"] != ''): ?><a href="<?php echo ($vo["cover"]); ?>" target='_blank'><i class='fa fa-photo'></i></a><?php endif; ?></td>
            <td><?php echo ($vo["views"]); ?></td><td><?php echo (date('Y-m-d H:i',$vo["addtime"])); ?></td>
            <td><?php if($vo["status"] == '1'): ?><span class="label label-success">正常</span><?php elseif($vo["status"] == '0'): ?><span class="label label-default">隐藏</span><?php endif; ?></td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle btn-xs" data-toggle="dropdown">
                  管理
                  <span class="caret"></span>
                  <span class="sr-only">+</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="<?php echo U('Sys/addart',array('id'=>$vo['id']));?>">编辑</a></li>
                  <?php if($vo["status"] == '1'): ?><li><a href="javascript:setstat(<?php echo ($vo["id"]); ?>,0);">隐藏</a></li>
                    <?php else: ?>
                    <li><a href="javascript:setstat(<?php echo ($vo["id"]); ?>,1);">显示</a></li><?php endif; ?>
                  <li class="divider"></li>
                  <li><a href="javascript:setstat(<?php echo ($vo["id"]); ?>,-1);">删除</a></li>
                </ul>
              </div>
            </td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
      </table>

    </div><!-- /.box-body -->
    <div class="box-footer clearfix">
      <ul class="pagination pagination-sm no-margin pull-right"><?php echo ($page); ?></ul>
    </div>
  </div>
  <script type="text/javascript">
      function setstat(id,t){
          if(t == -1){
              var r = confirm("确定删除该文章？");
          }else if(t == 1){
              var r = confirm("确定显示该文章？");
          }else if(t == 0){
              var r = confirm("确定隐藏该文章？");
          }
          if(r == true){
              $.post(location.href,{"id":id,"t":t},function(data){
                  alert(data.msg);
                  if(data.ret == 1) location.reload();
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