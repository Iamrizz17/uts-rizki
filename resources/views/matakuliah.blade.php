<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

<a href="/matakuliah/tambah">Add</a>

    <table border=" 1">
        <tr>
            <th>Kode matakuliah</th>
            <th>matakuliah</th>
            <th>Action</th>
        </tr>
        @foreach($matakuliah as $matkul)
        <tr>
            <td>{{ $matkul->kode_matakuliah }}</td>
            <td>{{ $matkul->matakuliah }}</td>
    
            <td>
                <a href="/matakuliah/edit/{{ $matkul->id }}">Edit</a>
                |
                <a href="/matakuliah/hapus/{{ $matkul->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>