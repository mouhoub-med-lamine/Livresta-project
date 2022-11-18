<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- <div class="row">
                        <div class="col-sm-12">
                            <ul class="list-unstyled mb-0">
                                @foreach ($categories as $Category )
                                  <li><a href="///">{{ $Category->name }}</a></li>  
                                @endforeach
                            </ul>
                        </div>
                       
                    </div> --}}
                    {{-- <table>
                        <thead>
                            <tr>
                                <th>name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $Category )
                            <tr>
                                <td>{{ $Category->name }}</td>
                                <td><a href="{{ route('categories.edit' , $Category) }}"> Edit </a></td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table> --}}

                    <form method="POST" action="{{ route('categories.update' , $category)}}" >
                       
                        @method('PUT')
                        @csrf
                        <div>
                            <p>Name</p>
                            <x-input name='name' type="text" class="block mt-1 w-full" value="{{ $category->name }}" />
                        </div>
            

            
                        <div class="flex items-center justify-end mt-4">
            
                            <x-button type='submit' class="ml-3">
                                Save
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    
</x-app-layout>
