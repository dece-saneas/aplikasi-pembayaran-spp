<x-layouts.guest>

    <x-slot name="title">Website Pembayaran SPP</x-slot>

    <x-slot name="style">
        <link rel="stylesheet" href="{{ asset('css/pages/landing.css') }}" />
    </x-slot>

    <x-slot name="navbar">
        <a href="{{ route('contact') }}" class="nav-kontak">Kontak</a>
        <a href="{{ route('login') }}" class="nav-login">Login</a>
    </x-slot>

    <x-slot name="illustration">
        <h1>Akses pembayaran SPP dengan mudah pada perangkat anda</h1>
        <img src="{{ asset('images/pages/landing-lineart.svg') }}">
        <br>
        <a href="{{ route('login') }}" class="button-cek-tagihan">Cek Tagihan</a>
        <div class="mobile-nav mt-4">
            <a href="{{ route('contact') }}" class="mobile-kontak">Kontak</a>
            <a href="{{ route('login') }}" class="mobile-login">Login</a>
        </div>
    </x-slot>

    <img src="{{ asset('images/pages/landing-ilustrasi.svg') }}">

    <x-slot name="script"></x-slot>

</x-layouts.guest>