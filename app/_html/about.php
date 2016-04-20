<!DOCTYPE html>
<html lang="ru">
<?php $pageTitle = 'О компании'; ?>
<?php include 'base/head.php';?>
<body>
	<div class="layout">
		<?php include 'base/header.php'; ?>

		<main class="index">

			<section class="promo-img js-parallax"
					 style="background-image: url(../images/userfiles/about-bg.jpg)"
					 data-speed="5">
			</section>

			<section class="about-info">
				<div class="wr">
					<div class="about-info__bg js-scroll-trigger" style="background-image: url(../images/userfiles/people2.png);"></div>
					<div class="about-info__inner">
						<h3 class="h3">Почему бы нет – сервис, который поможет легко спланировать свой досуг интересными мероприятиями.</h3>
						<p>Основными территориальными зонами наших проектов являются Москва, Московская область, а также ряд других крупных городов Российской Федерации.</p>
						<p>На сегодняшний день нами успешно реализуются проекты по строительству жилых комплексов в Московской области и уже намечен старт новых перспективных проектов в сфере коммерческой недвижимости.</p>
						<p class="text--big">Вы организатор? Будем рады:</p>
						<a href="#!" class="btn btn--green">Добавить свое мероприятие</a>
					</div>
				</div>
			</section>

			<section class="philosophy bg--lime">
				<div class="wr" 
					 style="background: url(../images/userfiles/people14.png) no-repeat 0 50%,
									    url(../images/userfiles/people13.png) no-repeat 100% 50%;">
					<div class="philosophy__inner js-scroll-trigger">
						<h1 class="h2">Философия сервиса</h1>
						<div class="philosophy__text">Живя в большом городе, который перенасыщен количеством предложений, как провести вечер, мы знаем, как важно помочь людям найти нетривиальные, интересные места, которые будут интересны именно им.</div>
						<div class="philosophy__copy">Николай Чуков, основатель проекта</div>
					</div>

				</div>
			</section>

			<section class="team js-scroll-trigger">
				<div class="wr">
					<h2 class="h2-bold text--center">Команда проекта Pochemybi.net</h2>
					<div class="team__row">
						<div class="team__item">
							<div class="team__item-img">
								<img src="../images/userfiles/team1.jpg" alt="">
							</div>
							<div class="team__item-name">Фомичева Анастасия</div>
							<div class="team__item-post">Генеральный директор</div>
						</div>
						<div class="team__item">
							<div class="team__item-img">
								<img src="../images/userfiles/team2.jpg" alt="">
							</div>
							<div class="team__item-name">Бонарева Екатерина</div>
							<div class="team__item-post">Начальник отдела SMM</div>
						</div>
						<div class="team__item">
							<div class="team__item-img">
								<img src="../images/userfiles/team3.jpg" alt="">
							</div>
							<div class="team__item-name">Евстафьева Виктория </div>
							<div class="team__item-post">Коммерческий директор</div>
						</div>
						<div class="team__item">
							<div class="team__item-img">
								<img src="../images/userfiles/team4.jpg" alt="">
							</div>
							<div class="team__item-name">Денцель Татьяна </div>
							<div class="team__item-post">Главный Редактор</div>
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
