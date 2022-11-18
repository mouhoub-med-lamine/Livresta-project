<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- <div class="row">
                        <div class="col-sm-12">
                            <ul class="list-unstyled mb-0">
                                @foreach ($posts as $Post )
                                  <li><a href="///">{{ $Post->name }}</a></li>  
                                @endforeach
                            </ul>
                        </div>
                       
                    </div> --}}
                    <a class="flex" href="{{ route('posts.create')}}">
                        Add new <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </a>
                   
                            <div class="row">
                                @foreach ($posts as $poste )
                                   <div class="col-lg-6">
                                    <!-- Blog post-->
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="small text-muted">{{ $poste->created_at }}</div>
                                            <h2 class="card-title h4">{{ $poste->title }}</h2>
                                            <p class="card-text"> Category : {{ $poste->category->name }}</p>
                                            <p class="card-text">{{ $poste->description }}</p>
                                            @if( auth()->user()->is_admin )
                                            <form method="POST" action="{{ route('posts.destroy' , $poste) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick=" return confirm('Vous etes suur !!!!!')">
                                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                                </button>
                                            </form>
                                            @endif
                                        </div>
                                        
                                        <img class="card-img-top" src={{ asset('storage/images/'.$poste->image) }} alt="..." />

                                    </div>
                                </div> 
                                @endforeach
                                
                            </div>
                            
                       
                </div>
            </div>
        </div>
    </div>


    
</x-app-layout>
