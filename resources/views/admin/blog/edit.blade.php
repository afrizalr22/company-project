<x-app-layout>
    <x-slot name="header">
        <h2 class=" font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Blog') }}
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

                <form method="POST" action="{{ route('admin.blog.update', $about_tim) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-input-label for="image" :value="__('Image')" />
                        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image"
                            :value="old('image')" required autofocus autocomplete="image" />
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="judul" :value="__('Judul')" />
                        <x-text-input id="judul" class="block mt-1 w-full" type="text" name="judul"
                            :value="old('judul')" required autofocus autocomplete="judul" />
                        <x-input-error :messages="$errors->get('judul')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="short_article" :value="__('Short Article')" />
                        <x-text-input id="short_article" class="block mt-1 w-full" type="text" name="short_article"
                            :value="old('poster')" required autofocus autocomplete="short_article" />
                        <x-input-error :messages="$errors->get('short_article')" class="mt-2" />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Update About Tim
                        </button>
                    </div>
                </form>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
