<x-layout>
    <h1 class="text-center my-5">All Posts</h1>
    <div class="d-flex align-items-center justify-content-evenly m-5">
        @foreach ($posts as $post)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="text-decoration-underline">Title</h5>
                    <p class="card-text fg-2">{{ $post->title }}</p>
                    <h5 class="text-decoration-underline">Author</h5>
                    <p class="card-text fg-2">{{ $post->author }}</p>
                    <h5 class="text-decoration-underline">Content</h5>
                    <p class="card-text fg-2">{{ $post->content }}</p>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
