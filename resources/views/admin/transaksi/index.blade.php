@extends('layout.template')

@section('content')
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
                <h3 class="box-title">Filter</h3>
                <form class="">
                    <div class="" style="display:flex;flex-direction:row;align-items:flex-end">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="mulai">Mulai</label>
                            <input type="date" name="mulai" value="{{ isset($_GET['mulai']) ? $_GET['mulai'] : '' }}" class="form-control" id="mulai" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="sampai">Sampai</label>
                            <input type="date" name="sampai"  value="{{ isset($_GET['sampai']) ? $_GET['sampai'] : '' }}" class="form-control" id="sampai" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <button class="btn btn-success">Tampilkan</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <table id="example1" class="display table table-striped" style="width:100%">
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
                    @php
                    $total=0;
                    @endphp
                    @foreach ($transaksi as $trx)
                    @php
                    $ttlByr = ($trx->gas3kg * 17000) + ($trx->gas12kg *100000) + ($trx->gas50kg*700000);

                    $total += $ttlByr;
                    @endphp
                        <tr>
                            <td>{{ $trx->name }}</td>
                            <td>{{ $trx->gas3kg }}</td>
                            <td>{{ $trx->gas12kg }}</td>
                            <td>{{ $trx->gas50kg }}</td>
                            <td>{{ $trx->tglkirim }}</td>
                            <td class="bayar" data-price="{{ $ttlByr }}">
                                {{                                 'Rp. ' . number_format($ttlByr) }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="5" style="text-align: center;">Total Transaksi</th>
                        <th id="total-transaksi">{{ 'Rp. ' . number_format($total) }}</th>
                    </tr>
                    <tr>
                        <td>

                        </td>
                    </tr>
                </tfoot>
            </table>

            {{ $transaksi->links() }}
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
    </script>
@endsection
