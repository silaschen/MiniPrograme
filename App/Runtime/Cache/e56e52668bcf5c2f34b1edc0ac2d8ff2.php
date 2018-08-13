<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title><?php echo ($title); ?></title>
<meta name="author" content="BinGuo.Me">
<meta http-equiv="cleartype" content="on">
<meta content="telephone=no,email=no" name="format-detection">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" type="text/css" href="Public/res/loader.css" />
<!-- 页面加载完毕之前 显示LOADING 有图片需等待 -->
<script type="text/javascript">
document.write('<div id="loading"><div class="lllcontent"><div class="loader-inner ball-clip-rotate"><div></div></div><p>加载中..</p></div></div>');
document.onreadystatechange = completeLoading;
function completeLoading() {
    if (document.readyState == "complete") {
        document.getElementById("loading").style.display="none";
    }
}
</script>
<script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- 公共JS库 -->
<script type="text/javascript" src="Public/com/common.js"></script>

<!-- 项目相关 样式 JS库 -->
<link rel="stylesheet" type="text/css" href="Public/res/app.css" />
<script type="text/javascript" src="Public/res/app.js"></script>

<!--[if lt IE 9]>
<script src="//cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- 页面零碎css -->

</head>
<body>

<nav id='top'>
  <a href="<?php echo back(U('Index/index'));?>" class='lb'>返回</a>
  <span class='title'>前端示例</span>
  <a href="tel:<?php echo C('SITE_TEL');?>" class='rb'>客服</a>
</nav>


<div class='container'>
    <div class='wrap box'>
      <form id='ApplyForm'>
      <div class='form-group'>
        <label>姓名</label>
        <input class='form-control' type='text' name='name' placeholder="填写提示..">
      </div>
      <div class='form-group'>
        <select class='form-control' name='gender'><option value='1'>选项一</option><option value='1'>选项二</option></select>
      </div>
      <div class='form-group'>
        <div class="input-group">
          <div class="input-group-addon"><i class='glyphicon glyphicon-user'></i></div>
          <input type="number" name='age' class="form-control" placeholder="年龄">
          <div class="input-group-addon"><b class='text-danger'>*</b></div>
        </div>
      </div>
      <div class='form-group'>
        <div class="input-group">
          <div class="input-group-addon"><i class='glyphicon glyphicon-phone'></i></div>
          <input type="tel" name='tel' class="form-control" placeholder="请输入电话">
        </div>
      </div>
      <div class='form-group'>
        <button type='button' onclick="ApplyForm();" class='btn btn-block btn-primary btn-lg ApplyForm'>确定</button>
      </div>
      <div class='form-group'>
        <button class='btn btn-block btn-default btn-lg'>取消</button>
      </div>
      <div class='form-group'>
        <button class='btn btn-block btn-success btn-lg' onclick="loading(1);">Loading</button>
      </div>
      <div class='form-group'>
        <button class='btn btn-block btn-success btn-lg' onclick="loading(1,'请稍后..')">自定义内容</button>
      </div>
      <p class='alert alert-success'> 内容BOX<br>内容BOX<br>内容BOX<br>内容BOX<br>内容BOX<br>内容BOX</p>
      </form>
      <!-- table -->
      <table class='table table-bordered'>
        <thead><th>ID</th><th>姓名</th><th>电话</th><th>电话</th></thead>
        <tbody>
          <tr><td>1</td><td>张三</td><td>13566552255</td>
              <td>
              <div class="dropdown">
                <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  管理
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">修改</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">删除</a></li>
                </ul>
              </div>
              </td>
          </tr>
          <tr><td>1</td><td>张三</td><td>13566552255</td>
              <td>
              <div class="dropdown">
                <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  管理
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">修改</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">删除</a></li>
                </ul>
              </div>
              </td>
          </tr>
          <tr><td>1</td><td>张三</td><td>13566552255</td>
              <td>
              <div class="dropdown">
                <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  管理
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">修改</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">删除</a></li>
                </ul>
              </div>
              </td>
          </tr>
        </tbody>
      </table>
    </div>
</div>


<!-- 底部 -->
<footer>
<center><a href="http://binguo.me/wx/"><small>&copy;宾果智造</small></a></center>
</footer>


<nav id="menu">
	<a href="#" class='cur'><i class='icon iconfont'>&#xe642;</i><p>栏目1</p></a>
	<a href="#"><i class='icon iconfont'>&#xe67b;</i><p>栏目2</p></a>
	<a href="#"><i class='icon iconfont'>&#xe650;</i><p>栏目3</p></a>
	<a href="#"><i class='icon iconfont'>&#xe645;</i><p>栏目4</p></a>
</nav>

<!-- Loading -->
<div id="loading" style='display:none;'><div class="lllcontent"><div class="loader-inner ball-clip-rotate"><div></div></div><p>加载中..</p></div></div>
<!-- 微信分享提示 -->
<div id='share_tip' onclick="$(this).hide();"></div>
<script src="//cdn.bootcss.com/fastclick/1.0.6/fastclick.min.js"></script>
<script type="text/javascript">
$(function(){
	/* 模态框垂直居中 */
	function centerModals(){
	    $('.modal').each(function(i){
	        var $clone = $(this).clone().css('display', 'block').appendTo('body');    var top = Math.round(($clone.height() - $clone.find('.modal-content').height()) / 2);
	        top = top > 0 ? top : 0;
	        $clone.remove();
	        $(this).find('.modal-content').css("margin-top", top);
	    });
	}
	$('.modal').on('show.bs.modal', centerModals);
	$(window).on('resize', function(){
		centerModals();
		if (/Android/gi.test(navigator.userAgent)) {
		   var scroll_offset = $('input:focus,textarea:focus').offset();
			$("body,html").animate({scrollTop:scroll_offset.top},100); 
		}
	});
	FastClick.attach(document.body);
	<?php if($eq >= '0' OR $eq != ''): ?>if(!isNaN('<?php echo ($eq); ?>')){
	  $("#menu > a").eq(<?php echo ($eq); ?>).addClass('cur');
	}else{
	  $("#menu > a").each(function(){
	    var txt = $.trim($(this).text());
	    if(txt == '<?php echo ($eq); ?>'){
	      $(this).addClass('cur');
	      return;
	    }
	  });
	}<?php endif; ?>
});
</script>
<!-- js 脚本 -->

<script type="text/javascript">
function ApplyForm(){
  if(IptVal('name') == ''){
    alert('请输入姓名!');
  }else if(IptVal('tel') == ''){
    alert('请输入电话号码!');
  }else{
    //loading(1);
    $(".ApplyForm").attr('disabled',true);
    // 发送ajax请求
    $.post("<?php echo U('Index/ApplyForm');?>",$("#ApplyForm").serialize(),function(data){
      alert(data.msg);
      if(data.ret == 1){
        location.href = "<?php echo U('Index/index');?>";
      }
      //loading(0);
      $(".ApplyForm").attr('disabled',false);
    },'JSON');
  }
}
</script>

</body>
</html>