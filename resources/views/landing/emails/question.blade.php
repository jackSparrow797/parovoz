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
<p>На сайте Parovoz появился новый вопрос: <b>{{ $fields->title ?? '' }}</b></p>
<p>Имя: <b>{{ $fields->name ?? '' }}</b></p>
<p>E-mail: <b>{{ $fields->email ?? '' }}</b></p>
<p>Телефон: <b>{{ $fields->phone ?? '' }}</b></p>
<p>Комментарий:</p>
<p>{{ $fields->text ?? '' }}</p>
</body>
</html>