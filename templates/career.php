<?php //echo '<pre>';print_r($contents['career']['text']);echo '</pre>';?>
<div class="career-detail">
	<h2><?=$contents['career']['text']['career-head']?></h2>
	<h3><?=$contents['career']['text']['content-1']?></h3>
	<p><?=$contents['career']['text']['content-2']?></p>
	<p class="open-position"><?=$contents['career']['text']['content-3']?></p>
	<?php foreach ($contents['career']['text']['career-position'] as $sectionID => $career):?>
		<p><a class="career-link" 
				data-toggle="modal" 
				data-target="#careerModal" 
				href="" id="<?=$sectionID?>">
				<?=$career?></a>
		</p>
	<?php endforeach ; ?>

	
</div><!--
--><div class="career-pic">
	<img src="photo/careers/pic-innovation-careers01.jpg">

</div>