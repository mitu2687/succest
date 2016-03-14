<?php echo $this->Form->create('Hero');?>
<div class="sort text-center">
  <div id="top">
<?php 
$prev = $page['page']-1;
$next = $page['page']+1;
echo $this->Form->hidden('page',array('value' => $prev));
echo $this->Js->submit('click',array(
	'url' =>array('action' => "/formation/1/?page=".$prev),
	'update' => '#sub',
	'div' => false,
));
?>
  </div>
<div id="down" class="page-1"> 
<?php 
echo $this->Form->hidden('page',array('value' => $next));
echo $this->Js->submit('click',array(
	'url' =>array('action' => "/formation/1/?page=".$next),
	'update' => '#sub',
	'div' => false,
));
?>
  </div>
 </div><!--sort-->

<div id="sub-char">
  <?php foreach($sub as $subs):?>
<div class="sub-char-box" id="<?php echo  $subs['Hero']['id'] ;?>">

<?php 
echo $this->Html->image(
	"icon/charcter_icon/mini_".$subs['Hero']['character_id'].".jpg",array(
		"class"=>"sub-img"
	)
);
?>

<span class="sub-lv">Lv:
  <?php echo sprintf("%03d",$subs['Hero']['level']);?>
</span>
<span class="formation_name sub_name">
  <?php echo $subs['Character']['name'];?>
</span>
</div><!--sub-char-box-->

<div class="clear-fix"></div>
  <?php endforeach;?>
</div><!--sub-char-->
<?php echo $this->Form->end();?>
<?php echo $this->Js->writeBuffer();?>
