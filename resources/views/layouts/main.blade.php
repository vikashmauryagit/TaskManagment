@include('layouts.header')

<div class="vh-auto d-flex justify-content-center align-items-center">
        <div class="container page-todo bootstrap snippets bootstrap">
            @yield('content')
        </div>
    </div>

@include('layouts.footer')