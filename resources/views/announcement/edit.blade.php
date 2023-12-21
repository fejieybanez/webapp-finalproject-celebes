<!-- Presents a form for editing existing sliders within a web application -->

<x-app-layout>
   <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
   <!--  Displays "Edit Sliders" to indicate the form's purpose -->
        {{ __('Edit Sliders') }}
        </h2>
    </x-slot>
<!-- If a success message is stored in the session, it's displayed in a green alert box. -->
    <div class="py-12">
        @if ( session('message') )
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-5">
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-gray-800 dark:text-green-400" role="alert">
                    <span class="font-medium">Success alert!</span> {{ session('message') }} 
                </div>
            </div>
        @endif
<!-- Uses the POST method, but the @method('PUT') directive ensures a PUT request for update operations. -->
<!-- Submits data to the /sliders/{id} route, where {id} represents the specific slider being edited. -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white bg-gray-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ url('/sliders/'.$slider->id) }}" enctype = "multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class = "mb-4"> 
                            <label class="font-bold">Description</label>
                            <textarea class = "block mt-1 w-full text-black" name = "description" rows = "3">{{$slider->description}}</textarea>
                        </div>
                        <div class = "mb-3">
                            <label>Image</label>
                            <input type = "file" name="image" class = "block mt-1">
                            <img src="{{ asset($slider->image) }}" class="h-32 w-full object-cover" alt="Slider">
                        </div> 
                        <!-- Update button: Triggers form submission to update the slider. -->
                        <div class = "mb-4 text-center">
                            <button type="Submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 border border-green-500 rounded">Update</button>
                        </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
 