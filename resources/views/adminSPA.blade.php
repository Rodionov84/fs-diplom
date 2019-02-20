<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ИдёмВКино</title>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/admin_styles.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
</head>

<body>

<header class="page-header">
    <h1 class="page-header__title">Идём<span>в</span>кино</h1>
    <span class="page-header__subtitle">Администраторррская</span>
</header>

<main class="conf-steps" id="auth">
    <section class="conf-step">
        <header class="conf-step__header conf-step__header_opened">
            <h2 class="conf-step__title">Авторизация</h2>
        </header>
        <!--<div class="conf-step__wrapper">

        </div>-->
        <form class="contentform" novalidate style=" align: center;">
            <fieldset>
                    <p>Логин </p>
                    <input type="email" name="email" class="conf-step__input"  style=" width: 300px;" >
                </label>
                    <p>Пароль </p>
                    <input type="password" name="password" class="conf-step__input"  style=" width: 300px;">
                </label><br/>

                <button type="submit" class="button-contact" disabled style=" width: 100px; text-align: center">Войти</button>
            </fieldset>
        </form>
    </section>
</main>

<main class="conf-steps" id="main">

</main>

<!-- Load React. -->
<!-- Note: when deploying, replace "development.js" with "production.min.js". -->
<script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
<script src="/js/react-dom.development.js" crossorigin></script>
<script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>

<script src="/js/cinema_halls_controll.js" type="text/babel"></script>
<script src="/js/cinema_hall_seats.js" type="text/babel"></script>
<script src="/js/cinema_hall_edit.js" type="text/babel"></script>
<script src="/js/cinema_halls_wrap.js" type="text/babel"></script>
<script src="/js/cinema_hall_price.js" type="text/babel"></script>
<script src="/js/cinema_halls_price.js" type="text/babel"></script>
<script src="/js/movies_seances_timeline.js" type="text/babel"></script>
<script src="/js/cinema_halls_open_sales.js" type="text/babel"></script>
<script src="/js/movies_edit.js" type="text/babel"></script>

<script src="/js/cinema_controll.js" type="text/babel"></script>

</body>
</html>