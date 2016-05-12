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
										<div class="form-row form-row--half js-date-wr">
											<div class="form-row__col-wr">
												<div class="form-row__col form-row__col--w60">
													<div class="form-row__name-col">
														<div class="form-row__name">Дата проведения*</div>
													</div>
													<div class="form-row__content-col">
														<div class="form-row__content">
															<div class="input-cont">
																<input  type="text"
																		class="input datepicker-here js-date-add"
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
											<div class="form-row__dates js-date-table">
											</div>
										</div>
										<div class="form-row form-row--half">
											<div class="form-row__name-col">
												<div class="form-row__name">Адрес*</div>
											</div>
											<div class="form-row__content-col">
												<div class="form-row__content">
													<div class="input-cont">
														<input class="input" type="text" required>
													</div>
												</div>
											</div>
										</div>
										<div class="form-row form-row--half">
											<div class="form-row__name-col">
												<div class="form-row__name">Название места</div>
											</div>
											<div class="form-row__content-col">
												<div class="form-row__content">
													<div class="input-cont">
														<input class="input" type="text">
													</div>
												</div>
											</div>
										</div>
										<div class="form-row form-row--half">
											<div class="form-row__name-col">
												<div class="form-row__name">Ближайшее метро</div>
											</div>
											<div class="form-row__content-col">
												<div class="form-row__content">
													<div class="input-cont">
														<select id="metro" class="select" placeholder="Начните вводить...">
															<option value="">Станция метро</option>
															<option data-color="blue" value="Пятницкое шоссе">Пятницкое шоссе</option>
															<option data-color="blue" value="Митино">Митино</option>
															<option data-color="blue" value="Волоколамская">Волоколамская</option>
															<option data-color="blue" value="Мякинино">Мякинино</option>
															<option data-color="blue" value="Строгино">Строгино</option>
															<option data-color="blue" value="Крылатское">Крылатское</option>
															<option data-color="blue" value="Молодёжная">Молодёжная</option>
															<option data-color="blue" value="Кунцевская">Кунцевская</option>
															<option data-color="blue" value="Славянский бульвар">Славянский бульвар</option>
															<option data-color="blue" value="Парк Победы">Парк Победы</option>
															<option data-color="blue" value="Смоленская">Смоленская</option>
															<option data-color="blue" value="Арбатская">Арбатская</option>
															<option data-color="blue" value="Площадь Революции">Площадь Революции</option>
															<option data-color="blue" value="Курская">Курская</option>
															<option data-color="blue" value="Бауманская">Бауманская</option>
															<option data-color="blue" value="Электрозаводская">Электрозаводская</option>
															<option data-color="blue" value="Семёновская">Семёновская</option>
															<option data-color="blue" value="Партизанская">Партизанская</option>
															<option data-color="blue" value="Измайловская">Измайловская</option>
															<option data-color="blue" value="Первомайская">Первомайская</option>
															<option data-color="blue" value="Щёлковская">Щёлковская</option>
															<option data-color="purple" value="Планерная">Планерная</option>
															<option data-color="purple" value="Сходненская">Сходненская</option>
															<option data-color="purple" value="Тушинская">Тушинская</option>
															<option data-color="purple" value="Спартак">Спартак</option>
															<option data-color="purple" value="Щукинская">Щукинская</option>
															<option data-color="purple" value="Октябрьское поле">Октябрьское поле</option>
															<option data-color="purple" value="Полежаевская">Полежаевская</option>
															<option data-color="purple" value="Беговая">Беговая</option>
															<option data-color="purple" value="Улица 1905 года">Улица 1905 года</option>
															<option data-color="purple" value="Баррикадная">Баррикадная</option>
															<option data-color="purple" value="Пушкинская">Пушкинская</option>
															<option data-color="purple" value="Кузнецкий мост">Кузнецкий мост</option>
															<option data-color="purple" value="Пролетарская">Пролетарская</option>
															<option data-color="purple" value="Волгоградский проспект">Волгоградский проспект</option>
															<option data-color="purple" value="Текстильщики">Текстильщики</option>
															<option data-color="purple" value="Кузьминки">Кузьминки</option>
															<option data-color="purple" value="Рязанский проспект">Рязанский проспект</option>
															<option data-color="purple" value="Выхино">Выхино</option>
															<option data-color="purple" value="Лермонтовский проспект">Лермонтовский проспект</option>
															<option data-color="purple" value="Жулебино">Жулебино</option>
															<option data-color="purple" value="Котельники">Котельники</option>
															<option data-color="green" value="Речной вокзал">Речной вокзал</option>
															<option data-color="green" value="Водный стадион">Водный стадион</option>
															<option data-color="green" value="Войковская">Войковская</option>
															<option data-color="green" value="Сокол">Сокол</option>
															<option data-color="green" value="Аэропорт">Аэропорт</option>
															<option data-color="green" value="Динамо">Динамо</option>
															<option data-color="green" value="Маяковская">Маяковская</option>
															<option data-color="green" value="Тверская">Тверская</option>
															<option data-color="green" value="Театральная">Театральная</option>
															<option data-color="green" value="Новокузнецкая">Новокузнецкая</option>
															<option data-color="green" value="Автозаводская">Автозаводская</option>
															<option data-color="green" value="Технопарк">Технопарк</option>
															<option data-color="green" value="Коломенская">Коломенская</option>
															<option data-color="green" value="Каширская">Каширская</option>
															<option data-color="green" value="Кантемировская">Кантемировская</option>
															<option data-color="green" value="Царицыно">Царицыно</option>
															<option data-color="green" value="Орехово">Орехово</option>
															<option data-color="green" value="Домодедовская">Домодедовская</option>
															<option data-color="green" value="Красногвардейская">Красногвардейская</option>
															<option data-color="green" value="Алма-Атинская">Алма-Атинская</option>
															<option data-color="grey" value="Алтуфьево">Алтуфьево</option>
															<option data-color="grey" value="Бибирево">Бибирево</option>
															<option data-color="grey" value="Отрадное">Отрадное</option>
															<option data-color="grey" value="Владыкино">Владыкино</option>
															<option data-color="grey" value="Петровско-Разумовская">Петровско-Разумовская</option>
															<option data-color="grey" value="Тимирязевская">Тимирязевская</option>
															<option data-color="grey" value="Дмитровская">Дмитровская</option>
															<option data-color="grey" value="Савёловская">Савёловская</option>
															<option data-color="grey" value="Менделеевская">Менделеевская</option>
															<option data-color="grey" value="Цветной бульвар">Цветной бульвар</option>
															<option data-color="grey" value="Чеховская">Чеховская</option>
															<option data-color="grey" value="Боровицкая">Боровицкая</option>
															<option data-color="grey" value="Полянка">Полянка</option>
															<option data-color="grey" value="Серпуховская">Серпуховская</option>
															<option data-color="grey" value="Тульская">Тульская</option>
															<option data-color="grey" value="Нагатинская">Нагатинская</option>
															<option data-color="grey" value="Нагорная">Нагорная</option>
															<option data-color="grey" value="Нахимовский проспект">Нахимовский проспект</option>
															<option data-color="grey" value="Севастопольская">Севастопольская</option>
															<option data-color="grey" value="Чертановская">Чертановская</option>
															<option data-color="grey" value="Южная">Южная</option>
															<option data-color="grey" value="Пражская">Пражская</option>
															<option data-color="grey" value="Улица Академика Янгеля">Улица Академика Янгеля</option>
															<option data-color="grey" value="Аннино">Аннино</option>
															<option data-color="grey" value="Бульвар Дмитрия Донского">Бульвар Дмитрия Донского</option>
															<option data-color="orange" value="Медведково">Медведково</option>
															<option data-color="orange" value="Бабушкинская">Бабушкинская</option>
															<option data-color="orange" value="Свиблово">Свиблово</option>
															<option data-color="orange" value="Ботанический сад">Ботанический сад</option>
															<option data-color="orange" value="ВДНХ">ВДНХ</option>
															<option data-color="orange" value="Алексеевская">Алексеевская</option>
															<option data-color="orange" value="Рижская">Рижская</option>
															<option data-color="orange" value="Сухаревская">Сухаревская</option>
															<option data-color="orange" value="Тургеневская">Тургеневская</option>
															<option data-color="orange" value="Китай-город">Китай-город</option>
															<option data-color="orange" value="Третьяковская">Третьяковская</option>
															<option data-color="orange" value="Шаболовская">Шаболовская</option>
															<option data-color="orange" value="Ленинский проспект">Ленинский проспект</option>
															<option data-color="orange" value="Академическая">Академическая</option>
															<option data-color="orange" value="Профсоюзная">Профсоюзная</option>
															<option data-color="orange" value="Новые Черёмушки">Новые Черёмушки</option>
															<option data-color="orange" value="Калужская">Калужская</option>
															<option data-color="orange" value="Беляево">Беляево</option>
															<option data-color="orange" value="Коньково">Коньково</option>
															<option data-color="orange" value="Тёплый Стан">Тёплый Стан</option>
															<option data-color="orange" value="Ясенево">Ясенево</option>
															<option data-color="orange" value="Новоясеневская">Новоясеневская</option>
															<option data-color="red" value="Бульвар Рокоссовского">Бульвар Рокоссовского</option>
															<option data-color="red" value="Черкизовская">Черкизовская</option>
															<option data-color="red" value="Преображенская площадь">Преображенская площадь</option>
															<option data-color="red" value="Сокольники">Сокольники</option>
															<option data-color="red" value="Красносельская">Красносельская</option>
															<option data-color="red" value="Красные ворота">Красные ворота</option>
															<option data-color="red" value="Чистые пруды">Чистые пруды</option>
															<option data-color="red" value="Лубянка">Лубянка</option>
															<option data-color="red" value="Охотный ряд">Охотный ряд</option>
															<option data-color="red" value="Библиотека имени Ленина">Библиотека имени Ленина</option>
															<option data-color="red" value="Кропоткинская">Кропоткинская</option>
															<option data-color="red" value="Фрунзенская">Фрунзенская</option>
															<option data-color="red" value="Спортивная">Спортивная</option>
															<option data-color="red" value="Воробьёвы горы">Воробьёвы горы</option>
															<option data-color="red" value="Университет">Университет</option>
															<option data-color="red" value="Проспект Вернадского">Проспект Вернадского</option>
															<option data-color="red" value="Юго-Западная">Юго-Западная</option>
															<option data-color="red" value="Тропарёво">Тропарёво</option>
															<option data-color="red" value="Румянцево">Румянцево</option>
															<option data-color="red" value="Саларьево">Саларьево</option>
															<option data-color="lime" value="Марьина Роща">Марьина Роща</option>
															<option data-color="lime" value="Достоевская">Достоевская</option>
															<option data-color="lime" value="Трубная">Трубная</option>
															<option data-color="lime" value="Сретенский бульвар">Сретенский бульвар</option>
															<option data-color="lime" value="Чкаловская">Чкаловская</option>
															<option data-color="lime" value="Римская">Римская</option>
															<option data-color="lime" value="Крестьянская застава">Крестьянская застава</option>
															<option data-color="lime" value="Дубровка">Дубровка</option>
															<option data-color="lime" value="Кожуховская">Кожуховская</option>
															<option data-color="lime" value="Печатники">Печатники</option>
															<option data-color="lime" value="Волжская">Волжская</option>
															<option data-color="lime" value="Люблино">Люблино</option>
															<option data-color="lime" value="Братиславская">Братиславская</option>
															<option data-color="lime" value="Марьино">Марьино</option>
															<option data-color="lime" value="Борисово">Борисово</option>
															<option data-color="lime" value="Шипиловская">Шипиловская</option>
															<option data-color="lime" value="Зябликово">Зябликово</option>
															<option data-color="brown" value="Краснопресненская">Краснопресненская</option>
															<option data-color="brown" value="Киевская">Киевская</option>
															<option data-color="brown" value="Парк культуры">Парк культуры</option>
															<option data-color="brown" value="Октябрьская">Октябрьская</option>
															<option data-color="brown" value="Добрынинская">Добрынинская</option>
															<option data-color="brown" value="Павелецкая">Павелецкая</option>
															<option data-color="brown" value="Белорусская">Белорусская</option>
															<option data-color="brown" value="Новослободская">Новослободская</option>
															<option data-color="brown" value="Проспект Мира">Проспект Мира</option>
															<option data-color="brown" value="Комсомольская">Комсомольская</option>
															<option data-color="brown" value="Курская">Курская</option>
															<option data-color="brown" value="Таганская">Таганская</option>
															<option data-color="lblue" value="Пионерская">Пионерская</option>
															<option data-color="lblue" value="Филёвский парк">Филёвский парк</option>
															<option data-color="lblue" value="Багратионовская">Багратионовская</option>
															<option data-color="lblue" value="Фили">Фили</option>
															<option data-color="lblue" value="Кутузовская">Кутузовская</option>
															<option data-color="lblue" value="Студенческая">Студенческая</option>
															<option data-color="lblue" value="Смоленская">Смоленская</option>
															<option data-color="lblue" value="Арбатская">Арбатская</option>
															<option data-color="lblue" value="Александровский сад">Александровский сад</option>
															<option data-color="lblue" value="Выставочная">Выставочная</option>
															<option data-color="lblue" value="Международная">Международная</option>
															<option data-color="yellow" value="Марксистская">Марксистская</option>
															<option data-color="yellow" value="Площадь Ильича">Площадь Ильича</option>
															<option data-color="yellow" value="Авиамоторная">Авиамоторная</option>
															<option data-color="yellow" value="Шоссе Энтузиастов">Шоссе Энтузиастов</option>
															<option data-color="yellow" value="Перово">Перово</option>
															<option data-color="yellow" value="Новогиреево">Новогиреево</option>
															<option data-color="yellow" value="Новокосино">Новокосино</option>
															<option data-color="yellow" value="Деловой центр">Деловой центр</option>
															<option data-color="teal" value="Каховская">Каховская</option>
															<option data-color="teal" value="Варшавская">Варшавская</option>
															<option data-color="blue-grey" value="Битцевский парк">Битцевский парк</option>
															<option data-color="blue-grey" value="Лесопарковая">Лесопарковая</option>
															<option data-color="blue-grey" value="Улица Старокачаловская">Улица Старокачаловская</option>
															<option data-color="blue-grey" value="Улица Скобелевская">Улица Скобелевская</option>
															<option data-color="blue-grey" value="Бульвар Адмирала Ушакова">Бульвар Адмирала Ушакова</option>
															<option data-color="blue-grey" value="Улица Горчакова">Улица Горчакова</option>
															<option data-color="blue-grey" value="Бунинская аллея">Бунинская аллея</option>
														</select>
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
											<div class="form-row__title">Выбор категориии
											</div>
											<div class="form-row__name-col">
												<div class="form-row__name">Раздел 1</div>
											</div>
											<div class="form-row__content-col">
												<div class="form-row__content">
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
																<span class="checkbox-label__txt">Посмотреть очень долго и интересно</span>
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
											<div class="form-row__name-col">
												<div class="form-row__name">Раздел 2</div>
											</div>
											<div class="form-row__content-col">
												<div class="form-row__content">
													<div class="input-cont">
														<label class="checkbox-label">
															<span class="checkbox">
																<input type="checkbox" checked>
																<span class="checkbox__view"></span>
															</span>
															<span class="checkbox-label__txt">Подраздел 4</span>
														</label>
														<label class="checkbox-label">
															<span class="checkbox">
																<input type="checkbox" checked>
																<span class="checkbox__view"></span>
															</span>
															<span class="checkbox-label__txt">Подраздел 5</span>
														</label>
														<label class="checkbox-label">
															<span class="checkbox">
																<input type="checkbox">
																<span class="checkbox__view"></span>
															</span>
															<span class="checkbox-label__txt">Подраздел 6</span>
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="form-row__title">Выбор типа</div>
											<div class="chkb-dropdown chkb-dropdown--sm js-chkb-dropdown" data-resol="sm">
												<div class="chkb-dropdown__title chkb-dropdown__title--lg-hide js-chkb-dropdown__btn">
													По типу
												</div>

												<div class="chkb-dropdown__options-gr">

													<label class="txt-chbox">
														<input type="checkbox" name="gr1" checked>
														<span class="txt-chbox__visual">
															<span class="link">
																Романтика
															</span>
														</span>
													</label>

													<label class="txt-chbox">
														<input type="checkbox" name="gr1">
														<span class="txt-chbox__visual">
															<span class="link">
																Острые ощущения 
															</span>
														</span>
													</label>

													<label class="txt-chbox">
														<input type="checkbox" name="gr1">
														<span class="txt-chbox__visual">
															<span class="link">
																Обучение
															</span>
														</span>
													</label>

													<label class="txt-chbox">
														<input type="checkbox" name="gr1">
														<span class="txt-chbox__visual">
															<span class="link">
																Relax
															</span>
														</span>
													</label>

													<label class="txt-chbox">
														<input type="checkbox" name="gr1">
														<span class="txt-chbox__visual">
															<span class="link">
																Головоломки
															</span>
														</span>
													</label>

													<label class="txt-chbox">
														<input type="checkbox" name="gr1">
														<span class="txt-chbox__visual">
															<span class="link">
																Все для деток
															</span>
														</span>
													</label>

													<label class="txt-chbox">
														<input type="checkbox" name="gr1">
														<span class="txt-chbox__visual">
															<span class="link">
																Жизнь без забот
															</span>
														</span>
													</label>

													<label class="txt-chbox">
														<input type="checkbox" name="gr1">
														<span class="txt-chbox__visual">
															<span class="link">
																Активные игры
															</span>
														</span>
													</label>

													<label class="txt-chbox">
														<input type="checkbox" name="gr1">
														<span class="txt-chbox__visual">
															<span class="link">
																В плохую погоду
															</span>
														</span>
													</label>

													<label class="txt-chbox">
														<input type="checkbox" name="gr1">
														<span class="txt-chbox__visual">
															<span class="link">
																Бесплатное посещение
															</span>
														</span>
													</label>


													<label class="txt-chbox">
														<input type="checkbox" name="gr1">
														<span class="txt-chbox__visual">
															<span class="link">
																За городом
															</span>
														</span>
													</label>
													<label class="txt-chbox">
														<input type="checkbox" name="gr1">
														<span class="txt-chbox__visual">
															<span class="link">
																Для всей семьи
															</span>
														</span>
													</label>

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
										<span>Показать мероприятие</span>
									</a>
								</div>
								<div class="sidebar__item">
									<div class="sidebar-text">
										<div class="sidebar-text__inner">
											<h3 class="h3-narrow">Контактная информация</h3>
											<p class="text--sm text--gray">Незаполненные поля не будут отражены в карточке мероприятия.</p>
										</div>
										<div class="sidebar-text__inner">
											<div class="sidebar-edit js-text-edit">
												<div class="sidebar-edit__show js-text-edit-show">
													<div class="sidebar-edit__show-title">
														Сайт:
													</div>
													<div class="sidebar-edit__show-text">
														<a href="#!" class="js-text-edit-btn link link-und link-und--green-d link-und--dotted">questreality.ru</a>
													</div>
												</div>
												<div class="sidebar-edit__hide js-text-edit-hide">
													<div class="sidebar-edit__hide-input">
														<input type="text" class="js-text-edit-input input">
													</div>
													<div class="sidebar-edit__hide-save">
														<span class="js-text-edit-save icon iconic--tick"></span>
													</div>
													<div class="sidebar-edit__hide-close">
														<span class="js-text-edit-close icon iconic--cross"></span>
													</div>
												</div>
											</div>
										</div>
										<div class="sidebar-text__inner">
											<div class="sidebar-edit js-text-edit">
												<div class="sidebar-edit__show js-text-edit-show">
													<div class="sidebar-edit__show-title">
														Телефон:
													</div>
													<div class="sidebar-edit__show-text">
														<a href="#!" class="js-text-edit-btn link link-und link-und--green-d link-und--dotted">+7 495 565-32-13</a>
													</div>
												</div>
												<div class="sidebar-edit__hide js-text-edit-hide">
													<div class="sidebar-edit__hide-input">
														<input type="text" class="js-text-edit-input input">
													</div>
													<div class="sidebar-edit__hide-save">
														<span class="js-text-edit-save icon iconic--tick"></span>
													</div>
													<div class="sidebar-edit__hide-close">
														<span class="js-text-edit-close icon iconic--cross"></span>
													</div>
												</div>
											</div>
										</div>
										<div class="sidebar-text__inner">
											<div class="sidebar-edit js-text-edit">
												<div class="sidebar-edit__show js-text-edit-show">
													<div class="sidebar-edit__show-title">
														Почта:
													</div>
													<div class="sidebar-edit__show-text">
														<a href="#!" class="js-text-edit-btn link link-und link-und--green-d link-und--dotted">mail@questreality.ru</a>
													</div>
												</div>
												<div class="sidebar-edit__hide js-text-edit-hide">
													<div class="sidebar-edit__hide-input">
														<input type="text" class="js-text-edit-input input">
													</div>
													<div class="sidebar-edit__hide-save">
														<span class="js-text-edit-save icon iconic--tick"></span>
													</div>
													<div class="sidebar-edit__hide-close">
														<span class="js-text-edit-close icon iconic--cross"></span>
													</div>
												</div>
											</div>
										</div>
										<div class="sidebar-text__inner">
											<div class="sidebar-edit js-text-edit">
												<div class="sidebar-edit__show js-text-edit-show">
													<div class="sidebar-edit__show-title">
														Скайп:
													</div>
													<div class="sidebar-edit__show-text">
														<a href="#!" class="js-text-edit-btn link link-und link-und--green-d link-und--dotted">quest-reality</a>
													</div>
												</div>
												<div class="sidebar-edit__hide js-text-edit-hide">
													<div class="sidebar-edit__hide-input">
														<input type="text" class="js-text-edit-input input">
													</div>
													<div class="sidebar-edit__hide-save">
														<span class="js-text-edit-save icon iconic--tick"></span>
													</div>
													<div class="sidebar-edit__hide-close">
														<span class="js-text-edit-close icon iconic--cross"></span>
													</div>
												</div>
											</div>
										</div>
										<div class="sidebar-text__inner">
											<div class="sidebar-edit js-text-edit">
												<div class="sidebar-edit__show js-text-edit-show">
													<div class="sidebar-edit__show-title">
														WatsApp:
													</div>
													<div class="sidebar-edit__show-text">
														<a href="#!" class="js-text-edit-btn link link-und link-und--green-d link-und--dotted">+7 495 565-32-13</a>
													</div>
												</div>
												<div class="sidebar-edit__hide js-text-edit-hide">
													<div class="sidebar-edit__hide-input">
														<input type="text" class="js-text-edit-input input">
													</div>
													<div class="sidebar-edit__hide-save">
														<span class="js-text-edit-save icon iconic--tick"></span>
													</div>
													<div class="sidebar-edit__hide-close">
														<span class="js-text-edit-close icon iconic--cross"></span>
													</div>
												</div>
											</div>
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
