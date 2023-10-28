<x-layout>
    <article>
        <h1>
            {{$post->title}}
        </h1>

        <div>
            {!! $post->body !!}
        </div>

        <a href="/">GO Back Home</a>
    </article>

</x-layout>

