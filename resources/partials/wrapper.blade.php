<div class="app-wrapper">
    @include('partials.sidebar')

    <div class="content-wrapper">
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </div>
</div>