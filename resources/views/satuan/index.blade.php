@extends('layout.app')
@section('content')
<section class="d-flex flex-column sec-table justify-content-between">

    
    <div class="container">
        @if (session('success'))
        <div class="container alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"
                aria-label="Close"></button>
        </div>
        @endif
        <div class="card">

            <div class="card-header">
                <h5>{{$title}}</h5>
            </div>
            <div class="table-responsive card-body">
                <a href="{{route('satuan.create')}}" class="position btn btn-primary my-3">Tambah Data</a>
                <table class="table ">
                    <thead class="table-primary">
                      <tr >
                        <th scope="col">No</th>
                        <th scope="col">Kode Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody class="">
                        @foreach($DataSatuan as $item)
                      <tr class="table-warning">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->kode_satuan}}</td>
                        <td>{{$item->nama_satuan}}</td>
                        <td>
                            <form action="{{route('satuan.destroy',['satuan'=>$item->kode_satuan])}}" method="POST" class="d-flex justify-content-start align-items-center gap-2">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('satuan.edit',['satuan' => $item->kode_satuan])}}" class="btn btn-warning">
                                    Edit
                                </a>
                                <button type="submit" class="btn btn-danger">Hapus</a>
                            </form>
                        </td>
                      </tr>
                      @endforeach
                    
                    </tbody>
                  </table>
                  
    
                  
            </div>
        </div>
    </div>
</section>
@endsection
