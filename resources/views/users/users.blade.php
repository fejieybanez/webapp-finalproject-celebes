<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

     <div class="py-12">
             @if ( session('status') )
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-5">
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-gray-800 dark:text-green-400" role="alert">
                    <span class="font-medium">Success alert!</span> {{ session('status') }} 
                </div>
            </div>
        @endif


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                <h2 class="float-left"> 
                {{ $header }}
                </h2>
               
                <a href="{{ url('/users/add')}}">

                    <button class="rounded-full float-right bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2">
                        
                       Add Users

                    </button>
                </a>
               

                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach ($users as $user)
                   
                        <tr>
                            <td  class="text-center"> {{ $user->name }}</td>
                            <td class="text-center"> {{$user->email}}</td>
                            <td class="text-center">

                            <a href="{{ url('/users/update/' . $user->id) }}">
                                 <button class="rounded-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2">Update</button>
                            </a>
                            {{-- < href="{{ url('/users/form_password') }}"> --}}
                             <a href="{{ url('/users/form_password/' . $user->id) }}">
                                  <button class="rounded-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2">Password</button>
                            </a>
                            <form class="float-none" action="{{ url('/users/delete-user/' . $user->id) }}" method="POST"> 
                            @csrf
                            @method('delete')
                            <button class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Delete</button>
                            </form> 
                            </td>

                        
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
