<x-app-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">


    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
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
                {{-- <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{  }}</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011-01-25</td>
                        <td>$112,000</td>
                    </tr>
                    @endforeach
                </tbody> --}}
                <tfoot>

                </tfoot>
            </table>

            <x-app.footer />
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
    <script>
        // $(`#example tbody`).html('')
        // for(let i=0;i<10;i++){
        //     $(`#example tbody`).append(`
                // <tr>
                //         <td>Donna Snider</td>
                //         <td>Customer Support</td>
                //         <td>New York</td>
                //         <td>27</td>
                //         <td>2011-01-25</td>
                //         <td>$112,000</td>
                //     </tr>
        //     `)
        // }
         new DataTable('#example');
    </script>
</x-app-layout>

