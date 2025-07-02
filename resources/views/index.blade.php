<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

<a href="/mhs/tambah">Add</a>

    <table border=" 1">
        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Action</th>
        </tr>
        @foreach($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs->npm }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->prodi }}</td>
            <td>
                <a href="/mhs/edit/{{ $mhs->id }}">Edit</a>
                |
                <a href="/mhs/hapus/{{ $mhs->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>