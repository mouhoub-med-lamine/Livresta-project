<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                       
                        @csrf
                        <div>
                            <p>Title</p>
                            <x-input required name='title' type="text" class="block mt-1 w-full"  />
                            <p>Description</p>
                            <x-input required name='description' type="text" class="block mt-1 w-full"  />
                            <p>Images<p>
                            <input type="file" name="image" />

                            {{-- <input  name='image' type="file" id="file_upload_id" style="display:none"  >
                            <label>Image:</label>&nbsp;&nbsp;<a ><i id="icon_upload" class="fa fa-upload" onchange="fire()" onclick="_upload()"></i></a> --}}

                            <p>Category</p>
                            <select name="category_id" >
                                @foreach ($categories as $Category )
                                <option value="{{ $Category->id}}"  >
                                    {{ $Category->name }}
                                </option>
                                @endforeach
                            </select>

                        </div>
                        
            
                        <div class="flex items-center justify-end mt-4">
            
                            <x-button  type='submit' class="ml-3">
                                Create
                            </x-button>
                            
                        </div>
                    </form>
{{-- <button id="CreateBtn" onclick="fire()" > HYGYH </button> --}}
                    
                </div>
            </div>
        </div>
    </div>
@push('script')
<script>
    
    function fire(){

        // const firebaseConfig = {
        //   apiKey: "{{ config('services.firebase.apiKey') }}",
        //   authDomain: "{{ config('services.firebase.authDomain') }}",      
        //   projectId: "{{ config('services.firebase.projectId') }}",
        //   storageBucket: "{{ config('services.firebase.storageBucket') }}",
        //   messagingSenderId: "{{ config('services.firebase.messagingSenderId') }}",
        //   appId: "{{ config('services.firebase.appId') }}",
        //   measurementId: "{{ config('services.firebase.measurementId') }}"
        // };
    
        // // Initialize Firebase
        // const app = initializeApp(firebaseConfig);
        // const analytics = getAnalytics(app);

       
       
        var ImageInpt = document.getElementById('file_upload_id');
        var Firtt = document.getElementById('file_upload_id').files;
        var image = document.getElementById('file_upload_id').files[0];        
        
        var nameIm = image.name

        console.log(nameIm);
            
    }
</script>
    
@endpush

    
</x-app-layout>
<script>
    function _upload(){
    document.getElementById('file_upload_id').click();
    
}

</script>