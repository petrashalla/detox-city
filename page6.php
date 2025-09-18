<? require($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>

<section class="photo">
	<div class="container">
		<ul class="breadcrumb">
			<li class="breadcrumb__item"><a href="#">Главная</a></li>
			<li class="breadcrumb__item">Фотографии нашей клиники</li>
		</ul>
		<h1 class="section-title">Фотографии нашей клиники</h1>
		<div class="photo__wrapper">
			<?for($i = 1; $i <= 5; $i++) {?>
			<div class="mabout__swiper-slide">
				<a href="/assets/img/about.png" data-fancybox="mabout">
					<picture>
						<source srcset="" type="image/webp">
						<img src="/assets/img/about.png" alt="mabout1" loading="lazy">
					</picture>
				</a>
			</div>
			<?}?>
		</div>
	</div>
</section>

<? require($_SERVER['DOCUMENT_ROOT'].'/inc/form-b.php'); ?>

<? require($_SERVER['DOCUMENT_ROOT'].'/inc/map.php'); ?>

<? require($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>