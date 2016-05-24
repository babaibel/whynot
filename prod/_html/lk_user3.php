<!DOCTYPE html>
<html lang="ru">
<?php $pageTitle = 'ЛК - пользователь 3'; ?>
<?php include 'base/head.php';?>
<body>
	<div class="layout">
		<?php
			$headerCabinetUser = 'true';
			include 'base/header.php';?>

		<main class="page-body page-body--gray-l page-body--lk">

			<?php include 'blocks/lk-menu.php'; ?>

			<section class="materials-row js-catalog-tabs">
				<div class="wr">
					<div class="materials-header">
						<div class="materials-header__item">
							<ul class="materials-nav">
								<li class="materials-nav__item">
									<a class="materials-header__item js-mr-cat-btn _active" href="#!">Мероприятия </a>
								</li>
								<li class="materials-nav__item">
									<a class="materials-header__item js-mr-cat-btn" href="#!">Организаторы</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="materials-wr">
						<div class="materials-wr__tab js-mr-cat-tab material-anim-cont _active">
							<?php include "blocks/materialsOrgRowFav.php";?>
						</div>
						<div class="materials-wr__tab js-mr-cat-tab material-anim-cont">
							<?php include "blocks/materialsOrgRowFav.php";?>
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
