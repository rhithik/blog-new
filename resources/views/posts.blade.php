<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-white h-full">
    <?php foreach ($posts as $post) : ?>
        <article class="max-w-2xl mx-auto text-gray-800">
            <?= $post; ?>
        </article>
    <?php endforeach; ?>
</body>
</html>
