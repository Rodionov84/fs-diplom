<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ИдёмВКино</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
</head>

<body>
<header class="page-header">
    <h1 class="page-header__title">Идём<span>в</span>кино</h1>
</header>

<div id="cinema"></div>

<script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
<script src="/js/react-dom.development.js" crossorigin></script>
<script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>

<script src="/js/days_pagination.js" type="text/babel"></script>
<script src="/js/movie.js" type="text/babel"></script>

<script src="/js/cinema_index_page.js" type="text/babel"></script>
<script src="/js/cinema_hall_page.js" type="text/babel"></script>
<script src="/js/cinema_payment_page.js" type="text/babel"></script>
<script src="/js/cinema_ticket_page.js" type="text/babel"></script>

<script src="/js/cinema.js" type="text/babel"></script>

</body>
</html>
<?php /* C:\OpenServer\OSPanel\domains\test-Dingo\laravel\resources\views/clientSPA.blade.php */ ?>