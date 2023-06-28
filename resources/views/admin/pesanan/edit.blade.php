@extends('admin.layout.app')
@section('content')
@foreach ($pesanan as $ps)
    

<form method="POST" action="{{ url('admin/pesanan/update/'. $ps->id) }}">
  {{ csrf_field() }}
  <h4 style="text-align: center">Form edit data pesanan</h4>
    <div class="form-group row">
      <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
      <div class="col-8">
        <input id="tanggal" name="tanggal" value="{{ $ps->tanggal }}" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="nama_pemesan" class="col-4 col-form-label">Nama Pemesan</label> 
      <div class="col-8">
        <input id="nama_pemesan" name="nama_pemesan" value="{{ $ps->nama_pemesan }}" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="alamat_pemesan" class="col-4 col-form-label">Alamat Pemesan</label> 
      <div class="col-8">
        <input id="alamat_pemesan" name="alamat_pemesan" value="{{ $ps->alamat_pemesan }}" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="no_hp" class="col-4 col-form-label">No Hp</label> 
      <div class="col-8">
        <input id="no_hp" name="no_hp" value="{{ $ps->no_hp }}" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-4 col-form-label">E-mail</label> 
      <div class="col-8">
        <input id="email" name="email" value="{{ $ps->email }}" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label> 
      <div class="col-8">
        <input id="jumlah_pesanan" name="jumlah_pesanan" value="{{ $ps->jumlah_pesanan }}" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
      <div class="col-8">
        <input id="deskripsi" name="deskripsi" value="{{ $ps->deskripsi }}" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="produk_id" class="col-4 col-form-label">Produk ID</label> 
      <div class="col-8">
        <select id="produk_id" name="produk_id" class="custom-select">
          @foreach ($produk as $prod)
            <option value="{{ $prod->id }}">{{ $prod->nama }}</option>
              
          @endforeach
        </select>
      </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
  @endforeach
  @endsection
  