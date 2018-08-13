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
    <a href="<?php echo back(U('Index/artlist'));?>" class='lb'><i class='icon iconfont'>&#xe6b0;</i> 返回</a>
    <span class='title'>阅读详情</span>
    <a href="tel:<?php echo C('SITE_TEL');?>" class='rb'>客服 <i class='icon iconfont'>&#xe61c;</i></a>
  </nav>


<style type="text/css">
.container{margin-top:55px;}
.content{padding:5px;margin-bottom: 10px;overflow: hidden;}
.box{overflow: hidden;}
</style>
<div class='container'>
    <div class='box'>
        <b class='text-red'><?php echo ($info["title"]); ?></b>
        <p><small class='text-muted'>阅读:<?php echo ($info["views"]); if($info["from"] != ''): ?>&nbsp;&nbsp;来源：<?php echo ($info["from"]); endif; ?>
        </p>
      <div class='content'>
      <?php echo ($info["content"]); ?>
      </div>
      <span class="pull-right clearfix">  
        <small><?php echo (date('Y-m-d',$info["addtime"])); ?></small>
      </span>
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

</body>
</html>