<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		<?php echo __('弁護士法人　サクセスト'); ?>
<?php if(!@$title):?>
		<?php echo $title_for_layout; ?>
<?php else:?>
		<?php echo $title;?>
<?php endif;?>
	</title>
<?php if(@$meta):?>
		<?php echo $meta;?>
<?php endif;?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<?php echo $this->Html->css('bootstrap.min'); ?>
	<?php echo $this->Html->css('bace'); ?>
	<?php echo $this->Html->css('bootstrap-datepicker.min');?>
        <?php echo $this->Html->css('bootstrap-datetimepicker.min');?>
	<style>
@media only screen
 and (min-device-width: 768px)
 and (max-device-width: 1024px) {
.navbar-nav>li>a{
padding-top:0;
}

}

	</style>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<!--
	<link rel="shortcut icon" href="/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
	-->
	<?php
	echo $this->fetch('meta');
	echo $this->fetch('css');
	?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<?php echo $this->Html->script('bootstrap.min'); ?>
        <?php echo $this->Html->script('bootstrap-datetimepicker.min');?>
	<?php echo $this->Html->script('bootstrap-datepicker');?>
        <?php echo $this->Html->script('bootstrap-datepicker.ja');?>

	<?php echo $this->fetch('script'); ?>
<script>(function(){var obj_js=document.createElement("script");var obj_tag=document.getElementsByTagName("script")[0];obj_js.src="//www.call-ma.com/gearjs/gear.js?CD=e72cee89e7aa33362c1103c622392e43-120-1225824106&RE="+encodeURIComponent(location.search.substring(1));obj_tag.parentNode.insertBefore(obj_js,obj_tag)}());window.onload=function(){if(typeof SGEAR==="undefined"||SGEAR.getCallTel()==""){SGEAR={getCallTel:function(){return"0120165019"},getDispTel:function(){return"0120-165-019"}};var replaceTags=document.getElementsByClassName("callma_tel");for(i=0;i<replaceTags.length;i++){replaceTags[i].innerHTML=SGEAR.getDispTel()}if(typeof Ext_Callma_Init !== "undefined"){Ext_Callma_Init();}}};</script>


</head>

<body>

<div class="containe">
<div class="container content">
<a href="/"><img class="sitename" src="/img/sample/02.jpg"></a>
<a ><img class="chatbox sp-left" src="/img/sample/03.jpg"></a>
<span class="callma_tel_img"><img class="sitename sp-left" src="/img/sample/04_0120165019.jpg"></span>
<a href="/information/contact"><img class="free-btn-head sp-left-ls" src="/img/sample/05.jpg"></a>
</div>

<div class="navbar navbar-default navbar-primary shadow" role="navigation">
<div class="container">

		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav text-center">
				<li class="shadow" ><a class="menu-btn" href="/">TOP</a></li>

				<li class="shadow dropdown" >
					<a href="#" class="dropdown-toggle menu-btn" date-toggle="dropdown" id="menu1">住宅ローン返済にお困りの方へ</a>
			 		<ul class="dropdown-menu text-center" role="menu" aria-labelledby="menu1">
	 					<li style="display:block" role="presentation"><a role="menuitem" tabindex="-1" href="/loan">住宅ローンについて</a></li>
						<li style="display:block" role="presentation"><a role="menuitem" tabindex="-1" href="/loan/answer">解決方法</a></li>
						<li style="display:block" role="presentation"><a role="menuitem" tabindex="-1" href="/loan/appeal">当法人の強み</a></li>
					</ul>
				</li>

<li class="shadow " ><a class="menu-btn" href="/Consultation">
相談事例</a></li>

<li class="shadow" ><a class="menu-btn" href="/Case">
相談手続・費用</a></li>

<li class="shadow" ><a class="menu-btn" href="/Information/question">
よくある質問</a></li>
<li class="shadow" ><a class="menu-btn" href="/info">
弁護士法人情報</a></li>

			</ul>
		</div>

</div>
</div>


		<?php echo $this->fetch('content'); ?>
        <footer class="footer border-top">
        <div class="container">
            <div class="pull-left">
           <img class="sitename" src="/img/sample/02.jpg">
           </div>
            <div class="pull-left sp-left">
                <ul class="sp-top footer-link">
                    <li><a href="/"><span class="glyphicon glyphicon-play">トップ</span></a></li>
                    <li><a href="/loan"><span class="glyphicon glyphicon-play">住宅ローン返済にお困りの方へ</span></a></li>
                    <li><a href="/Consultation"><span class="glyphicon glyphicon-play">相談事例</span></a></li>
                    <li><a href="/Case"><span class="glyphicon glyphicon-play">相談手続・費用</span></a></li>
                </ul>
           </div>
            <div class="pull-left sp-left">
                <ul class="sp-top footer-link">
                    <li><a href="/Information/question"><span class="glyphicon glyphicon-play">よくある質問</span></a></li>
                    <li><a href="/info"><span class="glyphicon glyphicon-play">弁護士法人情報</span></a></li>
                    <li><a href="http://www.nakane-law.jp/"><span class="glyphicon glyphicon-play">法人のお客様はこちら</span></a></li>
                    <li><a href="/Information/privacy"><span class="glyphicon glyphicon-play">プライバシーポリシー</span></a></li>
                </ul>
           </div>
        </div>
        </footer>
</div>

	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->


<script>
var _chaq = _chaq || [];
_chaq['_accountID']=1861;
(function(D,s){
	var ca = D.createElement(s)
	,ss = D.getElementsByTagName(s)[0];
	ca.type = 'text/javascript';
	ca.async = !0;
	ca.setAttribute('charset','utf-8');
	var sr = 'https://v1.chamo-chat.com/chamovps.js';
	ca.src = sr + '?' + parseInt((new Date)/60000);
	ss.parentNode.insertBefore(ca, ss);
})(document,'script');
</script>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MPPSVW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MPPSVW');</script>
<!-- End Google Tag Manager -->

<script type="text/javascript">
  (function () {
    var tagjs = document.createElement("script");
    var s = document.getElementsByTagName("script")[0];
    tagjs.async = true;
    tagjs.src = "//s.yjtag.jp/tag.js#site=HlvpU7u";
    s.parentNode.insertBefore(tagjs, s);
  }());
</script>
<noscript>
  <iframe src="//b.yjtag.jp/iframe?c=HlvpU7u" width="1" height="1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</noscript>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71648223-1', 'auto');
  ga('send', 'pageview');

</script>


</body>
</html>
