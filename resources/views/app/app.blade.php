@include('app.inc.header')

<body>
    <div class="page">
        <!-- Navbar -->
        @include('app.inc.menu')
        <div class="page-wrapper">
            @include('app.inc.sbtn')
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    <div class="container-xl">
                        {{ $slot }}
                    </div>
                </div>
            </div>
            @include('app.inc.footer')
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('assets/dist/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/demo.min.js') }}" defer></script>
    @livewireScripts



    {{-- <script src="{{ asset('assets/dist/js/vertical.js') }}" defer></script> --}}
</body>

</html>
