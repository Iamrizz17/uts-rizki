@extends('admin.main')

@section('judul', 'Data Posts')

@section('konten')
<div class="container mt-4">
    <div>
        <h3 class="text-center my-4">Daftar Semua Postingan</h3>
        <hr>
    </div>
    <div class="card border-0 shadow-sm rounded">
        <div class="card-body">
            <a href="{{ route('post.create') }}" class="btn btn-md btn-success mb-3">+ TAMBAH POST</a>
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr class="text-center">
                        <th width="15%">GAMBAR</th>
                        <th width="20%">JUDUL</th>
                        <th width="40%">CONTENT</th>
                        <th width="25%">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr>
                            <td class="text-center">
                                <img src="{{ asset('/assets/img/'.$post->image) }}" class="img-fluid rounded" style="width: 120px; height: auto;">
                            </td>
                            <td>
                                <strong>{{ $post->title }}</strong>

                                @if(Str::lower($post->title) == 'about us')
                                    <span class="badge badge-info ml-2">Halaman About</span>
                                @endif

                                @if(Str::lower($post->title) == 'homepage')
                                    <span class="badge badge-success ml-2">Halaman Slider</span>
                                @endif
                            </td>
                            <td>{!! Str::limit(strip_tags($post->content), 150, '...') !!}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ingin menghapus?');" action="{{ route('post.destroy', $post->id) }}" method="POST">
                                    <a href="{{ route('post.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>

                                    @if(Str::lower($post->title) == 'about us')
                                        <a href="{{ route('about') }}" class="btn btn-sm btn-warning" target="_blank">LIHAT ABOUT</a>
                                    @endif

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">
                                <em>Belum ada data post.</em>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>  
            <div class="d-flex justify-content-center mt-3">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(session()->has('success'))
        toastr.success('{{ session('success') }}', 'BERHASIL!');
    @elseif(session()->has('error'))
        toastr.error('{{ session('error') }}', 'GAGAL!');
    @endif
</script>
@endsection
