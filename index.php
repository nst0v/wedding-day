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
            background: linear-gradient(to bottom, #e7f0e4, #d6e4d3);
            color: #4d5a4b;
            overflow-x: hidden;
        }
        header {
            text-align: center;
            padding: 50px 20px;
            background: #aab7a2;
            color: #ffffff;
        }
        header h1 {
            font-size: 3em;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 2px;
            word-wrap: break-word;
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
            border: 2px solid #aab7a2;
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
            color: #4d5a4b;
        }
        .block img {
            width: 100%;
            border-radius: 10px;
            margin-top: 20px;
        }
        footer {
            text-align: center;
            padding: 20px;
            background: #4d5a4b;
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
            color: #6b8f6d;
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
                font-size: 1.8em;
                line-height: 1.2;
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
                font-size: 1.5em;
                line-height: 1.2;
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
        <p>Мы с нетерпением ждем возможности отпраздновать этот особенный день вместе с вами!</p>
    </header>

    <section>
        <div class="block">
            <h2>Дата и время</h2>
            <p>Ждем вас <strong>5 июля 2025 года</strong>, в <strong>16:00</strong>.</p>
        </div>

        <div class="block">
            <h2>Место проведения</h2>
            <p>Свадьба пройдет на прекрасной <strong>Оранжевой ферме</strong>, расположенной за городом.</p>
            <img src="" alt="Место проведения">
        </div>

        <div class="block">
            <h2>Дресс-код</h2>
            <p>Мы будем рады видеть вас в нарядной одежде. Пожалуйста, выбирайте оливковые оттенки!</p>
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
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A00fb175b1081ff0d289049386ec0cc478ec210b61503f05db9e0c277ab957662&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
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
        <p>Мы с нетерпением ждем встречи с вами в этот особенный день!</p>
    </footer>
</body>
</html>
