<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Surat Masuk</title>
</head>
<body>

    <h1>halaman ini menampilkan halaman surat masuk</h1>
    <table border="1" cellpadding= "10">

        <thead>

            <th>No Urut</th>
            <th>No surat</th>
            <th>Tanggal</th>
            <th>Pengirim</th>
            <th>Perihal</th>
            <th>aksi</th>
            

        </thead>

        <tbody>

            @foreach($suratMasuk as $i)
          <tr>
            <td>{{ $i['id'] }}</td>
            <td>{{ $i['nomor_surat'] }}</td>
            <td>{{ $i['tanggal'] }}</td>
            <td>{{ $i['pengirim'] }}</td>
            <td>{{ $i['perihal'] }}</td>
            <td>
               <a href="{{route('surat.show',$i['id'])}}">detail</a>
            </td>
          </tr>
           @endforeach 

        </tbody>

    </table>
    
</body>
</html>