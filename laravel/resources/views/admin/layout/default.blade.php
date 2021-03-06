@extends('layouts.logout')
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ 'Contatos' ?? $title}}</title>
    <link rel="stylesheet" href="/css/app.css">
    <script>src="/js/app.js"</script>
</head>
<body>
<main>


    <section class="container">
        {{ $slot }}
    </section>
</main>
</body>
</html>