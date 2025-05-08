<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.svg" type="image/x-icon') }}">
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
                <h3>Profile Statistics</h3>
            </div>
            <div class="card">
                <div class="card-header">Lihat Data Jenis</div>
                <div class="card-body">
                    <form action="{{ route('produk.update', $produk->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" class="form-control" name="nama_produk"
                                value="{{ $produk->nama_produk }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Nama Jenis</label>
                            <input type="text" class="form-control" name="nama_jenis"
                                value="{{ $produk->jenis->nama_jenis }}" disabled>
                        </div>
                        <div>
                            <label for="">Foto</label>
                            <img src="{{ asset('storage/produk/' . $produk->foto) }}" alt="Foto Buku"
                                class="img-thumbnail" width="150">
                            <input type="file" class="form-control" name="foto" value="{{ $produk->foto }}" disabled>
                            <div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" class="form-control" name="harga"
                                value="{{ $produk->harga }}"disabled>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" value="{{ $produk->deskripsi }}" disabled>
                                </textarea>
                        </div>
                        <br>
                        <a href="{{ route('produk.index') }}" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <script src="{{ asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('admin/assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('admin/assets/js/main.js') }}"></script>
</body>

</html>
