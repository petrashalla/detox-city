<section class="form-b section-offset">
	<div class="container">
		<div class="form-b__wrapper color-block_blue">
			<form>
				<div class="form-b__titles">
					<p class="form-b__title">Обращайтесь прямо сейчас</p>
					<p class="form-b__subtitle">Осложнения от запущенных болезней - приводят к смерти!</p>
					<p class="form-b__subsubtitle">Мы поможем подобрать подходящий вариант лечения</p>
				</div>
				<div class="from-b__select">
					<p>Какой срок длится проблема?</p>
					<select name="form-time">
						<option value="0">Выберете значение</option>
						<option value="1">value 1</option>
						<option value="2">value 2</option>
						<option value="3">value 3</option>
						<option value="4">value 4</option>
						<option value="5">value 5</option>
					</select>
				</div>
				<div class="from-b__select">
					<p>Хронические болезни пациента?</p>
					<select name="form-diagnos">
						<option value="0">Выберете значение</option>
						<option value="1">value 1</option>
						<option value="2">value 2</option>
						<option value="3">value 3</option>
						<option value="4">value 4</option>
						<option value="5">value 5</option>
					</select>
				</div>
				<div class="from-b__select">
					<p>Возраст пациента?</p>
					<select name="form-age">
						<option value="0">Выберете значение</option>
						<option value="1">value 1</option>
						<option value="2">value 2</option>
						<option value="3">value 3</option>
						<option value="4">value 4</option>
						<option value="5">value 5</option>
					</select>
				</div>
				<? require($_SERVER['DOCUMENT_ROOT'].'/inc/inputs.php'); ?>
				<p class="from-b__input-title">Как с вами связаться?</p>
				<div class="form-b__bot">
					<input class="form-input" type="tel" name="params[phone][]" placeholder="Ваш телефон" required>
					<button class="btn btn-form" type="submit">Оставить заявку</button>
				</div>
				<p class="policy">Нажимая кнопку “Оставить заявку”,  вы соглашаетесь с <a href="#">Политикой конфиденциальности</a><br>
				Или <a href="#">позвоните</a> нам сами</p>
			</form>
			<picture>
				<source srcset="/assets/img/form-b.webp" type="image/webp">
				<img src="/assets/img/form-b.png" alt="form-b" loading="lazy">
			</picture>
		</div>
	</div>
</section>