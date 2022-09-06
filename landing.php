<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DONER HOUSE</title>

    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
    <header class="header">
        <div class="header__content flex flex__center">
            <a href="#" class="header__logo">
                <img src="./images/logo.svg" alt="logo" class="header__logo-icon">
            </a>
            <nav class="header__nav">
                <ul class="header__list flex">
                    <li class="header__item">
                        <a href="#" class="header__link white">Вход</a>
                    </li>
                    <li class="header__item">
                        <a href="#" class="header__link white">Регистрация</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header__content flex flex__center white">
            <p class="header__slogan">Здесь будет расположен слоган компании</p>
            <div class="header__statistic flex">
                <div class="header__statistic--info flex flex__center">
                    <span class="header__statistic--icon icon__user"></span>
                    10 пользователей онлайн
                </div>
                <div class="header__statistic--info flex flex__center">
                    <span class="header__statistic--icon icon__case"></span>
                    10 новых заданий
                </div>
            </div>
        </div>
    </header>

    <main class="main">
        <section class="section__content section__about">
            <h1 class="section__heading">Назначение сервиса</h1>
            <p class="about__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus officia earum dolorum temporibus soluta nisi autem eius expedita corporis possimus eveniet dignissimos beatae alias neque, velit veritatis laudantium nesciunt cumque quos a odio mollitia! <br><br>Qui soluta ab earum iste, nemo perspiciatis molestias accusamus, culpa provident sunt totam distinctio ducimus quod. Quidem quae et modi laudantium accusamus tempora architecto voluptatibus fugit repellat, error recusandae atque aut dolores, sapiente veritatis expedita saepe eaque.</p>
            <a href="#" class="btn about__btn">Создать аккаунт</a>
        </section>

        <section class="section__content section__map">
            <h1 class="section__heading">Дорожная карта заказчика</h1>
            <ul class="map__list flex">
                <li class="map__item">
                    <h3 class="map__heaing">Публикация заявки</h3>
                    <p class="mmap__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti voluptatum nostrum illo eum at, odio quas adipisci iusto atque cum? Natus dolorem velit modi, eaque tenetur aut placeat illum cupiditate!</p>
                </li>
                <li class="map__item">
                    <h3 class="map__heaing">Выбор исполнителя</h3>
                    <p class="mmap__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti voluptatum nostrum illo eum at, odio quas adipisci iusto atque cum? Natus dolorem velit modi, eaque tenetur aut placeat illum cupiditate!</p>
                </li>
                <li class="map__item">
                    <h3 class="map__heaing">Обсуждение деталей</h3>
                    <p class="mmap__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti voluptatum nostrum illo eum at, odio quas adipisci iusto atque cum? Natus dolorem velit modi, eaque tenetur aut placeat illum cupiditate!</p>
                </li>
                <li class="map__item">
                    <h3 class="map__heaing">Оплата работы</h3>
                    <p class="mmap__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti voluptatum nostrum illo eum at, odio quas adipisci iusto atque cum? Natus dolorem velit modi, eaque tenetur aut placeat illum cupiditate!</p>
                </li>
            </ul>
        </section>
        <section class="section__content section__services">
            <h1 class="section__heading">Преимущества</h1>
            <ul class="services__list flex">
                <li class="services__item flex">
                    <span class="services__image">
                        <img src="./images/group.png">
                    </span>
                    <h3 class="services__heading">Исполнителям</h3>
                    <span class="services__preum">Преимущество</span>
                    <span class="services__preum">Преимущество</span>
                    <span class="services__preum">Преимущество</span>
                    <span class="services__preum">Преимущество</span>
                    <span class="services__preum">Преимущество</span>
                    <span class="services__preum">Преимущество</span>
                    <a href="#" class="services__btn btn">Подробнее</a>
                </li>
                <li class="services__item flex">
                    <span class="services__image">
                        <img src="./images/worker.png">
                    </span>
                    <h3 class="services__heading">Заказчикам</h3>
                    <span class="services__preum">Преимущество</span>
                    <span class="services__preum">Преимущество</span>
                    <span class="services__preum">Преимущество</span>
                    <span class="services__preum">Преимущество</span>
                    <span class="services__preum">Преимущество</span>
                    <span class="services__preum">Преимущество</span>
                    <a href="#" class="services__btn btn">Подробнее</a>
                </li>
            </ul>
        </section>

        <section class="section__content section__work">
            <h1 class="section__heading">Последние заказы</h1>
            <ul class="map__list flex">
                <li class="map__item">
                    <h3 class="map__heaing">Задание 1</h3>
                    <p class="mmap__description"><strong>Заказчик:</strong> Имя и фамилия</p>
                    <p class="mmap__description"><strong>Цена:</strong> 5 000</p>
                    <p class="mmap__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, minima molestias fugit provident voluptatem nesciunt cum!</p>
                    <a href="#" class="map__link btn">Подробнее</a>
                </li>
                <li class="map__item">
                    <h3 class="map__heaing">Задание 2</h3>
                    <p class="mmap__description"><strong>Заказчик:</strong> Имя и фамилия</p>
                    <p class="mmap__description"><strong>Цена:</strong> 5 000</p>
                    <p class="mmap__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, minima molestias fugit provident voluptatem nesciunt cum!</p>
                    <a href="#" class="map__link btn">Подробнее</a>
                </li>
                <li class="map__item">
                    <h3 class="map__heaing">Задание 3</h3>
                    <p class="mmap__description"><strong>Заказчик:</strong> Имя и фамилия</p>
                    <p class="mmap__description"><strong>Цена:</strong> 5 000</p>
                    <p class="mmap__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, minima molestias fugit provident voluptatem nesciunt cum!</p>
                    <a href="#" class="map__link btn">Подробнее</a>
                </li>
                <li class="map__item">
                    <h3 class="map__heaing">Задание 4</h3>
                    <p class="mmap__description"><strong>Заказчик:</strong> Имя и фамилия</p>
                    <p class="mmap__description"><strong>Цена:</strong> 5 000</p>
                    <p class="mmap__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, minima molestias fugit provident voluptatem nesciunt cum!</p>
                    <a href="#" class="map__link btn">Подробнее</a>
                </li>
            </ul>
            <a href="#" class="map__link--all btn">Все задания</a>
        </section>
    </main>

    <footer class="footer white whites">
        <div class="footer__content flex">
            <a href="#" class="footer__logo">
                <img src="./images/logo-white.svg" alt="Logo" class="logo">
            </a>
            <nav class="footer__nav">
                <ul class="footer__list flex">
                    <li class="footer__item">
                        <a href="#" class="footer__link">Задания</a>
                    </li>
                    <li class="footer__item">
                        <a href="#" class="footer__link">Исполнители</a>
                    </li>
                    <li class="footer__item">
                        <a href="#" class="footer__link">Создать задание</a>
                    </li>
                    <li class="footer__item">
                        <a href="#" class="footer__link">Мой профиль</a>
                    </li>
                    <li class="footer__item">
                        <a href="#" class="footer__link">Регистрация</a>
                    </li>
                    <li class="footer__item">
                        <a href="#" class="footer__link">Справка</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="footer__content flex">
            <a href="mailto:example@gmail.com" class="footer__email footer__link">example@gmail.com</a>
            <div class="footer__mobile">
                <span>Скачать в: </span>
                <a href="#" class="footer__link">App Store</a>
                <a href="#" class="footer__link">Google Play</a>
            </div>
        </div>
        <div class="footer__content flex">
            <p class="copyright">DONER HOUSE <span class="time"></span> &copy; Все права защищены</p>
        </div>

        <script>document.querySelector(".time").textContent = new Date().getFullYear()</script>
    </footer>
</body>
</html>