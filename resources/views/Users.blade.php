<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
        </div>
    </div>
</x-app-layout>
