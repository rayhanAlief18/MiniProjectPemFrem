@extends('layout.app')
@section('content')
<section class="container">
    <div class="mb-3">
        @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show">
                            {{ $error }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endforeach
                @endif
    </div>
    <div class="card ">
        <div class="text-center card-header">
          {{$title}}
        </div>

        <div class="card-body">
            <form action="{{route('barang.store')}}" method="POST">
                @csrf
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label">Kode Barang</label>
                            <input type="text" name="kode_barang" class="form-control" placeholder="Masukkan kode barang...">
                            @error('kode_barang')
                            <p class="text-danger mt-2">{{$error}}...</p>
                            @enderror
                            
                        </div>
                    <div class="col-12">
                        <label class="form-label">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" placeholder="Masukkan nama barang...">
                        @error('nama_barang')
                            <p class="text-danger mt-2">{{$error}}...</p>
                            @enderror
                        
                    </div>
                    <div class="col-12">
                        <label class="form-label">Harga Barang</label>
                        <input type="number" name="harga_barang" class="form-control" placeholder="Masukkan harga barang..." >
                        @error('harga_barang')
                            <p class="text-danger mt-2">{{$error}}...</p>
                            @enderror
                        
                    </div>
                    <div class="col-12">
                        <label class="form-label">Deskripsi Barang</label>
                        <input type="text" name="deskripsi_barang"  class="form-control" placeholder="Masukkan deskripsi barang...">
                        @error('deskripsi_barang')
                            <p class="text-danger mt-2">{{$error}}...</p>
                            @enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label">Satuan</label>
                        <select name="kode_satuan" class="form-select" aria-label="Default select example">
                            @foreach ($satuans as $satuans)
                                <option value="{{ $satuans->kode_satuan }}">{{ $satuans->nama_satuan }}</option>
                            @endforeach
                        </select>
                        @error('kode_satuan')
                            <p class="text-danger mt-2">{{$error}}...</p>
                            @enderror
                    </div>
                </div>

                <div class="mt-3 d-flex gap-3 justify-content-end">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>
        </form>
        
      </div>
</section>
@endsection     