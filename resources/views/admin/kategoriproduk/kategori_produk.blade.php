@extends('admin.layout.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Kategori Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Kategori Produk
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                       <th>No</th>   
                       <th>Nama</th> 
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                     @endphp
                     @foreach ($kategori_produk as $kat)

                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $kat->nama}}</td>
                    </tr>
                    @php
                    $no++;
                     @endphp
                     @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection