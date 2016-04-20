<!DOCTYPE html>
<html lang="ru">
<?php $pageTitle = 'Организатор'; ?>
<?php include 'base/head.php';?>
<body>
	<div class="layout">
		<?php include 'base/header.php'; ?>

		<main class="page-body page-body--gray-l">

			<section class="organizator">
				<div class="wr">

					<div class="grid-right-fix">
						<div class="grid-right-fix__left">

							<div class="grid-right-fix__left-inner">

								<div class="actions-sl actions-sl--inner js-actions-sl2">
									<a class="actions-sl__item" href="#!" style="background-image: url(../images/userfiles/slide2.jpg);">
									</a>
									<a class="actions-sl__item" href="#!" style="background-image: url(../images/userfiles/slide3.jpg);">
									</a>
									<a class="actions-sl__item" href="#!" style="background-image: url(../images/userfiles/slide2.jpg);">
									</a>
									<a class="actions-sl__item" href="#!" style="background-image: url(../images/userfiles/slide3.jpg);">
									</a>
								</div>

								<h1 class="h3-bold">Что же такое квесты в реальности? </h1>
								<p class="text--big-b">Существует множество вариантов их названий - выход из комнаты, квест румы, реальные квесты или даже escape room. Смысл остаётся единым - вам необходимо собрать команду друзей и, совместными усилиями проходя испытания, выбраться из комнаты.</p>
								<p>Quest Reality предлагает одни из лучших и легендарных квестов в Москве. Здесь вы сможете оказаться на борту "Рейса 9/11", захваченного террористами, взломать систему, как в знаменитом фильме "Время", преодолеть свои страхи в "Темноте". Каждый наш квест детально проработан командой профессиональных сценаристов, бутафоров и электриков. Если вы на борту квеста про самолет, значит там будут настоящие кресла, штурвалы и приборные панели. Если захотите погрузиться в недалекое будущее квеста Время, то там не будет ни одного стандартного ключа, а всеми загадками управляют компьютеры и электроника. Ну а если же захотелось пощекотать свои нервы в Темноте, то можете быть уверены, там действительно кромешная темнота и максимальная атмосферность. Собирайте команду и приходите, чтобы проверить себя и прекрасно провести время!</p>

								<div class="social-share social-share--mrg">
									<div class="ya-share2" 
										 data-services="vkontakte,facebook,moimir,gplus,twitter"
										 data-counter=""></div>
								</div>

							</div>

						</div>
						<div class="grid-right-fix__right">
							<div class="sidebar sidebar--green">
								<div class="sidebar__item">
									<a href="#!" class="link link--bookmark link--icon">
										<span>Добавить в избранное</span>
									</a>
								</div>
								<div class="sidebar__item">
									<div class="sidebar__img">
										<img src="../images/userfiles/org-logo.jpg" alt="">
									</div>
								</div>
								<div class="sidebar__item">
									<div class="sidebar-text">
										<div class="sidebar-text__inner">
											<h3 class="h3-narrow">Quest Reality</h3>
											<p class="text--sm text--gray">QuestReality - это квесты в реальности. Игры, захватившие мир.</p>
											<p class="text--sm text--gray">Вы оказываетесь запертыми в помещении, полном механических и электронных загадок.</p>
											<p class="text--sm text--gray">Используйте логику, внимательность и смекалку, чтобы их решить и выбраться, пока время не истекло!</p>
										</div>
										<div class="sidebar-text__inner">
											<b>Сайт:</b> <a href="#!" class="link link-und link-und--green-d">questreality.ru</a>
										</div>
										<div class="sidebar-text__inner">
											<b>Телефон:</b> <a href="tel:+7 495 565-32-13" class="link link-und link-und--green-d">+7 495 565-32-13</a>
										</div>
										<div class="sidebar-text__inner">
											<div class="rating-static">
												<span class="icon iconic--star"></span>
												<span class="icon iconic--star"></span>
												<span class="icon iconic--star"></span>
												<span class="icon iconic--star"></span>
												<span class="icon iconic--star"></span>
											</div>
											13 отзывов 
										</div>
									</div>
								</div>
								<div class="sidebar__item">
									<a class="subscribe-link link js-popup-btn" data-popup-name="subscribe2" href="#!">
										<span class="subscribe-link__icon icon iconic--mail"></span>
										<span class="subscribe-link__text">
											<span class="link link-und link-und--dotted link-und--green2-d">
											Подписаться на новые
											<br>
											мероприятия организатора
											</span>
										</span>
									</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>

			<section class="materials-row">
				<div class="wr">
					<div class="materials-header">
						<div class="materials-header__item">
							<ul class="materials-nav">
								<li class="materials-nav__item active">
									<a class="materials-header__item active" href="#!">Текущие мероприятия </a>
								</li>
								<li class="materials-nav__item">
									<a class="materials-header__item" href="#!">Прошедшие мероприятия</a>
								</li>
							</ul>
						</div>
						
					</div>
					<?php include "blocks/materialsRow.php";?>
				</div>
			</section>

			<section class="organizator-comments">
				<div class="wr">

					<div class="comments-wr">
						<div class="comments__header">
							<div class="comments__header-title">
								<h2 class="h4-bold">Отзывы об организаторе <sup>35</sup></h2>
							</div>
							<div class="comments__header-right">
								<div class="comments__header-sort">
									<span class="comments__header-sort-txt">
										Сортировать
									</span>
									<div class="selector selector--inline js-selector">
									<span class="selector__option-current js-selector-current">
										 По рейтингу
									</span>
										<ul class="selector__options-list js-selector-options">
											<li class="selector__option js-selector-option">
												По рейтингу
											</li>
											<li class="selector__option js-selector-option">
												По отзывам
											</li>
											<li class="selector__option js-selector-option">
												По дате
											</li>
										</ul>
										<input type="hidden" value="" name="">
									</div>
								</div>

								<div class="comments__header-btn">
									<a class="btn btn--green btn--md" href="#!">Оставить отзыв</a>
								</div>
							</div>
						</div>
						<div class="comments__body">
							<div class="comment">
								<div class="comment__img">
									<img src="../images/userfiles/avatar1.jpg" alt="">
								</div>
								<div class="comment__inner">
									<div class="comment__title">
										Мне очень понравилось!
									</div>
									<div class="comment__rating">
										<div class="rating-wrap">

											<form class="rating rating--5">

												<div class="rating__star rating__star1">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star2">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star3">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star4">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star5">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__active-stars">
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
												</div>

											</form>

										</div>
									</div>
									<div class="comment__text">
										Это идеальная обзорная экскурсия для ознакомления
									</div>
									<div class="comment__date">
										Мигель  18.02.2015 в 15:14
									</div>
								</div>
							</div>
							<div class="comment">
								<div class="comment__img">
									<img src="../images/userfiles/avatar1.jpg" alt="">
								</div>
								<div class="comment__inner">
									<div class="comment__title">
										Какая-то херня...
									</div>
									<div class="comment__rating">
										<div class="rating-wrap">

											<form class="rating rating--3">

												<div class="rating__star rating__star1">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star2">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star3">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star4">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star5">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__active-stars">
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
												</div>

											</form>

										</div>
									</div>
									<div class="comment__text">
										Завершить это знакомство Вы можете подъемом на Эйфелеву башню, вх.билеты на которую я смогу Вам выкупить заранее!
									</div>
									<div class="comment__date">
										Мигель  18.02.2015 в 15:14
									</div>
								</div>
							</div>
							<div class="comment">
								<div class="comment__img">
									<img src="../images/userfiles/avatar1.jpg" alt="">
								</div>
								<div class="comment__inner">
									<div class="comment__title">
										Мне очень понравилось!
									</div>
									<div class="comment__rating">
										<div class="rating-wrap">

											<form class="rating rating--5">

												<div class="rating__star rating__star1">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star2">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star3">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star4">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star5">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__active-stars">
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
												</div>

											</form>

										</div>
									</div>
									<div class="comment__text">
										Это идеальная обзорная экскурсия для ознакомления
									</div>
									<div class="comment__date">
										Мигель  18.02.2015 в 15:14
									</div>
								</div>
							</div>
							<div class="comment">
								<div class="comment__img">
									<img src="../images/userfiles/avatar1.jpg" alt="">
								</div>
								<div class="comment__inner">
									<div class="comment__title">
										Какая-то херня...
									</div>
									<div class="comment__rating">
										<div class="rating-wrap">

											<form class="rating rating--3">

												<div class="rating__star rating__star1">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star2">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star3">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star4">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star5">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__active-stars">
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
												</div>

											</form>

										</div>
									</div>
									<div class="comment__text">
										Завершить это знакомство Вы можете подъемом на Эйфелеву башню, вх.билеты на которую я смогу Вам выкупить заранее!
									</div>
									<div class="comment__date">
										Мигель  18.02.2015 в 15:14
									</div>
								</div>
							</div>
							<div class="comment">
								<div class="comment__img">
									<img src="../images/userfiles/avatar1.jpg" alt="">
								</div>
								<div class="comment__inner">
									<div class="comment__title">
										Мне очень понравилось!
									</div>
									<div class="comment__rating">
										<div class="rating-wrap">

											<form class="rating rating--5">

												<div class="rating__star rating__star1">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star2">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star3">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star4">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star5">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__active-stars">
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
												</div>

											</form>

										</div>
									</div>
									<div class="comment__text">
										Это идеальная обзорная экскурсия для ознакомления
									</div>
									<div class="comment__date">
										Мигель  18.02.2015 в 15:14
									</div>
								</div>
							</div>
							<div class="comment">
								<div class="comment__img">
									<img src="../images/userfiles/avatar1.jpg" alt="">
								</div>
								<div class="comment__inner">
									<div class="comment__title">
										Какая-то херня...
									</div>
									<div class="comment__rating">
										<div class="rating-wrap">

											<form class="rating rating--3">

												<div class="rating__star rating__star1">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star2">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star3">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star4">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__star rating__star5">
													<span class="iconic iconic--star rating__star-inactive"></span>
												</div>

												<div class="rating__active-stars">
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
													<div class="rating__star">
														<span class="iconic iconic--star rating__star-active"></span>
													</div>
												</div>

											</form>

										</div>
									</div>
									<div class="comment__text">
										Завершить это знакомство Вы можете подъемом на Эйфелеву башню, вх.билеты на которую я смогу Вам выкупить заранее!
									</div>
									<div class="comment__date">
										Мигель  18.02.2015 в 15:14
									</div>
								</div>
							</div>
						</div>

						<button type="button" class="btn btn--more btn--round btn--white">
							<span class="btn__more-ico"></span>
							<span class="btn__txt">Показать еще</span>
						</button>
					</div>

				</div>
			</section>

		</main>

		<?php include 'base/footer.php'; ?>
		<?php include 'base/popups.php'; ?>
	</div>
	<?php include 'base/scripts.php'; ?>
</body>
</html>
