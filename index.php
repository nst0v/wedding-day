<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Приглашение на свадьбу</title>
    <style>
        body {
            margin: 0;
            font-family: 'Georgia', serif;
            background: linear-gradient(to bottom, #f8f0e3, #fceae1);
            color: #5a3932;
            overflow-x: hidden;
        }
        header {
            text-align: center;
            padding: 50px 20px;
            background: #f3d1b3;
            color: #ffffff;
        }
        header h1 {
            font-size: 3em;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        header p {
            font-size: 1.2em;
            margin: 10px 0 0;
        }
        section {
            padding: 50px 20px;
            max-width: 900px;
            margin: 0 auto;
            line-height: 1.8;
        }
        .block {
            margin-bottom: 30px;
            border: 2px solid #f3d1b3;
            border-radius: 10px;
            background: #ffffff;
            padding: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .block:hover {
            transform: scale(1.05);
            box-shadow: 0px 8px 12px rgba(0, 0, 0, 0.2);
        }
        h2 {
            font-size: 1.8em;
            margin-bottom: 10px;
            color: #5a3932;
        }
        .block img {
            width: 100%;
            border-radius: 10px;
            margin-top: 20px;
        }
        footer {
            text-align: center;
            padding: 20px;
            background: #5a3932;
            color: #ffffff;
        }
        footer p {
            margin: 0;
            font-size: 0.9em;
        }
        .map iframe {
            width: 100%;
            height: 300px;
            border: 0;
            border-radius: 10px;
        }
        a {
            color: #d87a56;
            text-decoration: none;
        }

        /* Медиазапросы для адаптивности */
        @media (max-width: 900px) {
            header h1 {
                font-size: 2.5em;
            }
            section {
                padding: 30px 15px;
            }
            .block {
                padding: 15px;
            }
            h2 {
                font-size: 1.5em;
            }
        }

        @media (max-width: 600px) {
            header {
                padding: 30px 15px;
            }
            header h1 {
                font-size: 2em;
            }
            header p {
                font-size: 1em;
            }
            section {
                padding: 20px 10px;
            }
            h2 {
                font-size: 1.2em;
            }
            .block {
                padding: 10px;
            }
            footer {
                padding: 15px;
            }
        }

        @media (max-width: 400px) {
            header h1 {
                font-size: 1.8em;
            }
            header p {
                font-size: 0.9em;
            }
            section {
                padding: 15px 5px;
            }
            h2 {
                font-size: 1em;
            }
            .block {
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Добро пожаловать на нашу свадьбу</h1>
        <p>Мы с нетеadadadпением ждем возможности отпраздновать этот особенный день вместе с вами!</p>
    </header>

    <section>
        <div class="block">
            <h2>Дата и время</h2>
            <p>Ждем вас <strong>15 июня 2025 года</strong>, в <strong>16:00</strong>.</p>
        </div>

        <div class="block">
            <h2>Место проведения</h2>
            <p>Свадьба пройдет в прекрасном <strong>Rosewood Garden Hall</strong>, расположенном в центре города.</p>
            <img src="https://source.unsplash.com/900x300/?wedding,venue" alt="Место проведения">
        </div>

        <div class="block">
            <h2>Дресс-код</h2>
            <p>Мы будем рады видеть вас в нарядной одежде. Пожалуйста, выбирайте пастельные оттенки!</p>
        </div>

        <div class="block">
            <h2>Что взять с собой</h2>
            <p>Вашу лучезарную улыбку, радостное настроение и танцевальную обувь!</p>
        </div>

        <div class="block">
            <h2>Меню</h2>
            <p>Наслаждайтесь изысканными блюдами, включая:
                <ul>
                    <li>Лосось на гриле с лимонным соусом</li>
                    <li>Курица, запеченная с травами</li>
                    <li>Вегетарианская паста</li>
                    <li>Восхитительные десерты</li>
                </ul>
            </p>
            <img src="https://source.unsplash.com/900x300/?wedding,food" alt="Еда">
        </div>

        <div class="block map">
            <h2>Как добраться</h2>
            <p>Найдите путь с помощью карты ниже:</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.8354345077327!2d144.96315791531673!3d-37.814217979751704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf5771e2075bbcd6!2sWedding%20Venue!5e0!3m2!1sru!2s!4v1614903213951!5m2!1sru!2s" allowfullscreen=""></iframe>
        </div>

        <div class="block">
            <h2>Фотозона</h2>
            <p>Не пропустите веселую фотозону для запечатления незабываемых моментов. Реквизит предоставляется!</p>
            <img src="https://source.unsplash.com/900x300/?photo,booth" alt="Фотозона">
        </div>

        <div class="block">
            <h2>Подтверждение участия</h2>
            <p>Пожалуйста, сообщите нам о своем участии, заполнив форму <a href="#">здесь</a>.</p>
        </div>
    </section>

    <footer>
        <p>Мы с нетерпением ждем встречи с вами в этот особенный день! С любовью, [Ваши Имена]</p>
    </footer>
</body>
</html>
