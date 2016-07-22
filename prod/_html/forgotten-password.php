<!DOCTYPE html>
<html lang="ru">
<?php $pageTitle = 'Главная страница'; ?>
<?php include 'base/head.php';?>
<body>
	<div class="layout">
		<?php
			$headerCabinet = 'true';
			include 'base/header.php';?>

        <main class="page-body">
            <div class="user-form-page">
                <div class="wr">
                    <h1 class="h2">Забыли пароль?</h1>

                    <form>
                        <div class="form-gr">

                            <div class="form-row">
                                <div class="form-row__name-col">
                                    <div class="form-row__name">Имя пользователя или email:</div>
                                </div>
                                <div class="form-row__content-col">
                                    <div class="form-row__content">
                                        <div class="input-cont">
                                            <input class="input" type="text" value="" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>
                                Пожалуйста, введите ваше имя пользователя или e-mail. Вы получите письмо со ссылкой для создания нового пароля.
                            </p>


                            <div class="form-row form-row--submit">
                                <button class="btn btn--green" type="submit">Получить новый пароль</button>
                                <div class="form-row__links">
                                    <div class="form-row__links-li">
                                        <a href="#!" class="link link--dotted link--black">
                                            Вход
                                        </a>
                                    </div>
                                    <div class="form-row__links-li">
                                        <a href="#!" class="link link--dotted link--black">
                                            Регистрация
                                        </a>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                    </form>
                </div>
            </div>
        </main>

		<?php include 'base/footer.php'; ?>
		<?php include 'base/popups.php'; ?>
	</div>
	<?php include 'base/scripts.php'; ?>
</body>
</html>
