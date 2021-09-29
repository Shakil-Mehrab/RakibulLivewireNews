<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-base leading-tight text-gray-800">
                {{ __('Article') }}
            </h2>
            <h2 class="text-base leading-tight text-gray-800">
                <a href="{{ route('articles.create') }}">{{ __('Create Article') }}</a>
            </h2>
        </div>
    </x-slot>
    <main>
        <div>
            <div class="py-10 mx-auto space-y-2 max-w-7xl sm:px-6 lg:px-8 sm:space-y-0">
                @livewire('article.article-list')
            </div>
        </div>
    </main>
</x-app-layout>
