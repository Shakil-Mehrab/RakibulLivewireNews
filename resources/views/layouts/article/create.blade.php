<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create Article') }}
        </h2>
    </x-slot>
    <main>
        <div>
            <div class="py-10 mx-auto space-y-2 max-w-7xl sm:px-6 lg:px-8 sm:space-y-0">
                @livewire('article.article-create-form')
            </div>
        </div>
    </main>
</x-app-layout>
