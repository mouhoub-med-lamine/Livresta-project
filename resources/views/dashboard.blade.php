<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
      <div class="container mt-4 mb-4 p-3 d-flex justify-content-center"> 
        <div class="card1 p-4"> 
          <div class=" image d-flex flex-column justify-content-center align-items-center"> 
           
              <img  src="{{ asset('assets/wvxPV9S.png') }}" height="100" width="100" />
            
            <span class="name mt-3">{{ auth()->user()->name }}</span> 
            <span class="idd">{{ auth()->user()->email }}</span> 
            
            {{-- <div class="d-flex flex-row justify-content-center align-items-center mt-3"> 
              <span class="number">1069 <span class="follow">Followers</span></span> 
            </div> 
            <div class=" d-flex mt-2"> 
              <button class="btn1 btn-dark">Edit Profile</button> 
            </div>  --}}
            
              <div class=" px-2 rounded mt-4 date "> 
                <span class="join">Joined : {{ auth()->user()->created_at }}</span> 
              </div> 
            </div> 
          </div>
</div>
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
 

                    <div class="container">
                        <ul class="responsive-table">
                          <li class="table-header">
                            <div class="col col-1">Id</div>
                            <div class="col col-2">Name</div>
                            <div class="col col-3">Email</div>
                            <div class="col col-4">created_at</div>
                          </li>
                          @foreach ($alluser as $User )
                          <li class="table-row">
                            <div class="col col-1" data-label="Job Id">{{ $User->id }}</div>
                            <div class="col col-2" data-label="Customer Name">{{ $User->name }}</div>
                            <div class="col col-3" data-label="Amount">{{ $User->email }}</div>
                            <div class="col col-4" data-label="Payment Status"> {{ $User->created_at }} </div>
                          </li>
                          @endforeach
                        </ul>
                      </div>
                </div>
                </div>
            </div>
        </div> --}}
    </div>
</x-app-layout>
