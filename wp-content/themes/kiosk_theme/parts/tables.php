<div id="tables" class="contents__content active">
    <?php $timezone = 'Europe/Moscow'; ?>
    <?php $xml = simplexml_load_file('https://khv.aero/xml/spp.xml'); ?>

    <div class="content__title">
        <div class="title__title">Расписание</div>
        <a href="/" id="updateTable" class="title__update">
            <p>Обновить расписание</p>
            <svg width="27" height="23" viewBox="0 0 27 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.09616 1.10823C1.70155 1.10823 2.19232 1.60569 2.19232 2.21934V7.77489H7.67311C8.2785 7.77489 8.76927 8.27236 8.76927 8.886C8.76927 9.49965 8.2785 9.99712 7.67311 9.99712H1.09616C0.490767 9.99712 0 9.49965 0 8.886V2.21934C0 1.60569 0.490767 1.10823 1.09616 1.10823Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5383 13.3303C17.5383 12.7167 18.0291 12.2192 18.6345 12.2192H25.2114C25.8168 12.2192 26.3076 12.7167 26.3076 13.3303V19.997C26.3076 20.6106 25.8168 21.1081 25.2114 21.1081C24.6061 21.1081 24.1153 20.6106 24.1153 19.997V14.4414H18.6345C18.0291 14.4414 17.5383 13.944 17.5383 13.3303Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1142 0.437373C11.8929 -0.0841488 13.773 -0.140433 15.579 0.273773C17.3851 0.687979 19.0581 1.55917 20.4421 2.80607C21.8261 4.05296 22.876 5.63491 23.4937 7.40431C23.6956 7.98281 23.3967 8.61773 22.826 8.82244C22.2553 9.02715 21.6289 8.72414 21.4269 8.14564C20.9328 6.73012 20.0929 5.46456 18.9857 4.46704C17.8785 3.46953 16.54 2.77257 15.0952 2.44121C13.6504 2.10984 12.1464 2.15487 10.7234 2.57209C9.30037 2.9893 8.00483 3.76511 6.95763 4.82712C6.94954 4.83534 6.94131 4.84342 6.93296 4.85137L1.84679 9.69581C1.4056 10.116 0.711891 10.0941 0.297333 9.64695C-0.117225 9.19975 -0.0956429 8.49658 0.345538 8.07636L5.41952 3.24354C6.72632 1.9225 8.34111 0.957238 10.1142 0.437373ZM26.0105 12.5697C26.425 13.0169 26.4035 13.72 25.9623 14.1403L20.8883 18.9731C19.5815 20.2941 17.9667 21.2594 16.1936 21.7792C14.4149 22.3008 12.5348 22.3571 10.7288 21.9428C8.92276 21.5286 7.2497 20.6574 5.8657 19.4105C4.4817 18.1637 3.43186 16.5817 2.81415 14.8123C2.6122 14.2338 2.91113 13.5989 3.48185 13.3942C4.05256 13.1895 4.67893 13.4925 4.88089 14.071C5.37505 15.4865 6.21492 16.7521 7.32212 17.7496C8.42933 18.7471 9.76777 19.444 11.2126 19.7754C12.6574 20.1068 14.1615 20.0618 15.5845 19.6445C17.0075 19.2273 18.303 18.4515 19.3502 17.3895C19.3551 17.3846 19.36 17.3797 19.3649 17.3748C19.3682 17.3716 19.3715 17.3684 19.3749 17.3652L24.461 12.5208C24.9022 12.1006 25.5959 12.1225 26.0105 12.5697Z" fill="white"/>
            </svg>
        </a>
    </div>

    <div class="content__tables">
        <div class="tables__title">
            <div class="title__selections">
                <a href="#" id="departure" class="selections__selection active">
                    <p>ВЫЛЕТ</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="12" viewBox="0 0 32 12">
                        <path d="M31.976 1.992c.246.983-1.465 2.489-2.305 2.797l-3.77 1.387a4094.185 4094.185 0 0 1-15.948 5.78c-1.438.263-7.715-.72-6.876-1.029.979-.359 6.362-2.432 9.302-3.554L7.817 1.326 8.942 0 19.6 4.7l9.21-3.383c.843-.31 2.94-.231 3.166.675zM.923 6L6 8.65 2.45 10 0 6.919.923 6z" fill="#16485c"/>
                    </svg>
                </a>
                <a href="#" id="arrival" class="selections__selection">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" viewBox="0 0 32 16">
                        <path d="M29.468 12.254c.94.193 2.828 1.422 2.556 2.345-.294 1.003-2.665 1.382-3.6 1.19l-4.205-.864A4524.375 4524.375 0 0 1 6.488 11.2C5.025 10.636-.23 6.3.705 6.492c1.09.226 7.14 1.375 10.44 2.012L10.148.656 11.884.11l7.32 10.033 10.264 2.111zM1.294 1.125l2.967 4.96-3.77-.647-.478-3.98 1.28-.333z" fill="#16485c"/>
                    </svg>
                    <p>ПРИЛЕТ</p>
                </a>
            </div>
            <div class="title__time">
                В хабаровске
                <?php date_default_timezone_set('Asia/Vladivostok');

                $months = [
                    1 => 'января',
                    2 => 'февраля',
                    3 => 'марта',
                    4 => 'апреля',
                    5 => 'мая',
                    6 => 'июня',
                    7 => 'июля',
                    8 => 'августа',
                    9 => 'сентября',
                    10 => 'октября',
                    11 => 'ноября',
                    12 => 'декабря',
                ];

                $currentDate = new DateTime('now', new DateTimeZone('Asia/Vladivostok'));

                $day = $currentDate->format('d');
                $monthNum = $currentDate->format('n');

                $monthName = $months[$monthNum];

                echo "$day $monthName"; ?>
                <span id="current-time"></span>
            </div>
        </div>
        <div id="departure" class="tables__table active">
            <div class="table__title">
                <div class="title__selections">
                    <select class="selections__airline">
                        <option value="default" selected>Авиакомпания</option>
                        <?php $addedDepartureAirline = array();

                        foreach ($xml->FLIGHT as $flight) {
                            if ((string)$flight['TIP'] === 'В' or (string)$flight['TIP'] === 'З') {
                                $flightName = (string)$flight['NAME_AK'];
                                if (!in_array($flightName, $addedDepartureAirline)) {
                                    $addedDepartureAirline[] = $flightName;
                                    echo "<option>$flightName</option>";
                                }
                            }
                        } ?>
                    </select>
                    <select class="selections__direction">
                        <option value="default" selected>Направление</option>
                        <?php $addedDepartureDirection = array();

                        foreach ($xml->FLIGHT as $flight) {
                            if ((string)$flight['TIP'] === 'В' or (string)$flight['TIP'] === 'З') {
                                foreach ($flight->ROUTE as $route) {
                                    $lastNapr = (string)$route['NAPR'];
                                }
                                if (!in_array($lastNapr, $addedDepartureDirection)) {
                                    $addedDepartureDirection[] = $lastNapr;
                                    echo "<option>$lastNapr</option>";
                                }
                            }
                        } ?>
                    </select>
                    <select class="selections__date">
                        <option value="<?php echo date('d.m.Y', strtotime('-1 day')); ?>"><?php echo wp_date('d F', strtotime('-1 day')); ?> (Вчера)</option>
                        <option value="<?php echo date('d.m.Y'); ?>" selected><?php echo wp_date('d F'); ?> (Сегодня)</option>
                        <option value="<?php echo date('d.m.Y', strtotime('+1 day')); ?>"><?php echo wp_date('d F', strtotime('+1 day')); ?> (Завтра)</option>
                        <option value="<?php echo date('d.m.Y', strtotime('+2 days')); ?>"><?php echo wp_date('d F', strtotime('+2 days')); ?> (Послезавтра)</option>
                    </select>
                </div>
                <div class="title__name">
                    <div class="name__item">Авиакомпания</div>
                    <div class="name__item">Рейс</div>
                    <div class="name__item">Направление</div>
                    <div class="name__item">Время вылета</div>
                    <div class="name__item">Статус рейса</div>
                </div>
            </div>
            <div class="table__content">
                <?php $flightDepartureArray = array(); //ОБЪЯВЛЯЮ МАССИВ С РЕЙСАМИ ДЛЯ ВЫЛЕТОВ

                foreach ($xml->FLIGHT as $flight) {
                    if ((string)$flight['TIP'] === 'В' or (string)$flight['TIP'] === 'З') { //ПРОВЕРЯЮ НА ПРИЛЕТ ИЛИ ВЫЛЕТ
                        $flightItemArray = array();

                        $flightItemArray['NAME_AK'] = (string)$flight['NAME_AK']; //НАИМЕНОВАНИЕ АВИАКОМПАНИИ
                        $flightItemArray['IATA_NR'] = (string)$flight['IATA_AK'] . ' ' . (string)$flight['NR']; //НАИМЕНОВАНИЕ РЕЙСА
                        $flightItemArray['TWS'] = (string)$flight['TWS']; //ТИП СУДНА

                        foreach ($flight->ROUTE as $route) {
                            $firstNapr = (string)$route['NAPR']; //БЕРУ ПЕРВОЕ НАПРАВЛЕНИЕ, ОТ КУДА ЛЕТИТ САМОЛЕТ
                            break;
                        }

                        $flightItemArray['FIRST_NAPR'] = $firstNapr;

                        foreach ($flight->ROUTE as $route) {
                            $lastNapr = (string)$route['NAPR']; //БЕРУ ПОСЛЕДНЕЕ НАПРАВЛЕНИЕ, КУДА ЛЕТИТ САМОЛЕТ
                        }

                        $flightItemArray['NAPR'] = $lastNapr;

                        foreach ($flight->ROUTE as $route) {
                            if((string)$route['NAPR'] === 'ХАБАРОВСК/ХБР') { //ПРОВЕРЯЮ ЧТОБЫ ВРЕМЯ ВЫЛЕТА БРАЛОСЬ С ХАБАРОВСКА (ИЗНАЧАЛЬНО САМОЛЕТ МОЖЕТ НАЧАТЬ ПУТЬ НЕ С ХАБАРОВСКА)
                                $datePlannedTimeString = (string)$route['DP_D']; //ЗАПЛОНИРОВАННОЕ ВРЕМЯ
                                $dateActualTimeString = (string)$route['DR_D']; //ПЛАНОВОЕ ВРЕМЯ
                                $dateRealTimeString = (string)$route['DF_D']; //ФАКТИЧЕСКОЕ ВРЕМЯ
                            }
                        }

                        $datePlannedTime = DateTime::createFromFormat('d.m.Y H:i', $datePlannedTimeString);
                        $dateActualTime = DateTime::createFromFormat('d.m.Y H:i', $dateActualTimeString);
                        $dateRealTime = DateTime::createFromFormat('d.m.Y H:i', $dateRealTimeString);

                        $flightItemArray['DP_D'] = $datePlannedTime->format('H:i');
                        $flightItemArray['DP_D_FULL'] = $datePlannedTime->format('d.m.Y');
                        $flightItemArray['DR_D'] = $dateActualTime->format('H:i');

                        $today = new DateTime();

                        if ($dateActualTime->format('Y-m-d') > $today->format('Y-m-d')) {
                            $flightItemArray['DR_D_FULL'] = $dateActualTime->format('d.m.Y H:i');
                        } else {
                            $flightItemArray['DR_D_FULL'] = $dateActualTime->format('H:i');
                        }

                        $flightItemArray['DF_D'] = $dateRealTime->format('H:i');

                        $flightDepartureArray[] = $flightItemArray; //ЗАПИХИВАЮ ВСЕ В МАССИВ РЕЙСОВ ВЫЛЕТА
                    }
                }

                usort($flightDepartureArray, function($a, $b) {
                    return strtotime($a['DP_D']) - strtotime($b['DP_D']); //СОРТИРУЮ МАССИВ ПО ДАТЕ ВЫЛЕТА
                });

                foreach ($flightDepartureArray as $index => $flightItem) { ?>
                    <div class="content__items <?php if(date('d.m.Y') !== $flightItem['DP_D_FULL']) { echo 'hidden '; }  ?>" data-airline="<?php echo $flightItem['NAME_AK']; ?>" data-flight="<?php echo $flightItem['IATA_NR']; ?>" data-ship="<?php echo $flightItem['TWS']; ?>" data-firstdirection="<?php echo $flightItem['FIRST_NAPR']; ?>" data-direction="<?php echo $flightItem['NAPR']; ?>" data-time="<?php echo $flightItem['DP_D_FULL']; ?>">
                        <div class="items__item">
                            <?php echo $flightItem['NAME_AK']; ?>
                        </div>
                        <div class="items__item">
                            <?php echo $flightItem['IATA_NR']; ?>
                        </div>
                        <div class="items__item">
                            <?php echo $flightItem['NAPR']; ?>
                        </div>
                        <div class="items__item <?php if($flightItem['DF_D'] === '00:00' and $flightItem['DR_D'] != '00:00') { echo 'yellow'; } ?>">
                            <?php echo $flightItem['DP_D']; ?>
                        </div>
                        <div class="items__item">
                            <?php if($flightItem['DR_D'] === '00:00' and $flightItem['DF_D'] === '00:00') { ?>
                                <p class="item__status green">Ожидается</p>
                            <?php } elseif ($flightItem['DF_D'] === '00:00') { ?>
                                <p class="item__status yellow">Задерживается до <?php echo $flightItem['DR_D_FULL']; ?></p>
                            <?php } else { ?>
                                <p class="item__status green">Вылетел в <?php echo $flightItem['DF_D'];?></p>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div id="arrival" class="tables__table">
            <div class="table__title">
                <div class="title__selections">
                    <select class="selections__airline">
                        <option value="default" selected>Авиакомпания</option>
                        <?php $addedArrivalAirline = array();

                        foreach ($xml->FLIGHT as $flight) {
                            if ((string)$flight['TIP'] === 'П') {
                                $flightName = (string)$flight['NAME_AK'];
                                if (!in_array($flightName, $addedArrivalAirline)) {
                                    $addedArrivalAirline[] = $flightName;
                                    echo "<option>$flightName</option>";
                                }
                            }
                        } ?>
                    </select>
                    <select class="selections__direction">
                        <option value="default" selected>Направление</option>
                        <?php $addedArrivalDirection = array();

                        foreach ($xml->FLIGHT as $flight) {
                            if ((string)$flight['TIP'] === 'П') {
                                foreach ($flight->ROUTE as $route) {
                                    $lastNapr = (string)$route['NAPR'];
                                    break;
                                }
                                if (!in_array($lastNapr, $addedArrivalDirection)) {
                                    $addedArrivalDirection[] = $lastNapr;
                                    echo "<option>$lastNapr</option>";
                                }
                            }
                        } ?>
                    </select>
                    <select class="selections__date">
                        <option value="<?php echo date('d.m.Y', strtotime('-1 day')); ?>"><?php echo wp_date('d F', strtotime('-1 day')); ?> (Вчера)</option>
                        <option value="<?php echo date('d.m.Y'); ?>" selected><?php echo wp_date('d F'); ?> (Сегодня)</option>
                        <option value="<?php echo date('d.m.Y', strtotime('+1 day')); ?>"><?php echo wp_date('d F', strtotime('+1 day')); ?> (Завтра)</option>
                        <option value="<?php echo date('d.m.Y', strtotime('+2 days')); ?>"><?php echo wp_date('d F', strtotime('+2 days')); ?> (Послезавтра)</option>
                    </select>
                </div>
                <div class="title__name">
                    <div class="name__item">Авиакомпания</div>
                    <div class="name__item">Рейс</div>
                    <div class="name__item">Направление</div>
                    <div class="name__item">Время прилета</div>
                    <div class="name__item">Статус рейса</div>
                </div>
            </div>
            <div class="table__content">
                <?php $flightArrivalArray = array(); //ОБЪЯВЛЯЮ МАССИВ С РЕЙСАМИ ДЛЯ ПРИЛЕТОВ

                foreach ($xml->FLIGHT as $flight) {
                    if ((string)$flight['TIP'] === 'П') { //ПРОВЕРЯЮ НА ПРИЛЕТ ИЛИ ВЫЛЕТ
                        $flightItemArray = array();

                        $flightItemArray['NAME_AK'] = (string)$flight['NAME_AK']; //НАИМЕНОВАНИЕ АВИАКОМПАНИИ
                        $flightItemArray['IATA_NR'] = (string)$flight['IATA_AK'] . ' ' . (string)$flight['NR']; //НАИМЕНОВАНИЕ РЕЙСА
                        $flightItemArray['TWS'] = (string)$flight['TWS']; //ТИП СУДНА

                        foreach ($flight->ROUTE as $route) {
                            $firstNapr = (string)$route['NAPR']; //БЕРУ ПЕРВОЕ НАПРАВЛЕНИЕ, ОТ КУДА ЛЕТИТ САМОЛЕТ
                            break;
                        }

                        $flightItemArray['NAPR'] = $firstNapr;

                        foreach ($flight->ROUTE as $route) {
                            $lastNapr = (string)$route['NAPR']; //БЕРУ ПОСЛЕДНЕЕ НАПРАВЛЕНИЕ, КУДА ЛЕТИТ САМОЛЕТ
                        }

                        $flightItemArray['LAST_NAPR'] = $lastNapr;

                        foreach ($flight->ROUTE as $route) {
                            $datePlannedTimeString = (string)$route['DP_A']; //ЗАПЛОНИРОВАННОЕ ВРЕМЯ
                            $dateActualTimeString = (string)$route['DR_A']; //ПЛАНОВОЕ ВРЕМЯ
                            $dateRealTimeString = (string)$route['DF_A']; //ФАКТИЧЕСКОЕ ВРЕМЯ
                        }

                        $datePlannedTime = DateTime::createFromFormat('d.m.Y H:i', $datePlannedTimeString);
                        $dateActualTime = DateTime::createFromFormat('d.m.Y H:i', $dateActualTimeString);
                        $dateRealTime = DateTime::createFromFormat('d.m.Y H:i', $dateRealTimeString);

                        $flightItemArray['DP_A'] = $datePlannedTime->format('H:i');
                        $flightItemArray['DP_A_FULL'] = $datePlannedTime->format('d.m.Y');
                        $flightItemArray['DR_A'] = $dateActualTime->format('H:i');

                        $today = new DateTime();

                        if ($dateActualTime->format('Y-m-d') > $today->format('Y-m-d')) {
                            $flightItemArray['DR_A_FULL'] = $dateActualTime->format('d.m.Y H:i');
                            $flightItemArray['DR_A_TEST'] = $dateActualTime->format('d.m');
                        } else {
                            $flightItemArray['DR_A_FULL'] = $dateActualTime->format('H:i');
                            $flightItemArray['DR_A_TEST'] = $dateActualTime->format('d.m');
                        }

                        $flightItemArray['DF_A'] = $dateRealTime->format('H:i');

                        $flightArrivalArray[] = $flightItemArray; //ЗАПИХИВАЮ ВСЕ В МАССИВ РЕЙСОВ ВЫЛЕТА
                    }
                }

                usort($flightArrivalArray, function($a, $b) {
                    return strtotime($a['DP_A']) - strtotime($b['DP_A']); //СОРТИРУЮ МАССИВ ПО ДАТЕ ВЫЛЕТА
                });

                foreach ($flightArrivalArray as $index => $flightItem) { $today = new DateTime(); ?>
                    <div class="content__items <?php if(date('d.m.Y') !== $flightItem['DP_A_FULL']) { echo 'hidden '; }  ?>"
                         data-airline="<?php echo $flightItem['NAME_AK']; ?>" data-flight="<?php echo $flightItem['IATA_NR']; ?>" data-ship="<?php echo $flightItem['TWS']; ?>" data-direction="<?php echo $flightItem['NAPR']; ?>" data-lastdirection="<?php echo $flightItem['LAST_NAPR']; ?>" data-time="<?php echo $flightItem['DP_A_FULL']; ?>">
                        <div class="items__item">
                            <?php echo $flightItem['NAME_AK']; ?>
                        </div>
                        <div class="items__item">
                            <?php echo $flightItem['IATA_NR']; ?>
                        </div>
                        <div class="items__item">
                            <?php echo $flightItem['NAPR']; ?>
                        </div>
                        <div class="items__item <?php if($flightItem['DF_A'] === '00:00' and $flightItem['DR_A'] != '00:00') { if ($flightItem['DP_A'] > $flightItem['DR_A']) { if ($flightItem['DR_A_TEST'] > $today->format('d.m')) { echo 'yellow'; } else { echo 'green'; } } else { echo 'yellow'; } } ?>">
                            <?php echo $flightItem['DP_A']; ?>
                        </div>
                        <div class="items__item">
                            <?php if($flightItem['DR_A'] === '00:00' and $flightItem['DF_A'] === '00:00') { ?>
                                <p class="item__status green">Ожидается</p>
                            <?php } elseif ($flightItem['DF_A'] === '00:00') { ?>
                                <?php if($flightItem['DP_A'] > $flightItem['DR_A']) { ?>
                                    <?php if($flightItem['DR_A_TEST'] > $today->format('d.m')) { ?>
                                        <p class="item__status yellow">Задерживается до <?php echo $flightItem['DR_A_FULL']; ?></p>
                                    <?php } else { ?>
                                        <p class="item__status green">Ожидается в <?php echo $flightItem['DR_A']; ?></p>
                                    <?php } ?>
                                <?php } else { ?>
                                    <p class="item__status yellow">Задерживается до <?php echo $flightItem['DR_A_FULL']; ?></p>
                                <?php } ?>
                            <?php } else { ?>
                                <p class="item__status green">Прилетел <?php echo $flightItem['DF_A'];?></p>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>