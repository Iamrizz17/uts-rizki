@extends('admin.main')

@section('judul', 'Detail Data Post')

@section('konten')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <img src="{{ asset('assets/img/'.$post->image) }}" class="w-100 rounded">
                    <hr>
                    <h4>{{ $post->title }}</h4>
                    <p class="mt-3">
                        {!! $post->content !!}
                    </p>
                    <a href="{{ route('post.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
