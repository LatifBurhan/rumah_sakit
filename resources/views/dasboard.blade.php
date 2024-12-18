<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <!-- DataTables CSS (to style the table) -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/jquery.dataTables.min.css">
    <!-- DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.tailwindcss.js"></script>
</head>

<body class="bg-gray-100 p-10">

    <div class="container mx-auto">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Data Tabel Pengguna</h2>

        <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
            <table id="example" class="display table-auto w-full border-collapse">
                <thead>
                    <tr class="text-sm font-medium text-left text-gray-700 bg-gray-100 border-b">
                        <th class="px-4 py-2">#</th>
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Pendapatan</th>
                        <th class="px-4 py-2">Provinsi</th>
                        <th class="px-4 py-2">Kota</th>
                        <th class="px-4 py-2">Golongan Darah</th>
                        <th class="px-4 py-2">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($form as $for)
                        <tr class="text-sm text-gray-700 border-b">
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2">{{ $for->name }}</td>
                            <td class="px-4 py-2">{{ $for->pendapatan }}</td>
                            <td class="px-4 py-2">{{ $for->provinsi->nama_provinsi }}</td>
                            <td class="px-4 py-2">{{ $for->kota->nama_kota }}</td>
                            <td class="px-4 py-2">{{ $for->golongan_darah }}</td>
                            <td class="px-4 py-2">
                                <div class="block">
                                    <a href="{{ route('edit', $for->id) }}">Edit</a>
                                    <form action="{{ route('delete', $for->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Initialize DataTables with Tailwind CSS theme
            $('#example').DataTable({
                "pagingType": "simple_numbers", // Custom pagination style
                "pageLength": 5, // Number of records per page
                "ordering": true, // Enable ordering
                "searching": true, // Enable searching
            });
        });
    </script>

</body>

</html>
