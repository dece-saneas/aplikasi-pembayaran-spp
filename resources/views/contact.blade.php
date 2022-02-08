<x-layouts.guest>

    <x-slot name="title">Kontak</x-slot>

    <x-slot name="style">
        <link rel="stylesheet" href="{{ asset('css/pages/contact.css') }}" />
    </x-slot>

    <x-slot name="illustration">
        <img src="{{ asset('images/pages/contact-ilustrasi.svg') }}">
    </x-slot>

    <h1>Kontak Kami</h1>
    <p>Ruang Tata Usaha
        <br>SMK Nusantara 1 Ciputat
        <br>Jalan Tarumanegara Dalam No. 1 Ciputat Timur
        <br>Tangerang Selatan 15419
        <br>
        <br>Telp: 021 - 7470 7222
        <br>Email: smknusantara1tangsel@gmail.com
    </p>

    <x-slot name="script"></x-slot>

</x-layouts.guest>