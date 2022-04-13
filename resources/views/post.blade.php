<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-white dark:bg-white">
    <article class="max-w-2xl mx-auto text-gray-800">
        <?= $post; ?>
    </article>

    <div class="max-w-2xl mx-auto mt-4">
        <a href="/" class="btn btn-outline">Go Back</a>
    </div>
</body>
</html>
