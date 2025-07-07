<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta content='true' name='HandheldFriendly'/>
    <meta content='width' name='MobileOptimized'/>
    <meta content='yes' name='apple-mobile-web-app-capable'/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>
<body>

<?php if ( is_front_page() ) { ?>
    <div class="home-page">
<?php } else { ?>
    <div class="inner-page">
<?php } ?>

    <header class="main-header">
        <div class="main-header__logo">
            <img src="/wp-content/themes/kiosk_theme/assets/images/logo.svg">
        </div>
    </header>

        <div id="departurePopup" class="flight-popup mfp-hide">
            <p class="flight-popup__title">Рейс <span id="departureTitle"></span></p>
            <div class="flight-popup__infos">
                <div class="infos__name">
                    <p>Начальный пункт рейса</p>
                    <p>Конечный пункт рейса</p>
                    <p>Номер рейса</p>
                    <p>Авиакомпания</p>
                    <p>Тип воздушного судна</p>
                </div>
                <div class="infos__info">
                    <p id="departureFirstDirection"></p>
                    <p id="departureDirection"></p>
                    <p id="departureFlightNumber"></p>
                    <p id="departureAirline"></p>
                    <p id="departureShip"></p>
                </div>
            </div>
            <p class="flight-popup__more">* Подробную справку о рейсах можно получить по телефону +7 (4212) 262-006</p>
        </div>

        <div id="arrivalPopup" class="flight-popup mfp-hide">
            <p class="flight-popup__title">Рейс <span id="arrivalTitle"></span></p>
            <div class="flight-popup__infos">
                <div class="infos__name">
                    <p>Начальный пункт рейса</p>
                    <p>Конечный пункт рейса</p>
                    <p>Номер рейса</p>
                    <p>Авиакомпания</p>
                    <p>Тип воздушного судна</p>
                </div>
                <div class="infos__info">
                    <p id="arrivalDirection"></p>
                    <p id="arrivalLastDirection"></p>
                    <p id="arrivalFlightNumber"></p>
                    <p id="arrivalAirline"></p>
                    <p id="arrivalShip"></p>
                </div>
            </div>
            <p class="flight-popup__more">* Подробную справку о рейсах можно получить по телефону +7 (4212) 262-006</p>
        </div>
