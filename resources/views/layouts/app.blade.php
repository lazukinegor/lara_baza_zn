<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>KnowPC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #fff;
        }
        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        footer {
            background-color: #f8f8f8;
            padding: 20px 0;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
@include('blocks.header')

<main>
    @yield('content')
</main>

@include('blocks.footer')

<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
