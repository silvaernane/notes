<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <p>Text from the layout (TOP)</p>

    <hr>

    @yield('teste')
    @yield('content')

    <hr>

    <p>Text from the layout (BOTTON)</p>

</body>
</html>
