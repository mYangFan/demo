<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .header{background: bisque}
    .middle{background: aquamarine}
    </style>
</head>
<body>
    头部<br/>
    @section('content')
    主模板
    @show
    尾部<br/>
</body>
</html>
