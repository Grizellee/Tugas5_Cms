@extends('app')

@section('title', 'Edit | Product')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> <strong>Edit Kategori</strong> </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/category">Edit</a></li>
              <li class="breadcrumb-item active">Kategori </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <form action="/category/{{ $category->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control @error ('category_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="category_name" value="{{$category->name}}">
                @error('category_name')
                <div class="invalid-feedback ">
                    Nama kategori tidak boleh kosong
                </div>
                @enderror
            </div>
            <button type="submit" class="d-flex btn btn-success mt-3"> <strong>Edit</strong> </button>
        </form>
    </div>
</div>


@endsection
