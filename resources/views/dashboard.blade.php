<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-green-500 bg-green-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="font-bold p-6 text-white-900 text-black">
                  <h1>Welcome! {{Auth::user()->name}}.</h1>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
