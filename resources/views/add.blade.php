<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Form Tambah Data</h1>
    <form action="/mhs/simpan" method="post">
        {{ csrf_field() }}
        NPM : <input type="text" name="txtnpm" required="required"> <br />
        NAMA : <input type="text" name="txtnama" required="required"> <br />
        Prodi : <input type="text" name="txtprodi" required="required"> <br />
        <input type="submit" value="Simpan Data">
    </form>
</body>

</html>