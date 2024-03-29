<x-app-layout> 
    <!-- Renders a page for viewing and managing announcements  -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Announcement') }}
        </h2>
    </x-slot>

    <div class = "py-12">
        <div class = "col-md-12">
            @if ( session('status') )
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-5">
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-gray-800 dark:text-green-400" role="alert">
                    <span class="font-medium">Success alert!</span> {{ session('status') }} 
                </div>
            </div>
        @endif
<!-- Presents a clear heading "Announcement List" for visual organization -->
        <div class="">
    <h3 class="text-center text-2xl font-bold text-orange-50">Announcement List</h3>
</div>
<!-- Provides a button to create new announcements, redirecting to a separate form -->
{{-- <div class="flex items-center justify-center my-8">
    <a href="{{ url('/sliders/create')}}" class="bg-white-500 hover:bg-indigo-600 text-black font-medium py-2 px-4 rounded-lg">
        Add Slider
    </a>
</div> --}}
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <a href="{{ url('/sliders/create') }}">
            <button class=" rounded-full float-right bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2">     
                       Add Announcement
            </button>
        </a>
    </div>
<!-- Displays a table containing existing announcements with the following columns:
- Description: Shows the text content of each announcement.
- Image: Displays the associated image for each announcement.
- Action: Offers buttons for editing or deleting individual announcements. -->
    <div class="mx-auto mt-8">
                    {{-- <table class="table-auto w-full text-center"> --}}
                    <table class="min-w-full border-collapse block md:table">
                        <thead class="block md:table-header-group">
                            <tr class="border border-black-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                            <!-- <th class = "border-solid border-2 border-light-blue-500 p-1 bg-red-300">ID</th> -->
                            {{-- <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Title</th> --}}
                            <th class="text-center bg-gray-600 p-2 text-white font-bold md:border md:border--500 text-left block md:table-cell">Description</th>
                            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-blue-500 text-center block md:table-cell">Image</th> 
                            <!-- <th class = "border-solid border-2 border-light-blue-500 p-1 bg-red-300">Status</th> -->
                            <th class="bg-green-600 p-2 text-white font-bold md:border text-center block md:table-cell">Action</th>
                            </tr>
                            </thead>
                            <tbody class="block md:table-row-group">
                        @foreach ($sliders as $slider)
                        <tr class="bg-white border border-zinc-500 md:border-none block md:table-row">
                            <td class="p-2 md:border md:border-zinc-700 text-left block md:table-cell">{{$slider->description}}</td>
                            <td class="p-1">
                            <img src="{{ asset($slider->image)}}" class="h-32 w-full object-cover" alt="Slider">
                            </td>
                            <td class="p-2 md:border md:border-zinc-700 text-center block md:table-cell">
                            <a href="{{ url('/sliders/'.$slider->id.'/edit')}}">
                                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 border border-green-500 rounded">Update</button>
                                        </a>
                            <a href="{{ url('/sliders/'.$slider->id.'/delete')}}" onclick="return confirm('Are you sure you want to delete this Slider?');">
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button>
                                        </a>
                            </td> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
        

</x-app-layout>