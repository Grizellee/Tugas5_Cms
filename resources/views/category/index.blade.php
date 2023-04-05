@extends('app')

@section('title', 'Home | Product')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> <strong>List Kategori</strong> </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Kategori</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">

        <div class="d-flex mb-2">
            <a href="{{ url('category.add')}}" class="btn btn-success mt-3" type="button">+ Tambah Produk</a>
         </div>
              <table class="table table-bordered table-striped mx-6">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $item)
                  <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>
                        <a href="/category/{{$item->id}}/edit" class="btn btn-primary "><strong>Edit</strong>  </a>
                        <a href="/category/{{$item->id}}/delete" class="btn btn-danger "><strong>Hapus</strong>  </a>

                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
    </div>
</div>
@endsection
