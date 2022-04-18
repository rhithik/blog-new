<x-layout>
    @foreach ( $posts as $post )
        <article class="max-w-2xl mx-auto text-gray-800 border-b-2">
            <h1 class="py-6 text-3xl font-bold">
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>

            <div class="mb-6">
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</x-layout>

