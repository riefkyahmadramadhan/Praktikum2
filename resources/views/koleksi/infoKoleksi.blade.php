@extends('layouts.app')

<!-- /* 
6706220142
RIEFKY AHMAD RAMADHAN
D3IF-4603
*/ -->

@section('content')
<div class="container">
    <h1 class="my-4" style="font-weight: bold;">Rincian Pengguna</h1>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th class="text-start">Full Name</th>
                    <td>{{ $collection->namaKoleksi }}</td>
                </tr>
                @php
                $jenisKoleksi = '';
                switch ($collection->jenisKoleksi) {
                case 1:
                $jenisKoleksi = 'Buku';
                break;
                case 2:
                $jenisKoleksi = 'Majalah';
                break;
                case 3:
                $jenisKoleksi = 'Cakram Digital';
                break;
                }
                @endphp
                <tr>
                    <th class="text-start">Jenis Koleksi</th>
                    <td>{{ $jenisKoleksi }}</td>
                </tr>
                <tr>
                    <th class="text-start">Jumlah Koleksi</th>
                    <td>{{ $collection->jumlahKoleksi }}</td>
                </tr>
                <tr>
                    <th class="text-start">Nama Pengarang</th>
                    <td>{{ $collection->namaPengarang}}</td>
                </tr>



                <tr>
                    <th class="text-start">Tahun Terbit</th>
                    <td>{{ $collection->tahunTerbit }}</td>
                </tr>
            </table>
            <a href="{{ route('koleksi') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
@endsection