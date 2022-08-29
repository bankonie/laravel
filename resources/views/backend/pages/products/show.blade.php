@extends('backend.layouts.main_template')
@section('title') รายละเอียดสินค้า @parent @endsection
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>รายละเอียดสินค้า</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('backend/products') }}">รายการสินค้า</a></li>
            <li class="breadcrumb-item active">รายละเอียดสินค้า</li>
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

              <div class="row pt-3">
                <div class="col-md-4">
                  <p><img src="{{asset('assets/backend/images/products')}}/{{$product->image}}" class="rounded img-fluid"></p>
                </div>
                
                <div class="col-md-8">
                  <h5>ชื่อสินค้า</h5>
                  <p class="p-3 rounded" style="background-color: #eee">{{ $product->name }}</p>

                  <h5>สลัก</h5>
                  <p class="p-3 rounded" style="background-color: #eee">{{ $product->slug }}</p>

                  <h5>รายละเอียดสินค้า</h5>
                  <div class="p-3 mb-3 rounded" style="background-color: #eee">{!! $product->description !!}</div>

                  <h5>ราคา</h5>
                  <p class="p-3 rounded" style="background-color: #eee">{{ $product->price }}</p>

                  <h5>สร้างเมื่อ</h5>
                  <p class="p-3 rounded" style="background-color: #eee">{{ $product->created_at }}</p>

                  <h5>แก้ไขเมื่อ</h5>
                  <p class="p-3 rounded" style="background-color: #eee">{{ $product->updated_at }}</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection