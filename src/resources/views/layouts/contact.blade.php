<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        body { font-size: 16px; color: #808000; }
        h1 { font-size: 48px; letter-spacing: -4px; }
        th { text-align: left; background-color: #808000; color: #fff; padding: 5px 10px; }
        td { border: solid 1px #808000; padding: 5px 10px; }
    </style>
</head>
<body>
    <h1>@yield('title')</h1>
    <div class="content">@yield('content')</div>
</body>
</html>
