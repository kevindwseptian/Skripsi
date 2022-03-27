@extends('layout.template')

@section("content")
<section class="content">
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Tambah Produk</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="POST" action="{{route('produk.store')}}">
        @csrf
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Unit Code</label>
          <input type="Text" class="form-control" id="unit_code" placeholder="Unit Code" name="unit_code">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Unit Name</label>
          <input type="Text" class="form-control" id="unit_name" placeholder="unit name" name="unit_name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Price</label>
            <input type="Number" class="form-control" id="price" placeholder="Price" name="price">
          </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</section>
@endsection
