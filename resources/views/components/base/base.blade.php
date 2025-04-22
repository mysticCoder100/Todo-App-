<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title ?? "TODO APP"}}</title>
    @vite("resources/css/app.css")
</head>
<body class="grid min-h-dvh">
    {{$slot}}
</body>
</html>
