<x-layouts.guest>

    <x-slot name="title">Login</x-slot>

    <x-slot name="style">
        <link rel="stylesheet" href="{{ asset('css/pages/login.css') }}" />
    </x-slot>

    <x-slot name="navbar"></x-slot>

    <x-slot name="illustration">
        <img src="{{ asset('images/pages/login-ilustrasi.svg') }}">
    </x-slot>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h1>Selamat Datang!</h1>
        @if($errors->any())
        {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif
        <div class="mb-3">
            <label for="nis-id" class="form-label">NIS / Username</label>
            <input type="text" class="form-control bg-white @error('login') is-invalid @enderror" id="login" placeholder="20190001" name="login">
            @error('login')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nis-id" class="form-label">Password</label>
            <input type="password" class="form-control bg-white @error('password') is-invalid @enderror" id="password" placeholder="DDMMYYYY" name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <input type="checkbox" class="show-pass" onclick="showPassword()">Show Password
        </div>
        <button type="submit" class="btn btn-login">Login</button>
    </form>

    <x-slot name="script"></x-slot>

</x-layouts.guest>