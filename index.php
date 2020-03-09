<?php
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css">
        <link rel="stylesheet" href="./css/index.css">

        <?php include './includes/yandex-metrika.php' ?>
        <?php include './includes/google-analytics.php' ?>
        <?php include './includes/facebook-pixel.php' ?>
        <?php include './includes/roistat.php' ?>
    </head>

    <body class="page">
        <header id="header" class="hero">
            <div class="hero-head">
                <div class="container">
                    <img src="./img/sayyes-logo.png">

                    <div class="buttons">
                        <a class="button phone-button is-text" href="tel:74996505347">
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
                <h1 class="typography title">Бесплатный урок английского в Москве</h1>
            </div>

            <div class="hero-foot">
                <p class="typography">Запишитесь прямо сейчас и получите видео-инструкцию<br><span class="rounded">«Как быстро начать понимать речь носителя»</span><br>в подарок!</p>

                <a href="#form" class="button is-large is-danger call-to-action">Записаться на урок и получить подарок</a>
            </div>
        </header>

        <main id="content">
            <section id="persona" class="section has-text-centered">
                <h2 class="title">Узнаете себя?</h2>

                <div class="media-list">
                    <?php
                        $items = [
                            [
                                'image' => 'flag-for-united-kingdom.png',
                                'text' => 'Ваша самая длинная фраза на английском – "London is the capital of Great Britain"'
                            ],
                            [
                                'image' => 'world-map.png',
                                'text' => 'Вам стыдно "объясняться на пальцах" и неприятно осознавать ограниченность в путешествиях'
                            ],
                            [
                                'image' => 'television.png',
                                'text' => 'Вы хотели бы наслаждаться фильмами и сериалами в оригинале, но не можете выдержать и 10 минут'
                            ],
                            [
                                'image' => 'money-with-wings.png',
                                'text' => 'Ваша цель – высокооплачиваемая и интересная должность, но в резюме нет пункта «Свободный английский»'
                            ],
                            [
                                'image' => 'statue-of-liberty.png',
                                'text' => 'Вы думали над переездом заграницу или зимовкой на Бали, но останавливает отсутствие английского'
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

                <p class="lead">Почему же мы учим язык годами, но так и не говорим свободно?</p>
            </section>

            <section id="problem" class="section">
                <div class="container">
                    <h2 class="title section-title">Что мы делаем не так, изучая язык:</h2>

                    <div class="columns">
                        <div class="column">
                            <img class="image" src="./img/confused-girl.jpg">
                        </div>

                        <div class="column">
                            <p><strong>Устаревшая методика.</strong> На уроке вас просят заполнять пропуски, «раскрывать скобочки», либо читать текст по очереди. Вы знаете теорию, но не можете применять ее на практике.</p> 

                            <p><strong>Мало практики говорения.</strong> БОльшую часть урока вещает преподаватель. Вы опять не учитесь говорить.</p> 

                            <p><strong>Потеря мотивации.</strong> Вы только учите и учите, но реальный результат не ощущаете. Если нет ощущения свободы владения языком, то и желание учиться дальше постепенно исчезает.</p>

                            <p class="lead">Что же делать, чтобы наконец заговорить?</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="solution" class="section">
                <h2 class="title section-title">Приходите на бесплатный пробный урок в школу SAY YES! и узнайте:</h2>

                <div class="media-list">
                    <?php
                        $items = [
                            [
                                'image' => 'female-teacher.png',
                                'text' => 'Что такое метод Fluency drill и как он поможет вам <strong>заговорить «на автомате»</strong>.'
                            ],
                            [
                                'image' => 'public-address-loudspeaker.png',
                                'text' => 'Каким образом мы обеспечиваем вам <strong>80 % практики языка</strong> на уроке.'
                            ],
                            [
                                'image' => 'flag-for-united-states.png',
                                'text' => 'Как мы преодолеваем ваш барьер в говорении <strong>визитами носителей языка</strong>.'
                            ],
                            [
                                'image' => 'house-with-garden.png',
                                'text' => 'Почему нас называют <strong>«вторым домом»</strong>, а иногда «сектой».'
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
                
                <p class="lead has-text-centered">Вы побываете на пробном уроке в реальной группе, увидите,<br>как занимаются наши студенты и познакомитесь с потенциальным преподавателем.</p>
            </section>

            <section id="offer" class="section section-dark">
                <h2 class="title">Запишитесь прямо сейчас и получите видео-инструкцию<br><span class="has-text-danger">«Как быстро начать понимать речь носителя»</span><br>в подарок!</h2>

                <a href="#form" class="button is-danger is-medium call-to-action">Записаться на урок и получить подарок</a>
            </section>

            <section id="audience" class="section">
                <div class="container">
                    <h2 class="title">Наш бесплатный урок для тех, кто:</h2>

                    <div class="media-list">
                        <?php
                            $items = [
                                [
                                    'image' => 'face-without-mouth.png',
                                    'text' => '<strong>Боится</strong> говорить на английском'
                                ],
                                [
                                    'image' => 'persevering-face.png',
                                    'text' => '<strong>Не запоминает</strong> слова '
                                ],
                                [
                                    'image' => 'shocked-face-with-exploding-head.png',
                                    'text' => '<strong>Путается</strong> в правилах и временах'
                                ],
                                [
                                    'image' => 'flushed-face.png',
                                    'text' => '<strong>Стесняется</strong> своего произношения'
                                ],
                                [
                                    'image' => 'face-with-open-mouth-and-cold-sweat.png',
                                    'text' => '<strong>Не понимает</strong> речь носителя на слух'
                                ],
                                [
                                    'image' => 'zipper-mouth-face.png',
                                    'text' => 'Учит язык годами, но так и <strong>не говорит</strong>'
                                ]
                            ];
                        ?>

                        <?php foreach ($items as $item): ?>
                            <div class="media">
                                <div class="media-content">
                                    <img class="image" src="./img/emoji/<?= $item['image'] ?>">

                                    <p class="text"><?= $item['text'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <section id="lesson" class="section">
                <div class="container">
                    <h2 class="title section-title">Как проходит обучение?</h2>

                    <div class="media-list">
                        <?php
                            $items = [
                                [
                                    'image' => 'speaking-head-in-silhouette.png',
                                    'primary' => 'Практикуем общение',
                                    'secondary' => 'Вы очень, очень много говорите с преподавателем, чтобы ваш английский стал по-настоящему свободным и непринужденным.'
                                ],
                                [
                                    'image' => 'flag-for-united-kingdom.png',
                                    'primary' => 'Преподаем Живой английский',
                                    'secondary' => 'Вы занимаетесь по учебникам Touchstone (Кембридж), выполняете интерактивные задания и смотрите видео с субтитрами.'
                                ],
                                [
                                    'image' => 'information-desk-person.png',
                                    'primary' => 'Подбираем программу под вас',
                                    'secondary' => 'Деловой английский или для путешествий? С русскоговорящем преподавателем или с носителем? Интенсив или курс выходного дня?  - Мы учтем все особенности.'
                                ],
                                [
                                    'image' => 'memo.png',
                                    'primary' => 'Используем авторскую методику',
                                    'secondary' => 'Наша методика Fluency Drill гарантированно позволяет преодолеть языковой барьер и чувствовать себя свободно.'
                                ],
                                [
                                    'image' => 'female-teacher.png',
                                    'primary' => 'Проводим разговорные клубы',
                                    'secondary' => 'Чтобы вы могли еще больше практиковать навыки общения, почувствовать уверенность в себе, и просто получить положительные эмоции.'
                                ],
                                [
                                    'image' => 'money-bag.png',
                                    'primary' => 'Предлагаем гибкую систему оплаты',
                                    'secondary' => 'Для вашего удобства мы используем пакетную систему оплаты с возможностью переноса и заморозки занятий.'
                                ]
                            ];
                        ?>

                        <?php foreach($items as $item): ?>
                            <div class="media">
                                <div class="media-left">
                                    <img class="image" src="./img/emoji/<?= $item['image'] ?>">
                                </div>

                                <div class="media-content">
                                    <p><strong><?= $item['primary'] ?></strong></p>
                                    <p><?= $item['secondary'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <section id="offer" class="section section-dark">
                <h2 class="title">Запишитесь прямо сейчас и получите видео-инструкцию<br><span class="has-text-danger">«Как быстро начать понимать речь носителя»</span><br>в подарок!</h2>

                <a href="#form" class="button is-danger is-medium call-to-action">Записаться на урок и получить подарок</a>
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

                <div class="box">
                    <img class="image" src="https://sayes.ru/wp-content/uploads/2019/12/Skype_Picture_2019_12_04T14_01_35_057Z-e1575469459492.jpeg">
                </div>

                <p class="lead has-text-centered">Четыре раза становились победителями Премии <strong>«Эксперт Года»</strong> рейтинга курсов Schoolrate:</p>

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
                            ],
                            [
                                'image' => 'trophy.png',
                                'text' => '<strong>Методика года</strong> за метод «Английский до автоматизма» (2019 г.)'
                            ],
                            [
                                'image' => 'trophy.png',
                                'text' => '<strong>WEB–доверие</strong> за самую лояльную публику в Интернет (2019 г.)'
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

            <section id="teachers" class="section">
                <h2 class="title">Наши харизматичные и профессиональные преподаватели</h2>

                <div class="media-list">
                    <?php
                        $items = [
                            [
                                'first_name' => 'Марта',
                                'last_name' => 'Филипоненко',
                                'image_src' => 'https://sayes.ru/wp-content/uploads/2016/02/Филипоненко-мини.png',
                                'video_src' => 'https://www.youtube.com/watch?v=MG3tBxJmjZM'
                            ],
                            [
                                'first_name' => 'Роман',
                                'last_name' => 'Сорочук',
                                'image_src' => 'https://sayes.ru/wp-content/uploads/2016/02/sq-1.jpg',
                                'video_src' => 'https://www.youtube.com/watch?v=Tq0SC1ls_n0'
                            ],
                            [
                                'first_name' => 'Алиса',
                                'last_name' => 'Алиева',
                                'image_src' => 'https://sayes.ru/wp-content/uploads/2018/12/%D0%B0%D0%BB%D0%B8%D0%B5%D0%B2%D0%B0-%D0%BC%D0%B8%D0%BD%D0%B8-300x300.png',
                                'video_src' => 'https://www.youtube.com/watch?v=-z-JUCn1VB0'
                            ],
                            [
                                'first_name' => 'Сабина',
                                'last_name' => 'Шейхова',
                                'image_src' => 'https://sayes.ru/wp-content/uploads/2016/02/ae4C36OxL24-2.jpg',
                                'video_src' => 'https://www.youtube.com/watch?v=nbHaB0f1avc'
                            ],
                            [
                                'first_name' => 'Екатерина',
                                'last_name' => 'Иванова',
                                'image_src' => 'https://sayes.ru/wp-content/uploads/2019/04/%D0%98%D0%B2%D0%B0%D0%BD%D0%BE%D0%B2%D0%B0-%D0%BC%D0%B8%D0%BD%D0%B8-300x300.png',
                                'video_src' => 'https://www.youtube.com/watch?v=Asyra1y02hU'
                            ],
                            [
                                'first_name' => 'Полина',
                                'last_name' => 'Ангаткина',
                                'image_src' => 'https://sayes.ru/wp-content/uploads/2018/12/WhatsApp-Image-2018-12-06-at-17.18.23-e1562064170136-300x300.jpeg',
                                'video_src' => 'https://www.youtube.com/watch?v=mAk5aP2rFJw'
                            ],
                            [
                                'first_name' => 'Мария',
                                'last_name' => 'Наливайкина',
                                'image_src' => 'https://sayes.ru/wp-content/uploads/2017/09/%D0%9D%D0%B0%D0%BB%D0%B8%D0%B2%D0%B0%D0%B8%CC%86%D0%BA%D0%B8%D0%BD%D0%B0-%D0%BC%D0%B8%D0%BD%D0%B8-300x300.png',
                                'video_src' => 'https://www.youtube.com/watch?v=GErPVsS9vbA'
                            ],
                            [
                                'first_name' => 'Damjan',
                                'last_name' => 'Gogovski',
                                'image_src' => 'https://sayes.ru/wp-content/uploads/2019/04/%D0%94%D0%B0%D0%BC%D1%8C%D1%8F%D0%BD-%D0%BC%D0%B8%D0%BD%D0%B8-300x300.png',
                                'video_src' => 'https://www.youtube.com/watch?v=h0LmnaQT-KM'
                            ],
                            [
                                'first_name' => 'Лусине',
                                'last_name' => 'Гумашян',
                                'image_src' => 'https://sayes.ru/wp-content/uploads/2019/08/%D0%9B%D1%8E%D1%81%D0%B8-%D0%BC%D0%B8%D0%BD%D0%B8-300x300.png',
                                'video_src' => 'https://www.youtube.com/watch?v=xcpaDyu9qlk'
                            ]
                        ];
                    ?>

                    <?php foreach ($items as $item): ?>
                        <div class="media">
                            <a class="card" href="<?= $item['video_src'] ?>"  data-fancybox data-width="640" data-height="360">
                                <img class="card-image" src="<?= $item['image_src'] ?>" alt="Фото <?= $item['first_name'] . ' ' . $item['last_name'] ?>">

                                <div class="card-content">
                                    <span class="title"><?= $item['first_name'] ?></span>
                                    <span class="subtitle"><?= $item['last_name'] ?></span>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <section id="video" class="section">
                <h2 class="title">Видео-прогресс студентов</h2>

                <p class="lead has-text-centered">А еще мы <strong>единственная школа</strong> в Москве, <strong>где снимают прогресс</strong> студентов на видео!</p>

                <p class="lead has-text-centered">Посмотрите не просто отзывы наших студентов, а то, как они <strong>говорят на английском</strong>:</p>

                <div class="box video">
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

                <a href="#form" class="button is-danger is-medium call-to-action">Записаться на урок и получить подарок</a>
            </section>

            <section id="form" class="section">
                <h2 class="title">Регистрация на бесплатный урок</h2>

                <p class="subtitle">Оставьте заявку до конца дня <?= date("d.m") ?>, и вы получите видео-инструкцию<br><span class="has-text-danger has-text-weight-bold is-size-5">«Как быстро начать понимать речь носителя»</span><br>в подарок!</p>

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
                            <button type="submit" class="button is-primary is-medium is-fullwidth">Оставить заявку</button>
                        </div>
                    </div>
                </form>

                <div id="timer" class="has-text-centered">
                    <p class="lead">До конца акции осталось</p>

                    <span class="tag is-large is-rounded is-danger"></span>
                </div>
            </section>
        </main>

        <footer id="footer" class="footer section">
            <h2 class="title">Остались вопросы?</h2>

            <p class="subtitle">Если вы хотите узнать больше о нашей школе, просто позвоните нам!</p>

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

        <div id="dialog" class="modal">
            <div class="modal-background"></div>

            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Ваша заявка принята</p>
                    <button class="delete" aria-label="close"></button>
                </header>

                <section class="modal-card-body">
                    <p class="lead">Осталось только получить подарок!</p>
                    <img src="./img/emoji/wrapped-present.png">
                    <p>Чтобы получить подарок в WhatsApp, пройдите по ссылке и отправьте сообщение с текстом <strong>"хочу подарок"</strong>.</p>
                </section>

                <footer class="modal-card-foot">
                    <a class="button is-success" href="https://wa.me/79250916416?text=Хочу%20подарок">Получить подарок</a>
                </footer>
            </div>
        </div>
        
        <a class="button is-danger is-fullwidth call-to-action call-to-action--fixed" href="#form">Оставить заявку и<br>получить два урока в подарок</a>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
        <script src="https://static.sayes.ru/js/crm.js"></script>
        <script src="https://static.sayes.ru/js/masked-input.js"></script>
        <script src="https://static.sayes.ru/js/timer.js"></script>

        <script>
            var formElement = document.querySelector('#form');
            var dialogElement = document.querySelector('#dialog');
            
            $('input[type=tel]').mask('+7 (999) 999-9999');

            document.querySelector('form').addEventListener('submit', function(event) {
                event.preventDefault();

                // ym(YANDEX_METRIKA_COUNTER, 'reachGoal', 'zayavka');
                // gtag('event', 'click', { event_category: 'zayavka' });
                // fbq('track', 'Lead');
                
                // crm.addStudyRequest({
                //     type: 'Заявка с мобильного лэнда',
                //     name: this.elements.name.value,
                //     phone: this.elements.phone.value
                // });
                
                $.post({
                    url: 'request.php',
                    data: JSON.stringify({
                        name: this.elements.name.value,
                        phone: this.elements.phone.value,
                        utm_source: this.elements.utm_source && this.elements.utm_source.value,
                        utm_medium: this.elements.utm_medium && this.elements.utm_medium.value,
                        utm_campaign: this.elements.utm_campaign && this.elements.utm_campaign.value,
                        utm_content: this.elements.utm_content && this.elements.utm_content.value
                    }),
                    contentType: 'application/json'
                }).done(function(data) {
                    dialogElement.classList.add('is-active');
                    formElement.reset();
                });
            });

            $('.call-to-action').on('click', function (event) {
                event.preventDefault();

                formElement.scrollIntoView({ behavior: 'smooth' });
            });

            $('.whatsapp-button').click(function() {
                //ym(YANDEX_METRIKA_COUNTER, 'reachGoal', 'click');
                //gtag('event', 'click', { event_category: 'click' });
                //fbq('track', 'InitiateCheckout');
                
                return true;
            });

            $('#gallery .carousel-inner').slick({
                arrow: true,
                prevArrow: '<a class="slick-arrow slick-arrow-prev"><span class="fa fa-angle-left custom-handle"></span></a>',
                nextArrow: '<a class="slick-arrow slick-arrow-next"><span class="fa fa-angle-right custom-handle"></span></a>',
                dots: true
            });

            $('#dialog .delete').click(function() {
                dialogElement.classList.remove('is-active');
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