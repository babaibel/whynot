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

	<div class="f-events__left-bg js-scroll-trigger">
		<img src="../images/index-img-left3.png" alt="" class="f-events__left-bg--img3">
		<img src="../images/index-img-left2.png" alt="" class="f-events__left-bg--img2">
		<img src="../images/index-img-left1.png" alt="" class="f-events__left-bg--img1">
	</div>
	<div class="f-events__right-bg js-scroll-trigger">
		<img src="../images/index-img-right1.png" alt="" class="f-events__right-bg--img1">
		<img src="../images/index-img-right2.png" alt="" class="f-events__right-bg--img2">
		<img src="../images/index-img-right3.png" alt="" class="f-events__right-bg--img3">
	</div>
</section>