<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black text-7xl text-white leading-tight">
        {{ $post->category->name }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 mt-10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class='leading-5 max-w-4xl px-10 py-14 mx-auto bg-bgPost rounded-lg shadow-md'>
        <span class='text-4xl text-white font-bold'>{{ $post->title }}</span></br>
</br>   
        <span class=" text-white">{{ $post->content }}</span></br>
</br>
        <span class='text-white font-bold'>{{ $post->user->name }}</span>
        </div>

        <div>
            <img src="{{ asset('storage/' . $post->image) }}" alt="" class="w-full rounded-lg">
        </div>
    </div>
</div>

</x-app-layout>


<!-- sm:px-4 lg:px-4 -->