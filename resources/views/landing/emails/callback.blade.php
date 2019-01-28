<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Заявка на обратный звонок с сайта {{ env('APP_NAME') }}</p>
<p>Имя: <b>{{ $fields->name ?? '' }}</b></p>
<p>Телефон: <b>{{ $fields->phone ?? '' }}</b></p>
</body>
</html>