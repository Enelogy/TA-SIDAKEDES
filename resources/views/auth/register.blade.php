<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> --}}
            <img src="{{ asset('gambar/logo.png') }}" width="200" height="200">
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mt-4">
                <x-label for="id" :value="__('NIK / NAMA')" />

                {{-- <x-input id="jenis_kelamin" class="block mt-1 w-full" type="text" name="jenis_kelamin"
                    :value="old('jenis_kelamin')" autofocus /> --}}
                <select name="id" id="id" class="block mt-1 w-full" autofocus>
                    <option value="">Pilih</option>

                    @foreach ($penduduk as $p)
                        <option value="{{ $p->id }}">{{ $p->nik }} / {{ $p->nama }}</option>
                    @endforeach
                </select>
            </div>


            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')"
                    required />
                <input type="hidden" name="name" id="name" value="penduduk">
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Sudah pernah mendaftar?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
