@extends('layout.template')

@section("content")

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
History Pemesanan
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">History</h3>
          <div class="btn btn-success" id="sort-all">All</div>
          <div class="btn btn-success" id="sort-today">Today</div>
          <div class="btn btn-success" id="sort-week">Last Week</div>
          <div class="btn btn-success" id="sort-month">Last Month</div>

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
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Gas 3 Kg</th>
                  <th>Gas 12 Kg</th>
                  <th>Gas 50 Kg</th>
                  <th>Tgl Kirim</th>
                  <th>Total Pembayaran</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $ord => $transaksi)
                    <tr>
                        <td>{{$transaksi->name}}</td>
                        <td>{{$transaksi->totalGas3kg}}</td>
                        <td>{{$transaksi->totalGas12kg}}</td>
                        <td>{{$transaksi->totalGas50kg}}</td>
                        <td>{{$transaksi->tglkirim}}</td>
                        <td class="bayar" data-price="{{ $transaksi->totalPembayaran }}">{{
                        "Rp. ".number_format($transaksi->totalPembayaran)}}
                        </td>
                    </tr>
                    @endforeach
              </tbody>
              <tfoot>
                @foreach ($totaltransaksi as $totaltransaksi)
                    <th colspan="5" style="text-align: center;">Total Transaksi</th>
                    <th id="total-transaksi">{{"Rp. ".number_format($totaltransaksi->totalPembayaran)}}</th>
                @endforeach
              </tfoot>
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
@endsection
@section('customScript')
<script type="text/javascript">
    $(document).ready(function(){
        let table = $('#example1').DataTable();

        function totalPayment() {
            let total = 0;
            let arr = document.querySelectorAll('.bayar');

            arr.forEach((val) => {
                total += Number(val.dataset.price);
            })

            return total;
        }

        $('#sort-all').click(function( ) {
            table.column(4).search('').draw();

            $('#total-transaksi').text(`Rp. ${totalPayment()}`)
        })

        $('#sort-today').click(function( ) {
            table.column(4).search('2022-03-23').draw();

            $('#total-transaksi').text(`Rp. ${totalPayment()}`)
        })
        $('#sort-week').click(function( ) {
            // table.column(4).search('2022-03-23').draw();
            table.column(4)
                .data()
                .filter( function ( value, index ) {
                    console.log(value)
                    return new Date().getTime() >= new Date(value).getTime() ? true : false;
                });
                table.draw();

            $('#total-transaksi').text(`Rp. ${totalPayment()}`)
        })
    });

</script>
@endsection
