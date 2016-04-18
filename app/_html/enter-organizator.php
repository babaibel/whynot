<!DOCTYPE html>
<html lang="ru">
<?php $pageTitle = 'Главная страница'; ?>
<?php include 'base/head.php';?>
<body>
	<div class="layout page page-org-enter">
		<?php include 'base/header.php'; ?>

		<main class="page-body">

			<h1 class="h2">Вход для организаторов</h1>
			<section class="org-enter">
				<div class="org-enter__inner">
					<div class="wr">
						<div class="org-enter__left">
							<form>
								<h2 class="h2-inner">Войти</h2>
								<div class="form-gr">
									<div class="form-row form-row--clear">
										<div class="form-row__name-col">
											<div class="form-row__name">Email</div>
										</div>
										<div class="form-row__content-col">
											<div class="form-row__content">
												<div class="input-cont">
													<input class="input" type="text" value="org@pochemybi.net">
												</div>
											</div>
										</div>
									</div>
									<div class="form-row form-row--clear">
										<div class="form-row__name-col">
											<div class="form-row__name">Пароль</div>
										</div>
										<div class="form-row__content-col">
											<div class="form-row__content">
												<div class="input-cont">
													<input class="input" type="password" value="3453234">
												</div>
											</div>
										</div>
									</div>
									<div class="form-row form-row--submit">
										<button class="btn btn--light btn--padd btn--upper" type="submit">Войти</button>
									</div>
								</div>
							</form>
						</div>
						<div class="org-enter__bg">
							<img src="../images/userfiles/people12.png" alt="">
						</div>
						<div class="org-enter__right">
							<form>
								<div class="form-gr">
									<h2 class="h2-inner">Зарегистрироваться</h2>
									<div class="form-row form-row--clear">
										<div class="form-row__name-col">
											<div class="form-row__name">Email</div>
										</div>
										<div class="form-row__content-col">
											<div class="form-row__content">
												<div class="input-cont">
													<input class="input" type="text">
												</div>
											</div>
										</div>
									</div>
									<div class="form-row form-row--clear">
										<div class="form-row__name-col">
											<div class="form-row__name">Пароль</div>
										</div>
										<div class="form-row__content-col">
											<div class="form-row__content">
												<div class="input-cont">
													<input class="input" type="password">
												</div>
											</div>
										</div>
									</div>
									<div class="form-row form-row--submit">
										<button class="btn btn--dark btn--padd btn--upper" type="submit">Зарегистрироваться</button>
									</div>
								</div>
							</form>
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
