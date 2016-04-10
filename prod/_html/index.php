<!DOCTYPE html>
<html lang="ru">
<?php $pageTitle = 'Главная страница'; ?>
<?php include 'base/head.php';?>
<body>
	<div class="layout">
		<?php include 'base/header.php'; ?>

		<main class="index">

			<section class="index-cards bg--gray">
				<div class="wr">
					<div class="index-cards__title js-cards-filter">
						Рекомендуем <a href="#!" class="active">Сегодня</a>, <a href="#!">На этой неделе</a>, <a href="#!">В этом месяце</a>
					</div>
					<div class="index-cards__row">
						<a class="card js-card" href="#!">
							<div class="card__top">
								<div class="card__img" style="background-image: url(../images/userfiles/card1.jpg);">
									<?php include "components/post-favorite.php";?>
								</div>
								<div class="card__title">
									<span class="link-und link-und--green-d">Катание на багги «Экстрим под рев мотора»</span>
								</div>
								<div class="card__text">Вам не хватает скорости и острых ощущений? За десять минут вы зарядитесь мощной дозой адреналина и сполна </div>
							</div>
							<div class="card__bottom">
								<div class="card__date"><span class="icon iconic--calendar"></span>16 января, 11:00–19:00</div>
								<div class="card__place"><span class="icon iconic--pin"></span>Клуб CrazyDriver</div>
								<div class="card__rating">
									<div class="rating">
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
									</div>
									13 отзывов
								</div>
							</div>
						</a>
						<a class="card js-card" href="#!">
							<div class="card__top">
								<div class="card__img" style="background-image: url(../images/userfiles/card2.jpg);">
									<?php include "components/post-favorite.php";?>
								</div>
								<div class="card__title">
									<span class="link-und link-und--green-d">
										Посещение Эко хаски Парка в Сокольниках
									</span>
								</div>
								<div class="card__text">Вам не хватает скорости и острых ощущений? За десять минут вы зарядитесь мощной дозой адреналина и сполна </div>
							</div>
							<div class="card__bottom">
								<div class="card__date"><span class="icon iconic--calendar"></span>16 января, 11:00–19:00</div>
								<div class="card__place"><span class="icon iconic--pin"></span>Клуб CrazyDriver</div>
								<div class="card__rating">
									<div class="rating">
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
									</div>
									13 отзывов
								</div>
							</div>
						</a>
						<a class="card js-card" href="#!">
							<div class="card__top">
								<div class="card__img" style="background-image: url(../images/userfiles/card3.jpg);">
									<?php include "components/post-favorite.php";?>
								</div>
								<div class="card__title">
									<span class="link-und link-und--green-d">
										Катание на багги
									</span>
								</div>
								<div class="card__text">Вам не хватает скорости и острых ощущений? За десять минут вы зарядитесь мощной дозой адреналина и сполна </div>
							</div>
							<div class="card__bottom">
								<div class="card__date"><span class="icon iconic--calendar"></span>16 января, 11:00–19:00</div>
								<div class="card__place"><span class="icon iconic--pin"></span>Клуб CrazyDriver</div>
								<div class="card__rating">
									<div class="rating">
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
									</div>
									13 отзывов
								</div>
							</div>
						</a>
						<a class="card js-card" href="#!">
							<div class="card__top">
								<div class="card__img" style="background-image: url(../images/userfiles/card4.jpg);">
									<?php include "components/post-favorite.php";?>
								</div>
								<div class="card__title">
									<span class="link-und link-und--green-d">
										Посещение Эко хаски Парка в Сокольниках
									</span>
								</div>
								<div class="card__text">Вам не хватает скорости и острых ощущений? За десять минут вы зарядитесь мощной дозой адреналина и сполна  дозой адреналина и сполна  дозой адреналина и сполна</div>
							</div>
							<div class="card__bottom">
								<div class="card__date"><span class="icon iconic--calendar"></span>16 января, 11:00–19:00</div>
								<div class="card__place"><span class="icon iconic--pin"></span>Клуб CrazyDriver</div>
								<div class="card__rating">
									<div class="rating">
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
									</div>
									13 отзывов
								</div>
							</div>
						</a>
					</div>
					<div class="index-slider js-index-slider">
						<a class="index-slider__item" href="#!" style="background-image: url(../images/userfiles/slide1.jpg);">
							<div class="index-slider__title"><span>Катание на воздушных шарах <br>в Московской области</span></div>
							<div class="index-slider__subtitle">Летайте с нами без выходных дней с 10:00 до 19:00</div>
							<div class="index-slider__place">Клуб «Воздухоплаватели»</div>
							<div class="index-slider__price">от  3990 руб.</div>
						</a>
						<a class="index-slider__item" href="#!" style="background-image: url(../images/userfiles/slide1.jpg);">
							<div class="index-slider__title"><span>Катание на воздушных шарах <br>в Московской области</span></div>
							<div class="index-slider__subtitle">Летайте с нами без выходных дней с 10:00 до 19:00</div>
							<div class="index-slider__place">Клуб «Воздухоплаватели»</div>
							<div class="index-slider__price">от  3990 руб.</div>
						</a>
					</div>
					<div class="index-cards__row">
						<a class="card js-card" href="#!">
							<div class="card__top">
								<div class="card__img" style="background-image: url(../images/userfiles/card1.jpg);">
									<?php include "components/post-favorite.php";?>
								</div>
								<div class="card__title">
									<span class="link-und link-und--green-d">
										Катание на багги «Экстрим под рев мотора»
									</span>
								</div>
								<div class="card__text">Вам не хватает скорости и острых ощущений? За десять минут вы зарядитесь мощной дозой адреналина и сполна </div>
							</div>
							<div class="card__bottom">
								<div class="card__date"><span class="icon iconic--calendar"></span>16 января, 11:00–19:00</div>
								<div class="card__place"><span class="icon iconic--pin"></span>Клуб CrazyDriver</div>
								<div class="card__rating">
									<div class="rating">
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
									</div>
									13 отзывов
								</div>
							</div>
						</a>
						<a class="card js-card" href="#!">
							<div class="card__top">
								<div class="card__img" style="background-image: url(../images/userfiles/card2.jpg);">
									<?php include "components/post-favorite.php";?>
								</div>
								<div class="card__title">
									<span class="link-und link-und--green-d">
										Посещение Эко хаски Парка в Сокольниках
									</span>
								</div>
								<div class="card__text">Вам не хватает скорости и острых ощущений? За десять минут вы зарядитесь мощной дозой адреналина и сполна </div>
							</div>
							<div class="card__bottom">
								<div class="card__date"><span class="icon iconic--calendar"></span>16 января, 11:00–19:00</div>
								<div class="card__place"><span class="icon iconic--pin"></span>Клуб CrazyDriver</div>
								<div class="card__rating">
									<div class="rating">
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
									</div>
									13 отзывов
								</div>
							</div>
						</a>
						<a class="card js-card" href="#!">
							<div class="card__top">
								<div class="card__img" style="background-image: url(../images/userfiles/card3.jpg);">
									<?php include "components/post-favorite.php";?>
								</div>
								<div class="card__title">
									<span class="link-und link-und--green-d">
										Катание на багги
									</span>
								</div>
								<div class="card__text">Вам не хватает скорости и острых ощущений? За десять минут вы зарядитесь мощной дозой адреналина и сполна </div>
							</div>
							<div class="card__bottom">
								<div class="card__date"><span class="icon iconic--calendar"></span>16 января, 11:00–19:00</div>
								<div class="card__place"><span class="icon iconic--pin"></span>Клуб CrazyDriver</div>
								<div class="card__rating">
									<div class="rating">
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
									</div>
									13 отзывов
								</div>
							</div>
						</a>
						<a class="card js-card" href="#!">
							<div class="card__top">
								<div class="card__img" style="background-image: url(../images/userfiles/card4.jpg);">
									<?php include "components/post-favorite.php";?>
								</div>
								<div class="card__title">
									<span class="link-und link-und--green-d">
										Посещение Эко хаски Парка в Сокольниках
									</span>
								</div>
								<div class="card__text">Вам не хватает скорости и острых ощущений? За десять минут вы зарядитесь мощной дозой адреналина и сполна  дозой адреналина и сполна  дозой адреналина и сполна</div>
							</div>
							<div class="card__bottom">
								<div class="card__date"><span class="icon iconic--calendar"></span>16 января, 11:00–19:00</div>
								<div class="card__place"><span class="icon iconic--pin"></span>Клуб CrazyDriver</div>
								<div class="card__rating">
									<div class="rating">
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
										<span class="icon iconic--star"></span>
									</div>
									13 отзывов
								</div>
							</div>
						</a>
					</div>

					<a href="#!" class="btn btn--green btn--arr">
						Все мероприятия
						<span class="iconic iconic--arr-r-light"></span>
					</a>
				</div>
			</section>

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
