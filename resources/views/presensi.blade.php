<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <title>GD5_B_11446</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">

    <style>
        td {
            padding-left: 30px;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-flex align-items-center">
                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#logoutBackdrop">
                        <i class="fa-solid fa-right-from-bracket"></i> Logout
                    </button>

                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <img src=" {{ asset('img/GofitLogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Gofit UAJY</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Boniface Fredo Ronan Antolino</a>
                    </div>
                </div>

                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ url('gyms') }}" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p> Home</p>
                            </a>
                        </li>

                        <!-- Start Code UGD -->
                        <li class="nav-item">
                            <a href="{{ url('presensi') }}" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Presensi Member</p>
                            </a>
                        </li>
                        <!-- End Code UGD -->
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <!-- Start Code UGD -->
            <div class="d-flex justify-content-center align-items-center">
                <table class="" style="max-width: min-content;">
                    <tr>
                        <td colspan="3">
                            <div class="card mb-3 mt-3" style="max-width: 100%;">
                                <div class="row g-0">
                                    <div class="col-md-3">
                                        <div class="m-4">
                                            <img src="{{ $kelas[0]['gambar'] }}" class="img-fluid rounded border border-2 border-dark object-fit-cover" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <h4 class="mr-2">{{ $kelas[0]['nama'] }}</h4>
                                                <div class="">
                                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="card-text">
                                                <strong>
                                                    Instruktur : {{ $kelas[0]['instruktur'] }} <br>
                                                    Ruang : {{ $kelas[0]['ruang'] }} <br>
                                                    Total Member : {{ $kelas[0]['total_member'] }} <br>
                                                    Rating : 
                                                    @for($i = 0; $i<$kelas[0]['rating']; $i++)
                                                    <i class="fas fa-star fa-xs" style="color: gold;"></i>
                                                    @endfor
                                                </strong>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <p class="card-text mt-2" style="margin-left: 4rem;">
                                            <strong>
                                                Tanggal : {{ date('l') }}, {{ date('d-F-y') }}
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div style="border: 1px solid grey; opacity: 0.2; margin-bottom: 1rem;"></div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <div class="d-flex justify-content-between mb-4">
                                <h4>Daftar Member</h4>
                                <button class="btn btn-primary" id="liveToastBtn">
                                    <i class="fa-solid fa-check"></i>
                                    Presensi
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Daftar Member Cards -->
                    @empty($member)
                    <tr>
                        <td>
                            <div class="alert alert-danger">
                                Data Member Masih Kosong
                            </div>
                        </td>
                    </tr>
                    @else
                    <tr>
                        @forelse($member as $person)
                        @if ($person['no'] <= 3)
                        <td>
                            <div class="card border border-2 border-dark" style="width: 20rem;">
                                <img src="{{ asset('img/binatang.png') }}" class="card-img-top" alt="">
                                @if ($person['jeniskartu'] == 'Black')
                                <div class="card-body bg-dark">
                                    <p class="card-text">
                                        <strong>{{ $person['nama'] }}</strong><br>
                                        Email: {{ $person['email'] }} <br>
                                        No Telp: {{ $person['notelp'] }} <br>
                                        Jenis Kartu: <span class="badge rounded-pill border border-2 border-dark" style="background-color: #474747;">{{ $person['jeniskartu'] }}</span> <br>
                                        
                                        @if ($person['metode'] == 'Deposit Kelas')
                                        Metode Pembayaran: <span class="badge rounder-pill text-bg-primary">{{ $person['metode'] }}</span>
                                        @elseif ($person['metode'] == 'Deposit Uang')
                                        Metode Pembayaran: <span class="badge rounder-pill text-bg-success">{{ $person['metode'] }}</span>
                                        @endif
                                    </p>
                                </div>
                                @elseif ($person['jeniskartu'] == 'Silver')
                                <div class="card-body bg-secondary">
                                    <p class="card-text">
                                        <strong>{{ $person['nama'] }}</strong><br>
                                        Email: {{ $person['email'] }} <br>
                                        No Telp: {{ $person['notelp'] }} <br>
                                        Jenis Kartu: <span class="badge rounded-pill text-bg-secondary border border-2 border-dark">{{ $person['jeniskartu'] }}</span> <br>
                                        
                                        @if ($person['metode'] == 'Deposit Kelas')
                                        Metode Pembayaran: <span class="badge rounder-pill text-bg-primary">{{ $person['metode'] }}</span>
                                        @elseif ($person['metode'] == 'Deposit Uang')
                                        Metode Pembayaran: <span class="badge rounder-pill text-bg-success">{{ $person['metode'] }}</span>
                                        @endif
                                    </p>
                                </div>
                                @elseif ($person['jeniskartu'] == 'Gold')
                                <div class="card-body bg-warning">
                                    <p class="card-text">
                                        <strong>{{ $person['nama'] }}</strong><br>
                                        Email: {{ $person['email'] }} <br>
                                        No Telp: {{ $person['notelp'] }} <br>
                                        Jenis Kartu: <span class="badge rounded-pill text-bg-warning text-white border border-2 border-dark">{{ $person['jeniskartu'] }}</span> <br>
                                        
                                        @if ($person['metode'] == 'Deposit Kelas')
                                        Metode Pembayaran: <span class="badge rounder-pill text-bg-primary">{{ $person['metode'] }}</span>
                                        @elseif ($person['metode'] == 'Deposit Uang')
                                        Metode Pembayaran: <span class="badge rounder-pill text-bg-success">{{ $person['metode'] }}</span>
                                        @endif
                                    </p>
                                </div>
                                @endif
                            </div>
                        </td>
                        @endif
                        @empty
                        @endforelse
                    </tr>

                    <tr>
                        @forelse($member as $person)
                        @if ($person['no'] > 3)
                        <td>
                            <div class="card border border-2 border-dark" style="width: 20rem;">
                                <img src="{{ asset('img/binatang.png') }}" class="card-img-top" alt="">
                                @if ($person['jeniskartu'] == 'Black')
                                <div class="card-body bg-dark">
                                    <p class="card-text">
                                        <strong>{{ $person['nama'] }}</strong><br>
                                        Email: {{ $person['email'] }} <br>
                                        No Telp: {{ $person['notelp'] }} <br>
                                        Jenis Kartu: <span class="badge rounded-pill border border-2 border-dark" style="background-color: #474747;">{{ $person['jeniskartu'] }}</span> <br>
                                        
                                        @if ($person['metode'] == 'Deposit Kelas')
                                        Metode Pembayaran: <span class="badge rounder-pill text-bg-primary">{{ $person['metode'] }}</span>
                                        @elseif ($person['metode'] == 'Deposit Uang')
                                        Metode Pembayaran: <span class="badge rounder-pill text-bg-success">{{ $person['metode'] }}</span>
                                        @endif
                                    </p>
                                </div>
                                @elseif ($person['jeniskartu'] == 'Silver')
                                <div class="card-body bg-secondary">
                                    <p class="card-text">
                                        <strong>{{ $person['nama'] }}</strong><br>
                                        Email: {{ $person['email'] }} <br>
                                        No Telp: {{ $person['notelp'] }} <br>
                                        Jenis Kartu: <span class="badge rounded-pill text-bg-secondary border border-2 border-dark">{{ $person['jeniskartu'] }}</span> <br>
                                        
                                        @if ($person['metode'] == 'Deposit Kelas')
                                        Metode Pembayaran: <span class="badge rounder-pill text-bg-primary">{{ $person['metode'] }}</span>
                                        @elseif ($person['metode'] == 'Deposit Uang')
                                        Metode Pembayaran: <span class="badge rounder-pill text-bg-success">{{ $person['metode'] }}</span>
                                        @endif
                                    </p>
                                </div>
                                @elseif ($person['jeniskartu'] == 'Gold')
                                <div class="card-body bg-warning">
                                    <p class="card-text">
                                        <strong>{{ $person['nama'] }}</strong><br>
                                        Email: {{ $person['email'] }} <br>
                                        No Telp: {{ $person['notelp'] }} <br>
                                        Jenis Kartu: <span class="badge rounded-pill text-bg-warning text-white border border-2 border-dark">{{ $person['jeniskartu'] }}</span> <br>
                                        
                                        @if ($person['metode'] == 'Deposit Kelas')
                                        Metode Pembayaran: <span class="badge rounder-pill text-bg-primary">{{ $person['metode'] }}</span>
                                        @elseif ($person['metode'] == 'Deposit Uang')
                                        Metode Pembayaran: <span class="badge rounder-pill text-bg-success">{{ $person['metode'] }}</span>
                                        @endif
                                    </p>
                                </div>
                                @endif
                            </div>
                        </td>
                        @endif
                        @empty
                        @endforelse
                    </tr>
                    @endempty
                    <!-- End of Daftar Member Cards -->
                </table>
            </div>
            <!-- End Code UGD -->
        </div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                210711446
            </div>

            <strong>Copyright &copy; {{ date('Y') }} <a href="#">Gofit</a>. </strong> All rights reserved.
        </footer>
    </div>

    <!-- Start Code UGD Toast -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast fade hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-body text-bg-primary rounded">
                <i class="fa-solid fa-check"></i>
                Berhasil Mempresensi Member
            </div>
        </div>
    </div>
    <!-- End Code UGD Toast -->

    <!-- Start Code UGD Modal Detail Kelas -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Detail Kelas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2>{{ $kelas[0]['nama'] }}</h2>
                    <p>
                        Nama Instruktur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $kelas[0]['instruktur'] }} <br>
                        Kode Instruktur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $kelas[0]['npm'] }} <br>
                        Hari Kelas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ date('l') }} <br>
                        Tanggal Kelas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ date('d-M-Y') }} <br>
                        Ruang Kelas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $kelas[0]['ruang'] }} <br>
                        Rating&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
                        @for($i = 0; $i<$kelas[0]['rating']; $i++)
                        <i class="fas fa-star fa-xs"></i>
                        @endfor
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Code UGD Modal Detail Kelas -->


    <!-- Start Code UGD Modal Logout -->
    <div class="modal fade" id="logoutBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="logoutBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-5" id="logoutBackdropLabel">Apakah Ingin Logout?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">
                        <a href="{{ url('login') }}" class="text-decoration-none text-white">Logout</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <script>
        const toastPresensiBtn = document.getElementById('liveToastBtn');
        const toast = document.getElementById('liveToast');

        toastPresensiBtn.addEventListener('click', () => {
            toast.classList.remove('hide');
            toast.classList.add('show');

            setTimeout(() => {
                toast.classList.remove('show');
                toast.classList.add('hide');
            }, 10000);
        })
    </script>
</body>
</html>