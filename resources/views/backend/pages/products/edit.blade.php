@extends('backend.layouts.main_template')
@section('title') แก้ไขสินค้า @parent @endsection
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>แก้ไขสินค้า</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('backend/products') }}">รายการสินค้า</a></li>
            <li class="breadcrumb-item active">แก้ไขสินค้า</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <form class="form-horizontal" method="post" 
                action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')
                    
                    <div class="form-group row">
                        <label for="prd_name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="prd_name" name="name" placeholder="Name" value="{{ $product->name }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="prd_slug" class="col-sm-2 col-form-label">Slug</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="prd_slug" name="slug" placeholder="Slug" value="{{ $product->slug }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="prd_description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="prd_description" name="description" placeholder="Description" rows="5">{{ $product->description }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="prd_price" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="prd_price" name="price" placeholder="Price" value="{{ $product->price }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="prd_image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="prd_image" name="image" placeholder="Price">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="prd_image" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="submit" class="btn btn-success" name="Submit" value="Submit">
                        </div>
                    </div>
                    
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection