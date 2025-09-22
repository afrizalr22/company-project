<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Needs Solutions') }}
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
                <form method="POST" action="{{ route('admin.technology_solutions.update', $technology_solution) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-input-label for="heading" :value="__('heading')" />
                        <x-text-input id="heading" class="block mt-1 w-full" type="text" name="heading"
                            value="{{ $technology_solution->heading }}" required autofocus autocomplete="heading" />
                        <x-input-error :messages="$errors->get('heading')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="thumbnail" :value="__('thumbnail')" />
                        <img src="{{ Storage::url($technology_solution->thumbnail) }}" alt="thumbnail"
                            class="rounded-2xl object-cover w-[90px] h-[90px]">
                        <x-text-input id="thumbnail" class="block mt-1 w-full" type="file" name="thumbnail" autofocus
                            autocomplete="thumbnail" />
                        <x-input-error :messages="$errors->get('thumbnail')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="article" :value="__('article')" />
                        <x-text-input id="article" class="block mt-1 w-full" type="text" name="article"
                            value="{{ $technology_solution->article }}" required autofocus autocomplete="article" />
                        <x-input-error :messages="$errors->get('article')" class="mt-2" />
                    </div>
                    <div class="flex items-center justify-end mt-4">

                        <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Update Hero Section
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
