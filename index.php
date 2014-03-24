<html>
<head>
    <meta charset="utf-8">
    <title>Купи слона!</title>
</head>
<body style="background-color: #242628; position: relative; height: 100%;">
<style>
    #container {
        width: 950px; /* Ширина слоя */
        margin: 0px auto; /* Выравнивание по центру */
        vertical-align: baseline;
        display: block; /* Отображать как блок */
    }
    ul#header {
        margin-top: 10px; /* Отступ сверху */
        list-style: none; /* Убираем стиль списка */
        position: relative; /* Положение относительно исходного */
        float: right;
        right: 50%; /* Отступ от право */
    }
    li#header {
        display: block; /* Отображать как блок */
        position: relative; /* Положение относительно исходного */
        float: left; /* Положение в лево */
        left: 50%; /* Отступ от лево */
        padding-left: 14px; /* Отступ кнопки слева до шапки */
        padding-right: 14px; /* Отступ кнопки справа до шапки */
        height: 44px; /* Высота кнопки шапки */
        margin-right: 2px; /* Отступ между кнопками шапки */
        background: #ffffff; /* Цвет кнопок шапки */
    }
    a#header {
        font-family: Verdana; /* Шрифт */
        color: rgb(70, 70, 70); /* #797981; /* Цвет шрифта */
        margin-top: 16px; /* Отступ сверху */
        display: block; /* Отображать как блок */
        text-decoration: none; /* Убираем стандартное оформление текста */
    }
    table#main {
        margin: 10px auto;
        width: 950px;
    }
    table#main td {
        width: 30%;
        height: 30%;
        display: block;
        padding-bottom: 13px;
        margin: 0;
    }
    table#main td a {
        text-decoration: none; /* Убираем стандартное оформление текста */
        overflow: hidden;
    }
    table#main td a img {
        height: 300px; /* Ширина изображения */
        width: 300px; /* Высота изображения */
    }
    table#main td div {
        height: 300px;
        width: 300px;
        position: absolute;
        transition: 0.3s; /* Время затемнения товара */
    }
    table#main td div:hover {
        background-color: rgba(121, 121, 121, 0.87); /* Цвет затемнение товара */
    }
    table#main td div p {
        padding-top: 255px; /* Отступ сверху для цены */
        padding-left: 215px; /* Отступ слева до цены */
        font-family: Verdana; /* Шрифт */
        font-size: 14px; /* Размер шрифта цены */
        color: rgb(70, 70, 70); /* Цвет шрифта цены */
    }
</style>

<?php
/*$Host="localhost";
$User="Cookie";
$Password="123";
$DBname="Item";
$Link = mysql_connect($Host, $User, $Password, false, 0);*/
print('
        <div id="container">
            <ul id="header">
                <li id="header"><a id="header" href="index.php">Главная</a></li>
                <li id="header"><a id="header" href="discounts.php">Скидки и подарки</a></li>
                <li id="header"><a id="header" href="payment.php">Оплата и доставка</a></li>
                <li id="header"><a id="header" href="help.php">Помощь</a></li>
                <li id="header"><a id="header" href="contacts.php">Контакты</a></li>
            </ul>
            <table id="main"> <!--border="3"-->
                <tr>
                    <td>
                        <a href="index.php">
                            <div><p>900 RUB</p></div>
                            <img src="http://placehold.it/300/FFFFFF/000000">
                        </a>
                    </td>
                    <td>
                        <a href="index.php">
                            <div><p>900 RUB</p></div>
                            <img src="http://placehold.it/300/FFFFFF/000000">
                        </a>
                    </td>
                    <td>
                        <a href="index.php">
                            <div><p>900 RUB</p></div>
                            <img src="http://placehold.it/300/FFFFFF/000000">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="index.php">
                            <div><p>900 RUB</p></div>
                            <img src="http://placehold.it/300/FFFFFF/000000">
                        </a>
                    </td>
                    <td>
                        <a href="index.php">
                            <div><p>900 RUB</p></div>
                            <img src="http://placehold.it/300/FFFFFF/000000">
                        </a>
                    </td>
                    <td>
                        <a href="index.php">
                            <div><p>900 RUB</p></div>
                            <img src="http://placehold.it/300/FFFFFF/000000">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="index.php">
                            <div><p>900 RUB</p></div>
                            <img src="http://placehold.it/300/FFFFFF/000000">
                        </a>
                    </td>
                    <td>
                        <a href="index.php">
                            <div><p>900 RUB</p></div>
                            <img src="http://placehold.it/300/FFFFFF/000000">
                        </a>
                    </td>
                    <td>
                        <a href="index.php">
                            <div><p>900 RUB</p></div>
                            <img src="http://placehold.it/300/FFFFFF/000000">
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    ');
?>
</body>
</html>