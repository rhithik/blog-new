<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="min-h-screen bg-white">
    <?php foreach ($posts as $post) : ?>
        <article class="max-w-2xl mx-auto text-gray-800 border-b-2">
            <h1 class="py-6 text-3xl font-bold">
                <a href="/posts/<?= $post->slug; ?>">
                    <?= $post->title; ?>
                </a>
            </h1>

            <div class="mb-6">
                <?= $post->excerpt; ?>
            </div>
        </article>
    <?php endforeach; ?>
</body>
</html>
