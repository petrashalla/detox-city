<? require($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>

<section class="doc">
	<div class="container">
		<ul class="breadcrumb">
			<li class="breadcrumb__item"><a href="#">Главная</a></li>
			<li class="breadcrumb__item">Врачи</li>
		</ul>
		<h1 class="section-title">Врачи клиники <span>Detox City</span></h1>
		<div class="doc__wrapper">
			<?for ($i=1; $i <= 8; $i++) {?>
			<a href="#" class="doc-slider__item">
				<picture>
					<source srcset="/assets/img/doc.webp" type="image/webp">
					<img src="/assets/img/doc.png" alt="doc" loading="lazy">
					<span class="badge">Стаж: <b>9 лет</b></span>
					<div class="ar">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
							<path d="M17.7494 11.6212C17.2247 11.0965 16.9596 9.79475 16.8266 8.61247C16.6527 7.08936 16.7184 5.54292 17.0776 4.05375C17.3471 2.93723 17.7805 1.6906 18.4565 1.01461M18.4565 1.01461C17.7805 1.6906 16.5332 2.12477 15.4174 2.39347C13.9275 2.75197 12.381 2.81773 10.8593 2.6452C9.67636 2.51155 8.37316 2.24497 7.8499 1.72171M18.4565 1.01461L1.48594 17.9852" stroke="white" stroke-width="2"/>
						</svg>
					</div>
				</picture>
				<p class="doc-slider__name">Игорь Яковлев</p>
				<p class="doc-slider__job">Руководитель отдела детоксикации </p>
			</a>
			<?}?>
		</div>
	</div>
</section>

<? require($_SERVER['DOCUMENT_ROOT'].'/inc/form-b.php'); ?>

<? require($_SERVER['DOCUMENT_ROOT'].'/inc/map.php'); ?>

<? require($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>