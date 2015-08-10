<div class="home-icon-div">
	<?php foreach ($contents['homeLogo'] as $key => $logo) :?>
		<div class="home-icon" id="logo-<?=$logo['name']?>">
			<div class="logo-pic pic-<?=$logo['name']?>"></div>
			<h3 id="save-<?=$logo['name']?>"><?=$logo['detail']?></h3>	
		</div>
	<?php endforeach ; ?>
</div>