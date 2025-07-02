@extends('admin.main')

@section('judul', 'Data Kontak')

@section('konten')
<div class="col-12">
  <a href="{{ route('contact.create') }}" class="btn btn-primary mb-3">Tambah Kontak</a>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <div class="card">
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Email</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($contacts as $contact)
          <tr>
            <td>{{ $contact->id }}</td>
            <td>{{ $contact->alamat }}</td>
            <td>{{ $contact->nomor_telepon }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->status_publish ? 'Publish' : 'Unpublish' }}</td>
            <td>
              <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-warning btn-sm">Edit</a>
              <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Hapus data ini?')" class="btn btn-danger btn-sm">Hapus</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
