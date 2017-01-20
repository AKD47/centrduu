<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package moudod
 */

?>
<section class="contacts">

	<div class="container">
		
		<div class="contacts__box">

			<h1 class="contacts__title">Контакты</h1>

			<h3 class="contacts__subtitle">Наш адрес:</h3>

			<p>ДНР 83001, город Донецк, Ворошиловский район, улица 50-летия СССР, дом 108</p>

			<h3 class="contacts__subtitle">Наш телефон:</h3>

			<a href="tel:+380623353832" class="contacts__phone">(062)335-38-32</a>

			<h3 class="contacts__subtitle">Наш электронная почта:</h3>

			<a href="mailto:liliadonetsk@mail.ru" class="contacts__phone">liliadonetsk@mail.ru</a>

			<h3 class="contacts__subtitle">Мы вконтакте:</h3>

			<a href="https://vk.com/centrduu" class="contacts__phone">https://vk.com/centrduu</a>

			<h3 class="contacts__subtitle">Обратная связь:</h3>

			<form action="" class="contacts__form" id="feedback">

				<input type="text" class="contacts__form--field" name="name" placeholder="Ваше имя..." required>

				<input type="text" class="contacts__form--field" name="email" placeholder="Ваш email..." required>

				<textarea class="contacts__form--field contacts__form--textarea" name="message" placeholder="Ваше сообщение..." required></textarea>

				<input class="contacts__form--submit" id="submitFeedback" type="submit" value="Отправить">

				<input type="hidden" name="action" value="get_message" class="contacts__form--field">

			</form>

			<h3 class="contacts__subtitle">Как к нам доехать:</h3>
			
			<div class="contacts__map">
				
				<div id="contactsMap"></div>
				
			</div>

		</div>
		

	</div>

</section>
