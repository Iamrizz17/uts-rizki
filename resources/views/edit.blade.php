<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach($mahasiswa as $mhs)
    <form action="{{route('mhs.update')}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $mhs->id }}"> <br />
        npm <input type="text" required="required" name="txtnpm" value="{{ $mhs->npm }}"> <br />
        nama <input type="text" required="required" name="txtnama" value="{{ $mhs->nama }}"> <br />
        prodi <input type="text" required="required" name="txtprodi" value="{{ $mhs->prodi }}"> <br />
        <input type="submit" value="Edit Data">
    </form>
    @endforeach
</body>

</html>