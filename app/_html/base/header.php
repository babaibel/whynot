<header class="header js-sticky-header">
	<div class="header-top-wr">
		<div class="wr">
			<div class="header-top">
				<div class="header-top__menu-toggle js-header-menu-btn">
					<span></span>
					<span></span>
					<span></span>
				</div>

				<div class="header-top__item header-top__item--left">
					<a class="logo" href="#!">
						<div class="logo-question">
							<span class="logo-question__text">
								Идем кататься на слоне ?
							</span>
							<span class="iconic iconic--elephant"></span>
						</div>
						<div class="logo__text">Почему бы нет</div>
					</a>
				</div>
				<div class="header-top__item header-top__item--center">
					<a href="#!" class="subscribe-link link js-popup-btn" data-popup-name="subscribe">
						<span class="subscribe-link__icon icon iconic--mail"></span>
						<span class="subscribe-link__text">
							<span class="link link-und link-und--dotted link-und--green2-d">Подписаться <br>на обновления</span>
						</span>
					</a>
				</div>
				<div class="header-top__item header-top__item--right">
					<a href="#!" class="bookmark-link"><span class="icon iconic--bookmark"></span>Избранное</a>

					<div class="header-cabinet">
						<div class="header-cabinet__main">
							<a href="#!" class="link link--black link--dotted js-popup-btn" data-popup-name="login">Вход</a>
							<span class="header-cabinet__sep">/</span>
							<a href="#!" class="link link--black link--dotted js-popup-btn" data-popup-name="reg">Регистрация</a>
						</div>

						<div class="header-cabinet__hidden">
							<span class="header-cabinet__ico-link header-cabinet__ico-link--round js-popup-btn" data-popup-name="login">
								<span class="iconic iconic--person"></span>
							</span>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="header-bot-wr">
		<div class="wr">
			<div class="header-bot">
				<div class="header-bot__nav">
					<nav class="header-nav js-header-menu">
						<ul class="header-nav__menu list-clear">
							<li class="header-nav__item"><a class="header-nav__link" href="#!"><span>Погулять</span></a></li>
							<li class="header-nav__item"><a class="header-nav__link" href="#!"><span>Посмотреть</span></a></li>
							<li class="header-nav__item js-header-submenu active">
								<a class="header-nav__link" href="http://frontender.info/a-guide-to-flexbox/"><span>Поиграть</span></a>
								<ul class="submenu-mob">
									<li class="submenu-mob__item active">
										<a class="submenu-mob__link" href="#!">Квесты в реальности</a>
									</li>
									<li class="submenu-mob__item">
										<a class="submenu-mob__link" href="http://frontender.info/a-guide-to-flexbox/">Пейнтбол/лазертаг</a>
									</li>
									<li class="submenu-mob__item">
										<a class="submenu-mob__link" href="#!">Настольные игры</a>
									</li>
									<li class="submenu-mob__item">
										<a class="submenu-mob__link" href="#!">Атракционы</a>
									</li>
									<li class="submenu-mob__item">
										<a class="submenu-mob__link" href="#!">Другое</a>
									</li>
								</ul>
							</li>
							<li class="header-nav__item js-header-submenu">
								<a class="header-nav__link" href="#!">
									<span>Позаниматься</span>
								</a>
								<ul class="submenu-mob">
									<li class="submenu-mob__item active">
										<a class="submenu-mob__link" href="#!">Квесты в реальности</a>
									</li>
									<li class="submenu-mob__item">
										<a class="submenu-mob__link" href="#!">Пейнтбол/лазертаг</a>
									</li>
									<li class="submenu-mob__item">
										<a class="submenu-mob__link" href="#!">Настольные игры</a>
									</li>
									<li class="submenu-mob__item">
										<a class="submenu-mob__link" href="#!">Атракционы</a>
									</li>
									<li class="submenu-mob__item">
										<a class="submenu-mob__link" href="#!">Другое</a>
									</li>
								</ul>
							</li>
							<li class="header-nav__item"><a class="header-nav__link" href="#!"><span>Дети</span></a></li>
							<li class="header-nav__item"><a class="header-nav__link" href="#!"><span>Спорт-экстрим</span></a></li>
						</ul>
					</nav>
				</div>
				<div class="header-bot__search-wr">
					<div class="header-search js-header-search">
						<form>
							<input class="header-search__input" type="text" placeholder="Например, открытый каток" name="search">
							<button class="header-search__btn header-search__btn--submit" type="submit">
								<span class="icon iconic--search"></span>
							</button>
							<button class="header-search__btn header-search__btn--trigger js-header-search-trigger" type="button">
								<span class="icon iconic--search"></span>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
		if(isset($headerInner) == 'true' ){
		include "base/headerInner.php";
		}
	?>
</header>