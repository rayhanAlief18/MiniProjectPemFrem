@extends('layout.app')
@section('content')
<section class="container">
    <div class="mb-3">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show">
                    {{ $error }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        @endif
    </div>
    <div class="card">
        <div class="text-center card-header">
            {{$title}}
        </div>
        <div class="card-body">
            <form action="{{ route('satuan.update', $satuan->kode_satuan) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <label class="form-label">Kode Satuan</label>
                        <input type="text" name="kode_satuan" class="form-control" value="{{ $satuan->kode_satuan }}" placeholder="Masukkan kode satuan...">
                        @error('kode_satuan')
                        <p class="text-danger mt-2">{{$error}}...</p>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label">Nama satuan</label>
                        <input type="text" name="nama_satuan" class="form-control" value="{{ $satuan->nama_satuan }}" placeholder="Masukkan nama satuan...">
                        @error('nama_satuan')
                        <p class="text-danger mt-2">{{$error}}...</p>
                        @enderror
                    </div>
                </div>
                <div class="mt-3 d-flex gap-3 justify-content-end">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </form>
        </div>
        
    </div>
</section>
@endsection
