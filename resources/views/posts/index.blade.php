<x-app-layout>
    <div class="max-w-5xl mx-auto py-6 px-2">
        <ul class="divide-y">
            @foreach($posts as $post)
                <li class="py-4 px-2">
                    <a href="{{  route('posts.index', $post) }}" class="text-xl font-semibold block text-white">{{ $post->title }}</a>
                    <span class="text-sm text-gray-400">
                        {{  $post->created_at->diffForHumans() }} by {{ $post->user->name }}
                    </span>
                </li>
            @endforeach
        </ul>

        {{ $posts->links() }}

        <div class="text-xl font-semibold block text-white">Pages:</div>

    </div>
</x-app-layout>
