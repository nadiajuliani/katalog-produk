<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.svg" type="image/x-icon')}}">
</head>

<body>
    <div id="app">
       <!-- Navigation -->

            <!--sidebar-->
            @include('layouts.components.sidebar')
        <!-- /sidebar -->
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Halaman Jenis</h3>
            </div>
            <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <a href="{{ route('jenis.create') }}" class="btn btn-primary">Tambah</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Jenis</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($jenis as $data)
                                    <tr>
                                        <td scope="row">{{ $no++ }}</td>
                                        <td scope="row">{{ $data->nama_jenis }}</td>
                                        <th>
                                            <form action="{{ route('jenis.destroy', $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('jenis.edit', $data->id) }}"
                                                    class="btn btn-success">Ubah</a>
                                                <a href="{{ route('jenis.show', $data->id) }}"
                                                    class="btn btn-warning">Lihat</a>
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Apakah Anda Yakin?')">Hapus</button>
                                            </form>
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
        </div>
    </div>
    <script src="{{ asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{ asset('admin/assets/vendors/apexcharts/apexcharts.js')}}"></script>
    <script src="{{ asset('admin/assets/js/pages/dashboard.js')}}"></script>

    <script src="{{ asset('admin/assets/js/main.js')}}"></script>
</body>

</html>
