<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container px-[30vh]">
        <form method="POST" action="{{ route('form.store') }}">
            @csrf
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-lg font-semibold text-gray-900 text-center">FORM</h2>
                    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-8">
                        <div>
                            <label for="username" class="block text-sm font-medium text-gray-900">Nama</label>
                            <div class="mt-2">
                                <input type="text" name="name" id="username"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:outline-indigo-600 sm:text-sm"
                                    placeholder="Nama" value="{{ old('name') }}">
                            </div>
                            @error('name')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="username" class="block text-sm font-medium text-gray-900">Nomor Rekam
                                Medis</label>
                            <div class="mt-2">
                                <input type="number" maxlength="6" name="no_rm" id="username"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:outline-indigo-600 sm:text-sm"
                                    placeholder="Nomor Rekam Medis" value="{{ old('no_rm') }}">
                            </div>
                            @error('no_rm')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- <div>
                            <label for="email" class="block text-sm font-medium text-gray-900">Email</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:outline-indigo-600 sm:text-sm"
                                    placeholder="Email" value="{{ old('email') }}">
                            </div>
                            @error('email')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div> --}}

                        <div>
                            <label for="pendapatan" class="block text-sm font-medium text-gray-900">Pendapatan</label>
                            <div class="mt-2 relative">
                                <span
                                    class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500 text-sm font-medium">
                                    Rp
                                </span>
                                <input id="pendapatan" name="pendapatan" type="text"
                                    class="block w-full rounded-md bg-white px-10 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:outline-indigo-600 sm:text-sm"
                                    placeholder="Masukkan pendapatan" value="{{ old('pendapatan') }}">
                            </div>
                            @error('pendapatan')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>


                        <div>
                            <label for="provinsi" class="block text-sm font-medium text-gray-900">Provinsi</label>
                            <div class="mt-2">
                                <select id="provinsi" name="provinsi_id"
                                    class="w-full rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:outline-indigo-600 sm:text-sm">
                                    <option value="">Pilih Provinsi</option>
                                    @foreach ($provinsi as $prov)
                                        <option value="{{ $prov->id }}"
                                            {{ old('provinsi') == $prov->id ? 'selected' : '' }}>
                                            {{ $prov->nama_provinsi }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('provinsi')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="kota" class="block text-sm font-medium text-gray-900">Kota</label>
                            <div class="mt-2">
                                <select id="kota" name="kota_id"
                                    class="w-full rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:outline-indigo-600 sm:text-sm">
                                    <option value="">Pilih Kota</option>
                                </select>
                            </div>
                            @error('kota')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="sm:col-span-2">
                            <label for="street-address" class="block text-sm font-medium text-gray-900">Alamat
                                Lengkap</label>
                            <div class="mt-2">
                                <input type="text" name="alamat" id="street-address" autocomplete="street-address"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:outline-indigo-600 sm:text-sm"
                                    placeholder="Masukkan alamat lengkap">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-8">
                        <fieldset>
                            <legend class="text-sm font-semibold text-gray-900">Alergi</legend>
                            <div class="mt-6 space-y-3">
                                <div>
                                    <input id="alergi-obat" name="alergi[]" value="obat" type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="alergi-obat" class="ml-2 text-sm text-gray-900">Obat</label>
                                </div>
                                <div>
                                    <input id="alergi-makanan" name="alergi[]" value="makana" type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="alergi-makanan" class="ml-2 text-sm text-gray-900">Makanan</label>
                                </div>
                                <div>
                                    <input id="alergi-debu" name="alergi[]" value="debu " type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="alergi-debu" class="ml-2 text-sm text-gray-900">Debu</label>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend class="text-sm font-semibold text-gray-900">Golongan Darah</legend>
                            <div class="mt-6 space-y-3">
                                <div>
                                    <input id="gol-darah-o" name="golongan_darah" value="o" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="gol-darah-o" class="ml-2 text-sm text-gray-900">O</label>
                                </div>
                                <div>
                                    <input id="gol-darah-a" name="golongan_darah" value="a" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="gol-darah-a" class="ml-2 text-sm text-gray-900">A</label>
                                </div>
                                <div>
                                    <input id="gol-darah-b" name="golongan_darah" value="b" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="gol-darah-b" class="ml-2 text-sm text-gray-900">B</label>
                                </div>
                                <div>
                                    <input id="gol-darah-ab" name="golongan_darah" value="ab" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="gol-darah-ab" class="ml-2 text-sm text-gray-900">AB</label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold text-gray-900">Cancel</button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus:outline focus:outline-2 focus:outline-indigo-600">
                    Save
                </button>
            </div>
        </form>
    </div>
    <script>
        // Format pendapatan dengan titik setiap 3 angka
        const pendapatanInput = document.getElementById('pendapatan');

        pendapatanInput.addEventListener('input', function(e) {
            // Remove non-numeric characters except dots
            const value = e.target.value.replace(/[^\d]/g, '');
            // Format with dots every 3 digits
            e.target.value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        });
    </script>

    <script>
        document.getElementById('provinsi').addEventListener('change', function() {
            const idProvinsi = this.value;
            const kotaDropdown = document.getElementById('kota');

            if (idProvinsi) {
                fetch(`/fetch-kota?provinsi_id=${idProvinsi}`)
                    .then(response => response.json())
                    .then(data => {
                        kotaDropdown.innerHTML = '<option value="">Pilih Kota</option>';
                        data.forEach(kota => {
                            kotaDropdown.innerHTML +=
                                `<option value="${kota.id}">${kota.nama_kota}</option>`;
                        });
                        kotaDropdown.disabled = false;
                    })
                    .catch(error => console.error('Error fetching kota:', error));
            } else {
                kotaDropdown.innerHTML = '<option value="">Pilih Kota</option>';
                kotaDropdown.disabled = true;
            }
        });
    </script>
</body>

</html>
