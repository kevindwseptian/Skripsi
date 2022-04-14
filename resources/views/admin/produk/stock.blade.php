@extends('layout.template')

@section("content")

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Data LPG Dari Supplier


      </h1>
      <a href="{{route('admin.stock.create')}}" class="btn btn-primary">
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
            <table id="example1" class="display" style="width:100%">
                <thead><tr>
                <th>No.</th>
                  <th>Waktu Pembelian</th>
                  <th>Sumber</th>
                  <th>IDTransaksi</th>
                  <th>Action</th>
                </tr>
                </thead>


                    @foreach ($stok as $stk => $sk)
                        <tr>
                            <td>{{ ++$stk }}</td>
                            {{-- <td>{{ $sk->waktupembelian }}</td> --}}
                            @php
                                $datex = date_create($sk->waktupembelian);
                            @endphp
                            <td> {{ date_format($datex,"j F Y") }} </td>
                            <td>{{ $sk->sumber }}</td>
                            <td>{{ $sk->kodetransaksi }}</td>
                            <td>
                                <button class="btn btn-warning"  data-toggle="modal" data-id="{{ $sk->id }}" data-target="#detailTransaksiModal">Detail</button>
                            </td>
                        </tr>
                    @endforeach


              </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->

    <!-- Init Modal -->

    <div class="modal fade bd-example-modal-lg" id="detailTransaksiModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Detail Transaksi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('customScript')
     <!-- Init Modal -->
     <script type="text/javascript">
        $(document).ready(function(){
            $("#detailTransaksiModal").on('show.bs.modal', function(e){
                var kodeTransaksi = $(e.relatedTarget).data('id');
                $.get('/admin/receiving/'+kodeTransaksi, function(data){
                    $(".modal-body").html(data);
                });
            });
            $('#example1').DataTable();
        });
    </script>
    <!-- End -->
@endsection

