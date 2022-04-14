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
          <h3 class="box-title">Tambah Data LPG</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            <table id="example1" class="display" style="width:100%">
                <thead><tr>
                  <th>No</th>
                  <th>Unit code</th>
                  <th>Unit name</th>
                  <th>Price</th>
                  <th>Stock</th>
                  <th>Action</th>
                </tr>
                </thead>
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
                        {{$prdk->stock}}
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
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
@section('customScript')
<script type="text/javascript">
    $(document).ready(function(){
        $('#example1').DataTable();
    });

</script>
@endsection
