<!DOCTYPE html>
<html lang="ru">
<?php $pageTitle = 'ЛК - пользователь'; ?>
<?php include 'base/head.php';?>
<body>
	<div class="layout">
		<?php include 'base/header.php'; ?>

		<main class="page-body page-body--gray-l page-body--lk">

			<?php include 'blocks/lk-menu.php'; ?>

			<section class="lk-settings">
				<div class="wr">

					<div class="grid-right-fix">
						<div class="grid-right-fix__left">

							<div class="grid-right-fix__left-inner">
								<div class="lk-settings__row">
									<div class="lk-settings__avatar">
										<label class="img-input">
											<div class="img-input__main js-ava-upload" data-min-h="50" data-min-w="50">
												<input type="file">
												<span class="img-input__txt"> Загрузите изображение не менее 50х50 пикс </span>
											</div>
										</label>
										<!-- todo upload script-->
									</div>
									<div class="lk-settings__form">
										<form>
											<h2 class="h2-inner">Личные данные</h2>
											<div class="form-gr">
												<div class="form-row">
													<div class="form-row__name-col">
														<div class="form-row__name">Имя и фамилия</div>
													</div>
													<div class="form-row__content-col">
														<div class="form-row__content">
															<div class="input-cont">
																<input class="input" type="text" value="Дуров Константин">
															</div>
														</div>
													</div>
												</div>
												<div class="form-row">
													<div class="form-row__name-col">
														<div class="form-row__name">Электронная почта</div>
													</div>
													<div class="form-row__content-col">
														<div class="form-row__content">
															<div class="input-cont">
																<input class="input" type="text" value="org@pochemybi.net">
															</div>
														</div>
													</div>
												</div>
											</div>
											<h2 class="h2-inner">Рассылка новых мероприятий</h2>
											<div class="form-gr">
												<div class="form-row">
													<div class="form-row__name-col">
														<div class="form-row__name">
															Вы можете выбрать только те разделы, которые интересны именно вам.
														</div>
													</div>
													<div class="form-row__name-col">
														<div class="form-row__name">
															Подписаться на мероприятия конкретного организатора можно со страницы этого организатора.
														</div>
													</div>
												</div>
												<div class="form-row">
													<div class="form-cols">
														<div class="form-cols__col">
															<label class="checkbox-label">
																<span class="checkbox">
																	<input type="checkbox" checked>
																	<span class="checkbox__view"></span>
																</span>
																<span class="checkbox-label__txt">Погулять</span>
															</label>
															<label class="checkbox-label">
																<span class="checkbox">
																	<input type="checkbox" checked>
																	<span class="checkbox__view"></span>
																</span>
																<span class="checkbox-label__txt">Посмотреть</span>
															</label>
															<label class="checkbox-label">
																<span class="checkbox">
																	<input type="checkbox">
																	<span class="checkbox__view"></span>
																</span>
																<span class="checkbox-label__txt">Поиграть</span>
															</label>
														</div>
														<div class="form-cols__col">
															<label class="checkbox-label">
																<span class="checkbox">
																	<input type="checkbox">
																	<span class="checkbox__view"></span>
																</span>
																<span class="checkbox-label__txt">Позаниматься</span>
															</label>
															<label class="checkbox-label">
																<span class="checkbox">
																	<input type="checkbox">
																	<span class="checkbox__view"></span>
																</span>
																<span class="checkbox-label__txt">Дети</span>
															</label>
															<label class="checkbox-label">
																<span class="checkbox">
																	<input type="checkbox">
																	<span class="checkbox__view"></span>
																</span>
																<span class="checkbox-label__txt">Спорт-экстрим</span>
															</label>
														</div>
													</div>
												</div>
											</div>
											<h2 class="h2-inner">Смена пароля</h2>
											<div class="form-gr">
												<div class="form-row form-row--inline form-row--multi">
													<div class="form-row__content form-row__content--divided">
														<div class="input-wr">
															<span class="input-wr__name"> Старый пароль </span>
															<div class="input-cont">
																<input class="input" type="password">
																<span class="input-error"> Пример ошибки </span>
															</div>
														</div>
														<div class="input-wr">
															<span class="input-wr__name"> Новый пароль </span>
															<div class="input-cont">
																<input class="input" type="password">
															</div>
														</div>
													</div>
												</div>
												<div class="form-row form-row--submit">
													<button class="btn btn--green" type="submit">Сохранить изменения</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>

						</div>
						<div class="grid-right-fix__right">

							<?php include "blocks/add-event.php";?>

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
