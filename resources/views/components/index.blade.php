<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Population bomb</title>
    <link rel="shortcut icon" href="/storage/img/mouse.png" type="image/x-icon">

    @vite(['/resources/css/app.css', '/resources/js/app.js'])
</head>
<body>
    <x-navbar />
    {{$slot}}
    <x-footer></x-footer>
</body>
</html>