<x-app-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <x-app.navbar />
        <div class="container-fluid py-4 px-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-md-flex align-items-center mb-3 mx-2">
                        <div class="mb-md-0 mb-3">
                            <h3 class="font-weight-bold mb-0">Hello, Lala</h3>
                            <p class="mb-0">Semoga Harimu menyenangkan !!</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-0">

            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Penemu</th>
                        <th>Lokasi Ditemukan</th>
                        <th>Lokasi Dititpkan</th>
                        <th>Foto Barang</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($items as $item)
                    <tr>
                        <td>{{ $num ++ }}</td>
                        <td>{{ $items->name }}</td>
                        <td>{{ $items->loc_found }}</td>
                        <td>{{ $items->loc_custody }}</td>
                        <td><img src="{{ $items->image }}" alt="Foto Barang" style="width: 50px;"></td>
                        <td>{{ $items->description }}</td>
                        <td>
                            <button class="btn btn-primary btn-sm me-1" onclick="sendItem({{ $item->id }})">Send</button>
                            <button class="btn btn-info btn-sm me-1" onclick="viewInfo({{ $item->id }})">Info</button>
                            <button class="btn btn-warning btn-sm me-1" onclick="editItem({{ $item->id }})">Edit</button>
                            <button class="btn btn-danger btn-sm" onclick="deleteItem({{ $item->id }})">Hapus</button>
                        </td>
                    </tr>
                    @endforeach --}}
                </tbody>
            </table>

            <x-app.footer />
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
    <script>
        new DataTable('#example');

        // Fungsi untuk masing-masing tombol action
        function sendItem(id) {
            // Tambahkan logika untuk tombol Send
            alert('Send item with ID: ' + id);
        }

        function viewInfo(id) {
            // Tambahkan logika untuk tombol Info
            alert('View info for item with ID: ' + id);
        }

        function editItem(id) {
            // Tambahkan logika untuk tombol Edit
            alert('Edit item with ID: ' + id);
        }

        function deleteItem(id) {
            if (confirm('Apakah Anda yakin ingin menghapus item ini?')) {
                // Tambahkan logika untuk tombol Hapus
                alert('Deleted item with ID: ' + id);
            }
        }
    </script>
</x-app-layout>
