
			<?php $i=0; foreach($heros['Hero'] as $hero):?>
			<?php ($i==0)? $c="icon-box-red": $c="icon-box";?>
			<div id="<?php echo $hero['id'];?>" class="rap starting">
				<div class="opacityBox ">
				</div><!--opacityBox-->
				<div class="switch" >
					<div class="gold"></div><!--gold-->
					<span class="gLv">Lv : <?php echo sprintf("%03d",$hero['level']);?></span>
					<?php echo $this->Html->image("icon/charcter_icon/mini_".$hero['character_id'].".jpg",array("class"=>"mini"));?>

					<div class="<?php echo $c;?>">
					</div><!--icon-box-->
					<div class="formation_name mini_name">
						<?php echo $hero['Character']['name'];?>
					</div><!--formation_name-->

					<div class="mini_hp">
						Hp:
						<span class="damag">
							<?php echo sprintf("%04d",$hero['now_hp']);?>
						</span>
						<span class="">
							<?php echo sprintf("%04d",$hero['max_hp']);?>
						</span>
					</div><!--mini_hp-->

					<div class="mini_params">
						A:
						<span class="">
							<?php echo sprintf("%03d",$hero['atack']);?>
						</span>
						D:
						<span class="">
							<?php echo sprintf("%03d",$hero['difence']);?>
						</span>
						S:
						<span class="">
							<?php echo sprintf("%03d",$hero['speed']);?>
						</span>
					</div><!--mini_params-->
				</div>
			</div><!--rap-->
			<?php $i++; endforeach;?>
