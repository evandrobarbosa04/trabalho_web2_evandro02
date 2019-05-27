@include('partial.header')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>@yield('title')</h2>
            <hr>
            @yield('content')
            @include('partial.footer')
        </div>
    </div>
</div>

