 @auth
<x-panel>
    <form action="/posts/{{$post->id}}/comments" method="post">
        @csrf
        <h2 class="mt-4">Want to participate?</h2>
        <img src="https://i.pravatar.cc/60?u={{auth()->id()}}" alt="" width="40" height="40" class="rounded-full">

        <header>
            <div class="mt-6">
                <textarea class="w-full text-sm focus:outline-none focus:ring" name="body" id=""  rows="5" placeholder="quick! think of something to say."
                required
                ></textarea>
            </div>

            @error("body")
                <span class="text-sm text-red-600">
                    {{$message}}
                </span>
            @enderror
            <div class="flex justify-end mt-6 border-gray-200 pt-6">
                <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-20 rounded-2xl hover:bg-blue-600">Post</button>
            </div>
        </header>
    </form>

</x-panel>

@else
    <p class="font-semibold">
    <a href="/register" class="hover:underline">
    Register</a> or <a href="/login" class="hover:underline">login</a> to leave comments
    </p>
@endauth
