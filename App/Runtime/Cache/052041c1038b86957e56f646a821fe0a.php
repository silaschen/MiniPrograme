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
      <a href="#"><i class="fa fa-pencil-square-o"></i> <span>文章管理</span><i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
          <li><a href="<?php echo U('Sys/artlist');?>">文章列表</a></li>
          <li><a href="<?php echo U('Sys/artcategory');?>">分类管理</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-cog"></i> <span>系统设置</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="<?php echo U('Mate/text');?>">微信素材</a></li>
          <li><a href="<?php echo U('Cmd/text');?>">回复规则</a></li>
          <li><a href="<?php echo U('ModMenu/edit');?>">微信菜单</a></li>
          <li><a href="<?php echo U('Sys/site');?>">站点设置</a></li>
          <li><a href="<?php echo U('Sys/advs');?>">轮播广告</a></li>
          <li><a href="<?php echo U('Sys/vendor');?>">微信配置</a></li>
          <li><a href="<?php echo U('Sys/group');?>">权限控制</a></li>
          <li><a href="<?php echo U('Sys/admin');?>">系统管理员</a></li>
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
      <h3 class="box-title">分类列表</h3>
    </div>
    <div class="box-body">
      <form method="GET" action="<?php echo U('Sys/artcategory');?>" id='form' class='form-inline'>
        <div class="form-group">
          <div class="input-group">
            <input name="word" type='text' class='form-control' value="<?php echo I('word');?>" placeholder='输入分类名称进行搜索'>
            <span class="input-group-addon" onclick="$('#form').submit();"><i class="fa fa-search"></i></span>
            <?php if($_GET['word'] != ''): ?><a title='清除条件' class="input-group-addon" href="<?php echo U('Sys/artcategory');?>"><i class="fa fa-remove"></i></a><?php endif; ?>
          </div>
        </div>
        <a href="<?php echo U('Sys/addartcate');?>" class='btn btn-success pull-right'>添加分类</a>
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
            <th>名称</th>
            <th>封面</th>
            <th>排序</th>
            <th>添加时间</th>
            <th>状态</th>
            <th>操作</th>
          </tr>
          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["id"]); ?></td>
            <td><?php echo (($vo["title"])?($vo["title"]):"暂无"); ?></td>
            <td><?php if($vo["pic"] != ''): ?><a href="<?php echo ($vo["pic"]); ?>" target='_blank'><i class='fa fa-photo'></i></a><?php endif; ?></td>
            <td><?php echo (($vo["sort"])?($vo["sort"]):"0"); ?></td>
            <td><?php echo (date('Y-m-d H:i',$vo["addtime"])); ?></td>
            <td>
             <span class="label <?php if($vo["status"] == 1): ?>label-success">正常<?php else: ?>label-danger">隐藏<?php endif; ?></span>
          </td>
          <td><div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle btn-xs" data-toggle="dropdown">
                  管理
                  <span class="caret"></span>
                  <span class="sr-only">+</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="<?php echo U('Sys/addartcate',array('id'=>$vo['id']));?>">编辑</a></li>
                  <?php if($vo["status"] == '1'): ?><li><a href="javascript:setstat(<?php echo ($vo["id"]); ?>,0);">隐藏</a></li>
                  <?php else: ?>
                  <li><a href="javascript:setstat(<?php echo ($vo["id"]); ?>,1);">恢复</a></li><?php endif; ?>
                  <li class="divider"></li>
                  <li><a href="javascript:setstat(<?php echo ($vo["id"]); ?>,-1);">删除</a></li>
                </ul>
              </div>
          </td>
          </tr>
          <?php if(is_array($vo["son"])): $i = 0; $__LIST__ = $vo["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($v["id"]); ?></td>
            <td>&nbsp;┠<?php echo (($v["title"])?($v["title"]):"暂无"); ?></td>
            <td><?php if($v["pic"] != ''): ?><a href="<?php echo ($v["pic"]); ?>" target='_blank'><i class='fa fa-photo'></i></a><?php endif; ?></td>
            <td><?php echo (($v["sort"])?($v["sort"]):"暂无"); ?></td>
            <td><?php echo (date('Y-m-d H:i',$v["addtime"])); ?></td>
            <td>
             <span class="label <?php if($v["status"] == 1): ?>label-success">正常<?php else: ?>label-danger">隐藏<?php endif; ?></span>
          </td>
          <td><div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle btn-xs" data-toggle="dropdown">
                  管理
                  <span class="caret"></span>
                  <span class="sr-only">+</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="<?php echo U('Sys/addartcate',array('id'=>$v['id']));?>">编辑</a></li>
                  <?php if($v["status"] == '1'): ?><li><a href="javascript:setstat(<?php echo ($v["id"]); ?>,0);">隐藏</a></li>
                  <?php else: ?>
                  <li><a href="javascript:setstat(<?php echo ($v["id"]); ?>,1);">恢复</a></li><?php endif; ?>
                  <li class="divider"></li>
                  <li><a href="javascript:setstat(<?php echo ($v["id"]); ?>,-1);">删除</a></li>
                </ul>
              </div>
          </td>
          </tr><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
      </table>

    </div><!-- /.box-body -->
    <div class="box-footer clearfix">
	    <ul class="pagination pagination-sm no-margin pull-right"><?php echo ($page); ?></ul>
	  </div>    
  </div>
<script type="text/javascript">
function setstat(id,t){
  var r = confirm("确认操作？");
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
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">值得信赖的移动互联网开发服务商!</div>
    <!-- Default to the left -->
    <a href="http://binguo.me/wx/" target='_blank'>&copy; 宾果智造</a>
  </footer>
</div><!-- ./wrapper -->
<!-- AdminLTE App -->
<script src="Public/com/AdminLTE/js/app.min.js"></script>
<div id="mask"><div class='loading'></div></div>
</body>
</html>