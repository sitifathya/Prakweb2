<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    {{-- menampilkan error validasi --}}
@if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif <br/>
    <form action="{{ url('input') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group row">
          <label for="nama" class="col-4 col-form-label">Nama</label> 
          <div class="col-8">
            <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-4 col-form-label">E-mail</label> 
          <div class="col-8">
            <input id="email" name="email" placeholder="Masukkan E-mail" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="lokasi" class="col-4 col-form-label">Lokasi</label> 
          <div class="col-8">
            <select id="lokasi" name="lokasi" class="custom-select">
              <option value="jakarta">Jakarta</option>
              <option value="depok">Depok</option>
              <option value="semarang">Semarang</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4">Jenis Kelamin</label> 
          <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
              <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="perempuan"> 
              <label for="jk_0" class="custom-control-label">P</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="laki-laki"> 
              <label for="jk_1" class="custom-control-label">L</label>
            </div>
          </div>
        </div>
        <form>
          <div class="form-group row">
            <label class="col-4">Skill</label> 
            <div class="col-8">
              <div class="custom-control custom-checkbox custom-control-inline">
                <input name="skill" id="skill_0" type="checkbox" class="custom-control-input" value="css"> 
                <label for="skill_0" class="custom-control-label">CSS</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input name="skill" id="skill_1" type="checkbox" class="custom-control-input" value="html"> 
                <label for="skill_1" class="custom-control-label">HTML</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input name="skill" id="skill_2" type="checkbox" class="custom-control-input" value="mysql"> 
                <label for="skill_2" class="custom-control-label">MYSQL</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input name="skill" id="skill_3" type="checkbox" class="custom-control-input" value="javascript"> 
                <label for="skill_3" class="custom-control-label">Javascript</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input name="skill" id="skill_4" type="checkbox" class="custom-control-input" value="php"> 
                <label for="skill_4" class="custom-control-label">PHP</label>
              </div>
            </div>
          </div> 
          <div class="form-group row">
            <div class="offset-4 col-8">
              <input type="submit" value="Proses" class="btn-btn-success">
            </div>
          </div>
        </form>
      </form>
</body>
</html>