<!DOCTYPE html>
<html lang="ru">
<?php $pageTitle = 'Контакты'; ?>
<?php include 'base/head.php';?>
<body>
	<div class="layout">
		<?php
			$headerCabinet = 'true';
			include 'base/header.php';?>

		<main class="page-body">

			<section class="contacts js-contacts">
				<div class="wr">
					<h1 class="h2">Контактная информация</h1>
					<div class="contacts__row">
						<div class="contacts__info">
							<div class="contacts__info-text">
								Будем рады ответить на ваши вопросы, предложения или жалобы
							</div>
							<div class="contacts__info-phone">
								<a href="tel:">+7 495 772-32-16</a>
							</div>
							<div class="contacts__info-soc">
								<span>Мы в соц. сетях:</span>
								<div class="social">
									<a class="social__item" href="#!">
										<span class="icon iconic--soc-vk-v"></span>
									</a>
									<a class="social__item" href="#!">
										<span class="icon iconic--soc-fb"></span>
									</a>
									<a class="social__item" href="#!">
										<span class="icon iconic--soc-tw"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="contacts__emails">
							<div class="contacts__emails-row">
								<div class="contacts__emails-email">
									<a href="#!" class="link-und link-und--green-d">linkinfo@pochemybi.net </a>
								</div>
								<div class="contacts__emails-text">
									Технические проблемы, пожелания, предложения
								</div>
							</div>
							<div class="contacts__emails-row">
								<div class="contacts__emails-email">
									<a href="#!" class="link-und link-und--green-d">partner@pochemybi.net </a>
								</div>
								<div class="contacts__emails-text">
									Вопросы по сотрудничеству
								</div>
							</div>
							<div class="contacts__emails-row">
								<div class="contacts__emails-email">
									<a href="#!" class="link-und link-und--green-d">sales@pochemybi.net </a>
								</div>
								<div class="contacts__emails-text">
									Реклама и маркетинг
								</div>
							</div>
							<div class="contacts__emails-row">
								<div class="contacts__emails-email">
									<a href="#!" class="link-und link-und--green-d">press@pochemybi.net </a>
								</div>
								<div class="contacts__emails-text">
									Для СМИ
								</div>
							</div>
							<div class="contacts__emails-row">
								<div class="contacts__emails-email">
									<a href="#!" class="link-und link-und--green-d">fomicheva@pochemybi.net </a>
								</div>
								<div class="contacts__emails-text">
									Генеральному директору Фомичевой Анастасии
								</div>
							</div>
						</div>
					</div>
					<div class="contacts__bg" style="background: url(../images/userfiles/people15.png) no-repeat 100% 50%;"></div>
				</div>
			</section>

			<section class="contacts-comments bg--gray">
				<div class="wr">

					<div class="grid-right-fix">
						<div class="grid-right-fix__left">

							<div class="grid-right-fix__left-inner">

								<div class="comments-wr">
									<div class="comments__header">
										<div class="comments__header-title">
											<h2 class="h3-bold">Отзывы о проекте <sup>35</sup></h2>
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
												<a class="btn btn--green btn--md js-comment-new-btn" href="#!">Оставить отзыв</a>
											</div>
										</div>
									</div>
									<div class="comments__new js-comment-new">
										<div class="comment">
											<div class="comment__img">
												<img src="../images/userfiles/avatar1.jpg" alt="">
											</div>
											<div class="comment__inner">
												<form>
													<div class="comment__textarea">
														<textarea placeholder="Что вы думаете об этом?" class="textarea"></textarea>
													</div>
													<div class="comment__rating">
														<div class="rating-wrap">

															<div class="rating js-rating">

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

															</div>

														</div>
													</div>

													<div class="comment__btn">
														<button class="btn btn--green" type="submit">отправить</button>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="comments__body js-comment-hidden">
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
										<div class="comment _hidden">
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
										<div class="comment _hidden">
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
										<div class="comment _hidden">
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
										<div class="comment _hidden">
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
										<div class="comment _hidden">
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
									<button type="button" class="btn btn--more btn--round btn--white js-show-comment">
										<span class="btn__more-ico"></span>
										<span class="btn__txt">Показать еще</span>
									</button>
								</div>

							</div>

						</div>
						<div class="grid-right-fix__right">
							<img src="../images/userfiles/vk-widget.jpg" alt="">
						</div>
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
