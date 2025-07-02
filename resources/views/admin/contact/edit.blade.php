@extends('admin.main')

@section('judul', 'Edit Kontak')

@section('konten')
<div class="col-12">
  <div class="card">
    <div class="card-body">
      <form action="{{ route('contact.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label>Alamat</label>
          <textarea name="alamat" class="form-control" required>{{ $contact->alamat }}</textarea>
        </div>
        <div class="form-group">
          <label>Nomor Telepon</label>
          <input type="number" name="nomor_telepon" class="form-control" value="{{ $contact->nomor_telepon }}" required>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control" value="{{ $contact->email }}" required>
        </div>
        <div class="form-group">
          <label>Status Publish</label>
          <select name="status_publish" class="form-control" required>
            <option value="1" {{ $contact->status_publish ? 'selected' : '' }}>Publish</option>
            <option value="0" {{ !$contact->status_publish ? 'selected' : '' }}>Unpublish</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('contact.index') }}" class="btn btn-secondary">Kembali</a>
      </form>
    </div>
  </div>
</div>
@endsection
