<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        
        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>

        <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="module">
            import { initializeApp } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-app.js";          
            import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-analytics.js";
          
            // TODO: Add SDKs for Firebase products that you want to use
          
            // https://firebase.google.com/docs/web/setup#available-libraries
          
          
            // Your web app's Firebase configuration
          
            // For Firebase JS SDK v7.20.0 and later, measurementId is optional
          
            const firebaseConfig = {
          
              apiKey: "AIzaSyAWbcIwdZEyfl5tyZsjPpolMxCWARW_SzY",
          
              authDomain: "livr-esta.firebaseapp.com",
          
              projectId: "livr-esta",
          
              storageBucket: "livr-esta.appspot.com",
          
              messagingSenderId: "891841944915",
          
              appId: "1:891841944915:web:d6b1b0baf1221ec7ff95a6",
          
              measurementId: "G-HZWG5BWYY7"
          
            };
          
          
            // Initialize Firebase
          
            const app = initializeApp(firebaseConfig);
          
            const analytics = getAnalytics(app);
          
          </script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        @stack('script')
    </body>
</html>
