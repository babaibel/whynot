<!DOCTYPE html>
<html lang="ru">
<?php $pageTitle = 'Каталог'; ?>
<?php include 'base/head.php';?>
<body>
	<div class="layout">
		<?php
			$headerInner = 'true';
			$headerCabinet = 'true';
			include 'base/header.php';?>

		<main class="catalog-page">

			<div class="catalog-wr js-catalog-wr">
				<img src="../images/catalog-img-left.png" class="catalog-wr__bg-img catalog-wr__bg-img--left" draggable="false">
				<img src="../images/catalog-img-right.png" class="catalog-wr__bg-img catalog-wr__bg-img--right" draggable="false">


				<div class="filter js-filter">

					<div class="filter-main js-filter_main">
						<div class="wr">

							<div class="filter-main__info">
								<span class="filter-main__msg js-filter_msg">
									Найдено: 23 мероприятия
								</span>
							</div>

							<div class="daterange js-daterange" >

								<div class="daterange__line-wr">

									<div class="daterange__line">

										<div class="daterange__line-tracker js-daterange-tracker">
											<div class="daterange__visual-line-wr">
												<div class="daterange__visual-line js-daterange-v-line"></div>
											</div>

										</div>
									</div>

									<div class="daterange__ui js-daterange-ui"></div>

								</div>

								<input type="hidden" class="js-daterange_input">
							</div>

							<div class="chkb-dropdown chkb-dropdown--dates js-chkb-dropdown" data-resol="sm">
								<div class="chkb-dropdown__title js-chkb-dropdown__btn">
									По дате
								</div>

								<div class="chkb-dropdown__options-gr">
									<div class="datepicker-wr datepicker-wr--inline js-daterange-datepicker"
										 data-inline="true"
										 data-range="true" data-multiple-dates-separator=" - "></div>
								</div>
							</div>

							<input type="hidden" name="fordate" class="js-f-events-date">

						</div>
					</div>

					<div class="filter-main filter-main--line2">
						<div class="wr">

							<div class="filter-main__sort-gr">

								<div class="sort-chkb-wr">
									<label class="sort-chkb">
										<input type="radio" name="sorting_way" checked>
										<span class="sort-chkb__main">
											<span class="iconic iconic--grid"></span>
											<span class="sort-chkb__main-txt">
												Списком
											</span>
										</span>
									</label>

									<div class="sort-chkb js-popup-btn" data-popup-name="catMap">
										<span class="sort-chkb__main">
											<span class="iconic iconic--placemark"></span>
											<span class="sort-chkb__main-txt">
												На карте
											</span>
										</span>
									</div>

									<div class="selector selector--filter selector--inline js-selector">
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

							</div>

						</div>
					</div>

					<!-- <div class="filter__bottom">
						<div class="wr">

							<div class="filter-tags">
								<div class="filter-tag">
									<span class="filter-tag__txt">
										С детьми
									</span>
									<span class="filter-tag__cross js-filter-tag-close"></span>
								</div>

								<div class="filter-tag">
									<span class="filter-tag__txt">
										Спорт/Экстрим
									</span>
									<span class="filter-tag__cross js-filter-tag-close"></span>
								</div>

								<div class="filter-tag">
									<span class="filter-tag__txt">
										15 фев — 18 фев
									</span>
									<span class="filter-tag__cross js-filter-tag-close"></span>
								</div>
							</div>

						</div>
					</div> -->
				</div>
				<!-- /filter -->

				<div class="catalog">
					<div class="wr">

						<div class="catalog__main">
							<div class="materials-grid materials-grid--visible js-cards-hidden">

								<div class="materials-grid__col">
									<a class="card js-card" href="#!">
										<div class="card__top">
											<div class="card__img" style="background-image: url(../images/userfiles/card1.jpg);">
												<?php include "components/post-favorite.php";?>
												<span class="card__label">
													Выбор редакции
												</span>
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
												<div class="rating rating--sm rating--5">
													<div class="rating__star rating__star1">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="1" name="rating">
													</div>
													<div class="rating__star rating__star2">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="2" name="rating">
													</div>
													<div class="rating__star rating__star3">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="3" name="rating">
													</div>
													<div class="rating__star rating__star4">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="4" name="rating">
													</div>
													<div class="rating__star rating__star5">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="5" name="rating">
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
												13 отзывов
											</div>
										</div>
									</a>
								</div>

								<div class="materials-grid__col">
									<a class="card js-card" href="#!">
										<div class="card__top">
											<div class="card__img" style="background-image: url(../images/userfiles/card2.jpg);">
												<?php include "components/post-favorite.php";?>
												<span class="card__label">
													Выбор редакции
												</span>
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
												<div class="rating rating--sm rating--5">
													<div class="rating__star rating__star1">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="1" name="rating">
													</div>
													<div class="rating__star rating__star2">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="2" name="rating">
													</div>
													<div class="rating__star rating__star3">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="3" name="rating">
													</div>
													<div class="rating__star rating__star4">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="4" name="rating">
													</div>
													<div class="rating__star rating__star5">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="5" name="rating">
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
												13 отзывов
											</div>
										</div>
									</a>
								</div>

								<div class="materials-grid__col">
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
												<div class="rating rating--sm rating--5">
													<div class="rating__star rating__star1">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="1" name="rating">
													</div>
													<div class="rating__star rating__star2">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="2" name="rating">
													</div>
													<div class="rating__star rating__star3">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="3" name="rating">
													</div>
													<div class="rating__star rating__star4">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="4" name="rating">
													</div>
													<div class="rating__star rating__star5">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="5" name="rating">
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
												13 отзывов
											</div>
										</div>
									</a>
								</div>

								<div class="materials-grid__col materials-grid__col--info">

									<?php include "blocks/add-event.php";?>

									<div class="bug-note">
										<span class="bug-note__ico iconic iconic--bug"></span>
										<p class="bug-note__title">
											нашли ошибку в описании?
										</p>
										<p class="bug-note__txt">
											выделите текст с ошибкой
											и нажмите <b>Ctrl+Enter</b>
										</p>
									</div>
								</div>

								<div class="materials-grid__col">
									<a class="card js-card" href="#!">
										<div class="card__top">
											<div class="card__img" style="background-image: url(../images/userfiles/card5.jpg);">
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
												<div class="rating rating--sm rating--5">
													<div class="rating__star rating__star1">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="1" name="rating">
													</div>
													<div class="rating__star rating__star2">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="2" name="rating">
													</div>
													<div class="rating__star rating__star3">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="3" name="rating">
													</div>
													<div class="rating__star rating__star4">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="4" name="rating">
													</div>
													<div class="rating__star rating__star5">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="5" name="rating">
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
												13 отзывов
											</div>
										</div>
									</a>
								</div>

								<div class="materials-grid__col">
									<a class="card js-card" href="#!">
										<div class="card__top">
											<div class="card__img" style="background-image: url(../images/userfiles/card6.jpg);">
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
												<div class="rating rating--sm rating--5">
													<div class="rating__star rating__star1">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="1" name="rating">
													</div>
													<div class="rating__star rating__star2">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="2" name="rating">
													</div>
													<div class="rating__star rating__star3">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="3" name="rating">
													</div>
													<div class="rating__star rating__star4">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="4" name="rating">
													</div>
													<div class="rating__star rating__star5">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="5" name="rating">
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
												13 отзывов
											</div>
										</div>
									</a>
								</div>

								<div class="materials-grid__col">
									<a class="card card--full js-card" href="#!">
									<div class="card__top">
										<div class="card__img-full"
											 style="background-image: url(../images/userfiles/card-full1.jpg);">
											 <?php include "components/post-favorite.php";?>
										</div>
										<span class="card__label">
											Выбор редакции
										</span>
										<div class="card__title">
											<span class="link link--lime">
												ЭКСКУРСИЯ
												С ДИГГЕРОМ
												«ТАЙНЫ ПОДЗЕМНОЙ
												МОСКВЫ»
											</span>
										</div>
									</div>
									<div class="card__bottom">
										<div class="card__date"><span class="icon iconic--calendar"></span>16 января, 11:00–19:00</div>
										<div class="card__place"><span class="icon iconic--pin"></span>Клуб CrazyDriver</div>
										<div class="card__rating">
											<div class="rating rating--sm rating--5">
													<div class="rating__star rating__star1">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="1" name="rating">
													</div>
													<div class="rating__star rating__star2">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="2" name="rating">
													</div>
													<div class="rating__star rating__star3">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="3" name="rating">
													</div>
													<div class="rating__star rating__star4">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="4" name="rating">
													</div>
													<div class="rating__star rating__star5">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="5" name="rating">
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
											13 отзывов
										</div>
									</div>
								</a>
								</div>

								<div class="materials-grid__col">
									<a class="card js-card" href="#!">
										<div class="card__top">
											<div class="card__img" style="background-image: url(../images/userfiles/card7.jpg);">
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
												<div class="rating rating--sm rating--5">
													<div class="rating__star rating__star1">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="1" name="rating">
													</div>
													<div class="rating__star rating__star2">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="2" name="rating">
													</div>
													<div class="rating__star rating__star3">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="3" name="rating">
													</div>
													<div class="rating__star rating__star4">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="4" name="rating">
													</div>
													<div class="rating__star rating__star5">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="5" name="rating">
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
												13 отзывов
											</div>
										</div>
									</a>
								</div>

								<div class="materials-grid__col materials-grid__col--slider">
									<?php include "blocks/actionsSlider.php";?>
								</div>

								<div class="materials-grid__col">
									<a class="card js-card" href="#!">
										<div class="card__top">
											<div class="card__img" style="background-image: url(../images/userfiles/card1.jpg);">
												<?php include "components/post-favorite.php";?>
												<span class="card__label">
													Выбор редакции
												</span>
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
												<div class="rating rating--sm rating--5">
													<div class="rating__star rating__star1">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="1" name="rating">
													</div>
													<div class="rating__star rating__star2">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="2" name="rating">
													</div>
													<div class="rating__star rating__star3">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="3" name="rating">
													</div>
													<div class="rating__star rating__star4">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="4" name="rating">
													</div>
													<div class="rating__star rating__star5">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="5" name="rating">
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
												13 отзывов
											</div>
										</div>
									</a>
								</div>

								<div class="materials-grid__col">
									<a class="card card--full js-card" href="#!">
									<div class="card__top">
										<div class="card__img-full"
											 style="background-image: url(../images/userfiles/card-full1.jpg);">
											 <?php include "components/post-favorite.php";?>
										</div>
										<span class="card__label">
											Выбор редакции
										</span>
										<div class="card__title">
											<span class="link link--lime">
												ЭКСКУРСИЯ
												С ДИГГЕРОМ
												«ТАЙНЫ ПОДЗЕМНОЙ
												МОСКВЫ»
											</span>
										</div>
									</div>
									<div class="card__bottom">
										<div class="card__date"><span class="icon iconic--calendar"></span>16 января, 11:00–19:00</div>
										<div class="card__place"><span class="icon iconic--pin"></span>Клуб CrazyDriver</div>
										<div class="card__rating">
											<div class="rating rating--sm rating--5">
													<div class="rating__star rating__star1">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="1" name="rating">
													</div>
													<div class="rating__star rating__star2">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="2" name="rating">
													</div>
													<div class="rating__star rating__star3">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="3" name="rating">
													</div>
													<div class="rating__star rating__star4">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="4" name="rating">
													</div>
													<div class="rating__star rating__star5">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="5" name="rating">
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
											13 отзывов
										</div>
									</div>
								</a>
								</div>

								<div class="materials-grid__col">
									<a class="card js-card" href="#!">
										<div class="card__top">
											<div class="card__img" style="background-image: url(../images/userfiles/card2.jpg);">
												<?php include "components/post-favorite.php";?>
												<span class="card__label">
													Выбор редакции
												</span>
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
												<div class="rating rating--sm rating--5">
													<div class="rating__star rating__star1">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="1" name="rating">
													</div>
													<div class="rating__star rating__star2">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="2" name="rating">
													</div>
													<div class="rating__star rating__star3">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="3" name="rating">
													</div>
													<div class="rating__star rating__star4">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="4" name="rating">
													</div>
													<div class="rating__star rating__star5">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="5" name="rating">
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
												13 отзывов
											</div>
										</div>
									</a>
								</div>

								<div class="materials-grid__col">
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
												<div class="rating rating--sm rating--5">
													<div class="rating__star rating__star1">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="1" name="rating">
													</div>
													<div class="rating__star rating__star2">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="2" name="rating">
													</div>
													<div class="rating__star rating__star3">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="3" name="rating">
													</div>
													<div class="rating__star rating__star4">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="4" name="rating">
													</div>
													<div class="rating__star rating__star5">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="5" name="rating">
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
												13 отзывов
											</div>
										</div>
									</a>
								</div>

								<div class="materials-grid__col">
									<a class="card js-card" href="#!">
										<div class="card__top">
											<div class="card__img" style="background-image: url(../images/userfiles/card5.jpg);">
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
												<div class="rating rating--sm rating--5">
													<div class="rating__star rating__star1">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="1" name="rating">
													</div>
													<div class="rating__star rating__star2">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="2" name="rating">
													</div>
													<div class="rating__star rating__star3">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="3" name="rating">
													</div>
													<div class="rating__star rating__star4">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="4" name="rating">
													</div>
													<div class="rating__star rating__star5">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="5" name="rating">
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
												13 отзывов
											</div>
										</div>
									</a>
								</div>

								<div class="materials-grid__col">
									<a class="card js-card" href="#!">
										<div class="card__top">
											<div class="card__img" style="background-image: url(../images/userfiles/card6.jpg);">
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
												<div class="rating rating--sm rating--5">
													<div class="rating__star rating__star1">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="1" name="rating">
													</div>
													<div class="rating__star rating__star2">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="2" name="rating">
													</div>
													<div class="rating__star rating__star3">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="3" name="rating">
													</div>
													<div class="rating__star rating__star4">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="4" name="rating">
													</div>
													<div class="rating__star rating__star5">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="5" name="rating">
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
												13 отзывов
											</div>
										</div>
									</a>
								</div>

								<div class="materials-grid__col">
									<a class="card js-card" href="#!">
										<div class="card__top">
											<div class="card__img" style="background-image: url(../images/userfiles/card2.jpg);">
												<?php include "components/post-favorite.php";?>
												<span class="card__label">
													Выбор редакции
												</span>
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
												<div class="rating rating--sm rating--5">
													<div class="rating__star rating__star1">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="1" name="rating">
													</div>
													<div class="rating__star rating__star2">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="2" name="rating">
													</div>
													<div class="rating__star rating__star3">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="3" name="rating">
													</div>
													<div class="rating__star rating__star4">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="4" name="rating">
													</div>
													<div class="rating__star rating__star5">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="5" name="rating">
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
												13 отзывов
											</div>
										</div>
									</a>
								</div>

								<div class="materials-grid__col">
									<a class="card js-card" href="#!">
										<div class="card__top">
											<div class="card__img" style="background-image: url(../images/userfiles/card7.jpg);">
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
												<div class="rating rating--sm rating--5">
													<div class="rating__star rating__star1">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="1" name="rating">
													</div>
													<div class="rating__star rating__star2">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="2" name="rating">
													</div>
													<div class="rating__star rating__star3">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="3" name="rating">
													</div>
													<div class="rating__star rating__star4">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="4" name="rating">
													</div>
													<div class="rating__star rating__star5">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="5" name="rating">
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
												13 отзывов
											</div>
										</div>
									</a>
								</div>

								<div class="materials-grid__col _hidden">
									<a class="card js-card" href="#!">
										<div class="card__top">
											<div class="card__img" style="background-image: url(../images/userfiles/card5.jpg);">
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
												<div class="rating rating--sm rating--5">
													<div class="rating__star rating__star1">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="1" name="rating">
													</div>
													<div class="rating__star rating__star2">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="2" name="rating">
													</div>
													<div class="rating__star rating__star3">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="3" name="rating">
													</div>
													<div class="rating__star rating__star4">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="4" name="rating">
													</div>
													<div class="rating__star rating__star5">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="5" name="rating">
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
												13 отзывов
											</div>
										</div>
									</a>
								</div>

								<div class="materials-grid__col _hidden">
									<a class="card js-card" href="#!">
										<div class="card__top">
											<div class="card__img" style="background-image: url(../images/userfiles/card6.jpg);">
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
												<div class="rating rating--sm rating--5">
													<div class="rating__star rating__star1">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="1" name="rating">
													</div>
													<div class="rating__star rating__star2">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="2" name="rating">
													</div>
													<div class="rating__star rating__star3">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="3" name="rating">
													</div>
													<div class="rating__star rating__star4">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="4" name="rating">
													</div>
													<div class="rating__star rating__star5">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="5" name="rating">
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
												13 отзывов
											</div>
										</div>
									</a>
								</div>

								<div class="materials-grid__col _hidden">
									<a class="card js-card" href="#!">
										<div class="card__top">
											<div class="card__img" style="background-image: url(../images/userfiles/card2.jpg);">
												<?php include "components/post-favorite.php";?>
												<span class="card__label">
													Выбор редакции
												</span>
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
												<div class="rating rating--sm rating--5">
													<div class="rating__star rating__star1">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="1" name="rating">
													</div>
													<div class="rating__star rating__star2">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="2" name="rating">
													</div>
													<div class="rating__star rating__star3">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="3" name="rating">
													</div>
													<div class="rating__star rating__star4">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="4" name="rating">
													</div>
													<div class="rating__star rating__star5">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="5" name="rating">
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
												13 отзывов
											</div>
										</div>
									</a>
								</div>

								<div class="materials-grid__col _hidden">
									<a class="card js-card" href="#!">
										<div class="card__top">
											<div class="card__img" style="background-image: url(../images/userfiles/card7.jpg);">
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
												<div class="rating rating--sm rating--5">
													<div class="rating__star rating__star1">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="1" name="rating">
													</div>
													<div class="rating__star rating__star2">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="2" name="rating">
													</div>
													<div class="rating__star rating__star3">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="3" name="rating">
													</div>
													<div class="rating__star rating__star4">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="4" name="rating">
													</div>
													<div class="rating__star rating__star5">
														<span class="iconic iconic--star rating__star-inactive"></span>
														<input type="radio" value="5" name="rating">
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
												13 отзывов
											</div>
										</div>
									</a>
								</div>

							</div>

						</div>

						<div class="catalog__footer">
							<button type="button" class="btn btn--more btn--round btn--white js-show-cards">
								<span class="btn__more-ico"></span>
								<span class="btn__txt">Показать еще</span>
							</button>
						</div>
					</div>
				</div>

			</div>

		</main>

		<?php include 'base/footer.php'; ?>
		<?php include 'base/popups.php'; ?>
		<?php include 'components/feedback-popup.php'; ?>
	</div>
	<?php include 'base/scripts.php'; ?>
</body>
</html>
