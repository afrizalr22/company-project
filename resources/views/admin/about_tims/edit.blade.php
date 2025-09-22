<x-app-layout>
    <x-slot name="header">
        <h2 class=" font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit About Tim') }}
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

                <form method="POST" action="{{ route('admin.about_tims.update', $about_tim) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-input-label for="poster" :value="__('Poster')" />
                        <x-text-input id="poster" class="block mt-1 w-full" type="file" name="poster"
                            value="{{ $about_tim->poster }}" required autofocus autocomplete="poster" />
                        <x-input-error :messages="$errors->get('poster')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="subheading" :value="__('Subheading')" />
                        <x-text-input id="subheading" class="block mt-1 w-full" type="text" name="subheading"
                            value="{{ $about_tim->subheading }}" required autofocus autocomplete="subehading" />
                        <x-input-error :messages="$errors->get('subheading')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="heading" :value="__('Heading')" />
                        <x-text-input id="heading" class="block mt-1 w-full" type="text" name="heading"
                            value="{{ $about_tim->heading }}" required autofocus autocomplete="heading" />
                        <x-input-error :messages="$errors->get('heading')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="article" :value="__('Article')" />
                        <textarea name="article" id="article" cols="30" rows="10" class="border border-slate-300 rounded-xl w-full"></textarea>
                        <x-input-error :messages="$errors->get('article')" class="mt-2" />
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
