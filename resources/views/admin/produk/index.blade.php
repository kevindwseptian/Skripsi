@extends('layout.template')

@section("content")

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Data LPG

      </h1>
      <a href="{{route('produk.create')}}" class="btn btn-primary">
          Tambah Data
      </a>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            <table class="table table-hover">
                <tbody><tr>
                  <th>No</th>
                  <th>Unit code</th>
                  <th>Unit name</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
                @foreach ($produk as $item => $prdk)
                <tr>
                    <td>

                        {{++$item}}
                    </td>
                    <td>
                        {{$prdk->unit_code}}
                    </td>
                    <td>
                        {{$prdk->unit_name}}
                    </td>
                    <td>
                        {{$prdk->price}}
                    </td>
                    <td>
                        <a href="{{route('produk.edit',$prdk->id)}}" class="btn btn-warning">
                            Edit
                        </a>
                    </td>


                </tr>

                @endforeach
              </tbody></table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
