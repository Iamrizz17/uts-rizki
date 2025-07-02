<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mata Kuliah</title>
</head>

<body>
    <h1>Form Tambah Data</h1>
    <form action="/matakuliah/simpan" method="post">
        {{ csrf_field() }}

        Kode Mata Kuliah : <input type="text" name="txtkode_matakuliah" required="required"> <br />
        Mata Kuliah : <input type="text" name="txtmatakuliah" required="required"> <br />
       
        <input type="submit" value="Simpan Data">
    </form>
</body>

</html>