@extends('admin.layout.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Pesanan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    </div>
    <div class="card mb-4">
        <div class="card-header">
           <a href="{{ url('admin/pesanan/create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Pesanan
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                       <th>No</th>
                       <th>Tanggal</th>
                       <th>Nama_pemesan</th>
                       <th>alamat_pemesan</th>
                       <th>no_hp</th>
                       <th>email</th>
                       <th>jumlah_pesanan</th>
                       <th>Deskripsi</th>
                       <th>produk_id</th>
                       <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                     @endphp
                     @foreach ($pesanan as $ps)

                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $ps->tanggal}}</td>
                        <td>{{ $ps->nama_pemesan }}</td>
                        <td>{{ $ps->alamat_pemesan }}</td>
                        <td>{{ $ps->no_hp }}</td>
                        <td>{{ $ps->email }}</td>
                        <td>{{ $ps->jumlah_pesanan }}</td>
                        <td>{{ $ps->deskripsi }}</td>
                        <td>{{ $ps->nama_produk }}</td>
                       <td><a href="{{ url('admin/pesanan/edit/'. $ps->id) }}" class="btn btn-success">Edit</a></td>
                       <td><a href="{{ url('admin/pesanan/delete/'. $ps->id) }}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @php
                    $no++
                     @endphp
                     @endforeach 
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection