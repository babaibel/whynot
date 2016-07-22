<!DOCTYPE html>
<html lang="ru">
<?php $pageTitle = 'Главная страница'; ?>
<?php include 'base/head.php';?>
<body>
	<div class="layout">
		<?php
			$headerCabinet = 'true';
			include 'base/header.php';?>

        <main class="system-page-msg">
            <div class="wr">
                <p class="system-page-msg__title h2-bold">
                    Вы успешно оформили подписку на обновления!
                </p>
                <div class="system-page-msg__txt">
                    <p>
                        Мы отправим вам письмо, как только так сразу! Настроить тематику писем или отказаться от рассылки вы можете в личном кабинете
                    </p>
                </div>
            </div>
        </main>

		<?php include 'base/footer.php'; ?>
		<?php include 'base/popups.php'; ?>
	</div>
	<?php include 'base/scripts.php'; ?>
</body>
</html>
