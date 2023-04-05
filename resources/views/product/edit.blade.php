@extends('app')

@section('title', 'Update | Product')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> <strong>Edit Produk</strong> </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Edit</a></li>
              <li class="breadcrumb-item active">Produk </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <form action="/product/{{ $product->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                <input type="text" class="form-control @error ('product_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_name" value="{{$product->name}}">
                @error('product_name')
                <div class="invalid-feedback ">
                    Nama produk tidak boleh kosong
                </div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="exampleInputPassword1" class="form-label">Harga</label>
                <input type="text" class="form-control @error ('price_product') is-invalid @enderror" id="exampleInputPassword1" name="price_product" value="{{$product->price}}">
                @error('product_name')
                <div class="invalid-feedback">
                    Harga tidak boleh kosong
                </div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="exampleInputPassword1" class="form-label">Size</label>
                <input type="text" class="form-control @error ('size_product') is-invalid @enderror" id="exampleInputPassword1" name="size_product" value="{{$product->size}}">
                @error('product_name')
                <div class="invalid-feedback">
                    Size tidak boleh kosong
                </div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                <input type="text" class="form-control @error ('product_descripstion') is-invalid @enderror" id="exampleInputPassword1" name="product_descripstion" value="{{$product->description}}">
                @error('product_name')
                <div class="invalid-feedback">
                    Deskripsi tidak boleh kosong
                </div>
                @enderror
            </div>
            <select class="form-select @error ('category_id') is-invalid @enderror" aria-label="Default select example" name="category_id" value="{{$product->name}}">
                <option selected>Pilih Kategori Produk</option>
                @foreach ($categories as $category)
                                                    {{-- ternary --}}
                <option value="{{ $category->id }}" {{$product->category_id == $category->id ? 'selected': ''}}>
                    {{$category->name}}
                </option>
                @endforeach
              </select>
              @error('product_name')
                <div class="invalid-feedback ">
                    Pilih salah satu kategori
                </div>
                @enderror
            <button type="submit" class="d-flex btn btn-success mt-3"> <strong>Edit</strong> </button>
        </form>
    </div>
</div>


@endsection
