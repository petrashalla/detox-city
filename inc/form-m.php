<section class="form-m section-offset">
	<div class="container">
		<div class="form-m__wrapper">
			<div class="form-m__text">
				<p class="title">Уговорим на лечение!</p>
				<p class="subtitle">Оставьте заявку и получите бесплатную консультацию нарколога.</p>
				<p class="text">Нажимая кнопку “Оставить заявку”,  вы соглашаетесь с политикой конфиденциальности</p>
			</div>
			<div class="form-m__img">
				<picture>
					<source srcset="" type="image/webp">
					<img src="/assets/img/form-m.png" alt="form-m">
				</picture>
			</div>
			<form class="form-m__inputs">
				<? require($_SERVER['DOCUMENT_ROOT'].'/inc/inputs.php'); ?>
				<input class="form-input" type="text" name="params[name][]" placeholder="Ваше Имя" required>
				<input class="form-input" type="tel" name="params[phone][]" placeholder="Ваш телефон" required>
				<button class="btn btn-form" type="submit">Оставить заявку</button>
			</form>
		</div>
	</div>
</section>