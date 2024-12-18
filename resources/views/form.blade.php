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
    <div class="container px-12 py-12">
        <form>
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900">Profile</h2>
                    <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful
                        what
                        you share.</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="username" class="block text-sm/6 font-medium text-gray-900">nama</label>
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <input type="text" name="username" id="username"
                                        class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                                        placeholder="nama">
                                </div>
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>
                        <div class="sm:col-span-4">
                            <label for="pendapatan" class="block text-sm/6 font-medium text-gray-900">Pendapatan</label>
                            <div class="mt-2 relative">
                                <span
                                    class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500 text-sm font-medium">
                                    Rp
                                </span>
                                <input id="pendapatan" name="pendapatan" type="text"
                                    class="block w-full rounded-md bg-white px-10 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                    placeholder="Masukkan pendapatan">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="country" class="block text-sm/6 font-medium text-gray-900">Provinsi</label>
                            <div class="mt-2 grid grid-cols-1">
                                <select id="provinsi" name="provinsi" autocomplete="country-name"
                                    class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                    <option value="">Pilih Provinsi</option>
                                    @foreach ($provinsi as $prov)
                                        <option value="{{ $prov->id }}">{{ $prov->nama_provinsi }}</option>
                                    @endforeach
                                </select>
                                <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4"
                                    viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <label for="country" class="block text-sm/6 font-medium text-gray-900">Kota</label>
                            <div class="mt-2 grid grid-cols-1">
                                <select id="kota" name="kota"
                                    class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                </select>
                                <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4"
                                    viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="street-address" class="block text-sm/6 font-medium text-gray-900">Alamat
                                Lengkap</label>
                            <div class="mt-2">
                                <input type="text" name="street-address" id="street-address"
                                    autocomplete="street-address"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-10 space-y-10">
                        <fieldset>
                            <legend class="text-sm/6 font-semibold text-gray-900">Alergi</legend>
                            <div class="mt-6 space-y-6">
                                <div class="flex gap-3">
                                    <div class="flex h-6 shrink-0 items-center">
                                        <div class="group grid size-4 grid-cols-1">
                                            <input id="comments" aria-describedby="comments-description"
                                                name="comments" type="checkbox"
                                                class="col-start-1 row-start-1 appearance-none rounded border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                                            <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-[:disabled]:stroke-gray-950/25"
                                                viewBox="0 0 14 14" fill="none">
                                                <path class="opacity-0 group-has-[:checked]:opacity-100"
                                                    d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path class="opacity-0 group-has-[:indeterminate]:opacity-100"
                                                    d="M3 7H11" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="text-sm/6">
                                        <label for="comments" class="font-medium text-gray-900">Obat</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 space-y-6">
                                <div class="flex gap-3">
                                    <div class="flex h-6 shrink-0 items-center">
                                        <div class="group grid size-4 grid-cols-1">
                                            <input id="comments" aria-describedby="comments-description"
                                                name="comments" type="checkbox"
                                                class="col-start-1 row-start-1 appearance-none rounded border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                                            <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-[:disabled]:stroke-gray-950/25"
                                                viewBox="0 0 14 14" fill="none">
                                                <path class="opacity-0 group-has-[:checked]:opacity-100"
                                                    d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path class="opacity-0 group-has-[:indeterminate]:opacity-100"
                                                    d="M3 7H11" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="text-sm/6">
                                        <label for="comments" class="font-medium text-gray-900">Makanan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 space-y-6">
                                <div class="flex gap-3">
                                    <div class="flex h-6 shrink-0 items-center">
                                        <div class="group grid size-4 grid-cols-1">
                                            <input id="comments" aria-describedby="comments-description"
                                                name="comments" type="checkbox"
                                                class="col-start-1 row-start-1 appearance-none rounded border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                                            <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-[:disabled]:stroke-gray-950/25"
                                                viewBox="0 0 14 14" fill="none">
                                                <path class="opacity-0 group-has-[:checked]:opacity-100"
                                                    d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path class="opacity-0 group-has-[:indeterminate]:opacity-100"
                                                    d="M3 7H11" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="text-sm/6">
                                        <label for="comments" class="font-medium text-gray-900">Debu</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend class="text-sm/6 font-semibold text-gray-900">Golongan Darah</legend>
                            <div class="mt-6 space-y-6">
                                <div class="flex items-center gap-x-3">
                                    <input id="push-everything" name="push-notifications" type="radio"
                                        class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden [&:not(:checked)]:before:hidden">
                                    <label for="push-everything"
                                        class="block text-sm/6 font-medium text-gray-900">O</label>
                                </div>
                            </div>
                            <div class="mt-6 space-y-6">
                                <div class="flex items-center gap-x-3">
                                    <input id="push-everything" name="push-notifications" type="radio"
                                        class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden [&:not(:checked)]:before:hidden">
                                    <label for="push-everything"
                                        class="block text-sm/6 font-medium text-gray-900">A</label>
                                </div>
                            </div>
                            <div class="mt-6 space-y-6">
                                <div class="flex items-center gap-x-3">
                                    <input id="push-everything" name="push-notifications" type="radio"
                                        class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden [&:not(:checked)]:before:hidden">
                                    <label for="push-everything"
                                        class="block text-sm/6 font-medium text-gray-900">B</label>
                                </div>
                            </div>
                            <div class="mt-6 space-y-6">
                                <div class="flex items-center gap-x-3">
                                    <input id="push-everything" name="push-notifications" type="radio"
                                        class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden [&:not(:checked)]:before:hidden">
                                    <label for="push-everything"
                                        class="block text-sm/6 font-medium text-gray-900">AB</label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
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
