<div>
	<!-- <img src="photo/about-us/pic-about-us-en.jpg"> -->
</div><!--
--><div class="aboutUs-detail">
	<h2><?=$contents['aboutUs']['main-head']?></h2>
	<?=$contents['aboutUs']['main-content']?>
	<div>
		<div>
			<div class="about-us-subject-detail">
				<img src="<?=$photos['aboutUs']['icon-vision']?>">
			</div>
			<div class="about-us-subject-detail">
				<h3><?=$contents['aboutUs']['vision-head']?></h3>
				<?=$contents['aboutUs']['vision-content']?>
			</div>
		</div>
		<div  class="about-us-subject">
			<div class="about-us-subject-detail">
				<img src="<?=$photos['aboutUs']['icon-mission']?>">
			</div>
			<div class="about-us-subject-detail">
				<h3><?=$contents['aboutUs']['mission-head']?></h3>
				<?=$contents['aboutUs']['mission-content']?>
			</div>
		</div>
		<div class="about-us-read-more">
			<h3><a href="#" data-toggle="modal" data-target="#aboutUsModal">READ MORE >>> </a></h3>
		</div>
	</div>
</div>