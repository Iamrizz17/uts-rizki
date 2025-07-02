<!DOCTYPE html>
<html>
<head>
<title>Belajar Laravel Main Page</title>
</head>
<body>
 
<header>
 
<h2>Unbin</h2>
<nav>
<a href="/master/mahasiswa">Mahasiswa</a>
|
<a href="/master/matakuliah">matakuliah</a>
|
<a href="/master/nilai">nilai</a>
</nav>
</header>
<hr/>
<br/>
<br/>
 
<!-- bagian penamaan judul page atau form -->
<h3> @yield('judul_halaman') </h3>
 
 
<!-- bagian konten form yang diisi oleh page lain -->
@yield('konten')
 
 
<br/>
<br/>
<hr/>
<footer>
<p>&copy; <a href="https://unbin.ac.id">Universitas Binaniaga</a></p>
</footer>
 
</body>
</html>
