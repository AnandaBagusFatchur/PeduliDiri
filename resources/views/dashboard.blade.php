<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class="row">
                <div class="col-sm-12">

                   {{-- Konten --}}

                   {{-- Navigation Bar --}}
                   <div class="card text-center">
                    <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs" id="NavB">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="true" href="#1" id="bio">Welcome</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#2" id="first">Profile</a>
                        </li>
                      </ul>
                    </div>


                    {{-- konten 1 --}}
                    <div class="container" id="1" style="">

                        <div class="d-flex justify-content-center mt-4">
                            <h4 style="font-family:Roboto Slab; font-style:italic; ">Selamat Datang</h4>
                        </div>
                        <div class="card-body" >
                          <h5 class="card-title" style="font-weight:bold; font-size:2em; font-family: Montserrat, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji; text-transform:uppercase">{{ Auth::user()->name }}</h5>
                          <p class="card-text">Di website peduli Diri.</p>
                        </div>

                    </div>


                    {{-- konten 2 --}}
                    <div class="container" id="2" style="display:none">

                        <div class="d-flex justify-content-center mt-2">
                            <img src="{{ Auth::user()->profile_photo_url }}" class="h-20 w-20 rounded-full object-cover" alt="...">
                        </div>
                        <div class="card-body" >
                          <h5 class="card-title" style="font-weight: bold"></h5>
                          <a class="card-text"> <p>
                          <a style="font-size:20px;letter-spacing: 0.3px;line-height:22px; font-weight:bold">
                            {{ Auth::user()->name }} <p>
                          </a>
                          {{ Auth::user()->nik }} <p>
                          {{ Auth::user()->email }}<p> 
                          </a>
                          <a href="{{ route('profile.show') }}" class="btn btn-success">Atur Profile</a>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            
            $('#bio').click(function() {
                $('#1').fadeIn('slow')
                $('#2').hide() 
            })
            $('#first').click(function() {
                $('#2').fadeIn('slow')
                $('#1').hide()
            })  
        });

        $(document).ready(function(){
            
            $('a').click(function() {
              $("a.active").removeClass("active")
              $(this).addClass('active')
            })
});

    </script>
</x-app-layout>
