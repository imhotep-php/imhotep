<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        @if($language === 'ru')
            Imhotep - PHP Framework для Web-разработчиков
        @else
            Imhotep - The PHP Framework For Web Developers
        @endif
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ scss('welcome.scss') }}">
</head>
    @yeld('content')
</body>
</html>