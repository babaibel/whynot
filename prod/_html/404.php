<!DOCTYPE html>
<html lang="ru">
<?php $pageTitle = 'Страница 404'; ?>
<?php include 'base/head.php';?>
<body class="page-404">
	<div class="layout">

		<main>

			<section class="p404 js-p404">
				<div class="wr">

					<div class="p404__logo">
						<a class="logo" href="#!">
							<div class="logo-question">
								<span class="logo-question__text">
									Идем кататься на слоне ?
								</span>
								<span class="iconic iconic--elephant"></span>
							</div>
							<div class="logo__text">Почему бы нет</div>
						</a>
					</div>

					<div class="p404__inner" style="background-image: url(../images/p404-img.png)">
						<h1 class="h2">Ошибка <br><span>404</span></h1>
						<div class="p404__subtitle">
							Никакой активности <br>на этой странице не обнаружено.
						</div>
						<div class="p404__text">
							Попробуйте начать с <a href="#!" class="link-und link-und--green-d">главной</a>, <br>или воспользоваться поиском:
						</div>
						<div class="p404__search">
							<form>
								<input class="p404__search-input" type="text" placeholder="Например, открытый каток" name="search">
								<button class="p404__search-btn" type="submit">
									<span class="icon iconic--search"></span>
								</button>
							</form>
						</div>
					</div>
					
				</div>
			</section>

		</main>

		<footer class="footer">
			<div class="footer-bot__wr">
				<div class="wr">

					<div class="footer-bot">
						<div class="footer-bot__item footer-bot__item--left">
							<div class="footer-soc">
								<a href="#!">
									<span class="icon iconic--soc-vk-v"></span>
								</a>
								<a href="#!">
									<span class="icon iconic--soc-fb"></span>
								</a>
								<a href="#!">
									<span class="icon iconic--soc-tw"></span>
								</a>
							</div>
						</div>
						<div class="footer-bot__item footer-bot__item--center">
							<div class="footer-bot__copy-text">
								сервис по продвижению событий. Права на текстовые и другие материалы, размещенные на сайте, охраняются законом.При цитировании обязательна прямая ссылка
							</div>
						</div>
						<div class="footer-bot__item footer-bot__item--right">
							<div class="footer-bot__dev">Проект студии <a class="link link--green link--upper" target="_blank" href="#!">Nikoland</a></div>
						</div>
					</div>
				</div>

			</div>
		</footer>
	</div>
	<?php include 'base/scripts.php'; ?>
</body>
</html>
