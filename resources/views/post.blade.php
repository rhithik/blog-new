<x-layout>
    <article class="max-w-2xl mx-auto text-gray-800">
        <h1 class="py-6 text-3xl font-bold">
            {{ $post->title }}
        </h1>

        <div class="mb-6 leading-loose">
            {!! $post->body !!}
        </div>
    </article>

    <div class="max-w-2xl mx-auto mt-4">
        <a href="/" class="btn btn-outline">Go Back</a>
    </div>
</x-layout>
