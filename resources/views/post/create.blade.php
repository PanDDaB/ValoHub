<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black text-7xl text-white leading-tight">
        {{ __('CRÉER') }}<br>{{ __('UN POST') }}
        </h2>
    </x-slot>


    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 ">
        @foreach ($errors->all() as $error)
            <span class="block text-red-500">{{ $error }}</span>
        @endforeach

        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data" class='leading-5 max-w-4xl px-10 py-14 mx-auto bg-white rounded-lg shadow-md'>
            @csrf
            <x-label for="title" value="Titre du post" />
            <x-input id="title" name="title" class='shadow-lg border-black border' />

            <x-label for="content" value="Contenu du post" />
            <textarea id="content" name="content"></textarea>

            <x-label for="image" value="Image du post" />
            <x-input type="file" id="image" name="image"/>

            <x-label for="category" value="Categorie du post" />

            <select name="category" id="category">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <x-button style="display: block !important" class="mt-10">Créer mon post</x-button>
        </form>
    </div>
</x-app-layout>
