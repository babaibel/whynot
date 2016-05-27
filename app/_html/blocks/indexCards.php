<section class="index-cards bg--gradient-gray js-catalog-tabs">
	<div class="wr">
		<div class="index-cards__title">
			Рекомендуем 
			<ul class="index-cards__title-nav">
				<li><a href="#!" class="js-mr-cat-btn _active">Сегодня</a>, </li>
				<li><a href="#!" class="js-mr-cat-btn">Завтра</a>, </li>
				<li><a href="#!" class="js-mr-cat-btn">На выходных</a></li>
			</ul>
		</div>

		<div class="materials-wr">
			<div class="materials-wr__tab js-mr-cat-tab material-anim-cont _active">
				<?php include "blocks/materialsRowLoadOut.php";?>
				<div class="materials-grid">
					<div class="materials-grid__col materials-grid__col--slider">
						<?php include "blocks/actionsSlider.php";?>
					</div>
				</div>
				<?php include "blocks/materialsRowLoadOut.php";?>
			</div>
			<div class="materials-wr__tab js-mr-cat-tab material-anim-cont">
				<?php include "blocks/materialsRowLoadOut.php";?>
				<?php include "blocks/materialsRowLoadOut.php";?>
			</div>
			<div class="materials-wr__tab js-mr-cat-tab material-anim-cont">
				<?php include "blocks/materialsRowLoadOut.php";?>
			</div>
		</div>

		<a href="#!" class="btn btn--green btn--arr">
			Все мероприятия
			<span class="iconic iconic--arr-r-light"></span>
		</a>
	</div>
</section>