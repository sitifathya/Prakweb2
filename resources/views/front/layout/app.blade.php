@include('front.layout.top')
@include('front.layout.menu')
<div id= "layoutsidenav_content">
    <main>
        <div class="cotainer-fluid px-4">
        {{-- ini buat isi kontem halaman --}}
        @yield('content')
        {{-- panggil nama section halaman --}}
        </div>
    </main>
</div>
</div>
@include('front.layout.buttom')