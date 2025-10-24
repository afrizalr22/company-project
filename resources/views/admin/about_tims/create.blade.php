<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New About Tim') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">

                @if ($errors->any())
                    @foreach ($errors->all() as $eror)
                        <div class="py-3 w-full rounded-3xl bg-red-500 text-white">
                            {{ $eror }}
                        </div>
                    @endforeach
                @endif

                <form method="POST" action="{{ route('admin.about_tims.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <x-input-label for="poster" :value="__('poster')" />
                        <x-text-input id="poster" class="block mt-1 w-full" type="file" name="poster"
                            :value="old('poster')" required autofocus autocomplete="poster" />
                        <x-input-error :messages="$errors->get('poster')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="subheading" :value="__('subheading')" />
                        <x-text-input id="subheading" class="block mt-1 w-full" type="text" name="subheading"
                            :value="old('subheading')" required autofocus autocomplete="subheading" />
                        <x-input-error :messages="$errors->get('subheading')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="heading" :value="__('Heading')" />
                        <x-text-input id="heading" class="block mt-1 w-full" type="text" name="heading"
                            :value="old('poster')" required autofocus autocomplete="heading" />
                        <x-input-error :messages="$errors->get('heading')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="article" :value="__('Article')" />
                        <textarea name="article" id="article" cols="30" rows="5" class="border border-slate-300 rounded-xl w-full"></textarea>
                        <x-input-error :messages="$errors->get('article')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="achivment1" :value="__('Achivment 1')" />
                        <x-text-input id="achivment1" class="block mt-1 w-full" type="text" name="achivment1"
                            :value="old('achivment1')" required autofocus autocomplete="achivment1" />
                        <x-input-error :messages="$errors->get('achivment1')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="achivment2" :value="__('Achivment 2')" />
                        <x-text-input id="achivment2" class="block mt-1 w-full" type="text" name="achivment2"
                            :value="old('achivment2')" required autofocus autocomplete="achivment2" />
                        <x-input-error :messages="$errors->get('achivment2')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="achivment3" :value="__('Achivment 3')" />
                        <x-text-input id="achivment3" class="block mt-1 w-full" type="text" name="achivment3"
                            :value="old('achivment3')" required autofocus autocomplete="achivment3" />
                        <x-input-error :messages="$errors->get('achivment3')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Add New Hero Section
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
