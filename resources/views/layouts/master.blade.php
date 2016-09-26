<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')Home</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Підключаємо загальні стилі по всьому додатку -->
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ elixir('styles/base_styles.css') }}">

</head>
<body>
<!-- Передбачуємо можливість використання індивідуальних скриптів на дочірніх сторніках, хедер -->
@yield('header')
@include('snipets.navbar')
<!-- Визначаємо, де буде вставлятись контент в дочірніх сторінках -->
@yield('content')

<!-- Передбачуємо можливість використання індивідуальних скриптів на дочірніх сторніках, футер-->
@yield('footer')
<!-- Підключаємо загальні скрипти по всьому додатку -->
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>