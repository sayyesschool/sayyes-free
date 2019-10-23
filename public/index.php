<?php
$target = isset($_GET['t']) ? $_GET['t'] : null;
$utm_source = isset($_GET['utm_source']) ? $_GET['utm_source'] : null;
$utm_medium = isset($_GET['utm_medium']) ? $_GET['utm_medium'] : null;
$utm_campaign = isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : null;
$utm_content = isset($_GET['utm_content']) ? $_GET['utm_content'] : null;
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Хочешь заговорить на английском, записывайся на пробный урок в сеть школ английского SAY YES!">
        <meta name="yandex-verification" content="77618a975ea21450">

        <title>Бесплатный пробный урок английского в Москве | SAY YES!</title>

        <link rel="icon" href="./img/favicon-32x32.png" sizes="32x32">
        <link rel="icon" href="./img/favicon-192x192.png" sizes="192x192">
        <link rel="stylesheet" href="./css/index.css">

        <?php include './includes/yandex-metrika.php' ?>
        <?php include './includes/google-analytics.php' ?>
        <?php include './includes/facebook-pixel.php' ?>
        <?php include './includes/roistat.php' ?>
    </head>

    <body class="page<?= isset($target) ? ' target-'.$target : '' ?>">
        <header id="header" class="hero">
            <div class="hero-head">
                <div class="container">
                    <img src="./img/sayyes-logo.png">

                    <div class="buttons">
                        <a class="button phone is-text" href="tel:74996505347">
                            <span class="roistat-phone">+7 499 650-53-47</span>
                        </a>

                        <a class="button whatsapp-button is-white is-outlined" href="https://wa.me/79250916416" target="_blank">
                            <span class="icon">
                                <i class="fab fa-whatsapp"></i>
                            </span>
                            <span>Написать в WhatsApp</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="hero-body">
                <h1 class="typography title">Бесплатный урок английского языка<br>в Москве или по Скайп</h1>
            </div>

            <div class="hero-foot">
                <p class="typography">Воспользуйся шансом заговорить на английском по методу<br><span class="rounded">«Английский до автоматизма»</span></p>

                <a href="#form" class="button is-medium is-danger is-fullwidth call-to-action">Записаться на бесплатный урок</a>
            </div>
        </header>

        <section id="signup" class="section has-text-centered">
            <h2 class="title">Наш бесплатный урок однозначно для вас, если вы:</h2>

            <div class="media-list">
                <?php
                    $items = [
                        [
                            'image' => 'zipper-mouth-face.png',
                            'text' => 'Не говорите на английском или говорите с ошибками'
                        ],
                        [
                            'image' => 'shocked-face-with-exploding-head.png',
                            'text' => 'С трудом понимаете речь носителей'
                        ],
                        [
                            'image' => 'grimacing-face.png',
                            'text' => 'Не знаете, как правильно строить предложения'
                        ],
                        [
                            'image' => 'face-without-mouth.png',
                            'text' => 'Понимаете, что говорят вам, но ответить не можете'
                        ]
                    ];
                ?>

                <?php foreach($items as $item): ?>
                    <div class="media">
                        <div class="media-left">
                            <img class="image" src="./img/emoji/<?= $item['image'] ?>">
                        </div>

                        <div class="media-content">
                            <p><?= $item['text'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="background-image">
                <p>А еще вы, возможно, учили английский годами: в школе, в институте, на курсах...<br>...но так и не владеете им свободно! =(</p>
            </div>
        </section>

        <section id="details" class="section">
            <h2 class="title section-title">Почему же мы учим язык со школы, но так и не говорим?</h2>

            <div class="media-list">
                <?php
                    $items = [
                        [
                            'image' => 'open-book.png',
                            'text' => 'В школе нас учили читать и писать, но не говорить'
                        ],
                        [
                            'image' => 'female-student.png',
                            'text' => 'В институте нам чаще всего было не до английского =)'
                        ],
                        [
                            'image' => 'memo.png',
                            'text' => 'Большинство курсов и репетиторов учат по устаревшим методикам - вы выполняете множество письменных упражнений, а говорите мало'
                        ]
                    ];
                ?>

                <?php foreach($items as $item): ?>
                    <div class="media">
                        <div class="media-left">
                            <img class="image" src="./img/emoji/<?= $item['image'] ?>">
                        </div>

                        <div class="media-content">
                            <p><?= $item['text'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <p class="lead has-text-centered">А чтобы свободно заговорить английском, нужна <strong class="text-uppercase">практика! говорить, много говорить</strong><br>пока вы не начнёте делать это не задумываясь, <br><strong class="text-uppercase">"на автомате"!</strong></p>
        </section>

        <section id="details" class="section section-dark">
            <h2 class="title">Именно на это направлена наша методика<br><span class="has-text-danger">«Английский до автоматизма»</span></h2>

            <div class="media-list">
                <?php
                    $items = [
                        [
                            'image' => 'speech-balloon.png',
                            'text' => 'Вы <strong>практикуете</strong> английскую речь с напарниками <strong>80% урока</strong>'
                        ],
                        [
                            'image' => 'speaking-head-in-silhouette.png',
                            'text' => 'Многократно <strong>повторяете конструкции и новые слова</strong>, чтобы они в нужный момент вылетали на автомате – и все это <strong>в игровой форме!</strong>'
                        ],
                        [
                            'image' => 'speak-no-evil-monkey.png',
                            'text' => 'Преодолеваете языковой барьер во время <strong>визита носителей языка</strong> в классы (наша УНИКАЛЬНАЯ фишка!)'
                        ]
                    ];
                ?>

                <?php foreach($items as $item): ?>
                    <div class="media">
                        <div class="media-left">
                            <img class="image" src="./img/emoji/<?= $item['image'] ?>">
                        </div>

                        <div class="media-content">
                            <p class="typography"><?= $item['text'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <p class="lead has-text-centered">Запишитесь на бесплатный урок и попробуйте нашу методику!</p>

            <a href="#form" class="button is-danger is-fullwidth call-to-action">Записаться на бесплатный урок</a>
        </section>

        <section id="about" class="section">
            <h2 class="title">Кто мы?</h2>

            <p class="subtitle has-text-weight-bold">SAY YES! – сеть школ английского языка в Москве</p>

            <div class="media-list">
                <?php
                    $items = [
                        [
                            'image' => 'graduation-cap.png',
                            'text' => 'Обучили английскому более 4500 студентов за 6 лет'
                        ],
                        [
                            'image' => 'white-up-pointing-index.png',
                            'text' => 'Обучаем в группах, индивидуально и по скайпу'
                        ],
                        [
                            'image' => 'thumbs-up-sign.png',
                            'text' => 'Доступная стоимость - от 6000 руб./мес.'
                        ]
                    ];
                ?>

                <?php foreach ($items as $item): ?>
                    <div class="media">
                        <div class="media-left">
                            <img class="image" src="./img/emoji/<?= $item['image'] ?>">
                        </div>

                        <div class="media-content">
                            <p><?= $item['text'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <p class="lead has-text-centered">Дважды становились победителями Премии <strong>«Эксперт Года»</strong> рейтинга курсов Schoolrate:</p>

            <div class="media-list">
                <?php
                    $items = [
                        [
                            'image' => 'trophy.png',
                            'text' => '<strong>Инноватор года</strong> за курс English Challenge (2017 г.)'
                        ],
                        [
                            'image' => 'trophy.png',
                            'text' => 'За <strong>лучшие языковые мероприятия</strong> для студентов (2018 г.)'
                        ]
                    ];
                ?>

                <?php foreach($items as $item): ?>
                    <div class="media">
                        <div class="media-left">
                            <img class="image" src="./img/emoji/<?= $item['image'] ?>">
                        </div>

                        <div class="media-content">
                            <p><?= $item['text'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        
        <section id="gallery" class="section">
            <h2 class="title">Несколько фото из нашего Инстаграма</h2>

            <div class="carousel">
                <div class="carousel-inner">
                    <?php foreach(range(1, 10) as $number): ?>
                        <div>
                            <img class="img-fluid" src="./img/photos/<?= $number ?>.jpg" alt="">
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </section>

        <section id="video" class="section">
            <h2 class="title">Видео-прогресс студентов</h2>

            <p class="lead has-text-centered">А еще мы <strong>единственная школа</strong> в Москве, <strong>где снимают прогресс</strong> студентов на видео!</p>

            <p class="lead has-text-centered">Посмотрите не просто отзывы наших студентов, а то, как они <strong>говорят на английском</strong>:</p>

            <div class="video">
                <iframe src="https://player.vimeo.com/video/319753562" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
            </div>
        </section>

        <section id="contacts" class="section">
            <h2 class="title">Хотите так же свободно говорить на английском?</h2>

            <p class="subtitle">Записывайтесь на бесплатный пробный урок в удобном вам месте:</p>

            <div class="media-list">
                <?php
                    $items = [
                        [
                            'icon' => 'fa fa-subway',
                            'primary' => 'м. Павелецкая (5 мин.)',
                            'secondary' => 'ул. Кожевническая, д. 14к1с2',
                            'color' => 'forestgreen'
                        ],
                        [
                            'icon' => 'fa fa-subway',
                            'primary' => 'м. Белорусская (5 мин.)',
                            'secondary' => 'ул. Большая Грузинская, д. 61c1',
                            'color' => 'saddlebrown'
                        ],
                        [
                            'icon' => 'fa fa-subway',
                            'primary' => 'м. Улица 1905 г. (4 мин.)',
                            'secondary' => 'ул. 2-я Звенигородская, д. 12с1',
                            'color' => 'purple'
                        ]
                    ];
                ?>

                <?php foreach ($items as $item): ?>
                    <div class="media">
                        <div class="media-left">
                            <span class="icon is-large">
                                <i class="<?= $item['icon'] ?>" style="color: <?= $item['color'] ?>"></i>
                            </span>
                        </div>

                        <div class="media-content">
                            <p><strong><?= $item['primary'] ?></strong></p>
                            <p><?= $item['secondary'] ?></p>
                        </div>
                    </div>
                <?php endforeach ?>

                <div class="media">
                    <div class="media-left">
                        <span class="icon is-large">
                            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="skype" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-skype fa-w-14 fa-3x"><path fill="currentColor" d="M424.7 299.8c2.9-14 4.7-28.9 4.7-43.8 0-113.5-91.9-205.3-205.3-205.3-14.9 0-29.7 1.7-43.8 4.7C161.3 40.7 137.7 32 112 32 50.2 32 0 82.2 0 144c0 25.7 8.7 49.3 23.3 68.2-2.9 14-4.7 28.9-4.7 43.8 0 113.5 91.9 205.3 205.3 205.3 14.9 0 29.7-1.7 43.8-4.7 19 14.6 42.6 23.3 68.2 23.3 61.8 0 112-50.2 112-112 .1-25.6-8.6-49.2-23.2-68.1zm-194.6 91.5c-65.6 0-120.5-29.2-120.5-65 0-16 9-30.6 29.5-30.6 31.2 0 34.1 44.9 88.1 44.9 25.7 0 42.3-11.4 42.3-26.3 0-18.7-16-21.6-42-28-62.5-15.4-117.8-22-117.8-87.2 0-59.2 58.6-81.1 109.1-81.1 55.1 0 110.8 21.9 110.8 55.4 0 16.9-11.4 31.8-30.3 31.8-28.3 0-29.2-33.5-75-33.5-25.7 0-42 7-42 22.5 0 19.8 20.8 21.8 69.1 33 41.4 9.3 90.7 26.8 90.7 77.6 0 59.1-57.1 86.5-112 86.5z" class=""></path></svg>
                        </span>
                    </div>

                    <div class="media-content">
                        <p><strong>Индивидуально по скайп</strong></p>
                        <p>Занятия из любой точки мира</p>
                    </div>
                </div>
            </div>

            <a href="#form" class="button is-danger is-fullwidth call-to-action">Записаться на бесплатный урок</a>
        </section>

        <section id="lesson" class="section section-dark">
            <h2 class="title">На бесплатном уроке вы:</h2>

            <div class="media-list">
                <?php
                    $items = [
                        [
                            'image' => 'white-heavy-check-mark.png',
                            'text' => 'Определите свой уровень и проблемные места'
                        ],
                        [
                            'image' => 'information-desk-person.png',
                            'text' => 'Посетите пробный урок в группе вашего уровня'
                        ],
                        [
                            'image' => 'flag-for-united-kingdom.png',
                            'text' => 'Узнаете, как наша методика поможет вам заговорить'
                        ],
                        [
                            'image' => 'female-teacher.png',
                            'text' => 'Познакомитесь с вашим потенциальным преподавателем'
                        ],
                        [
                            'image' => 'house-building.png',
                            'text' => 'Узнаете, почему нашу школу называют «вторым домом»'
                        ]
                    ];
                ?>

                <?php foreach ($items as $item): ?>
                    <div class="media">
                        <div class="media-left">
                            <img class="image" src="./img/emoji/<?= $item['image'] ?>">
                        </div>

                        <div class="media-content">
                            <p><?= $item['text'] ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </section>

        <section id="form" class="section">
            <h2 class="title">Регистрация на бесплатный урок</h2>

            <p class="subtitle">Оставьте заявку до конца дня <?= date("d.m") ?>, и мы <span class="text-danger font-weight-bold">подарим два урока</span> к вашему курсу!</p>

            <form method="post" action="request.php">
                <?php if (isset($utm_source)): ?>
                    <input type="hidden" name="utm_source" value="<?= $utm_source ?>">
                <?php endif; ?>

                <?php if (isset($utm_medium)): ?>
                    <input type="hidden" name="utm_medium" value="<?= $utm_medium ?>">
                <?php endif; ?>

                <?php if (isset($utm_campaign)): ?>
                    <input type="hidden" name="utm_campaign" value="<?= $utm_campaign ?>">
                <?php endif; ?>

                <?php if (isset($utm_content)): ?>
                    <input type="hidden" name="utm_content" value="<?= $utm_content ?>">
                <?php endif; ?>

                <div class="field">
                    <div class="control">
                        <input class="input is-medium" type="text" name="name" placeholder="Имя" required>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <input class="input is-medium" type="tel" name="phone" placeholder="Телефон" required>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <label class="checkbox">
                            <input type="checkbox" checked required>
                            Я согласен на обработку своих персональных данных
                        </label>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-primary is-fullwidth">Оставить заявку</button>
                    </div>
                </div>
            </form>

            <div id="timer" class="has-text-centered">
                <p class="lead">До конца акции осталось</p>

                <span class="tag is-large is-rounded is-danger"></span>
            </div>
        </section>

        <footer id="footer" class="footer section">
            <h2 class="title">Остались вопросы?</h2>

            <p class="subtitle">Если вы хотите узнать более полную информацию о нас, просто позвоните нам!</p>

            <a class="button is-primary is-outlined is-inverted" href="tel:79250916416">
                <span class="icon">
                    <i class="fa fa-phone"></i>
                </span>
                <span>8 (925) 091-64-16</span>
            </a>

            <br>или напишите нам<br>

            <a class="button whatsapp-button is-primary is-outlined is-inverted" href="https://wa.me/79250916416" target="_blank">
                <span class="icon">
                    <i class="fab fa-whatsapp"></i>
                </span>
                <span>WhatsApp</span>
            </a>

            <div><a href="https://sayes.ru/politika-konfidentsialnosti/">Политика конфиденциальности</a></div>
        </footer>
        
        <a class="button is-danger is-fullwidth call-to-action call-to-action--fixed" href="#form">Оставить заявку и<br>получить два урока в подарок</a>

        <script src="./js/vendor.js"></script>
        <script src="https://static.sayes.ru/js/crm.js"></script>
        <script src="./js/timer.js"></script>

        <script>
            var formElement = document.querySelector('#form');
            
            $('input[type=tel]').mask('+7 (999) 999-9999');

            $('.call-to-action').on('click', function (event) {
                event.preventDefault();

                formElement.scrollIntoView({ behavior: 'smooth' });
            });

            document.querySelector('form').addEventListener('submit', function(event) {
                // ym(YANDEX_METRIKA_COUNTER, 'reachGoal', 'zayavka');
                // gtag('event', 'click', { event_category: 'zayavka' });
                fbq('track', 'Lead');
                
                crm.addStudyRequest({
                    type: 'Заявка с мобильного лэнда',
                    name: this.elements.name.value,
                    phone: this.elements.phone.value
                });
            });

            $('.whatsapp-button').click(function() {
                //ym(YANDEX_METRIKA_COUNTER, 'reachGoal', 'click');
                //gtag('event', 'click', { event_category: 'click' });
                fbq('track', 'InitiateCheckout');
                
                return true;
            });

            $('#gallery .carousel-inner').slick({
                arrow: true,
                prevArrow: '<a class="slick-arrow slick-arrow-prev"><span class="fa fa-angle-left custom-handle"></span></a>',
                nextArrow: '<a class="slick-arrow slick-arrow-next"><span class="fa fa-angle-right custom-handle"></span></a>',
                dots: true
            });

            var timerElement = document.querySelector('#timer .tag');

            var now = new Date();
            var end = new Date();

            end.setHours(23);
            end.setMinutes(59);
            end.setSeconds(59);

            var hours = end.getHours() - now.getHours();
            var minutes = end.getMinutes() - now.getMinutes();
            var seconds = end.getSeconds() - now.getSeconds();

            new Timer(hours, minutes, seconds, function (timer) {
                timerElement.textContent = timer.toString();
            }).start();</script>
    </body>
</html>