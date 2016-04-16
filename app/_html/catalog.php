<!DOCTYPE html>
<html lang="ru">
<?php $pageTitle = 'Каталог'; ?>
<?php include 'base/head.php';?>
<body>
	<div class="layout">
		<?php include 'base/header.php'; ?>

		<main class="catalog-page">

			<div class="catalog-wr js-catalog-wr">
				<img src="../images/catalog-img-left.png" class="catalog-wr__bg-img catalog-wr__bg-img--left" draggable="false">
				<img src="../images/catalog-img-right.png" class="catalog-wr__bg-img catalog-wr__bg-img--right" draggable="false">


				<div class="filter js-filter">

					<div class="filter-main js-filter_main">
						<div class="wr">

							<div class="filter-main__params-wr">
								<div class="filter-main__param">
									todo
								</div>
							</div>

							<div class="filter-main__sort-gr sort-chkb-wr">

								<label class="sort-chkb">
									<input type="radio" name="sorting_way">
									<span class="sort-chkb__main">
										<span class="iconic iconic--grid"></span>
										<span class="sort-chkb__main-txt">
											Списком
										</span>
									</span>
								</label>

								<label class="sort-chkb">
									<input type="radio" name="sorting_way">
									<span class="sort-chkb__main">
										<span class="iconic iconic--placemark"></span>
										<span class="sort-chkb__main-txt">
											На карте
										</span>
									</span>
								</label>

							</div>

							<div class="filter-main__info">
								<span class="filter-main__msg js-filter_msg">
									Найдено 23 мероприятия
								</span>
							</div>
						</div>
					</div>

					<div class="filter__bottom">
						<div class="wr">

							<div class="filter-tags">
								<div class="filter-tag">
									<span class="filter-tag__txt">
										С детьми
									</span>
									<span class="filter-tag__cross"></span>
								</div>

								<div class="filter-tag">
									<span class="filter-tag__txt">
										Спорт/Экстрим
									</span>
									<span class="filter-tag__cross"></span>
								</div>

								<div class="filter-tag">
									<span class="filter-tag__txt">
										15 фев — 18 фев
									</span>
									<span class="filter-tag__cross"></span>
								</div>
							</div>

						</div>
					</div>
				</div>


			</div>

		</main>

		<?php include 'base/footer.php'; ?>
	</div>
	<?php include 'base/popups.php'; ?>
	<?php include 'base/scripts.php'; ?>
</body>
</html>
