<!DOCTYPE html>
<html lang="ru">
<?php $pageTitle = 'Главная страница'; ?>
<?php include 'base/head.php';?>
<body>
	<div class="layout">
		<?php include 'base/header.php'; ?>

		<main class="page-body page-body--gray-l page-body--lk">

			<?php include 'blocks/lk-menu.php'; ?>

			<section class="materials-row">
				<div class="wr">
					<div class="materials-header">
						<div class="materials-header__item">
							<ul class="materials-nav">
								<li class="materials-nav__item active">
									<a class="materials-header__item active" href="#!">Мероприятия </a>
								</li>
								<li class="materials-nav__item">
									<a class="materials-header__item" href="#!">Организаторы</a>
								</li>
							</ul>
						</div>
					</div>
					<?php include "blocks/materialsRow.php";?>
					<?php include "blocks/materialsRow.php";?>
				</div>
			</section>

		</main>

		<?php include 'base/footer.php'; ?>
	</div>
	<?php include 'base/scripts.php'; ?>
</body>
</html>
