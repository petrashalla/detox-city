<section class="from-s section-offset">
	<div class="container">
		<div class="form-s__wrapper">
			<picture>
				<source srcset="/assets/img/form-s.webp" type="image/webp">
				<img src="/assets/img/form-s.jpg" alt="form-s">
			</picture>
			<p class="form-s__title">Оставьте заявку на бесплатную консультацию</p>
			<form class="form-s__inputs">
				<? require($_SERVER['DOCUMENT_ROOT'].'/inc/inputs.php'); ?>
				<input class="form-input" type="text" name="params[name][]" placeholder="Ваше Имя" required>
				<input class="form-input" type="tel" name="params[phone][]" placeholder="Ваш телефон" required>
				<button class="btn btn-form" type="submit">Оставить заявку</button>
			</form>
			<p class="form-s__text">Нажимая кнопку “Оставить заявку”,  вы соглашаетесь с политикой конфиденциальности</p>
		</div>
	</div>
</section>