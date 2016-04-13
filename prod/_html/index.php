<!DOCTYPE html>
<html lang="ru">
<?php $pageTitle = 'Главная страница'; ?>
<?php include 'base/head.php';?>
<body>
	<div class="layout">
		<?php include 'base/header.php'; ?>

		<main class="index">

			<?php include "blocks/findEvents.php";?>

			<?php include "blocks/indexCards.php";?>

			<section class="index-map">
				<div class="wr">
					<div class="title-header">
						<h2 class="h2">Рядом с вами</h2>
						<a href="#!" class="btn btn--fix-h btn--white btn--icon js-closest-map_btn">
							<span class="iconic iconic--target"></span>Определить мое местоположение
						</a>
					</div>
				</div>
				<div class="index-map__container" id="js-closest-map"></div>
			</section>

			<section class="index-about">
				<div class="wr">

					<h2 class="h2">О сервисе</h2>
					<div class="about-cols">

						<div class="about-cols__item">
							<div class="about-cols__icon">
								<span class="icon"></span>
							</div>
							<div class="about-cols__inner">
								<h4 class="h4">интересные и необычные мероприятия</h4>
								<div class="about-cols__text">
									Авторские мастер-классы, необычные реcтораны и кафе, тематические выставки, мероприятия в парках, спорт, романтика, экстрим.
								</div>
							</div>
						</div>

						<div class="about-cols__item">
							<div class="about-cols__icon">
								<span class="icon"></span>
							</div>
							<div class="about-cols__inner">
								<h4 class="h4">умный и простой фильтр поиска</h4>
								<div class="about-cols__text">
									Подбор мероприятий по дате, вашим интересам и предпочтениям,  атак же по удаленности от вас.
								</div>
							</div>
						</div>

						<div class="about-cols__item">
							<div class="about-cols__icon">
								<span class="icon"></span>
							</div>
							<div class="about-cols__inner">
								<h4 class="h4">мероприятия, подходящие именно вам</h4>
								<div class="about-cols__text">
									Запомним, что вам нравится, и оповестим об новых мероприятиях. Просто <a class="link-und link-und--green-d" href="#">подпишитесь на нашу рассылку</a>. Никакого спама. Только по делу.
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<div class="about-info">
				<div class="wr">
					<div class="about-info__bg" style="background-image: url(../images/userfiles/people2.png);"></div>
					<div class="about-info__inner">
						<h3 class="h3">Почему бы нет – сервис, который поможет легко спланировать свой досуг интересными мероприятиями.</h3>
						<p>Основными территориальными зонами наших проектов являются Москва, Московская область, а также ряд других крупных городов Российской Федерации.</p>
						<p>На сегодняшний день нами успешно реализуются проекты по строительству жилых комплексов в Московской области и уже намечен старт новых перспективных проектов в сфере коммерческой недвижимости.</p>
						<p class="text--big">Вы организатор? Будем рады:</p>
						<a href="#!" class="btn btn--green">Добавить свое мероприятие</a>
					</div>
				</div>
			</div>

		</main>

		<?php include 'base/footer.php'; ?>
	</div>
	<?php include 'base/scripts.php'; ?>
</body>
</html>
