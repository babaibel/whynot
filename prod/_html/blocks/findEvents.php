<section class="f-events js-f-events" data-query-url="queries/fevents.php">
	<!--
	For backend
	data-query-url - адрес для отправки данных формы
	Подразумеваемый ответ {eventsCountStr: msg}

	Удалить по прочтению.
	-->
	<div class="wr">
		<h2 class="h2">
			Мероприятия по типу:
		</h2>

		<div class="f-events__inner-wr">
			<form >

				<div class="chkb-dropdown chkb-dropdown--sm js-chkb-dropdown" data-resol="sm">
					<div class="chkb-dropdown__title chkb-dropdown__title--lg-hide js-chkb-dropdown__btn">
						По типу
					</div>

					<div class="chkb-dropdown__options-gr">

						<label class="txt-chbox">
							<input type="checkbox" name="gr1">
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

				<div class="chkb-dropdown chkb-dropdown--weekchange" >
					<div class="chkb-dropdown__title ">
						По дате
					</div>

					<div class="weekrange js-weekrange">

						<div class="weekrange__arr weekrange__arr--left _disabled js-weekrange__arr-l">
							<span class="iconic iconic--arrow-left"></span>
						</div>
						<div class="weekrange__arr weekrange__arr--right js-weekrange__arr-r">
							<span class="iconic iconic--arrow-right"></span>
						</div>

						<div class="weekrange__line-wr">

							<div class="weekrange__line">


								<div class="weekrange__line-tracker js-weekrange-tracker">
									<div class="weekrange__visual-line js-weekrange-v-line"></div>

									<div class="weekrange__line-item js-weekrange-date">
										15 <small>фев, пн</small>
									</div>
									<div class="weekrange__line-item js-weekrange-date">
										16 <small>фев, вт</small>
									</div>
									<div class="weekrange__line-item js-weekrange-date">
										17 <small>фев, ср</small>
									</div>
									<div class="weekrange__line-item js-weekrange-date">
										18 <small>фев, чт</small>
									</div>
									<div class="weekrange__line-item js-weekrange-date">
										19 <small>фев, пт</small>
									</div>
									<div class="weekrange__line-item js-weekrange-date">
										20 <small>фев, <span class="h--c-red">сб</span></small>
									</div>
									<div class="weekrange__line-item js-weekrange-date">
										21 <small>фев, <span class="h--c-red">вс</span></small>
									</div>


									<div class="weekrange__line-item js-weekrange-date">
										22 <small>фев, пн</small>
									</div>

									<div class="weekrange__line-item js-weekrange-date">
										23 <small>фев, вт</small>
									</div>

									<div class="weekrange__line-item js-weekrange-date">
										24 <small>фев, ср</small>
									</div>

									<div class="weekrange__line-item js-weekrange-date">
										25 <small>фев, чт</small>
									</div>

									<div class="weekrange__line-item js-weekrange-date">
										26 <small>фев, пт</small>
									</div>

									<div class="weekrange__line-item js-weekrange-date">
										27 <small>фев, <span class="h--c-red">сб</span></small>
									</div>

									<div class="weekrange__line-item js-weekrange-date">
										28 <small>фев, <span class="h--c-red">вс</span></small>
									</div>

								</div>
							</div>

							<div class="weekrange__ui js-weekrange-ui"></div>

						</div>

						<!--<input type="hidden" class="js-f-events-date-max">-->
					</div>

				</div>

				<div class="chkb-dropdown chkb-dropdown--dates js-chkb-dropdown" data-resol="sm">
					<div class="chkb-dropdown__title js-chkb-dropdown__btn">
						По дате
					</div>

					<div class="chkb-dropdown__options-gr">
						<div class="datepicker-wr datepicker-wr--inline js-weekrange-datepicker"
							 data-inline="true"
							 data-range="true" data-multiple-dates-separator=" - "></div>
					</div>
				</div>

				<input type="hidden" name="fordate" class="js-f-events-date">



				<div class="f-events__btn-wr">
					<button type="submit" class="btn h--400 btn--green">
						Показать
						<span class="tooltip tooltip--right tooltip--vcenter h--nowrap js-fevents-counter">
							55 мероприятий
						</span>
					</button>
				</div>

			</form>
		</div>

	</div>
</section>