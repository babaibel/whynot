<!DOCTYPE html>
<html lang="ru">
<?php $pageTitle = 'Главная страница'; ?>
<?php include 'base/head.php';?>
<body>
	<div class="layout">
		<?php
			$headerCabinet = 'true';
			include 'base/header.php';?>

        <main class="site-map">
            <div class="wr">
                <img src="../images/index-img-left1.png" alt="" draggable="false"
                     class="site-map__bg-img site-map__bg-img--left">
                <img src="../images/index-img-right3.png" alt="" draggable="false"
                     class="site-map__bg-img site-map__bg-img--right">

                <h1 class="site-map__title h2">
                    Карта сайта
                </h1>

                <div class="site-map__main">

                    <div class="site-map__group">
                        <p class="site-map__gr-title h3-bold">
                            Заголовок группы
                        </p>

                        <div class="site-map__list">
                            <div class="site-map__list-i">
                                <a href="#!" class="link link-und--green-d">Погулять</a>
                            </div>
                            <div class="site-map__list-i">
                                <a href="#!" class="link link-und--green-d">Посмотреть</a>
                            </div>
                            <div class="site-map__list-i">
                                <a href="#!" class="link link-und--green-d">Поиграть</a>
                            </div>
                            <div class="site-map__list-i">
                                <a href="#!" class="link link-und--green-d">Позаниматься</a>
                            </div>
                            <div class="site-map__list-i">
                                <a href="#!" class="link link-und--green-d">Дети</a>
                            </div>
                            <div class="site-map__list-i">
                                <a href="#!" class="link link-und--green-d">Спорт-экстрим</a>
                            </div>
                        </div>
                    </div>


                    <div class="site-map__group">
                        <p class="site-map__gr-title h3-bold">
                            Популярные мероприятия
                        </p>

                        <div class="site-map__list">
                            <div class="site-map__list-i">
                                <a href="#!" class="link link-und--green-d">Дни открытых дверей в музеях</a>
                            </div>
                            <div class="site-map__list-i">
                                <a href="#!" class="link link-und--green-d">Экскурсия «Ночная Москва с 56-го этажа площадки «Москва-Сити»</a>
                            </div>
                            <div class="site-map__list-i">
                                <a href="#!" class="link link-und--green-d">Экскурсия на 56-й этаж смотровой площадки Москва-Сити </a>
                            </div>
                            <div class="site-map__list-i">
                                <a href="#!" class="link link-und--green-d">Спектакль «Мастер и Маргарита» Булгакова в МХТ им. А. П. Чехова </a>
                            </div>
                            <div class="site-map__list-i">
                                <a href="#!" class="link link-und--green-d">Ссылка 1</a>
                            </div>
                            <div class="site-map__list-i">
                                <a href="#!" class="link link-und--green-d">Ссылка 1</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>

		<?php include 'base/footer.php'; ?>
		<?php include 'base/popups.php'; ?>
	</div>
	<?php include 'base/scripts.php'; ?>
</body>
</html>
