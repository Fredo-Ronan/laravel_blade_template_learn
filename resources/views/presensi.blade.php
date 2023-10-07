@extends('dashboard')

@section('presensi-content')
<style>
    td {
        padding-left: 30px;
    }
</style>

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
@endsection

@section('toast')
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
@endsection

@section('modal-detil-kelas')
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
@endsection


@section('toast-script')
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
@endsection
