<!DOCTYPE html>
<html lang="ru">
<?php $pageTitle = 'ЛК - организатора 2'; ?>
<?php include 'base/head.php';?>
<body>
	<div class="layout">
		<?php
			$headerCabinetOrg = 'true';
			include 'base/header.php';?>

		<main class="page-body page-body--gray-l page-body--lk">

			<?php include 'blocks/lk-menu-org.php'; ?>

			<section class="materials-row js-catalog-tabs">
				<div class="wr">
					<div class="materials-header materials-header--flex">
						<div class="materials-header__item">
							<ul class="materials-nav">
								<li class="materials-nav__item">
									<a class="materials-header__item js-mr-cat-btn _active" href="#!">Текущие мероприятия</a>
								</li>
								<li class="materials-nav__item">
									<a class="materials-header__item js-mr-cat-btn" href="#!">Прошедшие мероприятия</a>
								</li>
								<li class="materials-nav__item">
									<a class="materials-header__item js-mr-cat-btn" href="#!">На модерации</a>
								</li>
								<li class="materials-nav__item">
									<a class="materials-header__item js-mr-cat-btn" href="#!">Черновик</a>
								</li>
							</ul>
						</div>
						<div class="materials-header__btn">
							<a href="#!" class="btn btn--green btn--md">Добавить новое</a>
						</div>
					</div>
					<div class="materials-wr">
						<div class="materials-wr__tab js-mr-cat-tab material-anim-cont _active">
							<?php include "blocks/materialsRowLoadOutLk.php";?>
						</div>
						<div class="materials-wr__tab js-mr-cat-tab material-anim-cont">
							<?php include "blocks/materialsRowLoadOutLk.php";?>
						</div>
						<div class="materials-wr__tab js-mr-cat-tab material-anim-cont">
							<?php include "blocks/materialsRowLoadOutLk.php";?>
						</div>
						<div class="materials-wr__tab js-mr-cat-tab material-anim-cont">
							<?php include "blocks/materialsRowLoadOutLk.php";?>
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
