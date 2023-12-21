
<!-- Creating new sliders for announcement. It renders a form for adding sliders to a web application -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Sliders') }}
        </h2>
    </x-slot>
<!--  If a success message is available in the session, it's displayed in a green alert box. -->
    <div class="py-12">
        @if( session('message') )
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-5">
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-gray-800 dark:text-green-400" role="alert">
                    <span class="font-medium">Success alert!</span> {{ session('message') }} 
                </div>
            </div>
        @endif


<!-- Uses the POST method to submit data to the /sliders/create route -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white bg-gray-500 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 text-stone-900 dark:text-stone-100">
                    <form method="POST" action="{{ url('/sliders/create') }}" enctype = "multipart/form-data">
                        @csrf 
                        <!-- Description (required): A textarea for entering a description -->
                        <div class = "mb-4">
                            <label class="text-purple-50 font-bold">Description</label>
                            <textarea name = "description" class = "block mt-1 w-full text-black" rows = "3" placeholder="Input description..." required></textarea>
                        </div>
                        <!-- Image (optional): A file input for uploading an image. -->
                        <div class = "mb-3">
                            <label>Image</label>
                            <input type = "file" name="image" class = "block mt-1">
                        </div>
                        <div class = "mb-4 text-center">
                            <button type="Submit" class="bg-blue-500 hover:bg-green-700 text-white font-bold py-1 px-2 border rounded">Submit</button>
                        </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
 