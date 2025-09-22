<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Needs Solutions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">
                @if ($errors->any())
                    @foreach ($errors->all() as $eror)
                        <div class="py-3 w-full rounded-3xl bg-red-500 text-white">
                            {{ $eror }}
                        </div>
                    @endforeach
                @endif

                <form method="POST" action="{{ route('admin.needs_solutions.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <x-input-label for="thumbnail" :value="__('Thumbnail')" />
                        <x-text-input id="thumbnail" class="blok mt-1 w-full " type="file" name="thumbnail"
                            :value="old('thumbnail')" required outofocus auto complite="thumbnail" />
                        <x-input-error :messages="$errors->get('thumbnail')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="heading" :value="__('Heading')" />
                        <x-text-input id="heading" class="blok mt-1 w-full" type="text" name="heading"
                            :value="old('heading')" required outofocus auto complite="heading" />
                        <x-input-error :messages="$errors->get('heading')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="short_article" :value="__('Short Article')" />
                        <x-text-input id="short_article" class="blok mt-1 w-full" type="text" name="short_article"
                            :value="old('short_article')" required outofocus auto complite="short_article" />
                        <x-input-error :messages="$errors->get('short_article')" class="mt-2" />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Add New Need Solutions
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
