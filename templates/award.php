<div>
	<h2><?=$contents['award']['text']['total-award']?> 
		<?=$contents['award']['text']['award-head']?> 
	</h2>	
	<div class="award-list">
		<div class="award-detail award-logo" style="position:relative">
			<img src="<?=$contents['award']['photo']['total-award-pic']?>">
			<h2><?=$contents['award']['text']['total-award']?></h2>
		</div>
		<div class="award-detail award-text">
			<p class="text-left text-bold">
				<?=$contents['award']['text']['total-award']?>
				<?=$contents['award']['text']['award-detail']?> 
			</p>
			<div class="award-pic clear">
				<?php foreach ($contents['award']['logo'] as $key => $logo):?>
				<img src="<?=$logo['detail']?>">
			<?php endforeach;?>
			</div>		
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear text-right award-read-more" >
		<h3><strong><a href="#" data-toggle="modal" data-target="#awardModal">READ MORE >>></a></strong></h3>
	</div>
	<div>
		<h2>OUR CLIENTS</h2>
		<img src="<?=$contents['award']['photo']['all-client']?>">
	</div>
</div>