<!DOCTYPE html>
<html lang="ru">
<?php $pageTitle = 'ЛК - организатора 2'; ?>
<?php include 'base/head.php';?>
<body>
	<div class="layout">
		<?php include 'base/header.php'; ?>

		<main class="page-body page-body--gray-l page-body--lk">

			<?php include 'blocks/lk-menu-org.php'; ?>

			<section class="materials-row">
				<div class="wr">
					<div class="materials-header materials-header--flex">
						<div class="materials-header__item">
							<ul class="materials-nav">
								<li class="materials-nav__item active">
									<a class="materials-header__item active" href="#!">Текущие мероприятия</a>
								</li>
								<li class="materials-nav__item">
									<a class="materials-header__item" href="#!">Прошедшие мероприятия</a>
								</li>
								<li class="materials-nav__item">
									<a class="materials-header__item" href="#!">На модерации</a>
								</li>
								<li class="materials-nav__item">
									<a class="materials-header__item" href="#!">Черновик</a>
								</li>
							</ul>
						</div>
						<div class="materials-header__btn">
							<a href="#!" class="btn btn--green btn--md">Добавить новое</a>
						</div>
					</div>
					<?php include "blocks/materialsRow.php";?>
				</div>
			</section>

		</main>

		<?php include 'base/footer.php'; ?>
	</div>
	<?php include 'base/scripts.php'; ?>
</body>
</html>
