@extends('layout.template')

@section("content")

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Data Customer

      </h1>
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
                  <th>Nama</th>
                  <th>No Telp</th>
                  <th>Gas 3Kg</th>
                  <th>Gas 12Kg</th>
                  <th>Gas 50Kg</th>
                  <th>Tgl Kirim</th>
                  <th>Alamat</th>
                  <th>Pembayaran</th>
                  <th>Metode Pembayaran</th>
                </tr>
                <tbody>
                    @foreach ($order as $ord => $order)
                    <tr>

                        <td>{{$order->name}}</td>
                        <td>{{$order->notelp}}</td>
                        <td>{{$order->gas3kg}}</td>
                        <td>{{$order->gas12kg}}</td>
                        <td>{{$order->gas50kg}}</td>
                        <td>{{$order->tglkirim}}</td>
                        <td>{{$order->alamat}}</td>
                        @if (($order->gas3kg+$order->gas12kg+$order->gas50kg)>=10)
                        <td>{{
                        "Rp. ".number_format((($order->gas3kg * 17000)+($order->gas12kg * 100000)+($order->gas50kg * 700000))-((($order->gas3kg * 17000)+($order->gas12kg * 100000)+($order->gas50kg * 700000))*0.1) )}}
                        </td>
                        @else
                        <td>{{ "Rp. ".number_format(($order->gas3kg * 17000)+($order->gas12kg * 100000)+($order->gas50kg * 700000))}}</td>
                        @endif

                        <td>{{$order->pembayaran}}</td>
                        {{-- <td>{{$order->status}}</td> --}}
                        @if ($order->status=='L')
                        <td>
                            Lunas
                        </td>
                        @elseif ($order->status=='P')
                        <td>
                            Pending
                        </td>
                        @else
                            <td>
                                Cancel
                            </td>
                        @endif
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                action="{{ route('pemesanan.destroy', $order->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                action="{{ route('pemesanan.destroy', $order->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                            </div>
                        </td>
                        <td>{{$order->status}}</td>
                    </tr>



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
