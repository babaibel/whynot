<!DOCTYPE html>
<html lang="ru">
<?php $pageTitle = 'ЛК - организатора 2 редактирование'; ?>
<?php include 'base/head.php';?>
<body>
	<div class="layout">
		<?php
			$headerCabinetOrg = 'true';
			include 'base/header.php';?>

		<main class="page-body page-body--gray-l page-body--lk">

			<?php include 'blocks/lk-menu-org.php'; ?>

			<section class="alert-wr alert--green js-alert">
				<div class="wr">
					<div class="alert__row">
						<div class="alert__btn">
							<a href="#!" class="btn btn--circle-big js-alert-close"> <span class="icon iconic--cross"></span> </a>
						</div>
						<div class="alert__text">
							Мы создали удобную систему редактирования информации ваших проектов.  Вся информация в полях сохраняется автоматически, если вы не завершили создание проекта, он автоматически окажется в черновиках. Если какие-то блоки будут пустыми или неотредактированными (содержать нашу тестовую информацию), они будут скрыты при публикации.
						</div>
					</div>
				</div>
			</section>

			<section class="lk-organizator">
				<div class="wr">

					<div class="grid-right-fix">
						<div class="grid-right-fix__left">

							<div class="grid-right-fix__left-inner">

								<form>
									<h2 class="h2-inner">Добавление/редактирование мероприятия <a href="#!"><sup class="text--red">Удалить мероприятие</sup></a></h2>
									<div class="form-gr">
										<div class="form-row form-row--half">
											<div class="form-row__name-col">
												<div class="form-row__name">Название мероприятия*</div>
											</div>
											<div class="form-row__content-col">
												<div class="form-row__content">
													<div class="input-cont">
														<input class="input" type="text" value="Quest Темнота" required>
													</div>
												</div>
											</div>
										</div>
										<div class="form-row form-row--half">
											<div class="form-row__col-wr">
												<div class="form-row__col form-row__col--w60">
													<div class="form-row__name-col">
														<div class="form-row__name">Дата проведения*</div>
													</div>
													<div class="form-row__content-col">
														<div class="form-row__content">
															<div class="input-cont">
																<input  type="text"
																		value="06.04.2016 - 09.04.2016" 
																		class="input datepicker-here"
																		data-range="true"
																		data-multiple-dates-separator=" - "
																		data-position='bottom left'/>
															</div>
														</div>
													</div>
												</div>
												<div class="form-row__col form-row__col--w40">
													<div class="form-row__name-col">
														<div class="form-row__name">Время</div>
													</div>
													<div class="form-row__content-col">
														<div class="form-row__content">
															<div class="input-cont">
																<input class="input" type="text">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-row form-row--half">
											<div class="form-row__name-col">
												<div class="form-row__name">Стоимость*</div>
											</div>
											<div class="form-row__content-col">
												<div class="form-row__content">
													<div class="input-cont">
														<input class="input" type="text" value="" required>
													</div>
												</div>
											</div>
										</div>
										<div class="form-row form-row--half">
											<div class="form-row__name-col">
												<div class="form-row__name">Ограничения</div>
											</div>
											<div class="form-row__content-col">
												<div class="form-row__content">
													<div class="input-cont">
														<input class="input" type="text" value="">
													</div>
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="form-row__name-col">
												<div class="form-row__name">Краткое описание</div>
											</div>
											<div class="form-row__content-col">
												<div class="form-row__content">
													<div class="input-cont">
														<textarea class="textarea">Мы делаем то, что умеем лучше всего. Мы занимаемся любимым делом, получая от этого огромное удовольствие! Дизайн для нас больше, чем просто работа. Это стиль жизни, образ мышления, выражение внутренних эмоций и чувств.</textarea>
													</div>
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="form-row__name-col">
												<div class="form-row__name">Полное описание</div>
											</div>
											<div class="form-row__content-col">
												<div class="form-row__content">
													<div class="input-cont">
														<!-- to do style buttons -->
														<textarea class="textarea textarea--big">Quest Reality предлагает одни из лучших и легендарных квестов в Москве. Здесь вы сможете оказаться на борту "Рейса 9/11", захваченного террористами, взломать систему, как в знаменитом фильме "Время", преодолеть свои страхи в "Темноте". Каждый наш квест детально проработан командой профессиональных сценаристов, бутафоров и электриков. Если вы на борту квеста про самолет, значит там будут настоящие кресла, штурвалы и приборные панели. Если захотите погрузиться в недалекое будущее квеста Время, то там не будет ни одного стандартного ключа, а всеми загадками управляют компьютеры и электроника. Ну а если же захотелось пощекотать свои нервы в Темноте, то можете быть уверены, там действительно кромешная темнота и максимальная атмосферность. Собирайте команду и приходите, чтобы проверить себя и прекрасно провести время!</textarea>
													</div>
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="form-row__name-col">
												<div class="form-row__name">Фотографии обложки организатора </div>
											</div>
											<div class="form-row__content-col">
												<div class="form-row__content">
													<div class="input-cont">
														<div class="actions-sl actions-sl--inner js-actions-sl2">
															<div class="actions-sl__item">
																<label class="img-input img-input--green img-input--fix img-input--xl">
																	<div class="img-input__main js-ava-upload" data-min-h="50" data-min-w="50">
																	<input type="file">
																	<span class="img-input__icon icon iconic--download"></span>
																	<span class="img-input__txt"> 
																		Загрузите одну или несколько фотографий, размером не <br>менее 893х420 пикс </span>
																	</div>
																</label>
															</div>
															<div class="actions-sl__item">
																<label class="img-input img-input--green img-input--fix img-input--xl">
																	<div class="img-input__main js-ava-upload" data-min-h="50" data-min-w="50">
																	<input type="file">
																	<span class="img-input__icon icon iconic--download"></span>
																	<span class="img-input__txt"> 
																		Загрузите одну или несколько фотографий, размером не <br>менее 893х420 пикс </span>
																	</div>
																</label>
															</div>
															<div class="actions-sl__item">
																<label class="img-input img-input--green img-input--fix img-input--xl">
																	<div class="img-input__main js-ava-upload" data-min-h="50" data-min-w="50">
																	<input type="file">
																	<span class="img-input__icon icon iconic--download"></span>
																	<span class="img-input__txt"> 
																		Загрузите одну или несколько фотографий, размером не <br>менее 893х420 пикс </span>
																	</div>
																</label>
															</div>
															<div class="actions-sl__item">
																<label class="img-input img-input--green img-input--fix img-input--xl">
																	<div class="img-input__main js-ava-upload" data-min-h="50" data-min-w="50">
																	<input type="file">
																	<span class="img-input__icon icon iconic--download"></span>
																	<span class="img-input__txt"> 
																		Загрузите одну или несколько фотографий, размером не <br>менее 893х420 пикс </span>
																	</div>
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>

							</div>

						</div>
						<div class="grid-right-fix__right">
							<div class="sidebar sidebar--green">
								<div class="sidebar__item">
									<a href="#!" class="link link--eye link--icon">
										<span>Смотреть мою страницу</span>
									</a>
								</div>
								<div class="sidebar__item">
									<label class="img-input img-input--green img-input--fix img-input--xs">
										<div class="img-input__main js-ava-upload" data-min-h="50" data-min-w="50">
										<input type="file">
										<span class="img-input__icon icon iconic--download"></span>
										<span class="img-input__txt"> 
											Логотип организатора, не <br> менее 230 пикс по ширине</span>
										</div>
									</label>
									<!-- todo upload script-->
								</div>
								<div class="sidebar__item">
									<div class="sidebar-text">
										<div class="sidebar-text__inner">
											<h3 class="h3-narrow">Контактная информация</h3>
											<p class="text--sm text--gray">Незаполненные поля не будут отражены в карточке мероприятия.</p>
										</div>
										<div class="sidebar-text__inner">
											<b>Сайт:</b> <a href="#!" class="link link-und link-und--green-d">questreality.ru</a>
										</div>
										<div class="sidebar-text__inner">
											<b>Телефон:</b> <a href="tel:+7 495 565-32-13" class="link link-und link-und--green-d">+7 495 565-32-13</a>
										</div>
										<div class="sidebar-text__inner">
											<b>Почта:</b> <a href="mailto: mail@questreality.ru" class="link link-und link-und--green-d">mail@questreality.ru</a>
										</div>
										<div class="sidebar-text__inner">
											<b>Скайп:</b> <a href="skype: quest-reality" class="link link-und link-und--green-d">quest-reality</a>
										</div>
										<div class="sidebar-text__inner">
											<b>WatsApp:</b> <a href="tel:+7 495 565-32-13" class="link link-und link-und--green-d">+7 495 565-32-13</a>
										</div>
										<div class="sidebar-text__inner">
											<b>Адрес:</b> <a href="#!" class="link link-und link-und--green-d">Москва, Арбат 24</a>
										</div>
										<div class="sidebar-text__inner">
											<b>Название:</b> <a href="#!" class="link link-und link-und--green-d">Парк Сокольники</a>
										</div>
									</div>
								</div>
								<div class="sidebar__item">
									<a href="#!" class="btn btn--green btn--md btn--long">Отправить на модерацию</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>

		</main>

		<?php include 'base/footer.php'; ?>
	</div>
	<?php include 'base/scripts.php'; ?>
</body>
</html>
