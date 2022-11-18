<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
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
                    <a class="flex" href="{{ route('categories.create')}}"> 
                        Add new <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </a>
                    

                    <div class="container">
                        <ul class="responsive-table">
                          <li class="table-header">
                            <div class="col col-1">Id</div>
                            <div class="col col-2">Name</div>
                            <div class="col col-3">Edit</div>
                            <div class="col col-4">Delet</div>
                          </li>
                          @foreach ($categories as $Category )
                          <li class="table-row">
                            <div class="col col-1" data-label="Job Id">{{ $Category->id }}</div>
                            <div class="col col-2" data-label="Customer Name">{{ $Category->name }}</div>
                            <div class="col col-3" data-label="Amount">
                                <a class="Contt"  href="{{ route('categories.edit' , $Category) }}">  

                                    <svg class="w-5 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                    </a>
                            </div>
                            <div class="col col-4" data-label="Payment Status">
                                <form method="POST" action="{{ route('categories.destroy' , $Category) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick=" return confirm('Vous etes suur !!!!!')">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </form>
                            </div>
                          </li>
                          @endforeach
                        </ul>
                      </div>
                </div>
            </div>
        </div>
    </div>


    
</x-app-layout>
