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

            <div>
                <x-label for="nik" :value="__('NIK')" />

                <x-input id="nik" class="block mt-1 w-full" type="number" name="nik" :value="old('nik')" autofocus />
            </div>

            <div class="mt-4">
                <x-label for="kk" :value="__('KK')" />

                <x-input id="kk" class="block mt-1 w-full" type="number" name="kk" :value="old('kk')" autofocus />
            </div>

            <!-- Name -->
            <div class="mt-4">
                <x-label for="name" :value="__('Nama')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="tempat_lahir" :value="__('Tempat Lahir')" />

                <x-input id="tempat_lahir" class="block mt-1 w-full" type="text" name="tempat_lahir" :value="old('tempat_lahir')"
                    required />
            </div>

            <div class="mt-4">
                <x-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />

                <x-input id="tanggal_lahir" class="block mt-1 w-full" type="date" name="tanggal_lahir"
                    :value="old('tanggal_lahir')" autofocus />
            </div>

            <div class="mt-4">
                <x-label for="kepala_keluarga" :value="__('Kepala Keluarga')" />

                <x-input id="kepala_keluarga" class="block mt-1 w-full" type="text" name="kepala_keluarga"
                    :value="old('kepala_keluarga')" autofocus />
            </div>

            <div class="mt-4">
                <x-label for="jenis_kelamin" :value="__('Jenis Kelamin')" />

                {{-- <x-input id="jenis_kelamin" class="block mt-1 w-full" type="text" name="jenis_kelamin"
                    :value="old('jenis_kelamin')" autofocus /> --}}
                <select name="jenis_kelamin" id="jenis_kelamin" class="block mt-1 w-full" autofocus>
                    <option value="">Pilih</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>

            <div class="mt-4">
                <x-label for="pendidikan" :value="__('Pendidikan Terakhir')" />

                <x-input id="pendidikan" class="block mt-1 w-full" type="text" name="pendidikan" :value="old('pendidikan')"
                    autofocus />
            </div>

            <div class="mt-4">
                <x-label for="alamat" :value="__('Alamat Domisili')" />

                <x-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat')" autofocus />
            </div>

            <div class="mt-4">
                <x-label for="agama" :value="__('Agama')" />

                <x-input id="agama" class="block mt-1 w-full" type="text" name="agama" :value="old('agama')" autofocus />
            </div>

            <div class="mt-4">
                <x-label for="status" :value="__('Status')" />

                <x-input id="status" class="block mt-1 w-full" type="text" name="status" :value="old('status')" autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="pekerjaan" :value="__('Pekerjaan')" />

                <x-input id="pekerjaan" class="block mt-1 w-full" type="text" name="pekerjaan" :value="old('pekerjaan')"
                    required />
            </div>

            <div class="mt-4">
                <x-label for="kewarganegaraan" :value="__('Kewarganegaraan')" />

                <x-input id="kewarganegaraan" class="block mt-1 w-full" type="text" name="kewarganegaraan"
                    :value="old('kewarganegaraan')" autofocus />
            </div>

            <div class="mt-4">
                <x-label for="ayah" :value="__('Nama Ayah')" />

                <x-input id="ayah" class="block mt-1 w-full" type="text" name="ayah" :value="old('ayah')" autofocus />
            </div>

            <div class="mt-4">
                <x-label for="ibu" :value="__('Nama Ibu')" />

                <x-input id="ibu" class="block mt-1 w-full" type="text" name="ibu" :value="old('ibu')" autofocus />
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
