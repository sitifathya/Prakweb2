<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h1 style="text-align: center">Hasil regist</h1>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Nama</th>
                <th>Tempat, Tanggal lahir</th>
                <th>Jenis Kelamin</th>
                <th>Hobi</th>
            </tr>
        </thead>
        <tbody>
         <tr>
            <td>{{ $data['nama'] }}</td>
            <td>{{ $data['tempat,tanggal_lahir'] }}</td>
            <td>{{ $data['jenis_kelamin'] }}</td>
            <td>{{ $data['hobi'] }}</td>
         </tr>
        </tbody>
      </table>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>