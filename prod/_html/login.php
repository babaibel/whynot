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
                    <h1 class="h2">Вход</h1>

                    <form>
                        <div class="form-gr">

                            <div class="form-row">
                                <div class="form-row__name-col">
                                    <div class="form-row__name">Имя пользователя или e-mail</div>
                                </div>
                                <div class="form-row__content-col">
                                    <div class="form-row__content">
                                        <div class="input-cont">
                                            <input class="input" type="text" value="" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-row__name-col">
                                    <div class="form-row__name">Пароль</div>
                                </div>
                                <div class="form-row__content-col">
                                    <div class="form-row__content">
                                        <div class="input-cont input-cont--eye js-passw-input">
                                            <span class="iconic iconic--closed-eye js-password-toggle"></span>
                                            <input class="input input--brd input--smd" type="password">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="user-form-page__cols user-form-page__cols--soc">

                                <div class="user-form-page__col user-form-page__col--100">
                                    <p class="soc-rounds-p">
                                        Войти через:
                                    </p>
                                </div>

                                <div class="user-form-page__col user-form-page__col--50">

                                    <div class="soc-rounds">
                                        <a href="#!" class="soc-rounds__li soc-rounds__li--vk"></a>
                                        <a href="#!" class="soc-rounds__li soc-rounds__li--tw"></a>
                                        <a href="#!" class="soc-rounds__li soc-rounds__li--fb"></a>
                                        <a href="#!" class="soc-rounds__li soc-rounds__li--gplus"></a>
                                        <a href="#!" class="soc-rounds__li soc-rounds__li--mail"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="form-row form-row--submit">
                                <button class="btn btn--green" type="submit">Войти</button>
                                <div class="form-row__links">
                                    <div class="form-row__links-li">
                                        <a href="#!" class="link link--dotted link--black">
                                            Забыли пароль?
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
