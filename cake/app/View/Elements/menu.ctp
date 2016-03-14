
<!-- Static navbar -->
<div class="navbar navbar-default navbar-primary shadow" role="navigation">
<div class="container">
<div class="navbar-header">
<?php if($sp):?>
<h1 class="pull-left sp-left-ls title">弁護士法人サクセスト</h1>
<?php endif;?>
<button type="button" class="navbar-toggle"
data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav text-center">
<li class="shadow" ><a class="menu-btn" href="/">
TOP</a></li>

<?php if(!$sp):?>
<li class="shadow dropdown" >
<a href="#" class="dropdown-toggle menu-btn " date-toggle="dropdown" id="menu1">
住宅ローン返済にお困りの方へ</a>
 <ul class="dropdown-menu text-center" role="menu" aria-labelledby="menu1">
   <li style="display:block" role="presentation"><a role="menuitem" tabindex="-1" href="/loan">住宅ローンについて</a></li>
    <li style="display:block" role="presentation"><a role="menuitem" tabindex="-1" href="/loan/answer">解決方法</a></li>
    <li style="display:block" role="presentation"><a role="menuitem" tabindex="-1" href="/loan/appeal">当法人の強み</a></li>
  </ul>
</li>
<?php endif;?>

<!--spのみ-->
<?php if($sp):?>
<li class="shadow" ><a href="/loan/answer">
解決方法</a></li>

<li class="shadow" ><a href="/loan/appeal">
当法人の強み</a></li>

<?php endif;?>
<!--end-->

<li class="shadow " ><a class="menu-btn" href="/Consultation">
相談事例</a></li>

<li class="shadow" ><a class="menu-btn" href="/Case">
相談手続・費用</a></li>

<li class="shadow" ><a class="menu-btn" href="/Information/question">
よくある質問</a></li>
<li class="shadow" ><a class="menu-btn" href="/info">
弁護士法人情報</a></li>
</ul>
</div><!--/.nav-collapse -->

</div>
</div>
    <!-- end nav -->
