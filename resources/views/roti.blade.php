<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Roti</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 py-10">
    <div class="container mx-auto">
        <h3 class="text-2xl font-bold text-center mb-6">Data Roti</h3>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg">
                <thead>
                    <tr class="bg-gray-200 text-gray-700 text-sm uppercase leading-normal">
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Nama Roti</th>
                        <th class="py-3 px-6 text-left">Deskripsi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @forelse ($roti as $item)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6">{{ $item->id }}</td>
                            <td class="py-3 px-6">{{ $item->nama_roti }}</td>
                            <td class="py-3 px-6">{{ $item->deskripsi }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="py-3 px-6 text-center text-gray-500">
                                Tidak ada data roti.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
