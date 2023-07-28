<x-layout>
        @include('partials._posts-header')

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            @if (count($posts)>0)
                <x-post-featured-card :post="$posts[0]"></x-post-featured-card>
            @endif


            <div class="lg:grid lg:grid-cols-2">
                @foreach ($posts as $post)
                        <x-post-card :post="$post"></x-post-card>
                    @endforeach



            </div>

            <div class="lg:grid lg:grid-cols-3">
                 @foreach ($posts as $post)
                        <x-post-card :post="$post"></x-post-card>
                    @endforeach

            </div>
             {{$posts->links()}}
        </main>
</x-layout>
